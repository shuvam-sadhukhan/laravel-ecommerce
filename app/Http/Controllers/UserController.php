<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // showAllUsers
     public function index()
    {
        $users = User::all();

        return view('admin.users', compact('users'));
    }
 
    // showParticularUser
    public function show(User $user)
{
    return view('admin.showUser', compact('user'));
}

    //deleteParticularUser
    public function destroy(User $user)
{

    if ($user->id === auth()->user()->id) {
        return redirect('/admin/users')->with('error', 'You cannot delete your own account.');
    }
    $user->delete();

    return redirect('/admin/users')->with('success', 'User deleted successfully.');
}
}
