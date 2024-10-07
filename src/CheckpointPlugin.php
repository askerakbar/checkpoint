<?php

namespace AskerAkbar\Checkpoint;

use AskerAkbar\Checkpoint\Pages\Auth\Login;
use AskerAkbar\Checkpoint\Pages\CheckpointSettingsPage;
use Filament\Contracts\Plugin;
use Filament\Panel;

class CheckpointPlugin implements Plugin
{
    private $login = Login::class;

    private array $pages = [
        CheckpointSettingsPage::class,
    ];

    protected ?string $panelName = null;

    public static function make(): static
    {
        return app(static::class);
    }

    public function getId(): string
    {
        return 'checkpoint';
    }

    public function register(Panel $panel): void
    {
        $panel->pages($this->pages)->login($this->login);
    }

    public function boot(Panel $panel): void {}

    public static function get(): Plugin
    {
        return filament(app(static::class)->getId());
    }


}
