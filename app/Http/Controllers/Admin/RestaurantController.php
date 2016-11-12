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

    public function store(Request $request)
    {

        $this->validate($request, [
            'name_en' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric'
        ]);


        $burger = new Restaurant();
        $burger->title_en = $request->input('name_en');
        $burger->title_ja = $request->input('name_ja');
        /*
        $permission->name = slugify($request->input('name'));
        $permission->display_name = $request->input('display_name');
        $permission->description = $request->input('description');
        $permission->save();
        */

        return redirect()->route('admin.burgers')
                        ->with('success','Burger created successfully.');
    }

}
