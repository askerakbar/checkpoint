<?php

namespace AskerAkbar\Checkpoint;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CheckpointServiceProvider extends PackageServiceProvider
{
    public static string $name = 'checkpoint';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasMigration('2024_10_03_140231_create_checkpoint_settings')
            ->hasTranslations()
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->askToRunMigrations()
                    ->publishMigrations()
                    ->copyAndRegisterServiceProviderInApp()
                    ->askToStarRepoOnGitHub('askerakbar/checkpoint')
                    ->endWith(function (InstallCommand $command) {
                        $command->info('Have a great day!');
                    });
            });
    }

    public function packageBooted(): void
    {
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'checkpoint');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'checkpoint');
    }
}
