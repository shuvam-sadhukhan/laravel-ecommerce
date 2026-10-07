@extends('layouts.admin')

@section('content')

<div class="flex justify-between items-center mb-6">

    <div>
        <h1 class="text-3xl font-bold">
            Users
        </h1>

        <p class="text-gray-500 mt-1">
            Manage ShopNest users
        </p>
    </div>

</div>


<div class="bg-white rounded-xl shadow overflow-hidden">

    <table class="w-full">

        <thead class="bg-gray-100">

            <tr>
                <th class="text-left px-6 py-4">
                    ID
                </th>

                <th class="text-left px-6 py-4">
                    Name
                </th>

                <th class="text-left px-6 py-4">
                    Email
                </th>

                <th class="text-left px-6 py-4">
                    Role
                </th>

                <th class="text-left px-6 py-4">
                    Created
                </th>
                <th class="text-left px-6 py-4" colspan="2" align="center">
                    Action
                </th>
            </tr>

        </thead>


        <tbody>

            @foreach($users as $user)

                <tr class="border-t">

                    <td class="px-6 py-4">
                        {{ $user->id }}
                    </td>

                    <td class="px-6 py-4 font-medium">
                        {{ $user->name }}
                    </td>

                    <td class="px-6 py-4">
                        {{ $user->email }}
                    </td>

                    <td class="px-6 py-4">
                        {{ $user->role }}
                    </td>

                    <td class="px-6 py-4">
                        {{ $user->created_at->format('d M Y') }}
                    </td>

                    <td class="px-6 py-4">
                     <a href="/admin/users/{{$user->id}}" class="text-blue-600 hover:underline" >
                        View
                         </a>
                      </td>
                      <td class="px-6 py-4">
                     <a href="/admin/delete/{{$user->id}}" class="text-blue-600 hover:underline" >
                        Delete
                         </a>
                      </td>

                </tr>

            @endforeach

        </tbody>

    </table>

</div>
@if(session('success'))

    <div class="mb-6 bg-green-100 text-green-700 px-4 py-3 rounded-lg">
        {{ session('success') }}
    </div>

@endif

@if(session('error'))

    <div class="mb-6 bg-red-100 text-red-700 px-4 py-3 rounded-lg">
        {{ session('error') }}
    </div>

@endif

@endsection