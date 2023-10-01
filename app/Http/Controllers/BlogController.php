<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viewPath = 'BackOffice.blog.table'; // Set the view path 

        $blogs = Blog::latest()->paginate(5);
      
        return view('BackOffice.template',compact('viewPath','blogs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $viewPath = 'BackOffice.blog.forms'; // Set the view path 
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
            'title' => 'required',
            'tags' => 'required',
            'status' => 'required',
            'auteur' => 'required',
        ]);
      
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->content = "hello";
        $blog->user_id = $request->input('auteur');
        $blog->status = $request->input('status');
        $blog->tags = $request->input('tags');
        $blog->likes = 0;
        $blog->views = 0;

        $blog->save();
        return redirect()->route('blogs.index')
                        ->with('success','Article crée avec succées.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('BackOffice.blog.table',compact('blog'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('blogs.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
      
        $blog->update($request->all());
      
        return redirect()->route('blogs.index')
                        ->with('success','blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
       
        return redirect()->route('blogs.index')
                        ->with('success','blog deleted successfully');
    }
}
