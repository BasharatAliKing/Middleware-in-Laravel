<?php

use App\Http\Middleware\ValidUser;
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
        //  $middleware->appendToGroup('ok-user',[
        //     ValidUser::class,
        //  //   ValidAge::class,
        //  ]);
         $middleware->alias([
            'isValidUser'=>ValidUser::class,
         ]);
        //  $middleware->appendToGroup('ok-user',[
        //      ValidUser::class,
        //  ]);
         $middleware->prependToGroup('ok-user',[
             ValidUser::class,
         ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
