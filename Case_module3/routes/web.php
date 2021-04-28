<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\HomeController;


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

//client products
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/product', [HomeController::class, 'getAllProduct'])->name('getAllProduct');
Route::get('/product/{product}', [HomeController::class, 'getProductById'])->name('getProductById');
Route::get('/product/category/{category}', [HomeController::class, 'getProductByCategory'])->name('getProductByCategory');

//client form customer tao cuoc tu van
Route::post('/', [ConsultationController::class, 'store'])->name('save_consultation');

// customer-login
Route::get('/userlogin', [HomeController::class, 'showLogin'])->name('userlogin');
Route::post('/userlogin', [HomeController::class, 'login'])->name('user.login');
Route::get('userlogout', [HomeController::class, 'logout'])->name('user.logout');

// admin login

Route::get('/login', [AdminController::class, 'showLogin'])->name('loginpage');
Route::post('/login', [AdminController::class, 'login'])->name('login');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

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
        Route::post('/create', [ContractController::class, 'storeProductMain'])->name('contract.storeProductMain');
        Route::post('/create', [ContractController::class, 'store'])->name('contract.store');
        Route::put('/{contract}', [ContractController::class, 'update'])->name('contract.update');
        Route::delete('/{contract}', [ContractController::class, 'update'])->name('contract.destroy');
        Route::get('/{contract}/edit', [ContractController::class, 'edit'])->name('contract.edit');
        Route::get('/list_product_sub', [ContractController::class, 'getProduct_subList'])->name('contract.productsub');
    });

    Route::middleware('adminlogin')->prefix('blog')->group(function () {
        // Matches The "/admin/users" URL
        Route::get('', [BlogController::class, 'index'])->name('blog.index');
        Route::get('/create/{Product_id}', [BlogController::class, 'create'])->name('blog.create');
        Route::post('/create/{Product_id}', [BlogController::class, 'store'])->name('blog.store');
        Route::delete('/{Blog}', [BlogController::class, 'destroy'])->name('blog.destroy');
        Route::get('/{Blog}/edit', [BlogController::class, 'edit'])->name('blog.edit');
        Route::put('/{Blog}/edit', [BlogController::class, 'update'])->name('blog.update');
    });


    Route::middleware('adminlogin')->prefix('consultation')->group(function () {
        // Matches The "/admin/users" URL
        Route::get('', [ConsultationController::class, 'index'])->name('consultation.index');
        Route::delete('/{consultation}', [ConsultationController::class, 'destroy'])->name('consultation.destroy');
        Route::get('/{consultation}/edit', [ConsultationController::class, 'edit'])->name('consultation.edit');
        Route::put('/{consultation}/edit', [ConsultationController::class, 'update'])->name('consultation.update');
    });
});
