<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('panel.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('panel.categories.create');
    }

    public function store(Request $request)
    {
        $this->validateStore($request);

        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('management.categories.index')->with('success', '');
    }

    private function validateStore(Request $request)
    {
        return $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
        ]);
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return back()->with('success', '');
    }

    public function edit(Category $category)
    {
        return view('panel.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $this->validateStore($request);

        $category->name = $request->name;

        $category->save();

        return back()->with('success', '');
    }
}
