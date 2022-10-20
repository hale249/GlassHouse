<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\ProjectCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $projectCategories = ProjectCategory::query()->get(['id', 'name']);

        // Sharing is caring
        View::share('projectCategories',$projectCategories);

        $productCategory = Category::query()->get(['id', 'name']);

        // Sharing is caring
        View::share('prọductCategories',$productCategory);
    }
}
