<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
 
    public function index()
    {
        return view('categories.index');
    }

   
    public function create()
    {
        return view('categories.create');
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

                     
        session()->flash('status', 'added_successfully');
        return redirect()->route('categories.index');




    }

   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
