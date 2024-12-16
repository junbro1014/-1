<?php

namespace App\Services;

use Illuminate\Support\Facades\Facade;

class Message extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'message-facade';
    }
}
