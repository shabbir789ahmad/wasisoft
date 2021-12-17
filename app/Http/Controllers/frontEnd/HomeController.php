<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\Frontend\About\Client;
use App\Models\Frontend\Home\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $slider =  Slider::all();
        $clients = Client::all();
        return view('frontEnd.index',compact('slider', 'clients'));
    }
}
