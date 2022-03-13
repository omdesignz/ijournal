<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Review;
use App\Models\User;
use App\Models\Role;
use DB;
use App\Events\Illuminate\Auth\Events\SelectedToReviewArticle;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = auth()->user()->isAdmin ? Review::with('article', 'user')->paginate(10) : Review::with('article', 'user')->where('user_id', auth()->id())->paginate(10);

        return view('backend.reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if (! auth()->user()->isAdmin) {
            abort(403);
        }

        $article = Article::findOrFail($request->article_id);
        $users = User::whereHas('roles', function($q) {
            $q->whereName('reviewer');
        })->get();

        return view('backend.reviews.create', compact('article', 'users'));
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
                'article_id' => 'required',
                'users' => 'required|min:1',
            ]);

            if (! auth()->user()->isAdmin) {
                abort(403);
            }

            // dd($request->all());

            if(count($request->users) > 0){
                $article = Article::findOrFail($request->article_id);
                foreach ($request->users as $id) {
                    
                    $user = User::findOrFail($id);

                    Review::create([
                        'user_id' => $id,
                        'article_id' => $request->article_id,
                        'description' => '',
                        'rejection_description' => '',
                        'rejected' => 0,
                        'accepted' => 0,
                        'status' => 0,
                    ]);

                    event(new SelectedToReviewArticle($user, $article));

                }
            }
    
            return redirect('/dashboard');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $review = Review::with('article', 'user')->findOrFail($id);

        if (auth()->id() != $review->user_id) {
            abort(403);
        }

        return view('backend.reviews.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::with('article', 'user')->findOrFail($id);

        if (auth()->id() != $review->user_id) {
            abort(403);
        }

        return view('backend.reviews.edit', compact('review'));
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
            'description' => 'required',
            'revised_paper' => 'required|mimes:pdf|max:5000',
            'accepted' => 'nullable',
            'rejected' => 'nullable',
            'rejection_description' => 'required_if:rejected,1',
        ]);

        $review = Review::findOrFail($id);

        $review->update([
            'description' => $request->description,
            'rejected' => $request->rejected ?? 0,
            'accepted' => $request->accepted ?? 0,
            'rejection_description' => $request->rejection_description,
        ]);

        // Add Possible Attachments
        if($request->revised_paper){
            $review->addMediaFromRequest('revised_paper')->toMediaCollection('revised_paper');
        }
  
        return redirect('/dashboard');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function markAsDone(Request $request, $id)
    {

        $review = Review::findOrFail($id);

        if (auth()->id() != $review->user_id) {
            abort(403);
        }

        $review->update([
            'status' => 1
        ]);
  
        return redirect('/reviews');
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
        
        Review::findOrFail($id)->delete();

        return redirect('/reviews');
    }
}
