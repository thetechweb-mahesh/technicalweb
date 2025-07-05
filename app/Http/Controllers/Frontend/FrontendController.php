<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Setting;
use App\Mail\ContactMail;
use App\Models\Contents;
use App\Services\MethodService;
use Illuminate\Support\Facades\Blade;

use Mail;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    protected $methodService;

    public function __construct(MethodService $methodService)
    {
        $this->methodService = $methodService;
    }
    public function index(MethodService $methodService){

        // Fetch home content
        $homeContent = Contents::where('slug', 'home')->where('status', 1)->first();
    
        if ($homeContent) {
            $homeContent->details = $methodService->processShortcodes($homeContent->details);
            
            // Manually process Blade syntax before passing it to the view
            $homeContent->details = Blade::render($homeContent->details, [
                'all_categories' => Category::where('status', '0')->get(),
                'blog' => Blog::all()
            ]);
            
            \Log::info('Processed Home Content with Shortcodes:', ['details' => $homeContent->details]);
    
        } else {
            // Fallback if no home content exists
            $homeContent = (object) ['details' => 'No content found.'];
        }
    
        $ser_category = Service::where('status', '0')->get();
        $all_categories = Category::where('status', '0')->get();
        $blog = Blog::all();
        $services = Service::find(1);
    
        return view('frontend.index', compact('all_categories', 'ser_category', 'blog', 'homeContent', 'services'));
    }

//     public function index(MethodService $methodService){

//         // Fetch home content
//    $homeContent = Contents::where('slug', 'home')->where('status', 1)->first();

//    if ($homeContent) {

//     $homeContent->details = $methodService->processShortcodes($homeContent->details);
//     \Log::info('Processed Home Content with Shortcodes:', ['details' => $homeContent->details]);

//      } else {
//        // Fallback if no home content exists
//        $homeContent = (object) ['details' => 'No content found.'];
//    }


//         $ser_category =Service::where('status','0')->get();
//         $all_categories =Category::where('status','0')->get();
       
//              $blog = Blog::all();
//              $services=Service::find(1);
//         return view('frontend.index',compact('all_categories','ser_category','blog','homeContent','services'));
//     }

    public function category(){

        $category = Category::where('status','0')->get();
        return view('frontend.category', compact('category'));

    }

    
    public function viewcategory($slug){

           if(Category::where('slug',$slug)->exists()){

           $category = Category::where('slug', $slug)->first();
           $services = Service::where('category_id',$category->id)->where('status','0')->get();
           return view('frontend.service.index',compact('category','services'));
          }

        else{

            return redirect('/')->with('status','slug dose not exists');
        }


    }

    public function serviceview($service_slug, $slug)
    {
        if(Category::where('slug',$service_slug)->exists()){
            if(Service::where('slug',$service_slug)->exists())
            {
                $services = Service::where('slug', $service_slug)->first();
                return view('frontend.service.view',compact('services'));
            }
            else{
                return redirect('/')->with('status','the link was broken');
            }
        }
        else{
            return redirect('/')->with('status','no search category found');
        }

    }



public function sendEmail(Request $request){

  $details =[
  'name' => $request->name,
'email' => $request->email,
'message' => $request->message
];


 Mail::to('gk790521@gmail.com')->send(new ContactMail($details));
//dd('Email Succefully');
 //return back()->with('success', 'Message sent successfully!');
 return redirect('/')->with('success', 'Message sent successfully!');

}


public function blogtails($slug)
{
      $blogs= Blog::where('slug', $slug)->firstOrFail();
      $recentblog = Blog::Orderby('created_by', 'desc')->take(5)->get();
    return view('frontend.blogdetails',compact('blogs','recentblog'));
}


  public function showByTag($tag)
    {
        
        $blog = Blog::whereJsonContains('tags', $tag)->get();
    
       
        return view('frontend.blogstag', compact('blog', 'tag'));  // Adjust the view path as necessary
    }

public function contactdetails()

{
        //   $contact= ContactMail::all();
          return view('frontend.contact');


}
}
