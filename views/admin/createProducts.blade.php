@extends('layouts.admin')

@section('content')

<div class="max-w-3xl">

    <div class="mb-6">
        <h1 class="text-2xl font-bold">Add Product</h1>

        <p class="text-gray-500">
            Add a new product to ShopNest.
        </p>
    </div>

    <div class="bg-white rounded-xl shadow p-6">

        <form
            action="/admin/products"
            method="POST"  enctype="multipart/form-data"
        >

            @csrf

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
                            <!-- {{ old('category_id') == $category->id ? 'selected' : '' }} -->
                        
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
                    value="{{ old('name') }}"
                    placeholder="Enter product name"
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
                    placeholder="Enter product description"
                    class="w-full border rounded-lg px-4 py-3"
                >{{ old('description') }}</textarea>

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
                    value="{{ old('price') }}"
                    placeholder="Enter price"
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
                    Create Product
                </button>

            </div>

        </form>

    </div>

</div>

@endsection