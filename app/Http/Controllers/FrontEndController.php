<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Announcement;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::with('user', 'journal')->where('status', 1)->latest()->take(4)->get();

        return view('home', compact('articles'));
    }

    public function articles()
    {
        $articles = Article::with('user', 'journal')->where('status', 1)->paginate(10);

        return view('articles', compact('articles'));
    }

    public function article($id)
    {
        $article = Article::with('user', 'journal')->findOrFail($id);

        return view('article', compact('article'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function submissions()
    {
        return view('submissions');
    }

    public function policy()
    {
        return view('policy');
    }

    public function authorinfo()
    {
        return view('author_info');
    }

    public function readerinfo()
    {
        return view('reader_info');
    }

    public function librarianinfo()
    {
        return view('librarian_info');
    }

    public function forauthors()
    {
        return view('for_authors');
    }

    public function subformat()
    {
        return view('submission_formatting');
    }

    public function eboard()
    {
        return view('eboard');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function terms_conditions()
    {
        return view('terms_conditions');
    }

    public function announcements()
    {
        $announcements = Announcement::with('user')->paginate(10);

        return view('announcements', compact('announcements'));
    }

    public function announcement($id)
    {
        $announcement = Announcement::with('user')->findOrFail($id);

        return view('announcement', compact('announcement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
