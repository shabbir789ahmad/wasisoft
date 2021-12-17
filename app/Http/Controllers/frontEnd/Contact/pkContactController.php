<?php

namespace App\Http\Controllers\frontEnd\Contact;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Pkcontacts;
use Illuminate\Http\Request;

class pkContactController extends Controller
{
    public function index(){
        $pkcontacts = Pkcontacts::all();
        return view('frontEnd.contact');
    }
    public function store(Request $request){
        $pkcontacts = new pkcontacts;
        $pkcontacts->name = $request->input('name');
        $pkcontacts->email = $request->input('email');
        $pkcontacts->phone = $request->input('phone');
        $pkcontacts->message = $request->input('message');
        $pkcontacts->save();

        return redirect('/contact')->with('status','Your Message sent!');

    }
}
