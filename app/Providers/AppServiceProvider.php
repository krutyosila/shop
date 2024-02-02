<?php

namespace App\Providers;

use App\Modifiers\ShippingModifier;
use Illuminate\Support\ServiceProvider;
use Lunar\Base\ShippingModifiers;

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
    public function boot(ShippingModifiers $shippingModifiers)
    {
        if($this->app->environment('production')) {
            \URL::forceScheme('https');
        }
        $shippingModifiers->add(
            ShippingModifier::class
        );
    }
}
