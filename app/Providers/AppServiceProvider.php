<?php

namespace App\Providers;

use App\Models\ProjectCategory;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

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
        $proCategories = ProjectCategory::query()->get(['id', 'name']);

        // Sharing is caring
//        View::share('projectCategories',$proCategories);
    }
}
