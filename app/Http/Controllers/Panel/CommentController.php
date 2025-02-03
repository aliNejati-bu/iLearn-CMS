<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::where('status', 'created')->get()->load('user', 'article');

        return view('panel.comments.index', compact('comments'));
    }

    public function verify(Comment $comment)
    {
        $comment->status = 'verified';

        $comment->save();

        return back()->with('success', '');
    }

    public function reject(Comment $comment)
    {
        $comment->status = 'rejected';

        $comment->save();

        return back()->with('success', '');
    }
}
