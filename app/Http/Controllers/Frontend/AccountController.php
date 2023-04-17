<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;

use App\Models\User;

use File;

class AccountController extends Controller
{
    
 
    public function index(){

  
        $user = User::where('id',Auth::id())->first();
 
        return view('frontend.account.index',compact('user'));
    }



    public function update(Request $request){
   
        $validated = $request->validate([
            'new_image' => 'required',
        ]);
        
    $user =  User::findOrfail($request->user_id);
    if( $request->old_image !== 'default.png' ){

        if(File::exists(public_path('uploads/users/'.$request->old_image))){
        File::delete(public_path('uploads/users/'.$request->old_image));
        }

    }
        
    $imageName = time().'.'.$request->new_image->extension(); 
    $request->new_image->move(public_path('uploads/users'), $imageName);
    $user->image =    $imageName ;
    $user->update();
    return   redirect()->back()->with(['status'=>'Update Successfully']);     
    }
      

     
}
