<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\Frontend\About\Client;
use App\Models\Frontend\About\Focus;
use App\Models\Frontend\Abouts;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $aboutus = Abouts::all();
        $focus = Focus::all();
        $clients = Client::all();
        return view('frontEnd.about', compact('focus','clients'))->with('aboutus', $aboutus);
    }
}
