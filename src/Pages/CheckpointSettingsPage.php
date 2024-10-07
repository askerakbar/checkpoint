<?php

namespace AskerAkbar\Checkpoint\Pages;

use AskerAkbar\Checkpoint\Settings\CheckpointSettings;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Pages\SettingsPage;

class CheckpointSettingsPage extends SettingsPage
{
    protected static ?string $slug = 'checkpoint/settings';

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-horizontal';

    protected static string $settings = CheckpointSettings::class;

    public static function getNavigationLabel(): string
    {
        return __('checkpoint::checkpoint.group');
    }

    public function getTitle(): string
    {
        return __('checkpoint::checkpoint.title');
    }

    public function getSubheading(): ?string
    {
        return __('checkpoint::checkpoint.settings.checkpoint.description');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('checkpoint::checkpoint.title');
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()
                    ->columns([
                        'default' => 1,
                    ])
                    ->columnSpan(2)
                    ->schema([
                        TextInput::make('max_attempts')
                            ->required()
                            ->integer()
                            ->minValue(1)
                            ->label(__('checkpoint::checkpoint.settings.checkpoint.form.max_attempts.label'))
                            ->helperText(__('checkpoint::checkpoint.settings.checkpoint.form.max_attempts.helper_text'))
                            ->suffix(__('checkpoint::checkpoint.settings.checkpoint.form.attempts')),
                        TextInput::make('lockout_duration')
                            ->required()
                            ->integer()
                            ->minValue(1)
                            ->label(__('checkpoint::checkpoint.settings.checkpoint.form.lockout_duration.label'))
                            ->helperText(__('checkpoint::checkpoint.settings.checkpoint.form.lockout_duration.helper_text'))
                            ->suffix(__('checkpoint::checkpoint.settings.checkpoint.form.seconds')),
                    ]),
                Grid::make()
                    ->schema([
                        Section::make()
                            ->columns([
                                'default' => 2,
                            ])
                            ->columnSpan(2)
                            ->schema([
                                Toggle::make('notify_on_lockout')
                                    ->live()
                                    ->columnSpan(2)
                                    ->default(false)
                                    ->label(__('checkpoint::checkpoint.settings.checkpoint.form.notify_on_lockout.label')),
                                TextInput::make('notification_emails')
                                    ->required()
                                    ->email()
                                    ->hidden(fn (Get $get): bool => ! $get('notify_on_lockout'))
                                    ->helperText(__('checkpoint::checkpoint.settings.checkpoint.form.admin_notification_email.helper_text'))
                                    ->label(__('checkpoint::checkpoint.settings.checkpoint.form.admin_notification_email.label')),
                                TextInput::make('notify_after_lockouts')
                                    ->required()
                                    ->hidden(fn (Get $get): bool => ! $get('notify_on_lockout'))
                                    ->label(__('checkpoint::checkpoint.settings.checkpoint.form.notify_after_lockouts.label'))
                                    ->helperText(__('checkpoint::checkpoint.settings.checkpoint.form.notify_after_lockouts.helper_text'))
                                    ->suffix(__('checkpoint::checkpoint.settings.checkpoint.form.lockouts')),
                        TextInput::make('notification_time_frame')
                                    ->required()
                                    ->hidden(fn (Get $get): bool => ! $get('notify_on_lockout'))
                                    ->label(__('checkpoint::checkpoint.settings.checkpoint.form.notification_time_frame.label'))
                                    ->helperText(__('checkpoint::checkpoint.settings.checkpoint.form.notification_time_frame.helper_text'))
                                    ->suffix(__('checkpoint::checkpoint.settings.checkpoint.form.seconds'))
                            ]),
                    ]),
            ]);
    }
}
