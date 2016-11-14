<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// for now, no permissions
Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index']);
Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create']);
Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store']);
Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit']);
Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update']);
Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy']);

// Full user CRUD, no permissions for now
Route::get('users',['as'=>'users.index','uses'=>'UserController@index']);
Route::get('users/create',['as'=>'users.create','uses'=>'UserController@create']);
Route::post('users/create',['as'=>'users.store','uses'=>'UserController@store']);
Route::get('users/{id}',['as'=>'users.show','uses'=>'UserController@show']);
Route::get('users/{id}/edit',['as'=>'users.edit','uses'=>'UserController@edit']);
Route::patch('users/{id}/edit',['as'=>'users.update','uses'=>'UserController@update']);
Route::delete('users/{id}',['as'=>'users.destroy','uses'=>'UserController@destroy']);

// permissions
Route::get('permissions',['as'=>'permissions.index','uses'=>'PermissionController@index']);
Route::get('permissions/create',['as'=>'permissions.create','uses'=>'PermissionController@create']);
Route::post('permissions/create',['as'=>'permissions.store','uses'=>'PermissionController@store']);
Route::get('permissions/{id}',['as'=>'permissions.show','uses'=>'PermissionController@show']);
Route::get('permissions/{id}/edit',['as'=>'permissions.edit','uses'=>'PermissionController@edit']);
Route::patch('permissions/{id}',['as'=>'permissions.update','uses'=>'PermissionController@update']);
Route::delete('permissions/{id}',['as'=>'permissions.destroy','uses'=>'PermissionController@destroy']);

// admin
Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'permission:see-admin']), function() {

    // add middleware after each of these
    // and auth in group params

    // Dashboard
    Route::get('/',['as'=>'admin.index','uses'=>'HomeController@index']);

    // Users
    Route::get('users',['as'=>'admin.users','uses'=>'UserController@index']);
    Route::get('users/create',['as'=>'admin.users.create','uses'=>'UserController@create']);
    Route::post('users/create',['as'=>'admin.users.store','uses'=>'UserController@store']);
    Route::get('users/{id}',['as'=>'admin.users.show','uses'=>'UserController@show']);
    Route::get('users/{id}/edit',['as'=>'admin.users.edit','uses'=>'UserController@edit']);
    Route::patch('users/{id}/edit',['as'=>'admin.users.update','uses'=>'UserController@update']);
    Route::delete('users/{id}',['as'=>'admin.users.destroy','uses'=>'UserController@destroy']);

    // Roles
    Route::get('roles',['as'=>'admin.roles','uses'=>'RoleController@index']);
    Route::get('roles/create',['as'=>'admin.roles.create','uses'=>'RoleController@create']);
    Route::post('roles/create',['as'=>'admin.roles.store','uses'=>'RoleController@store']);
    Route::get('roles/{id}',['as'=>'admin.roles.show','uses'=>'RoleController@show']);
    Route::get('roles/{id}/edit',['as'=>'admin.roles.edit','uses'=>'RoleController@edit']);
    Route::patch('roles/{id}',['as'=>'admin.roles.update','uses'=>'RoleController@update']);
    Route::delete('roles/{id}',['as'=>'admin.roles.destroy','uses'=>'RoleController@destroy']);

    // Permissions
    Route::get('permissions',['as'=>'admin.permissions','uses'=>'PermissionController@index']);
    Route::get('permissions/create',['as'=>'admin.permissions.create','uses'=>'PermissionController@create']);
    Route::post('permissions/create',['as'=>'admin.permissions.store','uses'=>'PermissionController@store']);
    Route::get('permissions/{id}',['as'=>'admin.permissions.show','uses'=>'PermissionController@show']);
    Route::get('permissions/{id}/edit',['as'=>'admin.permissions.edit','uses'=>'PermissionController@edit']);
    Route::patch('permissions/{id}',['as'=>'admin.permissions.update','uses'=>'PermissionController@update']);
    Route::delete('permissions/{id}',['as'=>'admin.permissions.destroy','uses'=>'PermissionController@destroy']);

    // Burgers
    Route::get('burgers',['as'=>'admin.burgers','uses'=>'RestaurantController@index']);
    Route::get('burgers/create',['as'=>'admin.burgers.create','uses'=>'RestaurantController@create']);
    Route::post('burgers/create',['as'=>'admin.burgers.store','uses'=>'RestaurantController@store']);
    Route::get('burgers/{id}',['as'=>'admin.burgers.show','uses'=>'RestaurantController@show']);
    Route::get('burgers/{id}/edit',['as'=>'admin.burgers.edit','uses'=>'RestaurantController@edit']);
    Route::patch('burgers/{id}',['as'=>'admin.burgers.update','uses'=>'RestaurantController@update']);
    Route::delete('burgers/{id}',['as'=>'admin.burgers.destroy','uses'=>'RestaurantController@destroy']);
});


Auth::routes();

Route::group(['middleware' => ['auth']], function() {

	Route::get('/home', 'HomeController@index');

	//Route::resource('users','UserController');

  // Roles
	// Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
	//Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);
	//Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);
	//Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
	//Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);
	//Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);
	//Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);

});
