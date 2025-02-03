<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Article $article)
    {
        $this->validateStore($request);

        $request->user()->comments()->create([
            'body' => $request->body,
            'status' => 'created',
            'article_id' => $article->id,
        ]);

        return back()->with('success', '')->with('good', 'دیدگاه شما با موفقیت ثبت شد و بعد از تایید مدیر نمایش داده می شود');
    }

    private function validateStore(Request $request)
    {
        return $request->validate([
            'body' => ['required', 'min:3', 'max:1500'],
        ]);
    }
}
