<?php

namespace Codepoint\ZabbixApi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Codepoint\ZabbixApi\Commands\ZabbixApiCommand;

class ZabbixApiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-zabbix-api')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-zabbix-api_table')
            ->hasCommand(ZabbixApiCommand::class);
    }
}
