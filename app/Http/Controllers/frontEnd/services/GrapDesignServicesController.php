<?php

namespace App\Http\Controllers\frontEnd\services;

use App\Http\Controllers\Controller;
use App\Models\Frontend\About\Client;
use Illuminate\Http\Request;

class GrapDesignServicesController extends Controller
{
    public function index(){
        $clients = Client::all();
        return view('frontEnd.service.GrapDesignServices',compact('clients'));
    }
}
