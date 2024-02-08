<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BlogController extends Controller
{
         public function data()
    {
       return view('sidebar.waterpurifiers');
    }
}
