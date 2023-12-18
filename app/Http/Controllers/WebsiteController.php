<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $products =Product::all();
        return view('products' ,get_defined_vars());
    }
    public function order_now(){
        return view('ordernow');
    }
}
