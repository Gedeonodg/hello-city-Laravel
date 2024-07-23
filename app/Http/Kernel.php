<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // Liste de vos middlewares globaux
    ];

    protected $middlewareGroups = [
        'web' => [
            // Liste de vos middlewares de groupe 'web'
        ],

        'api' => [
            // Liste de vos middlewares de groupe 'api'
        ],
    ];

    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        //'checkAge' => \App\Http\Middleware\CheckAge::class,
        // Autres middlewares de route
    ];
}
