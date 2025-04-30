<?php

return [
    'title' => 'Punto de control',
    'group' => 'Configuración',
    'back' => 'Regresar',
    'settings' => [
        'checkpoint' => [
            'title' => 'Punto de control',
            'description' => 'Administra la configuración de tu punto de control',
            'form' => [
                'seconds' => 'Segundos',
                'lockouts' => 'Bloqueos',
                'attempts' => 'Intentos',
                'max_attempts' => [
                    'label' => 'Intentos máximos',
                    'helper_text' => 'El número máximo de intentos fallidos permitidos antes de bloquear al usuario',
                ],
                'lockout_duration' => [
                    'label' => 'Duración del bloqueo',
                    'helper_text' => 'Duración de tiempo (en segundos) que un usuario permanece bloqueado después de exceder el número máximo de intentos',
                ],
                'notify_on_lockout' => [
                    'label' => 'Notificar al administrador en caso de bloqueo',
                ],
            ],
        ],
    ],
];
