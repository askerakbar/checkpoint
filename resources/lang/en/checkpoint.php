<?php

return [
    'title' => 'Checkpoint',
    'group' => 'Settings',
    'back' => 'Back',
    'settings' => [
        'checkpoint' => [
            'title' => 'Checkpoint',
            'description' => 'Manage your checkpoint settings',
            'form' => [
                'seconds' => 'Seconds',
                'lockouts' => 'Lockouts',
                'attempts' => 'Attempts',
                'max_attempts' => [
                    'label' => 'Max Attempts',
                    'helper_text' => 'The maximum number of failed login attempts allowed before a user is locked out',
                ],
                'lockout_duration' => [
                    'label' => 'Lockout Duration',
                    'helper_text' => 'The length of time (in seconds) that a user remains locked out after exceeding the maximum number of login attempts',
                ],
                'notify_on_lockout' => [
                    'label' => 'Notify Admin on Lockout',
                ],
                'admin_notification_email' => [
                    'label' => 'Admin Notification Email',
                    'helper_text' => 'The email address to send lockout notifications to',
                ],
                'notify_after_lockouts' => [
                    'label' => 'Notify Admin after',
                    'helper_text' => 'Specify how many lockouts must occur on an IP address before a notification is sent to the admin',
                ],
                'notification_time_frame' => [
                    'label' => 'Notification Time Frame',
                    'helper_text' => 'Specify the time frame (in seconds) during which the lockout notification will be sent to the admin. No additional notifications will be sent for subsequent lockouts until this time frame has passed',
                ],
            ],
        ],
        'mail' => [
            'subject' => 'Account Lockout Notification',
            'greeting' => 'Hello!',
            'line_1' => 'This notification was sent automatically via Auth Control Plugin.',
            'line_2' => 'Multiple failed login attempts have been detected from an IP address.',
            'email' => 'Email',
            'ip_address' => 'IP Address',
            'user_agent' => 'User Agent',
            'last_attempted_email' => 'Last Attempted Email',
        ],
    ],
];
