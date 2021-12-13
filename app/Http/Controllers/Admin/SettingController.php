<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();
        // return $setting;
        return view('backend.settings.index',compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting = Setting::first();
        if(empty($setting)){
            return view('backend.settings.create');
        }else{
            return redirect('/setting');
        }

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
                'name' => 'required',
                'address' => 'required',
                'contact' => 'required',
                'logo' => 'required',
            ]);

            $setting = new Setting();
            $setting->name = $request->name;
            $setting->address = $request->address;
            $setting->contact = $request->contact;
            $setting->email = $request->email;
            $setting->office_time = $request->time;

            //For Logo

            if($request->hasFile('logo')){
                $file = $request->logo;
                $newName = time() . $file->getClientOriginalName();
                $file->move('images',$newName);
                $setting->logo = 'images/' . $newName;
            }
            $setting->save();
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
        $setting = Setting::find($id);
        return view('backend.settings.edit',compact('setting'));
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
            'name' => 'required',
            'address' => 'required',
            'contact' => 'required',
        ]);

        $setting =  Setting::find($id);
        $setting->name = $request->name;
        $setting->address = $request->address;
        $setting->contact = $request->contact;
        $setting->email = $request->email;
        $setting->office_time = $request->time;

        //For Logo

        if($request->hasFile('logo')){
            $file = $request->logo;
            $newName = time() . $file->getClientOriginalName();
            $file->move('images',$newName);
            $setting->logo = 'images/' . $newName;
        }
        $setting->save();
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
