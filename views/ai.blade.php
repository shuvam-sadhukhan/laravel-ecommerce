@extends('layouts.app')

@section('content')

<div class="max-w-4xl mx-auto px-6 py-10">


{{-- Header --}}
<div class="text-center mb-8">

    <h1 class="text-3xl font-bold">
        ShopNest AI Assistant
    </h1>

    <p class="text-gray-500 mt-2">
        Ask me about products, shopping, orders, payments, delivery or returns.
    </p>

</div>


{{-- Chat Box --}}
<div class="bg-white border rounded-xl shadow-sm p-6">

    {{-- Chat History --}}
    <div class="space-y-4 mb-6">

        @if(!empty($chat))

            @foreach($chat as $message)

                @if($message['role'] === 'user')

                    {{-- User Message --}}
                    <div class="flex justify-end">

                        <div class="bg-indigo-600 text-white px-4 py-3 rounded-xl max-w-[75%]">

                            {{ $message['message'] }}

                        </div>

                    </div>

                @else

                    {{-- AI Message --}}
                    <div class="flex justify-start">

                        <div class="bg-gray-100 text-gray-800 px-4 py-3 rounded-xl max-w-[75%]">

                            <p class="text-sm font-semibold mb-1">
                                ShopNest AI
                            </p>

                            {{ $message['message'] }}

                        </div>

                    </div>

                @endif

            @endforeach

        @else

            <div class="text-center text-gray-400 py-10">

                <p class="text-lg">
                    👋 Hello! How can I help you?
                </p>

                <p class="text-sm mt-2">
                    Try asking:
                </p>

                <div class="mt-4 space-y-2 text-sm">

                    <p>"What products do you have?"</p>
                    <p>"How does delivery work?"</p>
                    <p>"Can I return a product?"</p>

                </div>

            </div>

        @endif

    </div>


    {{-- Question Form --}}
    <form action="/ask-ai" method="POST">

        @csrf

        <div class="flex gap-3">

            <input
                type="text"
                name="question"
                placeholder="Ask something about shopping..."
                required
                class="flex-1 border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500"
            >

            <button
                type="submit"
                class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700"
            >
                Ask
            </button>

        </div>

    </form>

</div>


</div>

@endsection
