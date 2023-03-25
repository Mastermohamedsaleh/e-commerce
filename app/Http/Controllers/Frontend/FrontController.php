<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class FrontController extends Controller
{
     
     
    public function index(){


        $products = Product::where('trending' , 1)->take(15)->get(); 

        return view('frontend.index',compact('products'));
    } 

}
