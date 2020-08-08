<?php

namespace ContactUs;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind("ContactUs", function () {
            return new Contact;
        });

        $this->mergeConfigFrom(__DIR__ . "/config/ContactUs.php", "ContactUs");

        $this->app->register(\Caffeinated\Flash\FlashServiceProvider::class);

        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias("Flash", \Caffeinated\Flash\Facades\Flash::class);
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . "/routes/main.php");
        
        $this->loadViewsFrom(__DIR__ . "/views", "ContactUs");

        $this->publishes([
            __DIR__ . "/views" => resource_path("views/contactUsPackage"),
            __DIR__ . "/migrations" => database_path("migrations")
        ], "Contact Us Package");

        $this->publishes([
            __DIR__ . "/config" => config_path()
        ], "Contact Us Config");
    }
}