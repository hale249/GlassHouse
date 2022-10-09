<?php

use Illuminate\Support\Facades\Route;

/**
 * @see \App\Http\Controllers\Admin\CartController::index()
 */
Route::get('cart', 'CartController@index')
    ->name('cart.index');

/**
 * @see \App\Http\Controllers\Admin\CartController::show()
 */
Route::get('cart/{id}', 'CartController@show')
    ->name('cart.show');

/**
 * @see \App\Http\Controllers\Admin\CartController::update()
 */
Route::put('cart', 'CartController@update')
    ->name('cart.update');
