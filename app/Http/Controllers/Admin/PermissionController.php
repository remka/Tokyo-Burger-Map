<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use App\Permission;
use DB;

class PermissionController extends Controller
{
  public function index(Request $request)
  {
      $permissions = Permission::orderBy('id','ASC')->paginate(10);
      return view('admin.permissions.index',compact('permissions'));
  }

  public function create()
  {
      return view('admin.permissions.create');
  }

  public function store(Request $request)
  {
      $this->validate($request, [
          'name' => 'required|unique:permissions,name',
          'display_name' => 'required',
          'description' => 'required'
      ]);

      $permission = new Permission();
      $permission->name = str_replace(' ', '-', strtolower(trim($request->input('name'))));
      $permission->display_name = $request->input('display_name');
      $permission->description = $request->input('description');
      $permission->save();

      return redirect()->route('admin.permissions')
                      ->with('success','Permission created successfully.');
  }

  public function show($id)
  {
      $permission = Permission::find($id);
      if ( ! $permission ) {
        abort(404);
      } else {
        return view('admin.permissions.show',compact('permission'));
      }
  }

  public function edit($id)
  {
      $permission = Permission::find($id);
      if ( ! $permission ) {
        abort(404);
      } else {
        return view('admin.permissions.edit',compact('permission'));
      }
  }

  public function update(Request $request, $id)
  {
      $this->validate($request, [
          'display_name' => 'required',
          'description' => 'required',
      ]);

      $permission = Permission::find($id);
      $permission->display_name = $request->input('display_name');
      $permission->description = $request->input('description');
      $permission->save();

      return redirect()->route('admin.permissions')
                      ->with('success','Permission updated successfully.');
  }

  public function destroy($id)
  {
      DB::table("permissions")->where('id',$id)->delete();
      return redirect()->route('admin.permissions')
                      ->with('success','Permission deleted successfully.');
  }

}
