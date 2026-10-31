<?php

// Prepare storage directories in /tmp for Vercel serverless environment
$storagePath = '/tmp/storage';
$dirs = [
    $storagePath.'/app/public',
    $storagePath.'/framework/cache/data',
    $storagePath.'/framework/views',
    $storagePath.'/framework/sessions',
    $storagePath.'/logs',
];

foreach ($dirs as $dir) {
    if (! is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

require __DIR__.'/../public/index.php';
