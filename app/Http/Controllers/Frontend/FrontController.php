<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Review;
use App\Models\Cart;
use App\Models\User;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;



class FrontController extends Controller
{
     
     
    public function index(){

        $products = Product::where('trending' , 1)->take(8)->get(); 
        $new_products =  Product::orderBy('id', 'DESC')->take(8)->get();
        $categories =  Category::take(6)->get();
        return view('frontend.frontend',compact('products','new_products','categories'));

    } 


 
    public function category($slug){
                   
        if(Category::where('slug',$slug)->exists()){
            $category = Category::where('slug',$slug)->first();
            $products = Product::where('category_id' , $category->id)->get();
            return view('frontend.products.index',compact('category','products'));
        }else{
            return redirect('/');
        }


 

    }





    public function product($cate_slug , $prod_slug){
        
        if(Category::where('slug',$cate_slug)->exists()){
            if(Product::where('slug',$prod_slug)->exists()){
                $product = Product::where('slug',$prod_slug)->first();
                 $reviews = Review::where('product_id',$product->id)->take(8)->get();

                return view('frontend.products.view',compact('product','reviews'));
            }else{
                return redirect('/');
            }  //end if 
        }else{
            return redirect('/');
        } //end if 
          
          

         
    }



    // Product list

    public function productlist(){
         
        $products = Product::select('name')->get();
 
        $data = [];

        foreach($products as $item){
             $data[] = $item['name'];
        }


        return $data; 
         
    }


    // Search Product

    public function searchproduct(Request $request){
         
            $search_product = $request->search;

        if($search_product  != '' ){
               $product = Product::where('name','LIKE','%'.$search_product.'%')->first();
        if($product){
                return redirect('category/'.$product->category->slug.'/'.$product->slug);
            }else{
               return redirect()->back()->with(['status'=>'No product you search']); 
             }
        }else{
            return redirect()->back();
        }
    }











        } // close class

    