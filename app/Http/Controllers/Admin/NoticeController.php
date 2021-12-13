<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Faker\Core\File;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::orderBy('id','desc')->get();
        return view('backend.notice.index',compact('notices'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.notice.create');
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
            'file' => 'required'
        ]);

        $notice = new Notice();
        $notice->title = $request->title;
        if($request->hasFile('file')){
            $file = $request->file;
            $newName = time() . $file->getClientOriginalName();
            $file->move("notices",$newName);
            $notice->file = "notices/" . $newName;
        }

        $notice->save();
        $request->session()->flash('message',"Record Saved");
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
        $notice = Notice::find($id);
        return view('backend.notice.edit',compact('notice'));
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
        ]);

        $notice = Notice::find($id);
        $notice->title = $request->title;
        if($request->hasFile('file')){
            $file = $request->file;
            $newName = time() . $file->getClientOriginalName();
            $file->move("notices",$newName);
            $notice->file = "notices/" . $newName;
        }

        $notice->update();
        $request->session()->flash('message',"Record Updated");
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
        $notice = Notice::find($id);
        unlink($notice->file);
        $notice->delete();
        return redirect("/post-notice");

    }
}
