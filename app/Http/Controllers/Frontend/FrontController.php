<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class FrontController extends Controller
{
     
     
    public function index(){


        $products = Product::where('trending' , 1)->take(15)->get(); 

        return view('frontend.index',compact('products'));
    } 


 
    public function category($slug){
                   


        if(Category::where('slug',$slug)->exists()){
            $category = Category::where('slug',$slug)->first();
            $products = Product::where('category_id' , $category->id)->where('status' , '0')->get();
            return view('frontend.products.index',compact('category','products'));
        }else{
            return redirect('/');
        }


 

    }





    public function product($cate_slug , $prod_slug){
      
          
        if(Category::where('slug',$cate_slug)->exists()){
            if(Product::where('slug',$prod_slug)->exists()){
                $product = Product::where('slug',$prod_slug)->first();
              

                return view('frontend.products.view',compact('product'));
            }else{
                return redirect('/');
            }  //end if 
        }else{
            return redirect('/');
        } //end if 
          
          

         
    }


}
