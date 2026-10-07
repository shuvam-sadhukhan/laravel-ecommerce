<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;

class AuthController extends Controller
{
    public function showRegister(){
        return view('register');
    }

    public function register(Request $request){
         $request->validate([ 
            'name' => 'required|string|max:255', 
            'email' => 'required|email|unique:users,email', 
            'password' => 'required|min:8|confirmed',
            'password_confirmation'=>'required'
             ],
             [
                'email.unique'=>'this email is already register'
             ]);

             User::create([ 
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password), 
                ]);

    return redirect('/login')->with('success', 'Account created successfully. Please login.');

    }

    public function showLogin(){
        return view('login');
    }

     public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            $user = Auth::user();

        if ($user->role === 'admin') {
            return redirect('/admin/dashboard')->with('success','Login Successful');
        }

            return redirect('/dashboard')->with('success','Login Successful');
        }

        return back()
            ->withErrors([
                'email' => 'Invalid email or password.',
            ])->withInput();
    }


    public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();
    

    return redirect('/login')->with('success', 'You have been logged out successfully.');
}

    public function dashboard(){
        return view('dashboard');
    }

    public function adminDashboard(){
        
    
        $totalUsers = User::count();
        $totalCategories=Category::count();
         $totalProducts=Product::count();

        return view('admin.adminDashboard', compact('totalUsers','totalCategories','totalProducts'));
    }
        
}
