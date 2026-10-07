@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-6 py-10">

    <h1 class="text-3xl font-bold mb-8">
        Shop Products
    </h1>
<a href="/products"><button class="px-4 py-2 border rounded-lg">
              All
            </button></a>
    {{-- Categories --}}
   
        @foreach($categories as $category)

            <a href="/products/category/{{$category->id}}"><button class="px-4 py-2 border rounded-lg">
                {{ $category->name }}
            </button></a>

        @endforeach

    </div>


    {{-- Products --}}
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">

        @forelse($products as $product)

            <div class="border rounded-xl p-4">

                @if($product->image)
                    <img
                        src="{{ asset('storage/' . $product->image) }}"
                        alt="{{ $product->name }}"
                        class="w-full h-48 object-cover rounded-lg"
                    >
                @endif

                <h2 class="text-lg font-semibold mt-4">
                    {{ $product->name }}
                </h2>

                <p class="text-gray-500">
                    {{ $product->category_name }}
                </p>

                <p class="font-bold mt-2">
                    ₹{{ $product->price }}
                </p>

                <a href="/products/{{$product->id}}"><button class="mt-4 w-full bg-indigo-600 text-white py-2 rounded-lg">
                    View Product
                </button></a>

            </div>

        @empty

            <p>No products available.</p>

        @endforelse

    </div>

</div>

@endsection