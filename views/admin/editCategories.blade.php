@extends('layouts.admin')

@section('content')

<div class="max-w-2xl">

    <div class="mb-6">
        <h1 class="text-2xl font-bold">Edit Category</h1>
        <p class="text-gray-500">
            Update the category information.
        </p>
    </div>

    <div class="bg-white rounded-xl shadow p-6">

        <form
            action="/admin/categories/{{$category->id}}"
            method="POST"
        >

            @csrf
            @method('PUT')

            <div class="mb-5">

                <label class="block text-sm font-medium mb-2">
                    Category Name
                </label>

                <input
                    type="text"
                    name="name"
                    value="{{$category->name}}"
                    class="w-full border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
                >

                @error('name')
                    <p class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <div class="flex gap-3">

                <a
                    href="/admin/categories"
                    class="px-5 py-3 border rounded-lg"
                >
                    Cancel
                </a>

                <button
                    type="submit"
                    class="bg-black text-white px-5 py-3 rounded-lg"
                >
                    Update Category
                </button>

            </div>

        </form>

    </div>

</div>

@endsection