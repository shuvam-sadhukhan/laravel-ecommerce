
@extends('layouts.auth')

@section('content')

@if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif



<div class="min-h-[80vh] flex items-center justify-center py-10">

    <div class="w-full max-w-md">

        <!-- Login Card -->
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8">

            <!-- Heading -->
            <div class="text-center mb-8">

                <!-- Logo -->
                <div class="mx-auto w-14 h-14 rounded-2xl bg-indigo-600
                            flex items-center justify-center shadow-lg mb-4">
                    <span class="text-white text-2xl font-bold">
                        S
                    </span>
                </div>

                <h1 class="text-3xl font-bold text-gray-800">
                    Welcome Back
                </h1>

                <p class="text-gray-500 mt-2">
                    Login to your ShopNest account
                </p>

            </div>


            <!-- Login Form -->
            <form action="/login" method="POST" class="space-y-5">

                @csrf


                <!-- Email -->
                <div>
                    <label
                        for="email"
                        class="block text-sm font-medium text-gray-700 mb-2"
                    >
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="example@gmail.com"
                        class="w-full px-4 py-3 rounded-xl
                               border border-gray-300
                               focus:outline-none
                               focus:ring-2 focus:ring-indigo-500
                               focus:border-indigo-500
                               transition"
                    >

                    @error('email')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <!-- Password -->
                <div>
                    <div class="flex items-center justify-between mb-2">

                        <label
                            for="password"
                            class="block text-sm font-medium text-gray-700"
                        >
                            Password
                        </label>

                       

                    </div>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter a strong Password"
                        class="w-full px-4 py-3 rounded-xl
                               border border-gray-300
                               focus:outline-none
                               focus:ring-2 focus:ring-indigo-500
                               focus:border-indigo-500
                               transition"
                    >

                    @error('password')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <!-- Remember Me -->
               


                <!-- Login Button -->
                <button
                    type="submit"
                    class="w-full bg-indigo-600 text-white
                           py-3 rounded-xl font-semibold
                           hover:bg-indigo-700
                           active:scale-[0.98]
                           transition duration-200
                           shadow-md"
                >
                    Login
                </button>

            </form>


            <!-- Register Link -->
            <div class="text-center mt-6">

                <p class="text-gray-500 text-sm">
                    Don't have an account?

                    <a
                        href="/register"
                        class="text-indigo-600 font-semibold
                               hover:text-indigo-700"
                    >
                        Create an account
                    </a>
                </p>

            </div>

        </div>


        <!-- Security Text -->
        <p class="text-center text-gray-400 text-sm mt-6">
            Your account information is securely protected.
        </p>

    </div>

</div>

@endsection

