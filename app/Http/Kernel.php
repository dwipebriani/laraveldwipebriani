<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:60,1',
            'bindings',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'akses.admin'=>\App\Http\Middleware\AksesAdmin::class,
>>>>>>> tokap11
=======
        'akses.admin'=>\App\Http\Middleware\AksesAdmin::class,
>>>>>>> tokap12
=======
        'akses.admin'=>\App\Http\Middleware\AksesAdmin::class,
>>>>>>> tokap13
=======
        'akses.admin'=>\App\Http\Middleware\AksesAdmin::class,
>>>>>>> tokap14
=======
        'akses.admin'=>\App\Http\Middleware\AksesAdmin::class,
>>>>>>> tokap15
=======
        'akses.admin'=>\App\Http\Middleware\AksesAdmin::class,
>>>>>>> tokap16
=======
        'akses.admin'=>\App\Http\Middleware\AksesAdmin::class,
>>>>>>> tokap17
=======
        'akses.admin'=>\App\Http\Middleware\AksesAdmin::class,
>>>>>>> tokap18
=======
        'akses.admin'=>\App\Http\Middleware\AksesAdmin::class,
>>>>>>> tokap19
=======
        'akses.admin'=>\App\Http\Middleware\AksesAdmin::class,
>>>>>>> tokap20
=======
        'akses.admin'=>\App\Http\Middleware\AksesAdmin::class,
>>>>>>> tokap21
=======
        'akses.admin'=>\App\Http\Middleware\AksesAdmin::class,
>>>>>>> tokap22
=======
        'akses.admin'=>\App\Http\Middleware\AksesAdmin::class,
>>>>>>> tokap23
=======
        'akses.admin'=>\App\Http\Middleware\AksesAdmin::class,
>>>>>>> tokap24
=======
        'akses.admin'=>\App\Http\Middleware\AksesAdmin::class,
>>>>>>> tokap25
=======
        'akses.admin'=>\App\Http\Middleware\AksesAdmin::class,
>>>>>>> tokap26
=======
        'akses.admin'=>\App\Http\Middleware\AksesAdmin::class,
>>>>>>> tokap27
=======
        'akses.admin'=>\App\Http\Middleware\AksesAdmin::class,
>>>>>>> tokap 28-29
=======
        'akses.admin'=>\App\Http\Middleware\AksesAdmin::class,
>>>>>>> tokap 30-31
=======
        'akses.admin'=>\App\Http\Middleware\AksesAdmin::class,
>>>>>>> tokap 32
=======
        'akses.admin'=>\App\Http\Middleware\AksesAdmin::class,
>>>>>>> tokap 33
=======
        'akses.admin'=>\App\Http\Middleware\AksesAdmin::class,
>>>>>>> tokap 35
=======
        'akses.admin'=>\App\Http\Middleware\AksesAdmin::class,
>>>>>>> tokap 36
=======
        'akses.admin'=>\App\Http\Middleware\AksesAdmin::class,
>>>>>>> tokap 37
    ];
}
