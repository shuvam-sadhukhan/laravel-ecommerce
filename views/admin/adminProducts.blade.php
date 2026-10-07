@extends('layouts.admin')

@section('content')

<div class="flex justify-between items-center mb-6">

    <div>
        <h1 class="text-2xl font-bold">Products</h1>
        <p class="text-gray-500">
            Manage your ShopNest products
        </p>
    </div>

    <a
        href="/admin/products/create"
        class="bg-black text-white px-4 py-2 rounded-lg"
    >
        Add Product
    </a>

</div>

@if(session('success'))
    <div class="mb-6 bg-green-100 text-green-700 px-4 py-3 rounded-lg">
        {{ session('success') }}
    </div>
@endif

<div class="bg-white rounded-xl shadow overflow-hidden">

    <table class="w-full">

        <thead class="bg-gray-100">
            <tr>
                <th class="text-left px-6 py-4">ID</th>
                <th class="text-left px-6 py-4">Name</th>
                <th class="text-left px-6 py-4">Category ID</th>
                <th class="text-left px-6 py-4">Price</th>
               <th class="text-left px-6 py-4">Image</th>
                <th class="text-left px-6 py-4">Actions</th>
            </tr>
        </thead>

        <tbody>

            @forelse($products as $product)

                <tr class="border-t">

                    <td class="px-6 py-4">
                        {{ $product->id }}
                    </td>

                    <td class="px-6 py-4">
                        {{ $product->name }}
                    </td>

                    <td class="px-6 py-4">
                        {{ $product->category_name }}
                    </td>

                    <td class="px-6 py-4">
                        ₹{{ $product->price }}
                    </td>
                    <td class="px-6 py-4">
                        @if($product->image)

        <img
            src="{{ asset('storage/' . $product->image) }}"
            alt="{{ $product->name }}"
            class="w-16 h-16 object-cover rounded-lg"
        >

    @else

        <span class="text-gray-400">
            No image
        </span>

    @endif
                     </td>
                    
                    <td class="px-6 py-4">
                        <a
                            href="/admin/products/{{$product->id}}/edit"
                            class="text-blue-600 mr-3"
                        >
                            Edit
                        </a>

                        <a
                            href="/admin/products/{{$product->id}}/delete"
                            class="text-red-600"
                        >
                            Delete
                        </a>
                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="6" class="text-center py-8 text-gray-500">
                        No products found.
                    </td>
                </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection