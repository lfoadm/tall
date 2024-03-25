<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->authenticateSessions()->redirectTo(function ($request) {
            if ($request->expectsJson()) {
                return null;
            }
            session()->flash('warning', "Faça o login para acessar a área do cliente");
            return route('login');
        });
    })


    //     $middleware->authenticateSessions()->redirectTo(function ($request) {
    //         if ($request->expectsJson()) {
    //             return null; // Alterado para null para manter consistência
    //         } else {
    //             return route('login'); // Redireciona para a rota 'login'
    //         }
    //     });
    // })



    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
