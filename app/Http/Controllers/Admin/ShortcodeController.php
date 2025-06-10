<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shortcode;
use App\Models\Content;
use App\Models\MethodService;
use Illuminate\Support\Facades\Log;

class ShortcodeController extends Controller
{
    protected $methodService;


    public function __construct(MethodService $methodService)
    {
        $this->methodService = $methodService;
    }

    public function showContentWithShortcode()
    {
        $content = 'This is a menu: [sortcode-Menu-art codeid=kGzgLCXxQe]';
        
        // Find and replace the shortcode
        $renderedContent = $this->methodService->handleShortcode($content);

        // Display the rendered content
        return view('admin.shortcode.index', ['content' => $renderedContent]);
    }
   public  function index()
   {
    $shortcodes = Shortcode::all();
     return view('admin.shortcode.index',compact('shortcodes'));
   }

   public function create()
   {
       
      
       return view('admin.shortcode.create');
   }
   public function store(Request $request)
 
   {
       // Log incoming data for debugging
       \Log::info("Incoming request data: ", $request->all());

       // Validate required fields
       $request->validate([
           'title' => 'required|string|max:255', 
           'code_id' => 'nullable|string|max:100',
       ]);

       // Generate a unique `code_id` if none is provided
       $code_id = $request->input('code_id', $this->generateUniqueCodeId());
       $title = $request->input('title');

       // Create the formatted `sortcode`
       $sortcode = "[sortcode-{$title}-art code_id={$code_id}]";

       // Create a new instance of Shortcode and assign values to attributes
       $shortcode = new Shortcode;
       $shortcode->title = $title;
       $shortcode->code_id = $code_id;
       $shortcode->details = $request->input('details', '');
       $shortcode->sortcode = $sortcode;
       $shortcode->key = $request->input('key', null);
       $shortcode->type = $request->input('type', null);
       $shortcode->extra = json_encode([
           'pages' => $request->input('pages', []),
           'products' => $request->input('products', [])
       ]);
       $shortcode->status = $request->input('status', 1);
       $shortcode->lang = $request->input('lang', 'en');

       // Save the data
       try {
           $shortcode->save();
           return redirect()->route('shortcode.index')->with('success', 'Shortcode created successfully!');
       } catch (\Exception $e) {
           \Log::error("Error inserting data: " . $e->getMessage());
           return redirect()->back()->with('error', 'Failed to create shortcode.');
       }
   }


   private function generateUniqueCodeId()
   {
    //    return uniqid('code_'); // Generates a unique ID with the prefix 'code_'
    return substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 10);
   }
   public function edit($id)
   {
       $shortcode = Shortcode::findOrFail($id);
       $pages = ['Professionals', 'Professional Details', 'Blog', 'testing3 update3'];
       $products = ['Product A', 'Product B', 'Product C'];
     
       return view('admin.shortcode.edit', compact('shortcode', 'pages', 'products'));
   }
   public function update(Request $request, $id)
    {
             
        // Log incoming data for debugging
        \Log::info("Incoming request data: ", $request->all());
    
        // Validate required fields
        $request->validate([
            'title' => 'required|string|max:255', 
            'code_id' => 'nullable|string|max:100',
        ]);
    
        // Generate a unique `code_id` if none is provided
        $code_id = $request->input('code_id', $this->generateUniqueCodeId());
        $title = $request->input('title');

        // Create the formatted `sortcode`
        $sortcode = "[sortcode-{$title}-art codeid={$code_id}]";

        // Create a new instance of Shortcode and assign values to attributes
        $shortcode = Shortcode::findOrFail($id);
        $shortcode->title = $request->input('title');
        $shortcode->code_id = $code_id;
        $shortcode->details = $request->input('details', '');
        $shortcode->sortcode = $sortcode;
        $shortcode->key = $request->input('key', null);
        $shortcode->type = $request->input('type', null);
        $shortcode->extra = json_encode([
            'pages' => $request->input('pages', []),
            'products' => $request->input('products', [])
        ]);
        $shortcode->status = $request->input('status', 1);
        $shortcode->lang = $request->input('lang', 'en');

        // Save the data
        try {
            $shortcode->update();
            return redirect()->route('shortcode.index')->with('success', 'Shortcode updated successfully!');
        } catch (\Exception $e) {
            \Log::error("Error inserting data: " . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to updated shortcode.');
        }
    
    }

    public function updateStatus(Request $request)
{
    $shortcode = Shortcode::find($request->id);
    if($shortcode) {
        $shortcode->status = $request->status;
        $shortcode->save();

        return response()->json(['status' => $shortcode->status]);
    }

    return response()->json([
        'success' => false,
        'message' => 'Unable to update status due to a server error.'
    ]);
    
}












//    public function addPage(Request $request)
//    {
//        $request->validate([
//            'title' => 'required|string|max:255',
//        ]);

//        try {
//         // Create and save the page
//         Content::create([
//             'title' => $request->input('title'),
//         ]);

//         // Redirect with success message
//         return back()->with('success', 'Page added successfully!');
//     } catch (\Exception $e) {
//         \Log::error('Error adding page: ' . $e->getMessage());
//         return back()->with('error', 'Failed to add page.');
//     }
//    }

//    public function updateMenu(Request $request)
//    {
//        $request->validate([
//            'menu_title' => 'required|string|max:255',
//        ]);

//        // Logic to update the menu title
//        // Menu::update([...]);

//        return back()->with('success', 'Menu updated successfully!');
//    }


public function showPages()
{
    // Fetch all pages from the database
    $content = Content::all();

    return view('admin.menu', compact('content'));
}

public function addPage(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255|unique:content,title',
    ]);

    // Add new page
    Content::create(['title' => $request->input('title')]);

    return redirect()->back()->with('success', 'Page added successfully!');
}
}
