<?php

// Load env.variables

if (file_exists($envFile = dirname(__DIR__, 5) . '/.env')) {
    $dotenv = Dotenv\Dotenv::createMutable($envFile);
    $dotenv->load();
}


$app = new Platon\Application();

// Register domain specific service providers
$app->register(config('app.providers'));

// Boot service providers
$app->start();
