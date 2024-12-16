<?php

use App\Http\Middleware\PageMiddleware;
use App\Services\Message;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\GlobalMiddleware;
use App\Http\Middleware\BlogMiddleware;


Route::group(['middleware' => GlobalMiddleware::class], function () {
    Route::get('/', function () {
        return view('singleton', ['page'=>'root','message'=>Message::printMessage()]);
    })->name('root');
    Route::group(['middleware' => PageMiddleware::class], function () {
        Route::get('page', function () {
            return view('singleton', ['page'=>'page','message'=>Message::printMessage()]);
        })->name('page');
    
        Route::group(['middleware' => BlogMiddleware::class], function () {
            Route::get('blog', function () {
                return view('singleton', ['page'=>'blog','message'=>Message::printMessage()]);
            })->name('blog');
        });
    });
});




