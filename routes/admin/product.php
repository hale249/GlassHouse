<?php

use App\Helpers\PermissionConstant;
use Illuminate\Support\Facades\Route;

/**
 * @see \App\Http\Controllers\Admin\ProductController::index()
 */
Route::get('products', 'ProductController@index')
    ->name('product.index')
    ->middleware('permission:' . PermissionConstant::PERMISSION_VIEW_LIST_PRODUCT . '|' . PermissionConstant::PERMISSION_VIEW_LIST_ALL_PRODUCT);

/**
 * @see \App\Http\Controllers\Admin\ProductController::create()
 */
Route::get('products/create', 'ProductController@create')
    ->name('product.create')
    ->middleware('permission:' . PermissionConstant::PERMISSION_ADD_PRODUCT);

/**
 * @see \App\Http\Controllers\Admin\ProductController::store()
 */
Route::post('products', 'ProductController@store')
    ->name('product.store')
    ->middleware('permission:' . PermissionConstant::PERMISSION_ADD_PRODUCT);

/**
 * @see \App\Http\Controllers\Admin\ProductController::edit()
 */
Route::get('products/{id}/edit', 'ProductController@edit')
    ->name('product.edit')
    ->middleware('permission:' . PermissionConstant::PERMISSION_UPDATE_PRODUCT . '|' . PermissionConstant::PERMISSION_UPDATE_ALL_PRODUCT);

/**
 * @see \App\Http\Controllers\Admin\ProductController::update()
 */
Route::put('products/{id}', 'ProductController@update')
    ->name('product.update')
    ->middleware('permission:' . PermissionConstant::PERMISSION_UPDATE_PRODUCT . '|' . PermissionConstant::PERMISSION_UPDATE_ALL_PRODUCT);

/**
 * @see \App\Http\Controllers\Admin\ProductController::show()
 */
Route::get('products/{id}', 'ProductController@show')
    ->name('product.show')
    ->middleware('permission:' . PermissionConstant::PERMISSION_VIEW_LIST_PRODUCT . '|' . PermissionConstant::PERMISSION_VIEW_LIST_ALL_PRODUCT);

/**
 * @see \App\Http\Controllers\Admin\ProductController::destroy()
 */
Route::delete('products/{id}', 'ProductController@destroy')
    ->name('product.destroy')
    ->middleware('permission:' . PermissionConstant::PERMISSION_DELETE_PRODUCT . '|' . PermissionConstant::PERMISSION_DELETE_ALL_PRODUCT);
