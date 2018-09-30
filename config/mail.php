<?php

return [


    'driver' =>'smtp',
    'host' =>'smtp.gmail.com',
    'port' => '587',
    'from' => [
        'address' =>'encuestas.dgc@gmail.com',
        'name' =>'DGC',
    ],
    'encryption' =>  'tls',
    'username' => 'encuestas.dgc@gmail.com',
    'password' => 'dgc_syst',
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
