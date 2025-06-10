<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $blog=Blog::all();
        return view('admin.blog.index',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
       return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
             $request->validate([
                'name' => 'required|string|max:255',
                'slug' => 'required|string|max:255|unique:blogs,slug',
                'description' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'tags' => 'nullable|array',
                'tags.*' => 'nullable|string',
                'status' => 'required|in:draft,published',
                'meta_title' => 'required|string|max:255',
                'meta_description' => 'nullable|string',
                'meta_keyword' => 'nullable|string',
             ]);
            
             $blog = new Blog;
          
             $blog->name = $request['name'];
             $blog->slug = Str::slug($request['slug']);
             $blog->description = $request['description'];
 
            
            if ($request->hasfile('image')) {
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move('uploads/blog/', $filename);
                $blog->image = $filename;
            }
            $blog->name = $request->name;
            $blog->slug = Str::slug($request->slug);
            $blog->description = $request->description;
         
            $blog->tags = $request->tags ?? json_encode([]); // Save tags as JSON           
            $blog->meta_title = $request->meta_title;
            $blog->meta_description = $request->meta_description;
            $blog->meta_keyword = $request->meta_keyword;
            $blog->status = $request->status === 'published' ? 1 : 0;
            $blog->created_by = Auth::id();
            //dd($blog);
            $blog->save();

            return redirect()->back()->with('success', 'Blog created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog=Blog::find($id);
        $tags = $blog->tags; // No need to use json_decode() if it's an array
        return view('admin.blog.edit',compact('blog','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // Validate the incoming request data
    $request->validate([
        'name' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:blogs,slug,' . $id,  // Ensure the slug is unique except for the current blog
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'tags' => 'nullable|array',
        'tags.*' => 'nullable|string',
        'status' => 'required|in:draft,published',
        'meta_title' => 'required|string|max:255',
        'meta_description' => 'nullable|string',
        'meta_keyword' => 'nullable|string',
    ]);

    // Find the blog by ID
    $blog = Blog::findOrFail($id);

    // Decode the tags JSON string into an array


    // Update the blog with the form data
    $blog->name = $request->name;
    $blog->slug = Str::slug($request->slug);
    $blog->description = $request->description;

    // Handle image upload
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/blog/'), $filename);
        $blog->image = $filename;
    }

 
    $blog->tags = $request->tags ?? json_encode([]); // Save tags as JSON       
    // Meta data
    $blog->meta_title = $request->meta_title;
    $blog->meta_description = $request->meta_description;
    $blog->meta_keyword = $request->meta_keyword;


    $blog->status = $request->status === 'published' ? 1 : 0;

    // Set the user who is updating the blog
    $blog->created_by = Auth::id();

    // Save the updated blog data
    $blog->save();  // Use save() instead of update()

    return redirect()->route('blogs.index')->with('success', 'Blog updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $blog= Blog::find($id);
       if (!$blog) {     
        return redirect()->route('blogs.index')->with('error', 'Blog not found');
    }
       $blog->delete();
       return view('admin.blog')->with('message','delete blog succefully');
       
    }
}
