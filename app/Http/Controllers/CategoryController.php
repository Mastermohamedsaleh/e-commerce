<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
 
    public function index()
    {

 
        $categories = Category::latest()->paginate(PAGINATE_COUNT);

        return view('admins.categories.index',compact('categories'));
    }

   
    public function create()
    {
        return view('admins.categories.create');
    }

  
    public function store(Request $request)
    {
        


        $category = Category::create([
            'name'=>$request->name,
            'slug'=>$request->slug,
            'description'=>$request->description,
            'status'=>$request->status  == True ? '1' : '0' ,
            'popular'=>$request->popular == True ? '1' : '0' ,
            'meta_title'=>$request->meta_title,
            'meta_keywords'=> $request->meta_keywords,
            'meta_discrip'=>$request->meta_discrip, 
        ]);

                     
        session()->flash('status', 'added successfully');
        return redirect()->route('categories.index');




    }

   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
     
        $category = Category::findOrfail($id);

        return view('admins.categories.edit',compact('category'));


    }


    public function update(Request $request , $id)
    {
        
        $category = Category::findOrfail($id);
        $category->update([
            'name'=>$request->name,
            'slug'=>$request->slug,
            'description'=>$request->description,
            'status'=>$request->status  == True ? '1' : '0' ,
            'popular'=>$request->popular == True ? '1' : '0' ,
            'meta_title'=>$request->meta_title,
            'meta_keywords'=> $request->meta_keywords,
            'meta_discrip'=>$request->meta_discrip, 
        ]);
                     
        session()->flash('status', 'Udpate successfully');
        return redirect()->route('categories.index');

    }

    public function destroy($id)
    {
         
       
         $category =  Category::findorfail($id);
         
         $category->delete();
         
         session()->flash('status', 'Delete successfully');
         return redirect()->route('categories.index');

    }
}
