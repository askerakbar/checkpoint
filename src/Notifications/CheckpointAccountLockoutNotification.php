<?php

namespace AskerAkbar\Checkpoint\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CheckpointAccountLockoutNotification extends Notification
{
    use Queueable;

    protected array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting(__('checkpoint::checkpoint.settings.mail.greeting'))
            ->subject(__('checkpoint::checkpoint.settings.mail.subject'))
            ->line(__('checkpoint::checkpoint.settings.mail.line_1'))
            ->line(__('checkpoint::checkpoint.settings.mail.line_2'))
            ->line('**'.__('checkpoint::checkpoint.settings.mail.last_attempted_email').':** '.$this->data['email'])
            ->line('**'.__('checkpoint::checkpoint.settings.mail.ip_address').':** '.$this->data['ip_address'])
            ->line('**'.__('checkpoint::checkpoint.settings.mail.user_agent').':** '.$this->data['user_agent']);
    }
}
