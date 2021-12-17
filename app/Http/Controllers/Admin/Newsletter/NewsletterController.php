<?php

namespace App\Http\Controllers\Admin\Newsletter;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Newsletter\Newsletter;

class NewsletterController extends Controller
{
    public function index(){
        $newsletter = Newsletter::all();
        return view('admin.demo' , compact('newsletter'));
    }
}
