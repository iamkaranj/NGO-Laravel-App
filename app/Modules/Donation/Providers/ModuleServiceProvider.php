<?php

namespace App\Modules\Donation\Providers;

use Caffeinated\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(module_path('donation', 'Resources/Lang', 'app'), 'donation');
        $this->loadViewsFrom(module_path('donation', 'Resources/Views', 'app'), 'donation');
        $this->loadMigrationsFrom(module_path('donation', 'Database/Migrations', 'app'));
        if(!$this->app->configurationIsCached()) {
            $this->loadConfigsFrom(module_path('donation', 'Config', 'app'));
        }
        $this->loadFactoriesFrom(module_path('donation', 'Database/Factories', 'app'));
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
