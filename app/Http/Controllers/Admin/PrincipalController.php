<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Principal;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $principal = Principal::all();
        // return $principal;
        return view('backend.principal.index',compact('principal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $principal = Principal::all();

        return view('backend.principal.create');
        // if(empty($principal)){
        //     return view('backend.principal.create');
        // }else{
        //     return redirect('/principal');
        // }

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
            'message' => 'required',
            'photo' => 'required',
        ]);

        $principal = new Principal();
        $principal->title = $request->title;
        $principal->message = $request->message;
        //For Photo

        if($request->hasFile('photo')){
            $file = $request->photo;
            $newName = time() . $file->getClientOriginalName();
            $file->move('images',$newName);
            $principal->photo = 'images/' . $newName;
        }
        $principal->save();
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
        $principal = Principal::find($id);
        return view('backend.principal.edit',compact('principal'));
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
            'message' => 'required',
        ]);

        $principal = Principal::find($id);
        $principal->title = $request->title;
        $principal->message = $request->message;
        //For Photo

        if($request->hasFile('photo')){
            $file = $request->photo;
            $newName = time() . $file->getClientOriginalName();
            $file->move('images',$newName);
            $principal->photo = 'images/' . $newName;
        }
        $principal->update();
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
