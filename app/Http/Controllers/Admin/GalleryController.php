<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryDetail;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::all();
        return view('backend.gallery.index',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gallery = Gallery::all();

        return view('backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'featured' => 'required',
        // ]);

        $gallery = new Gallery();
        $gallery->name = $request->name;

        //For Photo

        if($request->hasFile('featured')){
            $file = $request->featured;
            $newName = time() . $file->getClientOriginalName();
            $file->move('featured',$newName);
            $gallery->featured = 'featured/' . $newName;
        }
        $gallery->save();

        foreach($request->images as $image){
            $galleryDetail = new GalleryDetail();
            $file = $image;
            $newName = time() . $file->getClientOriginalName();
            $file->move('photo-gallery',$newName);
            $galleryDetail->name = 'photo-gallery/'. $newName;
            $galleryDetail->gallery_id = $gallery->id;
            $galleryDetail->save();
        }

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
        $gallery = Gallery::find($id);
        return view('backend.gallery.edit',compact('gallery'));
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
        $gallery =  Gallery::find($id);
        $gallery->name = $request->name;

        //For Photo

        if($request->hasFile('featured')){
            $file = $request->featured;
            $newName = time() . $file->getClientOriginalName();
            $file->move('featured',$newName);
            $gallery->featured = 'featured/' . $newName;
        }
        $gallery->update();

        if($request->hasFile('images')){
            foreach($request->images as $image){
                $galleryDetail = new GalleryDetail();
                $file = $image;
                $newName = time() . $file->getClientOriginalName();
                $file->move('photo-gallery',$newName);
                $galleryDetail->name = 'photo-gallery/'. $newName;
                $galleryDetail->gallery_id = $gallery->id;
                $galleryDetail->save();
            }
        }


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
