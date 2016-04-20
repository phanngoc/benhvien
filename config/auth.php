<?php

return [

 	'multi' => [
        'user' => [
            'driver' => 'eloquent',
            'model' => 'App\Models\Benhnhan',
        ],
        'admin' => [
            'driver' => 'eloquent',
            'model' => 'App\Models\Admin',
        ]
    ],

    'password' => [
        'email' => 'emails.password',
        'table' => 'password_resets',
        'expire' => 60,
    ],

];
