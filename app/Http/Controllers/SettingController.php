<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Setting;


class SettingController extends Controller
{
  
    public function index()
    {
        $settings = Setting::all();
        return view('admins.settings.index',compact('settings'));
    }

    public function edit($id)
    {
      $setting  = Setting::findorfail($id);
        return   view('admins.settings.edit',compact('setting'));
    }


    public function update(Request $request, $id)
    {

        
        $validated = $request->validate([
            'address'=>'required',
            'email'=>'required|email',
            'phone'=>'required|numeric',
            'link_face'=>'required',
            'link_ins'=>'required',
            'link_twi'=>'required',
            'link_pen'=>'required',
         ]);
          
        $setting  = Setting::findorfail($id);

        $setting->address = $request->address;
        $setting->phone = $request->phone;
        $setting->email = $request->email;
        $setting->link_face = $request->link_face;
        $setting->link_ins = $request->link_ins;
        $setting->link_twi = $request->link_twi;
        $setting->link_pen = $request->link_pen;
        $setting->update();

        return redirect()->route('settings.index')->with(['status'=>'udpate Successflly']);

          
    }

  
}
