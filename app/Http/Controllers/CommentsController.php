<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, $id)
    {
        $obj = new Comment;
        $obj->comment = $request->input('comment');
        $obj->post_id = $id;
        $obj->save();

        return redirect(url('posts'));
    }

    public function show(Comment $comment, $id)
    {
        $p = Post::findOrFail($id);
        $comments = Comment::where('post_id', $id)->get();
        if ($comments != '') {
            return view('posts.view_comments', compact('comments', 'p'));
        }

    }

    public function edit(Comment $comment)
    {
        //
    }

    public function update(Request $request, Comment $comment)
    {
        //
    }

    public function destroy(Comment $comment)
    {
        //
    }
}
