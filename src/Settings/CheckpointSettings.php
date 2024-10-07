<?php

namespace AskerAkbar\Checkpoint\Settings;

use Spatie\LaravelSettings\Settings;

class CheckpointSettings extends Settings
{
    public int $max_attempts = 3;

    public int $lockout_duration = 120;

    public bool $notify_on_lockout = false;

    public ?string $notification_emails = '';

    public int $notify_after_lockouts = 5;

    public int $notification_time_frame = 300;

    public static function group(): string
    {
        return 'checkpoint';
    }
}
