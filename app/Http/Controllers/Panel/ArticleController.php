<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
}
