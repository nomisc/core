<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Package Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your package settings. For example, if your
    | package has a configuration file, you might specify its name here.
    |
    */

    'salesforce' => [
        // Configuration options for the package, if any
    ],

    /*
    |--------------------------------------------------------------------------
    | Package Service Providers
    |--------------------------------------------------------------------------
    |
    | All service providers for your package should be listed here. These
    | providers will be automatically registered when the package is
    | installed in a Laravel application.
    |
    */

    'providers' => [
        Salesforce\SalesforceServiceProvider::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Package Aliases
    |--------------------------------------------------------------------------
    |
    | Here, you can define aliases or shortcuts for your package classes. These
    | aliases will be automatically registered when the package is installed
    | in a Laravel application.
    |
    */

    'aliases' => [
        'Salesforce' => Salesforce\RandomStringGenerator::class,
    ],

];