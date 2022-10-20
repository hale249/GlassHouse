<?php

use App\Helpers\PermissionConstant;
use Illuminate\Support\Facades\Route;

/**
 * @see \App\Http\Controllers\Admin\CategoryController::index()
 */
Route::get('categories', 'CategoryController@index')
    ->name('category.index');

/**
 * @see \App\Http\Controllers\Admin\CategoryController::create()
 */
Route::get('categories/create', 'CategoryController@create')
    ->name('category.create');

/**
 * @see \App\Http\Controllers\Admin\CategoryController::store()
 */
Route::post('categories', 'CategoryController@store')
    ->name('category.store');

/**
 * @see \App\Http\Controllers\Admin\CategoryController::edit()
 */
Route::get('categories/{id}/edit', 'CategoryController@edit')
    ->name('category.edit');

/**
 * @see \App\Http\Controllers\Admin\CategoryController::update()
 */
Route::put('categories/{id}', 'CategoryController@update')
    ->name('category.update');

/**
 * @see \App\Http\Controllers\Admin\CategoryController::show()
 */
Route::get('categories/{id}', 'CategoryController@show')
    ->name('category.show');

/**
 * @see \App\Http\Controllers\Admin\CategoryController::destroy()
 */
Route::delete('categories/{id}', 'CategoryController@destroy')
    ->name('category.destroy');
