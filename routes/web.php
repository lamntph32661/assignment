<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\HomeController as ClientHomeController;
use App\Http\Controllers\Client\ProductController as ClientProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ClientHomeController::class, 'home'])->name('home');
Route::get('shop', [ClientProductController::class, 'list'])->name('List');
Route::get('shop/detail/{id}', [ClientProductController::class, 'viewDetail'])->name('Detail');
Route::post('add-to-cart', [CartController::class, 'addToCart'])->name('addToCart');

Route::get('cart', [CartController::class, 'list'])->name('ViewCart');
Route::get('delete-to-cart/{cart_id}', [CartController::class, 'deleteToCart'])->name('DeleteOneCart');
Route::get('seat-plan', [MovieController::class, 'seatPlan'])->name('seatPlan');
Route::get('check-out', [MovieController::class, 'checkOut'])->name('Checkout');

Route::get('login', [UserController::class, 'login'])->name('Login');
Route::post('login', [UserController::class, 'checkUserLogin'])->name('Login');

Route::get('log-out', [UserController::class, 'logout'])->name('Logout');

Route::get('test-email', [UserController::class, 'testEmail']);

Route::get('forgot-password', [UserController::class, 'forGot'])->name('Forgot');
Route::post('forgot-password', [UserController::class, 'checkForGot'])->name('Forgot');

Route::get('reset-password/{token}', [UserController::class, 'reset_password'])->name('ResetPassword');
Route::post('reset-password/{token}', [UserController::class, 'change_password'])->name('ResetPasswords');


Route::post('sign-up', [UserController::class, 'checkUserSignup'])->name('Signup');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/', [HomeController::class, 'homeAdmin'])->name('home');

    Route::group(['prefix' => 'Category', 'as' => 'Category.'], function () {
        Route::get('list', [CategoryController::class, 'list'])->name('listCategory');
        Route::get('add', [CategoryController::class, 'add'])->name('addCategory');
        Route::post('add', [CategoryController::class, 'addCate'])->name('addCategory');
        Route::get('update/{id}', [CategoryController::class, 'updateCategory'])->name('updateCategory');
        Route::post('update/{id}', [CategoryController::class, 'updateCategoryPost'])->name('updateCategory');
        Route::get('delete/{id}', [CategoryController::class, 'deleteCategory'])->name('deleteCategory');
    });

    Route::group(['prefix' => 'Product', 'as' => 'Product.'], function () {
        Route::get('list', [ProductController::class, 'list'])->name('listProduct');
        Route::get('add', [ProductController::class, 'add'])->name('addProduct');
        Route::post('add', [ProductController::class, 'addPro'])->name('addProduct');
        Route::get('update/{id}', [ProductController::class, 'updateProduct'])->name('updateProduct');
        Route::post('update/{id}', [ProductController::class, 'updateProductPost'])->name('updateProduct');
        Route::get('delete/{id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
    });
    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
        Route::get('list', [UserController::class, 'list'])->name('listUser');
        Route::get('add', [UserController::class, 'add'])->name('addUser');
        Route::get('update/1', [UserController::class, 'updateUser'])->name('updateUser');
        Route::get('delete/1', [UserController::class, 'deleteUser'])->name('deleteUser');
    });
    Route::get('add-users', [CategoryController::class, 'addUsers'])->name('addUsers');
    Route::post('add-users', [CategoryController::class, 'addPostUsers'])->name('addPostUsers');
    Route::get('delete-users/{idUser}', [CategoryController::class, 'deleteUsers'])->name('deleteUsers');
    Route::get('update-users/{idUser}', [CategoryController::class, 'updateUsers'])->name('updateUsers');
    Route::post('update-users/{idUser}', [CategoryController::class, 'updatePostUsers'])->name('updatePostUsers');
});
