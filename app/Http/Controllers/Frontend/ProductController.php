<?php

namespace App\Http\Controllers\Frontend;

use App\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
  public function data()
    {
        return view('sidebar.all', );
    }
}

