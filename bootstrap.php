<?php

spl_autoload_register(function ($className) {

    $path = __DIR__.'/lib/'.str_replace('\\', '/', $className).'.php';

    if (file_exists($path)) {
        require $path;
    }
    // we don't support this class!

});

$configuration = [
    'db_dsn' => 'mysql:host=localhost;dbname=oo_battle',
    'db_user' => 'michael',
    'db_pass' => 'AppleMonkey',
];