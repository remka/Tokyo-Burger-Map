<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Role;
use App\Permission;
use DB;

class BurgerController extends Controller
{
  public function index(Request $request)
  {
    $burgers = Restaurant::orderBy('name_en','ASC')->paginate(10);
    return view('burgers.index', ['burgers' => $burgers]);
  }

}
