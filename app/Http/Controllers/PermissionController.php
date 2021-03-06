<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use App\Permission;
use DB;

class PermissionController extends Controller
{
  public function index(Request $request)
  {
      $permissions = Permission::orderBy('id','DESC')->paginate(10);
      return view('permissions.index', ['users' => $permissions]);
  }

}
