<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');



Route::get('/login', [AuthController::class, 'showSignInPage'])->name('loginpage');
Route::post('/login', [AuthController::class, 'signIn'])->name('login');
Route::get('/logout', [AuthController::class, 'signOut'])->name('logout');

Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('welcome_dashboard');
    })->name('dashboard.index')->middleware('adminlogin');

    Route::middleware('adminlogin')->prefix('user')->group(function () {
        // Matches The "/admin/users" URL
        Route::get('', [UserController::class, 'index'])->name('user.index');
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/create', [UserController::class, 'store'])->name('user.store');
        Route::put('/{user}', [UserController::class, 'update'])->name('user.update');
        Route::delete('/{user}', [UserController::class, 'update'])->name('user.destroy');
        Route::get('/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
    });

    Route::middleware('adminlogin')->prefix('category')->group(function () {
        // Matches The "/admin/users" URL
        Route::get('', [CategoryController::class, 'index'])->name('category.index');
        // Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
        Route::put('/{user}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('/{user}', [CategoryController::class, 'update'])->name('category.destroy');
        Route::get('/{user}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    });

    Route::middleware('adminlogin')->prefix('product')->group(function () {
        // Matches The "/admin/users" URL
        Route::get('', [ProductController::class, 'index'])->name('product.index');
        Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/create', [ProductController::class, 'store'])->name('product.store');
        Route::put('/{product}', [ProductController::class, 'update'])->name('product.update');
        Route::delete('/{product}', [ProductController::class, 'update'])->name('product.destroy');
        Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    });

    Route::middleware('adminlogin')->prefix('contract')->group(function () {
        // Matches The "/admin/users" URL
        Route::get('', [ConsultationController::class, 'index'])->name('consultation.index');
        Route::get('/create', [ConsultationController::class, 'create'])->name('consultation.create');
        Route::post('/create', [ConsultationController::class, 'store'])->name('consultation.store');
        Route::put('/{Consultation}', [ConsultationController::class, 'update'])->name('consultation.update');
        Route::delete('/{Consultation}', [ConsultationController::class, 'update'])->name('consultation.destroy');
        Route::get('/{Consultation}/edit', [ConsultationController::class, 'edit'])->name('consultation.edit');
    });

    Route::middleware('adminlogin')->prefix('contract')->group(function () {
        // Matches The "/admin/users" URL
        Route::get('', [Contract::class, 'index'])->name('contract.index');
        Route::get('/create', [Contract::class, 'create'])->name('contract.create');
        Route::post('/create', [Contract::class, 'store'])->name('contract.store');
        Route::put('/{contract}', [Contract::class, 'update'])->name('contract.update');
        Route::delete('/{contract}', [Contract::class, 'update'])->name('contract.destroy');
        Route::get('/{contract}/edit', [Contract::class, 'edit'])->name('contract.edit');
    });
});
