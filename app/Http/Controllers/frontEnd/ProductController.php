<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\Frontend\About\Client;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $clients = Client::all();
        return view('frontEnd.products',compact('clients'));
    }
}
