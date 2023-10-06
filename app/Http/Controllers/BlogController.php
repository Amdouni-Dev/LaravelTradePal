<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
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

        $blogs = Blog::join('users', 'blogs.user_id', '=', 'users.id')
        ->select('blogs.*', 'users.name as username')
        ->latest()
        ->paginate(5);
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
        $users = User::select('id', 'name')->get();
        $viewPath = 'BackOffice.blog.forms'; // Set the view path 
        return view('BackOffice.template',compact('viewPath','users'));
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
        if ($request->hasFile('image')) {
            $image = $request->file('image'); 
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('blogs'), $imageName); 
        } else {
            
            $imageName = null; 
        }
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->user_id = $request->input('auteur');
        $blog->status = $request->input('status');
        $blog->tags = $request->input('tags');
        $blog->featuredImage = $imageName;
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
        $users = User::select('id', 'name')->get();
        $viewPath = 'BackOffice.blog.forms'; // Set the view path 
        return view('BackOffice.template',compact('viewPath','users'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $users = User::select('id', 'name')->get();
        $viewPath = 'BackOffice.blog.forms'; // Set the view path 
        return view('BackOffice.template',compact('blog','viewPath','users'));
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
            'title' => 'required',
            'tags' => 'required',
            'status' => 'required',
            'auteur' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image'); 
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('blogs'), $imageName); 
        } else {
            
            $imageName = null; 
        }
        $blog->featuredImage = $imageName;
        $blog->update($request->all());
        return redirect()->route('blogs.index')
            ->with('success', 'Article a étè modifier');
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
        ->with('success', 'Article a étè supprimer');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listing()
    {
        $blogs = Blog::latest()->paginate(5);
        return view('FrontEnd.blogs.list',compact('blogs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
