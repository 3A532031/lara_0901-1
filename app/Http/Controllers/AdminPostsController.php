<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class AdminPostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();
        $data = ['posts' => $posts];
        return view('admin.posts.index', $data);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function edit($id)
    {
        $post=Post::find($id);
        $data=['post'=>$post];
        returnview('admin.posts.edit',$data);
    }
     public function store(Request$request)
     {
         Post::create($request -> all());
         returnredirect() -> route('admin.posts.index');
     }

}
