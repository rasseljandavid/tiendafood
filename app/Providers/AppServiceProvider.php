<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Order;

use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $neworders = Order::where('completed', 0)->count();
        View::share('neworders', $neworders);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       
    }
}
