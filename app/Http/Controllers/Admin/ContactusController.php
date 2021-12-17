<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Contacts;
use App\Models\Frontend\Ukcontacts;
use App\Models\Frontend\Pkcontacts;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function index(){
        $contactus = Contacts::all();
        $ukcontacts = Ukcontacts::all();
        $pkcontacts = Pkcontacts::all();
        return view('admin.contactus')->with('contactus', $contactus)->with('ukcontacts', $ukcontacts)->with('pkcontacts', $pkcontacts);
    }


    public function edit($id){
        $contactus = Contacts::findOrFail($id);
        return view('admin.about.edit')->with('contactus',$contactus);
    }

    public function save(Request $request){

        $contactus = new Contacts;
        $contactus->title = $request->input('title');
        $contactus->subtitle = $request->input('subtitle');
        $contactus->save();

        return redirect('/contact-us')->with('status','Your Data is Saved!');

    }

    public function update(Request $request, $id){

        $contactus = Contacts::findOrFail($id);
        $contactus->title = $request->input('title');
        $contactus->subtitle = $request->input('subtitle');
        $contactus->update();

        return redirect('/contact-us')->with('status','Your Data is updated!');

    }

    public function delete($id){
        $contactus = Contacts::findOrFail($id);
        $contactus->delete();
        return redirect('/contact-us')->with('status','Your Data is Deleted!');
    }
}
