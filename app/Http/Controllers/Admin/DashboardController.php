<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class DashboardController extends Controller
{
    // public function index(){

    //      $categories = Category::count();
    //     //  $posts = Post::count();

    //     $users = User::where('role_as','0')->count();
    //     $admins = User::where('role_as','1')->count();

    //     return view('admin.dashboard',compact('users','admins','categories'));
    // }

   // { public function index()

//     $user = auth()->user();

//     if ($user->role_as == 1 || $user->role_as == 2) {
//         return view('admin.dashboard');
//     }

//     abort(403, 'Unauthorized');
// }

// public function index()
// {
//     $user = auth()->user();

//     if ($user->hasRole('super-admin')) {
//         // return full access dashboard
//         return view('admin.dashboard');
//     }

//     if ($user->hasRole('admin')) {
//         // return limited view dashboard
//         return view('admin.admindashboard');
//     }

//     abort(403, 'Unauthorized');
// }

public function index()
{
     $categories = Category::count();
       $users = User::where('role_as','0')->count();
        $admins = User::where('role_as','1')->count();
    $user = auth()->user();

    if ($user->hasAnyRole(['super-admin', 'admin'])) {
        return view('admin.dashboard',compact('categories','users','admins'));
    }

    abort(403, 'Unauthorized access');
}


}
