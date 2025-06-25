<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){

        $users = user::all();
                return view('admin.user.index',compact('users'));
    }

     public function edit($id){

        $user = user::find($id);
                return view('admin.user.edit',compact('user'));
    }

    public function updateUserRole(Request $request, $id)
{
    $request->validate([
        'role_as' => 'required|in:0,1,2',
    ]);

    $user = User::findOrFail($id);
    $user->role_as = $request->role_as;
    $user->save();

    return redirect()->back()->with('success', 'User role updated successfully.');
}
}
