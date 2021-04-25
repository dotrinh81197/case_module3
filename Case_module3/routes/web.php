<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContractController;
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
        Route::get('/list', [CategoryController::class, 'getCategoryList'])->name('category.getcategorylist');
        Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
        Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
        Route::get('/{category}/edit', [CategoryController::class, 'editForm'])->name('category.editform');
        Route::put('/{category}/edit-form', [CategoryController::class, 'update'])->name('category.update');
    });

    Route::middleware('adminlogin')->prefix('product')->group(function () {
        // Matches The "/admin/users" URL
        Route::get('', [ProductController::class, 'index'])->name('product.index');
        Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/create', [ProductController::class, 'store'])->name('product.store');
        Route::delete('/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
        Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
        Route::put('/{product}/edit', [ProductController::class, 'update'])->name('product.update');
        Route::get('/{product}/showbenefit', [ProductController::class, 'getProductBenefit'])->name('product.showbenefit');
        Route::get('/{product}/showillustration', [ProductController::class, 'getProductIllustration'])->name('product.showillustration');
    });

    Route::middleware('adminlogin')->prefix('consultation')->group(function () {
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
        Route::get('', [ContractController::class, 'index'])->name('contract.index');
        Route::get('/create', [ContractController::class, 'create'])->name('contract.create');
        Route::post('/create', [ContractController::class, 'store'])->name('contract.store');
        Route::put('/{contract}', [ContractController::class, 'update'])->name('contract.update');
        Route::delete('/{contract}', [ContractController::class, 'update'])->name('contract.destroy');
        Route::get('/{contract}/edit', [ContractController::class, 'edit'])->name('contract.edit');
    });
});
