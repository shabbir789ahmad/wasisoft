<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\Frontend\About\Client;
use App\Models\Frontend\Contacts;
use App\Models\Frontend\Ukcontacts;
use App\Models\Frontend\Pkcontacts;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contactus = Contacts::all();
        $ukcontacts = Ukcontacts::all();
        $pkcontacts = Pkcontacts::all();
        $clients = Client::all();
        return view('frontEnd.contact',compact('clients', 'contactus', 'ukcontacts' , 'pkcontacts'));
    }

    public function store(Request $request){
        $ukcontacts = new Ukcontacts;
        $ukcontacts->name = $request->input('name');
        $ukcontacts->email = $request->input('email');
        $ukcontacts->phone = $request->input('phone');
        $ukcontacts->message = $request->input('message');
        $ukcontacts->save();

        return redirect('/contact')->with('status','Your Data is Saved!');

    }
}
