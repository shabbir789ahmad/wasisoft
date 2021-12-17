<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\Frontend\About\Client;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class WebServiceController extends Controller
{
    public function index(){
        $clients = Client::all();
        return view('frontEnd.service.WebDepServices',compact('clients'));
    }
}
