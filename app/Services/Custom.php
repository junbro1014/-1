<?php

namespace App\Services;

use Illuminate\Support\Facades\Facade;

class Custom extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'custom-facade';
    }
}
