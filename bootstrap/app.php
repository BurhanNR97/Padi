<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web([
            \RealRashid\SweetAlert\ToSweetAlert::class,
        ]);
        $middleware->alias([
            'auth'  => \App\Http\Middleware\Authenticate::class,
            'level' => \App\Http\Middleware\UserAccess::class,
            'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
            'Alert' => RealRashid\SweetAlert\Facades\Alert::class,
        ]);
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
