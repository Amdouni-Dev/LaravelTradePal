<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viewPath = 'BackOffice.comment.table'; // Set the view path 

        $comments = Comment::latest()->paginate(5);
      
        return view('BackOffice.template',compact('viewPath','comments'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $viewPath = 'BackOffice.comment.forms'; // Set the view path 
        return view('BackOffice.template',compact('viewPath'));
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
            'content' => 'required'
        ]);
      
        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->blog_id = $request->input('blog_id');
        $comment->user_id = $request->input('user_id');

        $comment->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        $viewPath = 'BackOffice.comment.forms'; // Set the view path 
        return view('BackOffice.template',compact('viewPath'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        $viewPath = 'BackOffice.comment.forms'; // Set the view path 
        return view('BackOffice.template',compact('comment','viewPath'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'status' => 'required',
            'auteur' => 'required',
        ]);
        
        $comment->update($request->all());
        return redirect()->route('comments.index')
            ->with('success', 'Article a étè modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('comments.index')
        ->with('success', 'Article a étè supprimer');
    }

}
