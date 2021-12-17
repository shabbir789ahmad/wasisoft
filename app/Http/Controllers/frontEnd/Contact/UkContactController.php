<?php

namespace App\Http\Controllers\frontEnd\Contact;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Ukcontacts;
use Illuminate\Http\Request;

class UkContactController extends Controller
{

    public function index(){
        $ukcontacts = Ukcontacts::all();
        return view('frontEnd.contact');
    }
    public function store(Request $request){
        $ukcontacts = new Ukcontacts;
        $ukcontacts->name = $request->input('name');
        $ukcontacts->email = $request->input('email');
        $ukcontacts->phone = $request->input('phone');
        $ukcontacts->message = $request->input('message');
        $ukcontacts->save();

        return redirect('/contact')->with('status','Your message sent!');

    }
}
