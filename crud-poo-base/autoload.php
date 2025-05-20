<?php 

spl_autoload_register(function($namespace) {
    $file = __DIR__ . DIRECTORY_SEPARATOR . str_replace(
        ['App\\', '\\'], ['', DIRECTORY_SEPARATOR], $namespace
    ) . ' .php';

    if (file_exists($file)) 
    {
        require_once $file;
    }
});