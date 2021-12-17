<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\Frontend\About\Client;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
        $clients = Client::all();
        return view('frontEnd.projects', compact('clients'));
    }
}
