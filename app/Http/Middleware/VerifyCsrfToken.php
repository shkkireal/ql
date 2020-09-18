<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [

        '/bot'
<<<<<<< HEAD
       
=======

>>>>>>> 5f034638dfed5b3391d090e7fc5af728b53f09b3
    ];
}
