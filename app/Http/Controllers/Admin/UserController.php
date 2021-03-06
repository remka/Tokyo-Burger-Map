<?php

namespace App\Http\Controllers\Admin;

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
        $users = User::orderBy('id','ASC')->paginate(10);
        return view('admin.users.index', ['users' => $users]);
    }

    public function create()
    {
        $roles = Role::pluck('display_name','id');
        return view('admin.users.create',compact('roles'));
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

        return redirect()->route('admin.users')
                         ->with('success','User created successfully');
    }

    public function show($id)
    {
        $user = User::find($id);
        if ( ! $user ) {
          abort(404);
        } else {
          $burgers = $user->burgers;
          return view('admin.users.show',compact('user','burgers'));
        }
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::pluck('display_name','id');
        $userRoles = $user->roles->pluck('id','id')->toArray();

        return view('admin.users.edit',compact('user','roles','userRoles'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required|unique:users,name,'.$id,
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

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

        return redirect()->route('admin.users')
                         ->with('success','User updated successfully.');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.users')
                         ->with('success','User deleted successfully.');
    }

}
