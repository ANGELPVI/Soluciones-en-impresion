<?php

namespace App\Providers;

use App\Models\carrito;
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
        View::composer('layouts.app', function ($view) {
            $query = carrito::query();

            if (auth()->check()) {
                $query->where('userId', auth()->id());
            } else {
                $query
                    ->whereNull('userId')
                    ->where('session_id', session()->getId());
            }

            $view->with('cartItemCount', $query->sum('cantidad'));
        });
    }
}
