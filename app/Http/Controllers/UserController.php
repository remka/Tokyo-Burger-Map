<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use DB;
use Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::orderBy('id','ASC')->paginate(5);
        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        $roles = Role::pluck('display_name','id');
        return view('users.create',compact('roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        foreach ($request->input('roles') as $key => $value) {
            $user->attachRole($value);
        }

        return redirect()->route('users.index')
                         ->with('success','User created successfully');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::pluck('display_name','id');
        $userRoles = $user->roles->pluck('id','id')->toArray();

        return view('users.edit',compact('user','roles','userRoles'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required|unique:users,name,'.$id,
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        /*
        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('role_user')->where('user_id',$id)->delete();


        foreach ($request->input('roles') as $key => $value) {
            $user->attachRole($value);
        }
        */

        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }

}
