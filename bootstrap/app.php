<?php

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))

    ->withRouting(

        web: __DIR__ . '/../routes/web.php',
        // api: __DIR__ . '/../routes/api.php',
        // apiPrefix: 'api',
        // commands: __DIR__ . '/../routes/console.php',
        // channels: __DIR__ . '/../routes/channels.php',
        // health: '/up',
    )

    ->withMiddleware(function (Middleware $middleware) {
        $middleware->redirectGuestsTo('/login');
    })

    ->withExceptions(function (Exceptions $exceptions) {
    })

    ->withSchedule(function (Schedule $schedule) {

        $schedule->command('backup:run --only-db')->everyFiveSeconds();
    })->create();