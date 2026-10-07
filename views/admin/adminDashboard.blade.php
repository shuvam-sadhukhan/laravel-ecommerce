@extends('layouts.admin')

@section('content')

@if(session('success'))
<script>
    alert("{{session('success')}}");
</script>
@endif
   
    <h1 class="text-3xl font-bold mb-8">
        Dashboard
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        <!-- Users -->
        <div class="bg-white p-6 rounded-xl shadow">
            <h2 class="text-gray-500">
                Total Users
            </h2>

            <p class="text-3xl font-bold mt-2">
                {{$totalUsers}}
            </p>
        </div>


        <!-- Products -->
        <div class="bg-white p-6 rounded-xl shadow">
            <h2 class="text-gray-500">
                Total Products
            </h2>

            <p class="text-3xl font-bold mt-2">
                {{$totalProducts}}
            </p>
        </div>


        <!-- Orders -->
        <div class="bg-white p-6 rounded-xl shadow">
            <h2 class="text-gray-500">
                Total Categories
            </h2>

            <p class="text-3xl font-bold mt-2">
                {{$totalCategories}}
            </p>
        </div>


        <!-- Revenue -->
        <div class="bg-white p-6 rounded-xl shadow">
            <h2 class="text-gray-500">
                Total Revenue
            </h2>

            <p class="text-3xl font-bold mt-2">
                ₹0
            </p>
        </div>

    </div>



@endsection