<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        return view('backend.about.index',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $about = About::first();
        // if(empty($about)){

        // }else{
        //     return redirect('/about');
        // }

        return view('backend.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $about = new About();
        $about->title = $request->title;
        $about->description = $request->description;
        //For Photo

        if($request->hasFile('photo')){
            $file = $request->photo;
            $newName = time() . $file->getClientOriginalName();
            $file->move('images',$newName);
            $about->photo = 'images/' . $newName;
        }
        $about->save();
        $request->session()->flash('message','Record Saved Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::find($id);
        return view('backend.about.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $about =  About::find($id);
        $about->title = $request->title;
        $about->description = $request->description;
        //For Photo

        if($request->hasFile('photo')){
            $file = $request->photo;
            $newName = time() . $file->getClientOriginalName();
            $file->move('images',$newName);
            $about->photo = 'images/' . $newName;
        }
        $about->update();
        $request->session()->flash('message','Record Saved Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
