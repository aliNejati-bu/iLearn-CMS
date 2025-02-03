<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\File;
use App\Services\File\Uploader;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create()
    {
        $categories = Category::all();

        return view('panel.articles.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validateStore($request);

        $tags = $this->getTags($request->tags);

        $uploader = new Uploader($request->image);
        $file = $uploader->upload($request->user(), time(), false);

        $request->user()->articles()->create([
            'title' => $request->title,
            'body' => $request->body,
            'tags' => $tags,
            'image' => $file->path,
            'category_id' => $request->category,
        ]);

        return redirect()->route('management.articles.index')->with('success', '');
    }

    private function validateStore(Request $request)
    {
        return $request->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'body' => ['required', 'min:3'],
            'tags' => ['required'],
            'image' => ['required', 'image'],
            'category' => ['required', 'exists:categories,id'],
        ]);
    }

    private function getTags(string $tags)
    {
        $jsonTags = json_decode($tags);

        $tags = '';
        $i = 0;
        foreach ($jsonTags as $tag) {
            ++$i;

            $tags .= $tag->value . (($i !== count($jsonTags)) ? ',' : '');
        }

        return $tags;
    }

    public function index()
    {
        $articles = Article::all()->load('user');

        return view('panel.articles.index', compact('articles'));
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return back()->with('success', '');
    }

    public function edit(Article $article)
    {
        $categories = Category::all();

        return view('panel.articles.edit', compact('article', 'categories'));
    }

    public function update(Request $request, Article $article)
    {
        $this->validateUpdate($request);

        if ($request->hasFile('image')) {
            $uploader = new Uploader($request->image);

            $uploader->remove(File::where('path', $article->image)->first());

            $file = $uploader->upload($request->user(), time(), false);

            $article->image = $file->path;
        }

        $tags = $this->getTags($request->tags);

        $article->title = $request->title;
        $article->body = $request->body;
        $article->tags = $tags;
        $article->category_id = $request->category;

        $article->save();

        return back()->with('success', '');
    }

    private function validateUpdate(Request $request)
    {
        return $request->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'body' => ['required', 'min:3'],
            'tags' => ['required'],
            'image' => ['image'],
            'category' => ['required', 'exists:categories,id'],
        ]);
    }
}
