<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
use DB;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('roles')->paginate(10);

        return view('backend.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();

        return view('backend.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:users,username'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'agree_terms' => 'required',
            'avatar' => 'required|max:2000',
        ]);

        DB::transaction(function () use ($request) {

            $user = User::create([
                'first_name' => $request->first_name,
                'middle_names' => $request->middle_names,
                'last_name' => $request->last_name,
                'username' => $request->username,
                'email' => $request->email,
                'tel_no' => $request->tel_no,
                'password' => Hash::make($request->password),
                'active' => $request->active,
                'agree_terms' => $request->agree_terms,
                'agree_notification' => $request->agree_notification,
                'agree_contact_review' => $request->agree_contact_review,
                'review_interests' => $request->review_interests,
            ]);
            // Assign Roles To Created User
            $user->AssignRole($request->roles);

            // Assign Avatar
            if(isset($request->avatar)){
                
                // Add to avatars media collection
                $user->addMediaFromRequest('avatar')
                    ->usingName('avatar')
                    ->toMediaCollection('avatar');
            }

            event(new Registered($user));

        });

        return redirect('users');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::with('roles')->findOrFail($id);

        return view('backend.users.show', compact('user'));
    }

    public function updateSettings(Request $request)
    {
        User::findOrFail(request()->id)->settings()->merge(request()->settings);

        return Redirect::back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::with('roles')->findOrFail($id);
        $roles = Role::all();

        return view('backend.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:users,username,' . $id],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $id],
            'agree_terms' => 'required',
            'avatar' => 'nullable|max:2000',
        ]);
       
        DB::transaction(function () use ($request, $id) {

            $user = User::with('roles')->findOrFail($id);

            $user->update([
                'first_name' => $request->first_name,
                'middle_names' => $request->middle_names,
                'last_name' => $request->last_name,
                'username' => $request->username,
                'email' => $request->email,
                'tel_no' => $request->tel_no,
                'active' => $request->active,
                'agree_terms' => $request->agree_terms,
                'agree_notification' => $request->agree_notification,
                'agree_contact_review' => $request->agree_contact_review,
                'review_interests' => $request->review_interests,
            ]);

            ($user->roles->count() ? $user->roles()->wherePivot('user_id', $id)->detach() : '');
            // Assign Roles To Created User
            $user->AssignRole($request->roles);

            // Assign Avatar
            if(isset($request->avatar)){
                
                // Add to avatars media collection
                $user->addMediaFromRequest('avatar')
                    ->usingName('avatar')
                    ->toMediaCollection('avatar');
            }

        });

        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

         if($user->delete()){

             return Redirect::back()->with('success',[
                 'icon' => '',
                 'time' => now()->diffForHumans(),
                 'message' => 'Item removido com êxito.'
             ]);
         }

        return Redirect::back()->with('error',[
             'icon' => '',
             'time' => now()->diffForHumans(),
             'message' => 'Não foi possível excluir o item.'
        ]);
    }

    public function restore($id)
    {
        $user = User::withTrashed()->findOrFail($id);

         if($user->restore()){
             return Redirect::back()->with('success', [
                  'icon' => '',
                  'time' => now()->diffForHumans(),
                  'message' => 'Item restaurado com sucesso.'
             ]);
         }

        return Redirect::back()->with('success', [
             'icon' => '',
             'time' => now()->diffForHumans(),
             'message' => 'Não foi possível restaurar o item.'
        ]);
    }

    public function api()
    {
        $users = UserResource::collection(
            User::with('department','category')->orderBy(request('sort'),request('sortdir'))
                ->filter(Request::only('search','trashed', 'start_date', 'end_date'))
                ->paginate(request('perPage', 10))
        );

        return $users;
    }

    public function changepassword(ChangePasswordRequest $request)
    {

        DB::transaction(function () use ($request) {

            auth()->user()->update([
                'password' => bcrypt($request->new_password)
            ]);

        });

        return Redirect::back()->with('success', [
            'icon' => '',
            'time' => now()->diffForHumans(),
            'message' => 'Alteração registado com êxito.'
        ]);

    }

    public function submitsignature(SubmitSignatureRequest $request)
    {

        DB::transaction(function () use ($request) {

            // Assign Avatar
            if(isset($request->signature)){

                $user = User::findOrFail(auth()->user()->id);
                
                // Add to avatars media collection
                $user->addMediaFromRequest('signature')
                    ->usingName('signature')
                    ->toMediaCollection('signature');
            }

        });

        return Redirect::back()->with('success', [
            'icon' => '',
            'time' => now()->diffForHumans(),
            'message' => 'Assinatura registada com êxito.'
        ]);

    }
}
