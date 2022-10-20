<?php

use Illuminate\Support\Facades\Route;

/**
 * @see \App\Http\Controllers\Admin\CustomerController::index()
 */
Route::get('customers', 'CustomerController@index')
    ->name('customer.index');

/**
 * @see \App\Http\Controllers\Admin\CustomerController::edit()
 */
Route::get('customers/{id}/edit', 'CustomerController@edit')
    ->name('customer.edit');

/**
 * @see \App\Http\Controllers\Admin\CustomerController::update()
 */
Route::put('customers/{id}', 'CustomerController@update')
    ->name('customer.update');

/**
 * @see \App\Http\Controllers\Admin\CustomerController::showFormChangePassword()
 */
Route::get('customers/{id}/change-password', 'CustomerController@showFormChangePassword')
    ->name('customer.show_form_change_password');

/**
 * @see \App\Http\Controllers\Admin\CustomerController::changePassword()
 */
Route::post('customers/{id}/change-password', 'CustomerController@changePassword')
    ->name('customer.change_password');
