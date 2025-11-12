<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use App\Models\Product;
use Orion\Concerns\DisableAuthorization;

class ProductController extends Controller
{
    use DisableAuthorization; // agar tidak butuh auth

    protected $model = Product::class;
}
