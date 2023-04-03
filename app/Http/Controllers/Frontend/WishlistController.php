<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;



class WishlistController extends Controller
{
    
     
  
    public function index(){
      $wishlists =  Wishlist::where('user_id',Auth::id())->get();
        return view('frontend.wishlist',compact('wishlists'));
    }
 

    public function add(Request $request){
  

      
      if( Wishlist::where('product_id',$request->product_id)->where('user_id',Auth::id())->exists()){ 
        session()->flash('status', "Product in Wishlist Already");
        return redirect()->back();
      }else{

        Wishlist::create([
            'user_id'=>Auth::id(),
            'product_id'=>$request->product_id
         ]);

         session()->flash('status', "Product in Wishlist");
         return redirect()->back();
      }



 
         
    }


    // Delete from wishlist

    public function delete($id){
           
      $wishlist =  Wishlist::findorfail($id);
      $wishlist->delete();
      session()->flash('status', "Delete Successfully");
      return redirect()->back();
    }



    
     //Count Item in cart 
     public function countwishlist(){ 
       
      $wishlistcount =  Wishlist::where('user_id',Auth::id())->count();  
  
       
      return response()->json(['count'=>$wishlistcount]);
    }
     
}
