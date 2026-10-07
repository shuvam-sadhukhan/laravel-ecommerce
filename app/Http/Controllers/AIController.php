<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AIController extends Controller
{
    public function index()
    {
        return view('ai');
    }

     public function askAI(Request $request)
     {
    $question = $request->question;

    $apiKey=env('OPENAI_API_KEY');

    $input = [
        [
            'role' => 'developer',
            'content' => 'You are a shopping assistant. Only answer questions related to products, shopping, orders, payments, delivery, returns, and this store. If the question is unrelated, politely say that you can only help with shopping-related questions.'
        ],
        [
            'role' => 'user',
            'content' => $question
        ]
    ];

    // Get the previous response ID from session
    $previousResponseId = session('response_id');

    // Prepare request data
    $data = [
        'model' => 'gpt-4.1-mini',
        'input' => $input
    ];

    // If previous response exists, continue that conversation
    if ($previousResponseId) {
        $data['previous_response_id'] = $previousResponseId;
    }

    $response = Http::withToken($apiKey)
        ->post('https://api.openai.com/v1/responses', $data);

    $result = $response->json();

    $answer = $result['output'][0]['content'][0]['text'];

    // Save the NEW response ID
    session(['response_id' => $result['id']]);

    // return view('ai', compact('answer', 'question'));
    // Get existing chat history
    $chat = session('chat', []);

    // Add user's question
    $chat[] = [
        'role' => 'user',
        'message' => $question
    ];

    // Add AI answer
    $chat[] = [
        'role' => 'assistant',
        'message' => $answer
    ];

    // Save chat history
    session(['chat' => $chat]);

    return view('ai', compact('chat'));
}
}
