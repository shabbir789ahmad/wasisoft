<?php

namespace App\Http\Controllers\frontEnd\services;

use App\Http\Controllers\Controller;
use App\Models\Frontend\About\Client;
use Illuminate\Http\Request;

class appServiceController extends Controller
{
    public function index(){
        $clients = Client::all();
        return view('frontEnd.service.MobAppServices', compact('clients'));
    }
}
