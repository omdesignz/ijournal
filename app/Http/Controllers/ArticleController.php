<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Journal;
use App\Models\User;
use DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::with('user', 'journal')->paginate(10);

        return view('backend.submissions.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.submissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // DB::transaction(function () use ($request) {

            $validated = $request->validate([
                'title' => 'required',
                'abstract' => 'required',
                'references' => 'required',
                'keywords' => 'required',
                'cite_instructions' => 'required',
                'authors' => 'required',
                'full_paper' => 'required|mimes:pdf|max:5000',
                'filtered_paper' => 'required|mimes:pdf|max:5000',
                'declaration' => 'required|mimes:pdf|max:5000',
                // 'published_at' => 'required',
                'agree_terms' => 'required',
                'agree_privacy_policy' => 'required',
            ]);

            $document = Article::create([
                'title' => $request->title,
                'abstract' => $request->abstract,
                'references' => $request->references,
                'keywords' => $request->keywords,
                'cite_instructions' => $request->cite_instructions,
                'authors' => $request->authors,
                'link' => $request->link,
                'agree_terms' => $request->agree_terms,
                'agree_privacy_policy' => $request->agree_privacy_policy,
                'user_id' => auth()->user()->id,
                'journal_id' => 1,
                'published_at' => $request->published_at,
                'status' => false,
            ]);

            // Add Possible Attachments
            if($request->full_paper){
                $document->addMediaFromRequest('full_paper')->toMediaCollection('full_paper');
            }

            if(isset($request->filtered_paper)){
                $document->addMediaFromRequest('filtered_paper')->toMediaCollection('filtered_paper');
            }

            if(isset($request->declaration)){
                $document->addMediaFromRequest('declaration')->toMediaCollection('declaration');
            }

            // if (!$document) {
            //     return back()->withErrors();
            // }


            return redirect('/dashboard');
        // });

        // return back()->withErrors();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::withCount(['user', 'journal', 'reviews'])->findOrFail($id);

        return view('backend.submissions.show', compact('article'));
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
