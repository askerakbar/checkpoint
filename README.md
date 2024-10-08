<img src="https://raw.githubusercontent.com/askerakbar/checkpoint/main/demo/asker-akbar-checkpoint.jpg" width="100%"/>

# Checkpoint - A Filament PHP Plugin to enhance login Security with custom rate limiting, lockout and admin alerts

This Filament PHP plugin improves login security by letting you customize rate-limiting settings like duration and the number of attempts. It also notifies admins about suspicious activity

## Installation

You can install the package via composer:

```bash
composer require askerakbar/checkpoint -W
```

This plugin requires Spatie's Laravel Settings package. Before running the Checkpoint migrations, you must first publish and run the settings migrations.

To do this, use the following command:

```bash
php artisan vendor:publish --provider="Spatie\LaravelSettings\LaravelSettingsServiceProvider" --tag="migrations"
```
Once that's complete, you can proceed with publishing and running the Checkpoint migrations:

```bash
php artisan vendor:publish --tag="checkpoint-migrations"
php artisan migrate
```

Optionally, you can publish the language files with:

```bash
php artisan vendor:publish --tag="checkpoint-translations"
```

## Usage

You need to initialize the plugin in your Filament panel provider. You can do this by adding the `CheckpointPlugin` to the `plugins` method of your panel.

```php 
use Askar\Checkpoint\CheckpointPlugin;

public function plugins(): array
{
    return [
        //...other plugins
        CheckpointPlugin::make(),
    ];
}
```


## Contribute / Report a bug / Security Vulnerabilities
If you would like to contriubte, please feel free to submit pull requests or open issues.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
