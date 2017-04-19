<?php

namespace WTG\Address\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Address service provider
 *
 * @package     WTG\Address
 * @subpackage  Providers
 * @author      Thomas Wiringa <thomas.wiringa@gmail.com>
 */
class AddressServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../Migrations');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
