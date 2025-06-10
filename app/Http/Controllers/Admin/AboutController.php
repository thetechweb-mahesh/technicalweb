<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\About;


class AboutController extends Controller
{
    public function index()
    {

        $abo= About::all();
        return view('admin.about.index',compact('abo'));
    }

    public function create()
    {
    return view('admin.about.create');
    }

    public function store(Request $request)
    {
             $about= new About;
             $about->title= $request['title'];
             $about->discripsion= $request['discripsion'];
             $about->meta_title= $request['meta_title'];
             $about->meta_discripsion= $request['meta_discripsion'];

             if($request->hasfile('image'))
             {
                $file=$request->file('image');
                $filename=time().$file->GetClientOriginalExtension();
                $file->move('uploads/about/', $filename);
                $about->image= $filename;
                }
                 

                $about->status = $request->status == true ? '1':'0';
                $about->created_by = Auth::user()->id;

                $about->save();
                return redirect('admin/about/')->with('message','About post create succefully');
    }


    public function edit($about_id){

          $abos = About::find($about_id);
        return view('admin.about.edit',compact('abos'));
    }
    public function update(Request $request, $about_id){

        $about=About::find($about_id);
        // $about= new About;
        $about->title= $request['title'];
        $about->discripsion= $request['discripsion'];
        $about->meta_title= $request['meta_title'];
        $about->meta_discripsion= $request['meta_discripsion'];

        if($request->hasfile('image'))
        {
           $file=$request->file('image');
           $filename=time().$file->GetClientOriginalExtension();
           $file->move('uploads/about/', $filename);
           $about->image= $filename;
           }
          
           $about->status = $request->status == true ? '1':'0';
           $about->created_by = Auth::user()->id;
        
           $about->save();
           return redirect('admin/about/')->with('message','About post create succefully');

    }

    public function destroy($about_id){

        $about=About::find($about_id);
        if($about)
        {
            $destination="uploads/about/".$about->image;
            if(File::exists($destination)){
                File::exists($destination);
            }
            $about->delete();
            return redirect('admin/about')->with('message','about post delete successfully');
        }
    }



}
