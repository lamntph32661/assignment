<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ComentController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\CommentController;
use App\Http\Controllers\Client\HomeController as ClientHomeController;
use App\Http\Controllers\Client\OrderController;
use App\Http\Controllers\Client\ProductController as ClientProductController;
use App\Http\Controllers\Client\UserController as ClientUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\Client\UserController;
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

Route::group(['middleware'=>'checkLogin'],function ()  {
    Route::post('add-to-cart', [CartController::class, 'addToCart'])->name('addToCart');
Route::post('update-to-cart', [CartController::class, 'updateToCart'])->name('updateToCart');
Route::get('cart', [CartController::class, 'list'])->name('ViewCart');
Route::get('delete-to-cart/{cart_id}', [CartController::class, 'deleteToCart'])->name('DeleteOneCart');
Route::get('delete-all-cart', [CartController::class, 'deleteAllCart'])->name('DeleteAllCart');
Route::post('comment', [CommentController::class, 'postComment'])->name('Comment');
Route::get('check-out', [CartController::class, 'checkOut'])->name('Checkout');
Route::get('vnpay_return', [CartController::class, 'vnp_ReturnUrl']);
Route::post('check-out', [CartController::class, 'checkOutPost'])->name('CheckOut');
Route::get('my-account', [ClientUserController::class, 'myAccount'])->name('MyAccount');
Route::get('my-account', [ClientUserController::class, 'myAccount'])->name('MyAccount');
Route::post('change-info/{id}', [ClientUserController::class, 'changeInfo'])->name('ChangeInfo');
Route::get('detail-order/{id}', [OrderController::class, 'detailOrder'])->name('DetailOrder');
Route::get('cancelled-order/{id}', [OrderController::class, 'cancelledOrder'])->name('CancelledOrder');
Route::get('received-order/{id}', [OrderController::class, 'receivedOrder'])->name('ReceivedOrder');
});
Route::get('/', [ClientHomeController::class, 'home'])->name('home');
Route::get('shop/', [ClientProductController::class, 'list'])->name('List');
Route::get('shop/detail/{id}', [ClientProductController::class, 'viewDetail'])->name('Detail');

Route::get('login', [UserController::class, 'login'])->name('Login');
Route::post('login', [UserController::class, 'checkUserLogin'])->name('Login');

Route::get('log-out', [UserController::class, 'logout'])->name('Logout');

Route::get('test-email', [UserController::class, 'testEmail']);

Route::get('forgot-password', [UserController::class, 'forGot'])->name('Forgot');
Route::post('forgot-password', [UserController::class, 'checkForGot'])->name('Forgot');

Route::get('reset-password/{token}', [UserController::class, 'reset_password'])->name('ResetPassword');
Route::post('reset-password/{token}', [UserController::class, 'change_password'])->name('ResetPasswords');


Route::post('sign-up', [UserController::class, 'checkUserSignup'])->name('Signup');

Route::group(['prefix' => 'admin', 'as' => 'admin.','middleware'=>'checkRole'], function () {
    Route::get('login', [HomeController::class, 'login'])->name('login');
    Route::get('/', [HomeController::class, 'homeAdmin'])->name('home');

    Route::group(['prefix' => 'category', 'as' => 'Category.'], function () {
        Route::get('list', [CategoryController::class, 'list'])->name('listCategory');
        Route::get('add', [CategoryController::class, 'add'])->name('addCategory');
        Route::post('add', [CategoryController::class, 'addCate'])->name('addCategory');
        Route::get('update/{id}', [CategoryController::class, 'updateCategory'])->name('updateCategory');
        Route::post('update/{id}', [CategoryController::class, 'updateCategoryPost'])->name('updateCategory');
        Route::get('delete/{id}', [CategoryController::class, 'deleteCategory'])->name('deleteCategory');
    });

    Route::group(['prefix' => 'product', 'as' => 'Product.'], function () {
        Route::get('list', [ProductController::class, 'list'])->name('listProduct');
        Route::get('add', [ProductController::class, 'add'])->name('addProduct');
        Route::post('add', [ProductController::class, 'addPro'])->name('addProduct');
        Route::get('update/{id}', [ProductController::class, 'updateProduct'])->name('updateProduct');
        Route::post('update/{id}', [ProductController::class, 'updateProductPost'])->name('updateProduct');
        Route::get('delete/{id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
    });
    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
        Route::get('list', [AdminUserController::class, 'list'])->name('listUser');
        Route::get('add', [AdminUserController::class, 'add'])->name('addUser');
        Route::get('update/1', [AdminUserController::class, 'updateUser'])->name('updateUser');
        Route::get('delete/{id}', [AdminUserController::class, 'deleteUser'])->name('deleteUser');
    });
    Route::group(['prefix' => 'comment', 'as' => 'comment.'], function () {
        Route::get('list', [ComentController::class, 'list'])->name('list');
        // Route::get('add', [AdminUserController::class, 'add'])->name('addUser');
        Route::get('detail/{id}', [ComentController::class, 'detail'])->name('detail');
        Route::get('delete/{id}', [ComentController::class, 'delete'])->name('delete');
    });
    Route::group(['prefix' => 'order', 'as' => 'order.'], function () {
        Route::get('list', [AdminOrderController::class, 'list'])->name('list');
        Route::get('detail/{id}', [AdminOrderController::class, 'detail'])->name('Detail');
        Route::post('update-status/{id}', [AdminOrderController::class, 'updateStatus'])->name('UpdateStatus');
    });
    // Route::get('add-users', [CategoryController::class, 'addUsers'])->name('addUsers');
    // Route::post('add-users', [CategoryController::class, 'addPostUsers'])->name('addPostUsers');
    // Route::get('delete-users/{idUser}', [CategoryController::class, 'deleteUsers'])->name('deleteUsers');
    // Route::get('update-users/{idUser}', [CategoryController::class, 'updateUsers'])->name('updateUsers');
    // Route::post('update-users/{idUser}', [CategoryController::class, 'updatePostUsers'])->name('updatePostUsers');
});
