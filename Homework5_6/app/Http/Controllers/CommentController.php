<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->name = $request->name;
        $comment->body = $request->body;
        $comment->post_id = $request->post_id;
        $comment->save();

        // $post = Post::find($comment->post_id);
        // $comments = $post->comments;
        // return view('posts.show', ['post' => $post, 'comments' => $comments]);

        // return response()->json(['status' => 'success']);

        return redirect('/posts/' . $comment->post_id);
    }
}
