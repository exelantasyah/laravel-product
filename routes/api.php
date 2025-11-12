<?php

use Orion\Facades\Orion;   
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;

Orion::resource('products', ProductController::class);
Orion::resource('users', UserController::class);
