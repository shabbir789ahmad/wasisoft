<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\Frontend\About\Client;
use App\Models\Frontend\Newsletter\Newsletter;
use Illuminate\Http\Request;

class demoController extends Controller
{
    public function index(){
        $clients = Client::all();
        return view('frontEnd.demo', compact('clients'));
    }

    public function store(Request $request){
        $newsletter = new Newsletter;
        $newsletter->email = $request->input('email');
        $newsletter->save();
        return redirect('/demo')->with('status','Your Information forwarded to company!');

    }
}
