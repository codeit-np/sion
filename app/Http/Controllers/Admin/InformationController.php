<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $information = Information::all();
        // return $information;
        return view('backend.information.index',compact('information'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.information.create');
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
            'image' => 'required',
        ]);

        $information = new Information();
        $information->title = $request->title;
        $information->description = $request->description;
        //For Photo

        if($request->hasFile('image')){
            $file = $request->image;
            $newName = time() . $file->getClientOriginalName();
            $file->move('images',$newName);
            $information->image = 'images/' . $newName;
        }
        $information->save();
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
        $information =information::find($id);
        return view('backend.information.edit',compact('information'));
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

        $information = Information::find($id);
        $information->title = $request->title;
        $information->description = $request->description;
        //For Photo

        if($request->hasFile('image')){
            $file = $request->image;
            $newName = time() . $file->getClientOriginalName();
            $file->move('images',$newName);
            $information->image = 'images/' . $newName;
        }
        $information->update();
        $request->session()->flash('message','Record Updated Successfully');
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
