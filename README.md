# Checkpoint - Filament PHP Plugin

This Filament PHP plugin improves login security by letting you customize rate-limiting settings like duration and the number of attempts. It also notifies admins about suspicious activity

## Installation

You can install the package via composer:

```bash
composer require askerakbar/checkpoint -W
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Spatie\LaravelSettings\LaravelSettingsServiceProvider" --tag="migrations"
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