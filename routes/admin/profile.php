<?php

use Illuminate\Support\Facades\Route;

/**
 * @see \App\Http\Controllers\Admin\ProfileController::profile()
 */
Route::get('profile', 'ProfileController@index')
    ->name('profile.index');

/**
 * @see \App\Http\Controllers\Admin\ProfileController::update()
 */
Route::put('profile', 'ProfileController@update')
    ->name('profile.update');

/**
 * @see \App\Http\Controllers\Admin\ProfileController::showFormChangePassword();
 */
Route::get('profile/change-password', 'ProfileController@showFormChangePassword')
    ->name('profile.show_form_change_password');

/**
 * @see \App\Http\Controllers\Admin\ProfileController::changePassword();
 */
Route::put('profile/change-password', 'ProfileController@changePassword')
    ->name('profile.change_password');
