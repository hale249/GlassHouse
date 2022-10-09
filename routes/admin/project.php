<?php

use Illuminate\Support\Facades\Route;

Route::prefix('project_category')->group(function () {
    Route::get('', [Peje])
        ->name('profile.index');
});
