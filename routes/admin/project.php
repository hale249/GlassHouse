<?php

use Illuminate\Support\Facades\Route;

Route::prefix('project-category')->group(function () {
    Route::get('', [\App\Http\Controllers\Admin\ProjectCategoryController::class, 'index'])
        ->name('project_category.index');

    Route::get('create', [\App\Http\Controllers\Admin\ProjectCategoryController::class, 'create'])
        ->name('project_category.create');

    Route::post('', [\App\Http\Controllers\Admin\ProjectCategoryController::class, 'store'])
        ->name('project_category.store');

    Route::get('{id}', [\App\Http\Controllers\Admin\ProjectCategoryController::class, 'show'])
        ->name('project_category.show');

    Route::get('{id}/edit', [\App\Http\Controllers\Admin\ProjectCategoryController::class, 'edit'])
        ->name('project_category.edit');

    Route::put('{id}', [\App\Http\Controllers\Admin\ProjectCategoryController::class, 'update'])
        ->name('project_category.update');

    Route::delete('{id}', [\App\Http\Controllers\Admin\ProjectCategoryController::class, 'destroy'])
        ->name('project_category.destroy');
});

Route::prefix('project')->group(function () {
    Route::get('', [\App\Http\Controllers\Admin\ProjectController::class, 'index'])
        ->name('project.index');

    Route::get('create', [\App\Http\Controllers\Admin\ProjectController::class, 'create'])
        ->name('project.create');

    Route::post('', [\App\Http\Controllers\Admin\ProjectController::class, 'store'])
        ->name('project.store');

    Route::get('{id}', [\App\Http\Controllers\Admin\ProjectController::class, 'show'])
        ->name('project.show');

    Route::get('{id}/edit', [\App\Http\Controllers\Admin\ProjectController::class, 'edit'])
        ->name('project.edit');

    Route::put('{id}', [\App\Http\Controllers\Admin\ProjectController::class, 'update'])
        ->name('project.update');

    Route::delete('{id}', [\App\Http\Controllers\Admin\ProjectController::class, 'destroy'])
        ->name('project.destroy');
});

