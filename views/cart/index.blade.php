@extends('layouts.app')

@section('content')

<div class="max-w-5xl mx-auto px-6 py-10">

    <h1 class="text-3xl font-bold mb-8">
        My Cart
    </h1>

    @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif


    @if(count($cart) > 0)

        @foreach($cart as $id => $item)

            <div class="flex items-center gap-6 border-b py-5">

                @if($item['image'])
                    <img
                        src="{{ asset('storage/' . $item['image']) }}"
                        class="w-24 h-24 object-cover rounded-lg"
                    >
                @endif

                <div class="flex-1">

                    <h2 class="text-lg font-semibold">
                        {{ $item['name'] }}
                    </h2>

                    <p class="text-gray-600">
                        ₹{{ $item['price'] }}
                    </p>
                    {{-- Quantity Buttons --}}
            <div class="flex items-center gap-2 mt-3">

                {{-- Decrease --}}
                <form
                    action="/cart/decrease/{{$id}}"
                    method="POST"
                >
                    @csrf

                    <button
                        type="submit"
                        class="w-8 h-8 border rounded"
                    >
                        -
                    </button>
                </form>

                    <p>
                        Quantity:
                        {{ $item['quantity'] }}
                    </p>
                      {{-- Increase --}}
                <form
                    action="/cart/increase/{{$id}}"
                    method="POST"
                >
                    @csrf

                    <button
                        type="submit"
                        class="w-8 h-8 border rounded"
                    >
                        +
                    </button>
                </form>
                </div>
                 {{-- Remove --}}
            <form
                action="/cart/remove/{{$id}}"
                method="POST"
                class="mt-2"
            >
                @csrf
                @method('DELETE')

                <button
                    type="submit"
                    class="text-red-500"
                >
                    Remove
                </button>
            </form>
                <p class="font-bold">
                    ₹{{ $item['price'] * $item['quantity'] }}
                </p>
                

            </div>

        @endforeach
         <div class="mt-8 border-t pt-6 text-right">

    <p class="text-2xl font-bold">
        Total: ₹{{ $total }}
    </p>

</div>
    @else

        <p class="text-gray-500">
            Your cart is empty.
        </p>

    @endif

</div>

@endsection