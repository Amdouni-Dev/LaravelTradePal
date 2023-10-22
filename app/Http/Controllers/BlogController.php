<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viewPath = 'BackOffice.blog.table';
        $blogs = Blog::join('users', 'blogs.user_id', '=', 'users.id')
            ->select('blogs.*', 'users.name as username')
            ->latest()
            ->simplePaginate(5);
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
        // Upload Image
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
    public function show($id)
    {
        $blog = Blog::with(['comments.user']) 
                    ->join('users', 'blogs.user_id', '=', 'users.id')
                    ->where('blogs.id', $id)
                    ->select('blogs.*', 'users.name as username')
                    ->first();
        if (!$blog) {
            abort(404); 
        }
        $blogId = $id;
        $userId = Auth::id();

        $likedComments = Comment::where('likes', '1')
            ->where('blog_id', $blogId)
            ->where('user_id', $userId)
            ->get();

        $commentCount = Comment::where('blog_id', $blogId)
            ->whereNotNull('content')
            ->count();

        $likedCommentCount = Comment::where('blog_id', $blogId)
            ->where('likes', 1)
            ->count();

        $blog->views = $blog->views + 1;
        $blog->save();
        
        return view('FrontEnd.blogs.blog', compact('blog', 'likedComments','commentCount','likedCommentCount'));
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
        $blogs = Blog::join('users', 'blogs.user_id', '=', 'users.id')
                    ->select('blogs.*', 'users.username as username', 'users.name as nameuser')
                    ->get();

        $blogs = $blogs->map(function ($blog) {
            $blog->likes = Comment::where('blog_id', $blog->id)
                ->where('likes', 1)
                ->count();
        
        $blog->countomments = Comment::where('blog_id', $blog->id)
                ->whereNotNull('content')
                ->count();
            return $blog;
        });

        return view('FrontEnd.blogs.list', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function UserBlogForm()
    {
        $users = User::select('id', 'name')->get();
        return view('FrontEnd.blogs.form',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function userSaveBlog(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'status' => 'required',
            'auteur' => 'required',
        ]);
        // Upload Image
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
        return redirect()->route('blogs.listing')
                        ->with('success','Article crée avec succées.');
    }

    public function filterByAuthor($username){
        $user = User::where('username', $username)->first();
        if (!$user) {
            abort(404);
        }
        
        $blogs = Blog::join('users', 'blogs.user_id', '=', 'users.id')
            ->select('blogs.*', 'users.username as username','users.name as nameuser')
            ->where('blogs.user_id', $user->id)
            ->get();
        
        $blogs = $blogs->map(function ($blog) {
            $blog->likes = Comment::where('blog_id', $blog->id)
                ->where('likes', 1)
                ->count();
            return $blog;
        });

        $blogs = $blogs->map(function ($blog) {
            $blog->likes = Comment::where('blog_id', $blog->id)
                ->where('likes', 1)
                ->count();
        
        $blog->countomments = Comment::where('blog_id', $blog->id)
                ->whereNotNull('content')
                ->count();
            return $blog;
    });
        
        return view('FrontEnd.blogs.list', compact('blogs'));
    }

    public function fetchBlogsByTag($tag)
    {
        $blogs = Blog::where('tags', 'like', '%' . $tag . '%')
            ->join('users', 'blogs.user_id', '=', 'users.id')
            ->select('blogs.*', 'users.username as username', 'users.name as nameuser')
            ->get();

        $blogs = $blogs->map(function ($blog) {
            $blog->likes = Comment::where('blog_id', $blog->id)
                ->where('likes', 1)
                ->count();

            $blog->countComments = Comment::where('blog_id', $blog->id)
                ->whereNotNull('content')
                ->count();

            return $blog;
        });
        return view('FrontEnd.blogs.list', compact('blogs'));
    }

}
