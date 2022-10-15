<?php

use Illuminate\Support\Facades\Route;
use App\Helpers\PermissionConstant;

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

/**
 * @see \App\Http\Controllers\AuthController::showFormLogin()
 */
Route::get('login', 'AuthController@showFormLogin')->name('auth.show-form-login');

/**
 * @see \App\Http\Controllers\AuthController::login()
 */
Route::post('login', 'AuthController@login')->name('auth.login');

/**
 * @see \App\Http\Controllers\AuthController::logout()
 */
Route::post('logout', 'AuthController@logout')->name('auth.logout');

/**
 * @see \App\Http\Controllers\AuthController::showFormRegister()
 */
Route::get('register', 'AuthController@showFormRegister')->name('auth.show-form-register');

/**
 * @see \App\Http\Controllers\AuthController::register()
 */
Route::post('register', 'AuthController@register')->name('auth.register');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::group(['middleware' => ['permission:' . PermissionConstant::PERMISSION_VIEW_BACKEND]], function () {
        require __DIR__ . '/admin/dashboard.php';
        require __DIR__ . '/admin/user.php';
        require __DIR__ . '/admin/profile.php';
        require __DIR__ . '/admin/category.php';
        require __DIR__ . '/admin/product.php';
        require __DIR__ . '/admin/product-item.php';
        require __DIR__ . '/admin/project.php';
        require __DIR__ . '/admin/customer.php';
        require __DIR__ . '/admin/cart.php';
    });
});

Route::group(['namespace' => 'Customer', 'as' => 'customer.'], function () {
    Route::get('/', [\App\Http\Controllers\Customer\HomeController::class, 'index'])->name('home.index');

    Route::get('/gioi-thieu', [\App\Http\Controllers\Customer\IntroduceController::class, 'index'])->name('intro.index');

    Route::get('/san-pham', [\App\Http\Controllers\Customer\ProductController::class, 'index'])->name('product.index');
    Route::get('/san-pham/{slug}', [\App\Http\Controllers\Customer\ProductController::class, 'detail'])->name('product.detail');

    Route::get('/cong-trinh', [\App\Http\Controllers\Customer\ProjectController::class, 'index'])->name('project.index');
    Route::get('/cong-trinh/{slug}', [\App\Http\Controllers\Customer\ProjectController::class, 'detail'])->name('project.detail');

    Route::get('/lien-he', [\App\Http\Controllers\Customer\ContactController::class, 'index'])->name('contact.index');
    Route::post('/lien-he', [\App\Http\Controllers\Customer\ContactController::class, 'store'])->name('contact.create');

    Route::get('/gio-hang', [\App\Http\Controllers\Customer\CartController::class, 'index'])->name('cart.index');

    Route::get('/dang-nhap', [\App\Http\Controllers\Customer\AuthController::class, 'formLogin'])->name('formLogin');

    Route::post('/dang-nhap', [\App\Http\Controllers\Customer\AuthController::class, 'login'])->name('login');

    Route::post('/dang-ky', [\App\Http\Controllers\Customer\AuthController::class, 'register'])->name('register');

    Route::get('/cua-nhom-roto', [\App\Http\Controllers\Customer\ProductRotoController::class, 'cuaNhomRoto'])->name('product.cuanhomroto');

    Route::get('/phu-kien-roto', [\App\Http\Controllers\Customer\ProductRotoController::class, 'phuKienRoto'])->name('product.phukienroto');

    Route::get('/thanh-toan', [\App\Http\Controllers\Customer\PaymentController::class, 'index'])->name('payment');
    Route::get('/thanh-toan/thanh-cong', [\App\Http\Controllers\Customer\PaymentController::class, 'success'])->name('payment.success');
});
