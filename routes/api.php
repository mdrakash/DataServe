<?php

use App\Jobs\DataServeJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/eve',function ()
{
   dispatch(new DataServeJob());
   return "success"; 
});