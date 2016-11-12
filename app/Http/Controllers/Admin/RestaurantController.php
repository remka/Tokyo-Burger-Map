<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\User;
use DB;
use Auth;

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

        $burger->name_en = $request->input('name_en');
        $burger->name_ja = $request->input('name_ja');
        $burger->name_slug = slugify($request->input('name_en'));

        $burger->latitude = $request->input('latitude');
        $burger->longitude = $request->input('longitude');

        $burger->address_1 = $request->input('address_1');
        $burger->address_2 = $request->input('address_2');
        $burger->address_3 = $request->input('address_3');
        $burger->municipality = $request->input('municipality');
        $burger->prefecture = $request->input('prefecture');
        $burger->postcode = $request->input('postcode');
        $burger->country = 'JA';

        if (is_null($request->input('has_nonsmoking'))) {
          $burger->has_nonsmoking = 0;
        } else {
          $burger->has_nonsmoking = $request->input('has_nonsmoking');
        }

        if (is_null($request->input('has_vegetarian'))) {
          $burger->has_vegetarian = 0;
        } else {
          $burger->has_vegetarian = $request->input('has_vegetarian');
        }

        $burger->user_id = Auth::user()->id;

        $burger->save();

        return redirect()->route('admin.burgers')
                        ->with('success','Burger created successfully.');
    }

    public function show($id)
    {
        $burger = Restaurant::find($id);
        if ( ! $burger ) {
          abort(404);
        } else {
          return view('admin.burgers.show',compact('burger'));
        }
    }

}
