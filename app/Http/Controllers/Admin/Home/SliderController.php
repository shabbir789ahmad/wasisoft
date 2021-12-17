<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Home\Slider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $slider =  Slider::all();
        return view('admin.home.home', compact('slider'));
    }

    public function edit($id){
        $slider =  Slider::find($id);
        return view('admin.home.edit', compact('slider'));
    }

    public function update(Request $request, $id){

        $slider =  Slider::find($id);
        $slider->heading = $request->input('heading');
        $slider->description = $request->input('description');
        if($request->hasFile('image')){
            $destination = 'uploads/slider'.$slider->image;
            if(Storage::exists($destination)){
                Storage::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/slider/',$filename);
            $slider->image = $filename;
        }
        $slider->update();
        return redirect('/Admin-Home')->with('status','Your Data is updated!');

    }
    public function store(Request $request){

        $slider = new Slider;
        $slider->heading = $request->input('heading');
        $slider->description = $request->input('description');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/slider/',$filename);
            $slider->image = $filename;
        }
        $slider->save();

        return redirect('/Admin-Home')->with('status','Your Data is uploaded!');

    }

    public function delete($id){
        $slider =  Slider::findOrFail($id);
        $slider->delete();
        return redirect('/Admin-Home')->with('status','Your Data is Deleted!');
    }
}
