<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function add(Product $product)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$product->id])) {

            $cart[$product->id]['quantity']++;

        } else {

            $cart[$product->id] = [
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);

        return redirect('/cart') ->with('success', 'Product added to cart.');
    }


    public function index()
{
    $cart = session()->get('cart', []);
     $cartCount = collect($cart)->sum('quantity');
       $total = 0;

    foreach ($cart as $item) {
        $total += $item['price'] * $item['quantity'];
    }


    return view('cart.index', compact('cart','total'));
}

public function increase(Product $product)
{
    $cart = session()->get('cart', []);

    if (isset($cart[$product->id])) {
        $cart[$product->id]['quantity']++;
    }

    session()->put('cart', $cart);

    return redirect('/cart');
}

public function decrease(Product $product)
{
    $cart = session()->get('cart', []);

    if (isset($cart[$product->id])) {

        $cart[$product->id]['quantity']--;

        if ($cart[$product->id]['quantity'] <= 0) {
            unset($cart[$product->id]);
        }
    }

    session()->put('cart', $cart);

    return redirect('/cart');
}

public function remove(Product $product)
{
    $cart = session()->get('cart', []);

    if (isset($cart[$product->id])) {
        unset($cart[$product->id]);
    }

    session()->put('cart', $cart);

    return redirect('/cart');
}
}
