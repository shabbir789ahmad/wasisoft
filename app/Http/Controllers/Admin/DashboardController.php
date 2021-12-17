<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // show all register
    public function registered(){
        $users = User::all();
        return view('admin.register')->with('users',$users);
    }
    //edit role register
    public function registeredit(Request $request, $id){

        $users = User::FindorFail($id);
        return view('admin.register-edit')->with('users',$users);
    }
    //edit role register
    public function registerupdate(Request $request, $id){

        $users = User::find($id);
        $users->name = $request->input('username');
        $users->phone = $request->input('phone');
        //table attribute = input name
        $users->usertype = $request->input('usertype');
        $users->update();

        return redirect('/role-register')->with('status','Your Data is updated!');
    }
}
