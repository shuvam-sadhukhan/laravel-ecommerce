<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.adminCategories', compact('categories'));
    }

     public function create()
    {
        return view('admin.createCategories');
    }

     public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ]);

        Category::create([
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name']),
        ]);

        return redirect('/admin/categories')->with('success', 'Category created successfully.');
    }

    public function edit(Category $category)
{
    return view('admin.editCategories', compact('category'));
}

public function update(Request $request, Category $category)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255|unique:categories,name,'
    ]);

    $category->update([
        'name' => $validated['name'],
        'slug' => Str::slug($validated['name']),
    ]);

    return redirect('/admin/categories')->with('success', 'Category updated successfully.');
}

public function delete(Category $category){
    $category->delete();
    return redirect('/admin/categories')->with('success', 'Category deleted successfully.');

}
}
