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

}
