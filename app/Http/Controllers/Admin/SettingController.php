<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
class SettingController extends Controller
{
    public function index(){

        $setting = Setting::find(1);
        return view('admin.setting.index',compact('setting'));
      
          }
      
          public function savedata(Request $request){
      
      
           $validator = Validator::make($request->all(),
              [
                 'website_name' => 'required|max:255',
                 'website_logo' => 'nullable',
                 'website_favicon' => 'nullable',
                 'description' => 'nullable',
                 'meta_title' => 'required|max:255',
                 'meta_keyword' => 'nullable',
                 'meta_description' => 'nullable',
              ]);
      
              if($validator->fails())
              {
                  return redirect()->back()->withErrors($validator);
              }
             $setting = Setting::where('id','1')->first();
             if($setting){
      
              $setting -> website_name = $request-> website_name;
              $setting->description = $request->description;
              if($request->hasfile('website_logo'))
             { 
              $destination ='upload/settings/'.$setting->logo;
              if(File::exists($destination)) {
                File::exists($destination);
              }
              
              
              $file =$request->file('website_logo');
               $filename =time().' . '.$file->getClientOriginalExtension();
               $file->move('upload/settings/', $filename);
               $setting->logo  = $filename;
         
             } 
             
             if($request->hasfile('website_favicon'))
             {
              $destination ='upload/settings/'.$setting->favicon;
              if(File::exists($destination)) {
                File::exists($destination);
              }
              
              $file =$request->file('website_favicon');
               $filename = time().' . '.$file->getClientOriginalExtension();
               $file->move('upload/settings/', $filename);
               $setting->favicon  = $filename;
         
             }
         
         
             $setting -> meta_title= $request-> meta_title;
             $setting ->meta_keyword= $request-> meta_keyword;
             $setting -> meta_description= $request-> meta_description;
             $setting->save();
             return redirect('admin/settings')->with('message','Setting Updated');
      
             }
      else{
          $setting = new  Setting;
          $setting->website_name = $request->website_name;
              $setting->description = $request->description;
      
           if($request->hasfile('website_logo'))
          { $file =$request->file('website_logo');
            $filename =time().' . '.$file->getClientOriginalExtension();
            $file->move('upload/settings/', $filename);
            $setting->logo = $filename;
      
          } 
          
          if($request->hasfile('website_favicon'))
          { $file =$request->file('website_favicon');
            $filename =time().' . '.$file->getClientOriginalExtension();
            $file->move('upload/settings/', $filename);
            $setting->favicon = $filename;
      
          }
      
      
          $setting -> meta_title=$request-> meta_title;
          $setting ->meta_keyword= $request-> meta_keyword;
          $setting -> meta_description= $request-> meta_description;
          $setting->save();
          return redirect('admin/settings')->with('message','Setting Added');
      
      }
          }
}
