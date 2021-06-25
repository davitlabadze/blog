<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;


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
        Paginator::useBootstrap();
        view()->share('recent_posts',\App\Models\Post::orderBy('id','desc')->limit(5)->get());
        view()->share('popular_posts',\App\Models\Post::orderBy('views','desc')->limit(5)->get());
    }
}
