@extends('layouts.app')

@section('content')

@if(session('success'))
<script>
    alert("{{session('success')}}");
</script>
@endif
    <h1 class="text-4xl font-bold">
        Welcome to ShopNest
    </h1>

    <p class="mt-3 text-gray-600">
        Your online shopping destination.
    </p>

@endsection