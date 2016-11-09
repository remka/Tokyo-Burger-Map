<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use App\Permission;
use DB;

class RoleController extends Controller
{
  public function index(Request $request)
  {
      $roles = Role::orderBy('id','DESC')->paginate(10);
      return view('roles.index',compact('roles'))
          ->with('i', ($request->input('page', 1) - 1) * 5);
  }

  public function create()
  {
      $permission = Permission::get();
      return view('roles.create',compact('permission'));
  }

  public function store(Request $request)
  {
      $this->validate($request, [
          'name' => 'required|unique:roles,name',
          'display_name' => 'required',
          'description' => 'required',
          'permission' => 'required',
      ]);

      $role = new Role();
      $role->name = $request->input('name');
      $role->display_name = $request->input('display_name');
      $role->description = $request->input('description');
      $role->save();

      foreach ($request->input('permission') as $key => $value) {
          $role->attachPermission($value);
      }

      return redirect()->route('roles.index')
                      ->with('success','Role created successfully');
  }

  public function show($id)
  {
      $role = Role::find($id);
      $rolePermissions = Permission::join("permission_role","permission_role.permission_id","=","permissions.id")
          ->where("permission_role.role_id",$id)
          ->get();

      return view('roles.show',compact('role','rolePermissions'));
  }

}
