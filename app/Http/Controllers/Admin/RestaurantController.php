<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\User;
use DB;

class RestaurantController extends Controller
{
    public function index(Request $request)
    {
        $burgers = Restaurant::orderBy('id','ASC')->paginate(10);
        return view('admin.burgers.index', ['burgers' => $burgers]);
    }

    public function create()
    {
        return view('admin.burgers.create');
    }

}
