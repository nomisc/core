<?php

namespace Salesforce;

use Code\Salesforce\RandomStringGenerator;
use Illuminate\Support\ServiceProvider;

class SalesforceServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->singleton(RandomStringGenerator::class, function ($app) {
            return new RandomStringGenerator();
        });
    }

}