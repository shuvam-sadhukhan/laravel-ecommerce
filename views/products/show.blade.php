@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto px-6 py-10">

    <div class="grid md:grid-cols-2 gap-10">

        {{-- Product Image --}}
        <div>

            @if($product->image)

                <img
                    src="{{ asset('storage/' . $product->image) }}"
                    alt="{{ $product->name }}"
                    class="w-full h-[450px] object-cover rounded-xl"
                >

            @else

                <div class="h-[450px] flex items-center justify-center border rounded-xl">
                    No Image
                </div>

            @endif

        </div>


        {{-- Product Information --}}
        <div>

            <h1 class="text-3xl font-bold">
                {{ $product->name }}
            </h1>

            <p class="text-gray-500 mt-2">
                Product ID: {{ $product->id }}
            </p>

            <p class="text-2xl font-bold mt-6">
                ₹{{ $product->price }}
            </p>

            <p class="mt-6 text-gray-600">
                {{ $product->description }}
            </p>

            <p class="mt-6">
                Stock:
                <span class="font-semibold">
                    {{ $product->stock }}
                </span>
            </p>

           <form action="/cart/add/{{$product->id}}" method="POST">
                 @csrf

    <button type="submit" class="mt-8 w-full bg-indigo-600 text-white py-3 rounded-lg">
        Add to Cart
    </button>
</form>

        </div>

    </div>

</div>

@endsection