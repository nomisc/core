<?php

namespace Salesforce;

use Illuminate\Support\ServiceProvider;

class SalesforceServiceProvider extends ServiceProvider
{
    public function boot()
    {
     
    }

    public function register()
    {
     
    }

    public function provides()
    {
        // Indicate the service provided by this service provider
        return ['salesforce'];
    }
}