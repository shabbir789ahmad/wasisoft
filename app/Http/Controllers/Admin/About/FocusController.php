<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\Frontend\About\Focus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FocusController extends Controller
{
    public function index(){
        $focus =  Focus::all();
        return view('admin.aboutus', compact('focus'));
    }
    public function add(){
        return view('admin.about.add_focus');
    }
    public function edit($id){
        $focus =  Focus::find($id);
        return view('admin.about.edit_focus', compact('focus'));
    }

    public function update(Request $request, $id){

        $focus =  Focus::find($id);
        $focus->heading = $request->input('heading');
        $focus->description = $request->input('description');
        if($request->hasFile('image')){
            $destination = 'uploads/focus'.$focus->image;
            if(Storage::exists($destination)){
                Storage::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/focus/',$filename);
            $focus->image = $filename;
        }
        $focus->update();
        return redirect('/about-us')->with('status','Your Data is updated!');

    }
    public function store(Request $request){

        $focus = new Focus;
        $focus->heading = $request->input('heading');
        $focus->description = $request->input('description');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/focus/',$filename);
            $focus->image = $filename;
        }
        $focus->save();

        return redirect('/about-us')->with('status','Your Data is uploaded!');

    }

    public function delete($id){
        $focus =  Focus::findOrFail($id);
        $focus->delete();
        return redirect('/about-us')->with('status','Your Data is Deleted!');
    }
}
