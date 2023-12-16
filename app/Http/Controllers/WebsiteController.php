<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');

    }
    public function products(){
        return view('products');
    }
    public function order_now(){
        return view('ordernow');
    }
}
