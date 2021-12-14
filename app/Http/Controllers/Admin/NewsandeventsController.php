<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Newsandevents;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsandeventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsandevent=Newsandevents::all();
        return view("backend.newsandevent.index",compact("newsandevent"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.newsandevent.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "title"=>"required",
            "image"=>"required|max:50000",
            "content"=>"required",
            "slug"=>"unique:newsandeventss",
        ]);
        $newsandevents= new Newsandevents();
        $newsandevents->title=$request->title;
        $newsandevents->content=$request->content;
        $image=$request->image;
        $image_new_name=time().$image->getClientOriginalName();
        $image->move('newsandevents',$image_new_name);
        $newsandevents->image="newsandevents/".$image_new_name;
        $newsandevents->slug=Str::slug($request->title);
        $newsandevents->date=$request->date;
        $newsandevents->save();
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
        $newsandevent=Newsandevents::find($id);
        return view('backend.newsandevent.edit',compact('newsandevent'));

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
        $this->validate($request,[
            "title"=>"required",
            "content"=>"required",
        ]);
        $image=$request->image;
        $newsandevent=Newsandevents::find($id);
        $newsandevent->title=$request->title;
        $newsandevent->slug=Str::slug($request->title);
        $newsandevent->content=$request->content;
        $newsandevent->date=$request->date;
        if($request->hasFile('image'))
        {
         $image=$request->image;
         $image_new_name=time().$image->getClientOriginalName();
         $image->move('newsandevent',$image_new_name);
         $newsandevent->image="newsandevent/".$image_new_name;
         $newsandevent->save();
         return redirect()->route('newsandevent.index');
        }
        else{
        $newsandevent=Newsandevents::find($id);
        $newsandevent->title=$request->title;
        $newsandevent->slug=Str::slug($request->title);
        $newsandevent->content=$request->content;
        $newsandevent->date=$request->date;
        $newsandevent->save();
        return redirect()->route('newsandevent.index')->with('message', 'Data Update Successfully');

        }
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
