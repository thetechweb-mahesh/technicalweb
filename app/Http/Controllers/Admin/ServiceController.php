<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\ServiceFormRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ServiceController extends Controller
{

 public function index(){

    $services =Service::all();   
        //  $services = Service::with('translations')->get();
    
    return view('admin.service.index', compact('services'));
}
public function add(){

  $category= Category::all();
return view('admin.service.add',compact('category'));
}


//

public function showTranslatedService()
{
    $service = Service::with('translations')->first();

    return [
        'translated_name' => $service->translated_name,
        'translated_description' => $service->translated_description,
    ];
}



///

 public function store(Request $request){


    // $data = $request->validated();

    $services = new Service;

    $services->category_id = $request['category_id'];
    $services->name = $request['name'];
    // $services->slug = $request['slug'];
    $services->slug = Str::slug($request['slug']);
    $services->description = $request['description'];

    if($request->hasfile('image'))
    { $file =$request->file('image');
     $filename =time().' . '.$file->getClientOriginalExtension();
     $file->move('uploads/service/', $filename);
     $services->image = $filename;}


    // new add
     $services->m_ser_title = $request['m_ser_title'];
     $services->m_ser_des = $request['m_ser_des'];
     $services->ser_list_title = $request['ser_list_title'];
     $services->ser_list_des = $request['ser_list_des'];
// end new add




   $services->yt_ifranme = $request['yt_ifranme'];
   $services->meta_title = $request['meta_title'];
   $services->meta_description = $request['meta_description'];
   $services->meta_keyword = $request['meta_keyword'];

   $services->status = $request->status == true ? '1':'0';
   $services->created_by = Auth::user()->id;

   $services->save();

   return redirect('admin/service')->with('message','services Added successfully');

  }


  public function edit($service_id)
  {
   $category = Category::Where('status','0')->get();
    $services =  Service::find($service_id);
    return view('admin.service.edit', compact('services','category'));

}

   public function update(Request $request, $service_id){

     $services = new Service;
   $services =  Service::find($service_id);

   $services->category_id = $request['category_id'];
   $services->name = $request['name'];
//    $services->slug = $request['slug'];
   $services->slug = Str::slug($request['slug']);
   $services->description = $request['description'];

     // new add
     $services->m_ser_title = $request['m_ser_title'];
     $services->m_ser_des = $request['m_ser_des'];
     $services->ser_list_title = $request['ser_list_title'];
     $services->ser_list_des = $request['ser_list_des'];
// end new add

  if($request->hasfile('image'))
  { $file =$request->file('image');
    $filename =time().' . '.$file->getClientOriginalExtension();
    $file->move('uploads/service/', $filename);
    $services->image = $filename;

  }
  $services->yt_ifranme = $request['yt_ifranme'];
  $services->meta_title = $request['meta_title'];
  $services->meta_description = $request['meta_description'];
  $services->meta_keyword = $request['meta_keyword'];

  $services->status = $request->status == true ? '1':'0';
  $services->created_by = Auth::user()->id;
  $services->update();


  return redirect('admin/service')->with('message','services updated successfully');

  }

  public function destroy($service_id){

    $services =  Service::find($service_id);
if($services){
    $destination ='uploads/service/'.$services->image;
    if(File::exists($destination)) {
      File::exists($destination);
    }
    $services->delete();



    return redirect('admin/service')->with('message','services delete successfully');
}
  }


}
