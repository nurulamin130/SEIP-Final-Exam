<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public static $user;

    public function viewUser()
    {
        return view('admin.user.index',[
            'users' => User::all()
        ]);
    }

    public function addUser()
    {
        return view('admin.user.create');
    }


    public function store(Request $request)
    {
        //return $request;
        User::saveInfo($request);
        return redirect(route('view-user'));
    }

    public function edit( $id )
    {
//        return $id;
        return view('admin.user.edit',[
            'user' => User::find($id),
            /// build-in method find--> work with primary key

        ]);
    }

    //public static $user;


    public function update(Request $request)
    {
        self::$user = User::find($request->id) ;


//        $id = User::find($request->id);
//        User::saveInfo($request,$id);

        User::saveInfo($request,self::$user->id);
        return redirect(route('view-user'));

    }

    public function deleteInfo(Request $request){

        self::$user = User::find($request->id) ;

        self::$user->delete();
        return back();


    }



}
