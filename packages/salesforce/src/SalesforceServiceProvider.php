<?php

namespace Salesforce;

use Code\Salesforce\Account;
use Code\Salesforce\Lead;
use Illuminate\Support\ServiceProvider;

class SalesforceServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind('Salesforce\Account', function ($app, $jsonData) {
            return new Account($jsonData);
        });

        $this->app->bind('Salesforce\Lead', function ($app, $jsonData) {
            return new Lead($jsonData);
        });

    }

}