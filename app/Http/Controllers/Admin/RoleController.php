<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; // Make sure this line exists!

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;

class RoleController extends Controller
{
    
public function __construct()
{
    $this->middleware('permission:view roles')->only('index');
    $this->middleware('permission:create roles')->only(['create', 'store']);
    $this->middleware('permission:edit roles')->only(['edit', 'update']);
    $this->middleware('permission:delete roles')->only('destroy');
}

    
    public function index()
{
    $roles = Role::all();
    return view('role-permission.role.index', compact('roles'));
}

public function create()
{
    return view('role-permission.role.create');
}

public function store(Request $request)
{
    Role::create(['name' => $request->name]);
    return redirect()->route('roles.index')->with('message', 'Role created');
}

public function destroy($id)
{
    Role::findOrFail($id)->delete();
    return redirect()->back()->with('message', 'Role deleted');
}

public function addPermissionToRole($roleId)
{
    $role = Role::findOrFail($roleId);
    $permissions = Permission::all();
    return view('role-permission.role.give-permissions', compact('role', 'permissions'));
}

public function givePermissionToRole(Request $request, $roleId)
{
    $role = Role::findOrFail($roleId);
    $role->syncPermissions($request->permissions ?? []);
    return redirect()->route('roles.index')->with('message', 'Permissions updated');
}

}