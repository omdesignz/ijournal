<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
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
            'avatar' => 'required|image|max:2000',
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'username' => $request->username,
            'middle_names' => $request->middle_names,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'tel_no' => $request->tel_no,
            'password' => Hash::make($request->password),
            'agree_terms' => $request->agree_terms ?? 0,
            'agree_notification' => $request->agree_notification ?? 0,
            'agree_contact_review' => $request->agree_contact_review ?? 0,
            'review_interests' => $request->review_interests,

        ]);

        // Add Possible Avatar
        if(isset($request->avatar)){
            $user->addMediaFromRequest('avatar')->toMediaCollection('avatar');
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
