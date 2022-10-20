<?php

use App\Helpers\PermissionConstant;
use Illuminate\Support\Facades\Route;

/**
 * @see \App\Http\Controllers\Admin\ProductController::index()
 */
Route::get('products', 'ProductController@index')
    ->name('product.index');

/**
 * @see \App\Http\Controllers\Admin\ProductController::create()
 */
Route::get('products/create', 'ProductController@create')
    ->name('product.create');

/**
 * @see \App\Http\Controllers\Admin\ProductController::store()
 */
Route::post('products', 'ProductController@store')
    ->name('product.store');

/**
 * @see \App\Http\Controllers\Admin\ProductController::edit()
 */
Route::get('products/{id}/edit', 'ProductController@edit')
    ->name('product.edit');

/**
 * @see \App\Http\Controllers\Admin\ProductController::update()
 */
Route::put('products/{id}', 'ProductController@update')
    ->name('product.update');

/**
 * @see \App\Http\Controllers\Admin\ProductController::show()
 */
Route::get('products/{id}', 'ProductController@show')
    ->name('product.show');

/**
 * @see \App\Http\Controllers\Admin\ProductController::destroy()
 */
Route::delete('products/{id}', 'ProductController@destroy')
    ->name('product.destroy');
