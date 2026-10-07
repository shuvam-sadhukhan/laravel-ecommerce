<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AIController;




Route::get('/', function () {
    return view('login');
});



Route::get('/register',[AuthController::class,'showRegister']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login',[AuthController::class,'showLogin'])->name('login');
Route::post('/login',[AuthController::class,'login']);
Route::get('/logout',[AuthController::class,'logout']);

// users routes
Route::get('/dashboard',[AuthController::class,'dashboard'])->middleware('auth');
Route::get('/products', [ProductController::class, 'shop'])->middleware('auth');
Route::get('/products/category/{category}', [ProductController::class, 'category']) ->middleware('auth');
Route::get('/products/{product}', [ProductController::class, 'show'])->middleware('auth');

Route::post('/cart/add/{product}', [CartController::class, 'add'])->middleware('auth');
Route::get('/cart', [CartController::class, 'index'])->middleware('auth');
Route::post('/cart/increase/{product}', [CartController::class, 'increase']) ->middleware('auth');
Route::post('/cart/decrease/{product}', [CartController::class, 'decrease'])->middleware('auth');
Route::delete('/cart/remove/{product}', [CartController::class, 'remove'])->middleware('auth');
             





// admin routes
Route::get('/admin/dashboard',[AuthController::class,'adminDashboard'])->middleware(['auth', 'admin']);

Route::get('/admin/users', [UserController::class, 'index'])->middleware(['auth', 'admin']);
Route::get('/admin/users/{user}', [UserController::class, 'show'])->middleware(['auth', 'admin']);
Route::get('/admin/delete/{user}', [UserController::class, 'destroy'])->middleware(['auth', 'admin']);
   
Route::get('/admin/categories', [CategoryController::class, 'index'])->middleware(['auth', 'admin']);
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->middleware(['auth', 'admin']);
Route::post('/admin/categories', [CategoryController::class, 'store']) ->middleware(['auth', 'admin']);
Route::get('/admin/categories/{category}/edit', [CategoryController::class, 'edit'])->middleware(['auth', 'admin']);
Route::put('/admin/categories/{category}', [CategoryController::class, 'update'])->middleware(['auth', 'admin']);
Route::get('/admin/categories/{category}/delete', [CategoryController::class, 'delete'])->middleware(['auth', 'admin']);
 
Route::get('/admin/products', [ProductController::class, 'index'])->middleware(['auth', 'admin']);
Route::get('/admin/products/create', [ProductController::class, 'create'])->middleware(['auth', 'admin']);
Route::post('/admin/products', [ProductController::class, 'store'])->middleware(['auth', 'admin']);
Route::get('/admin/products/{product}/edit', [ProductController::class, 'edit'])->middleware(['auth', 'admin']);
Route::put('/admin/products/{product}', [ProductController::class, 'update'])->middleware(['auth', 'admin']);
Route::get('/admin/products/{product}/delete', [ProductController::class, 'delete'])->middleware(['auth', 'admin']);      
    
  // AI-route
  
  Route::get('/ask-ai', [AIController::class, 'index'])->middleware('auth');
  Route::post('/ask-ai', [AIController::class, 'askAI'])->middleware('auth');
      