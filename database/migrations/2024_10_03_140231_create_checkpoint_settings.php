<?php

use Spatie\LaravelSettings\Migrations\SettingsBlueprint;
use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->inGroup('checkpoint', function (SettingsBlueprint $migrator) {
            $migrator->add('max_attempts', 3);
            $migrator->add('lockout_duration', 120);
            $migrator->add('notify_on_lockout', false);
            $migrator->add('notification_emails', '');
            $migrator->add('notify_after_lockouts', 5);
            $migrator->add('notification_time_frame', 300);
        });
    }

    public function down(): void
    {
        $this->migrator->inGroup('checkpoint', function (SettingsBlueprint $migrator) {
            $migrator->delete('max_attempts');
            $migrator->delete('lockout_duration');
            $migrator->delete('notify_on_lockout');
            $migrator->delete('notification_emails');
            $migrator->delete('notify_after_lockouts');
            $migrator->delete('notification_time_frame');
        });
    }
};
