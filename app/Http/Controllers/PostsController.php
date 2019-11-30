<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        foreach($posts as $p) {
            $comments = Comment::where('post_id', $p->id)->get();
            $p->comments = $comments;
        }
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $obj = new Post;
        $obj->description = $request->input('description');

        if ($request->input('fullname') != '') {
            $obj->name = $request->input('fullname');
        }

        $obj->postuniquekey = substr(md5(microtime()),rand(0,26),5);
        $obj->save();

        return self::index();
    }

    public function show(Post $post)
    {
        
    }

    public function edit(Post $post)
    {
        
    }

    public function update(Request $request, Post $post)
    {
        
    }

    public function destroy(Post $post)
    {
        
    }
}
