<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\User;
use DB;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements = Announcement::paginate(10);

        return view('backend.announcements.index', compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! auth()->user()->isAdmin) {
            abort(403);
        }

        return view('backend.announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! auth()->user()->isAdmin) {
            abort(403);
        }

        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'published_at' => 'required',
            'cover' => 'required|image|max:5000',
        ]);

        $document = Announcement::create([
            'title' => $request->title,
            'description' => $request->description,
            'published_at' => $request->published_at,
            'user_id' => auth()->user()->id
        ]);

        // Add Possible Attachments
        if($request->cover){
            $document->addMediaFromRequest('cover')->toMediaCollection('cover');
        }

        return redirect('/announcements');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $announcement = Announcement::with('user')->findOrFail($id);

        return view('backend.announcements.show', compact('announcement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! auth()->user()->isAdmin) {
            abort(403);
        }

        $announcement = Announcement::with('user')->findOrFail($id);

        return view('backend.announcements.edit', compact('announcement'));
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
        if (! auth()->user()->isAdmin) {
            abort(403);
        }

        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'published_at' => 'required',
            'cover' => 'sometimes|image|max:5000',
        ]);

        $announcement = Announcement::findOrFail($id);

        $document = $announcement->update([
            'title' => $request->title,
            'description' => $request->description,
            'published_at' => $request->published_at,
            'user_id' => auth()->user()->id
        ]);

        // Add Possible Attachments
        if($request->cover){
            $announcement->addMediaFromRequest('cover')->toMediaCollection('cover');
        }

        return redirect('/announcements');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! auth()->user()->isAdmin) {
            abort(403);
        }

        Announcement::findOrFail($id)->delete();

        return redirect('/announcements');
    }
}
