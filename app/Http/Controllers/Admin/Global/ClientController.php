<?php

namespace App\Http\Controllers\Admin\Global;

use App\Http\Controllers\Controller;
use App\Models\Frontend\About\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::all();
        return view('admin.globalcontent', compact('clients'));
    }

    public function add(){
        return view('admin.global.add_global');
    }

    public function edit($id){
        $clients = Client::findOrFail($id);
        return view('admin.global.edit_global')->with('clients',$clients);
    }

    public function store(Request $request){

        $clients = new Client;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/clients/',$filename);
            $clients->image = $filename;
        }
        $clients->save();

        return redirect('/global-content')->with('status','Your Data is uploaded!');

    }

    public function update(Request $request, $id)
    {
        $clients =  Client::find($id);
        if($request->hasFile('image'))
        {
            $destination = 'uploads/clients'.$clients->image;
            if(Storage::exists($destination))
            {
                Storage::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/clients/',$filename);
            $clients->image = $filename;
        }
        $clients->update();
        return redirect('/global-content')->with('status','Your Data is updated!');

    }

    public function delete($id){
        $clients = Client::findOrFail($id);
        $clients->delete();
        return redirect('/global-content')->with('status','Your Data is Deleted!');
    }
}
