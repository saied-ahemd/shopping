<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products=product::all();
        return view('main',['products'=>$products]);
    }
}
