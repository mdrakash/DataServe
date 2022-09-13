<?php

use App\Events\DataServeEvent;
use App\Jobs\DataServeJob;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/eve',function ()
{

    
   dispatch(new DataServeJob());
   return "success"; 
});
