<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\ServiceFormRequest;
use Illuminate\Support\Facades\File;


class ServiceController extends Controller
{

 public function index(){
    $services =Service::all();
    return view('admin.service.index', compact('services'));
}
public function add(){

  $category= Category::all();
return view('admin.service.add',compact('category'));
}




 public function store(ServiceFormRequest $request){


    $data = $request->validated();

    $services = new Service;

    $services->category_id = $data['category_id'];
    $services->name = $data['name'];
    $services->slug = $data['slug'];
    // $services->slug = Str::slug($data['slug']);
    $services->description = $data['description'];

    if($request->hasfile('image'))
    { $file =$request->file('image');
     $filename =time().' . '.$file->getClientOriginalExtension();
     $file->move('uploads/service/', $filename);
     $services->image = $filename;}

   $services->yt_ifranme = $data['yt_ifranme'];
   $services->meta_title = $data['meta_title'];
   $services->meta_description = $data['meta_description'];
   $services->meta_keyword = $data['meta_keyword'];

   $services->status = $request->status == true ? '1':'0';
   $services->created_by = Auth::user()->id;
   $services->save();

   return redirect('admin/services')->with('message','services Added successfully');

  }


}
