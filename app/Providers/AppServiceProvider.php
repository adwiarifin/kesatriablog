<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.sidebar', function($view) {
            $view->with('archives', \App\Post::archives());
        });

        view()->composer('sparkling.sidebar', function($view) {
            $view->with('recents', \App\Post::latest()->limit(3)->get()); 
            $view->with('archives', \App\Post::archives()); 
            $view->with('tags', \App\Tag::all());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
