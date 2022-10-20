<?php

use App\Helpers\PermissionConstant;
use Illuminate\Support\Facades\Route;

/**
 * @see \App\Http\Controllers\Admin\UserController::index()
 */
Route::get('users', 'UserController@index')
    ->name('users.index');

/**
 * @see \App\Http\Controllers\Admin\UserController::edit()
 */
Route::get('users/{id}/edit', 'UserController@edit')
    ->name('users.edit');

/**
 * @see \App\Http\Controllers\Admin\UserController::create
 */
Route::get('users/create', 'UserController@create')
    ->name('users.create');

/**
 * @see \App\Http\Controllers\Admin\UserController::store()
 */
Route::post('users', 'UserController@store')
    ->name('users.store');

/**
 * @see \App\Http\Controllers\Admin\UserController::update()
 */
Route::put('users/{id}', 'UserController@update')
    ->name('users.update');

/**
 * @see \App\Http\Controllers\Admin\UserController::destroy()
 */
Route::delete('users/{id}', 'UserController@destroy')
    ->name('users.destroy');

/**
 * @see \App\Http\Controllers\Admin\UserController::showFormChangePassword()
 */
Route::get('users/{id}/change-password', 'UserController@showFormChangePassword')
    ->name('users.show_form_change_password');

/**
 * @see \App\Http\Controllers\Admin\UserController::changePassword()
 */
Route::post('users/{id}/change-password', 'UserController@changePassword')
    ->name('users.change_password');
