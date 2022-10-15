<?php

namespace App\Exceptions;

class RouteNotFoundException extends \Exception
{
    protected $message = 'Page not Found 404';
}