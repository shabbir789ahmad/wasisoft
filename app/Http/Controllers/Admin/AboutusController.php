<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Frontend\About\Focus;
use App\Models\Frontend\Abouts;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index(){
        $aboutus = Abouts::all();
        $focus = Focus::all();
        return view('admin.aboutus', compact('focus'))->with('aboutus', $aboutus);
    }


    public function edit($id){
        $aboutus = Abouts::findOrFail($id);
        return view('admin.about.edit')->with('aboutus',$aboutus);
    }

    public function save(Request $request){

        $aboutus = new Abouts;
        $aboutus->title = $request->input('title');
        $aboutus->subtitle = $request->input('subtitle');
        $aboutus->description = $request->input('description');
        $aboutus->description_para = $request->input('description_para');
        $aboutus->save();

        return redirect('/about-us')->with('status','Your Data is Saved!');

    }

    public function update(Request $request, $id){

        $aboutus = Abouts::findOrFail($id);
        $aboutus->title = $request->input('title');
        $aboutus->subtitle = $request->input('subtitle');
        //table attribute = input name
        $aboutus->description = $request->input('description');
        $aboutus->description_para = $request->input('description_para');
        $aboutus->update();

        // Session::flash('codestatus', 'info');

        return redirect('/about-us')->with('status','Your Data is updated!');

    }

    public function delete($id){
        $aboutus = Abouts::findOrFail($id);
        $aboutus->delete();
        return redirect('/about-us')->with('status','Your Data is Deleted!');
    }
}
