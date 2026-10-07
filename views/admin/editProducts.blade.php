@extends('layouts.admin')

@section('content')

<div class="max-w-3xl">

    <div class="mb-6">
        <h1 class="text-2xl font-bold">Edit Product</h1>

        <p class="text-gray-500">
            Update product information.
        </p>
    </div>

    <div class="bg-white rounded-xl shadow p-6">

        <form
            action="/admin/products/{{$product->id}}"
            method="POST"   enctype="multipart/form-data"
        >

            @csrf
            @method('PUT')

            <!-- Category -->

            <div class="mb-5">

                <label class="block text-sm font-medium mb-2">
                    Category
                </label>

                <select
                    name="category_id"
                    class="w-full border rounded-lg px-4 py-3"
                >

                    <option value="">
                        Select Category
                    </option>

                    @foreach($categories as $category)

                        <option
                            value="{{ $category->id }}">
                            <!-- {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }} -->
                        
                            {{ $category->name }}
                        </option>

                    @endforeach

                </select>

                @error('category_id')
                    <p class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            <!-- Product Name -->

            <div class="mb-5">

                <label class="block text-sm font-medium mb-2">
                    Product Name
                </label>

                <input
                    type="text"
                    name="name"
                    value="{{ old('name', $product->name) }}"
                    class="w-full border rounded-lg px-4 py-3"
                >

                @error('name')
                    <p class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            <!-- Description -->

            <div class="mb-5">

                <label class="block text-sm font-medium mb-2">
                    Description
                </label>

                <textarea
                    name="description"
                    rows="5"
                    class="w-full border rounded-lg px-4 py-3"
                >{{ old('description', $product->description) }}</textarea>

                @error('description')
                    <p class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            <!-- Price -->

            <div class="mb-5">

                <label class="block text-sm font-medium mb-2">
                    Price
                </label>

                <input
                    type="number"
                    name="price"
                    step="0.01"
                    value="{{ old('price', $product->price) }}"
                    class="w-full border rounded-lg px-4 py-3"
                >

                @error('price')
                    <p class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </p>
                @enderror

            </div>
            <div class="mb-5">

    <label class="block text-sm font-medium mb-2">
        Product Image
    </label>

    @if($product->image)
        <img
            src="{{ asset('storage/' . $product->image) }}"
            class="w-24 h-24 object-cover rounded-lg mb-3"
        >
    @endif

    <input
        type="file"
        name="image"
        accept="image/*"
        class="w-full border rounded-lg px-4 py-3"
    >

    @error('image')
        <p class="text-red-500 text-sm mt-2">
            {{ $message }}
        </p>
    @enderror

</div>


          

            


            <!-- Buttons -->

            <div class="flex gap-3">

                <a
                    href="/admin/products"
                    class="px-5 py-3 border rounded-lg"
                >
                    Cancel
                </a>

                <button
                    type="submit"
                    class="bg-black text-white px-5 py-3 rounded-lg"
                >
                    Update Product
                </button>

            </div>

        </form>

    </div>

</div>

@endsection