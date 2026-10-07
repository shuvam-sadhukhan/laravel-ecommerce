<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
     {
        $products = Product::join('categories','products.category_id','=','categories.id')
        ->select('products.*','categories.name as category_name')->get();

        return view('admin.adminProducts', compact('products'));
    }

      public function create()
    {
        $categories = Category::all();

        return view('admin.createProducts', compact('categories'));
    }

     public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255|unique:products,name',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|mimes:jpg,jpeg,png,webp,avif|max:2048',
           
        ]);
        $imagePath = $request->file('image')->store('products', 'public');

        Product::create([
            'category_id' => $validated['category_id'],
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name']),
            'description' => $validated['description'] ?? null,
            'price' => $validated['price'],
            'image' => $imagePath,
            
        ]);

        return redirect('/admin/products')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
{
    $categories = Category::all();

    return view('admin.editProducts', compact('product', 'categories'));
}

public function update(Request $request, Product $product)
{
    $validated = $request->validate([
        'category_id' => 'required|exists:categories,id',
        'name' => 'required|string|max:255|unique:products,name,' . $product->id,
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
         'image' => 'nullable|mimes:jpg,jpeg,png,webp,avif|max:2048',
        
    ]);
     $imagePath = $product->image;
     if ($request->hasFile('image')) {

        // Delete old image
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        // Store new image
        $imagePath = $request->file('image')->store('products', 'public');
    }

    $product->update([
        'category_id' => $validated['category_id'],
        'name' => $validated['name'],
        'slug' => Str::slug($validated['name']),
        'description' => $validated['description'] ?? null,
        'price' => $validated['price'],
        'image' => $imagePath,
        
    ]);

    return redirect('/admin/products')->with('success', 'Product updated successfully.');
}

public function delete(Product $product){
     if ($product->image) {
        Storage::disk('public')->delete($product->image);
    }
    $product->delete();
    return redirect('/admin/products')->with('success', 'Product deleted successfully.');
}

// user view part in productcontrollers
public function shop()
{
    $products = Product::join( 'categories', 'products.category_id', '=','categories.id') ->select(
        'products.*',
        'categories.name as category_name'
    )->get();
   
    
    // $products=Product::all();

    $categories = Category::all();

    return view('products.index', compact('products', 'categories'));
}

public function category($category)
{
    $products = Product::join(
        'categories',
        'products.category_id',
        '=',
        'categories.id'
    )
    ->select(
        'products.*',
        'categories.name as category_name'
    )
    ->where('products.category_id', $category)
    ->get();

    $categories = Category::all();

    return view('products.index', compact('products', 'categories'));
}
public function show(Product $product)
{
    return view('products.show', compact('product'));
}
}
