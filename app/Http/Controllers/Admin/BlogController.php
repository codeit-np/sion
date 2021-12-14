<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blog::all();
        return view("backend.blogs.index",compact("blogs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.blogs.create");
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
            "slug"=>"unique:blogs",
        ]);
        $blog= new Blog;
        $blog->title=$request->title;
        $blog->content=$request->content;
        $image=$request->image;
        $image_new_name=time().$image->getClientOriginalName();
        $image->move('blog',$image_new_name);
        $blog->image="blog/".$image_new_name;
        $blog->slug=Str::slug($request->title);
        $blog->save();
        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogs=Blog::find($id);
        return view('backend.blogs.edit',compact('blogs'));
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
        $blog=Blog::find($id);
        $blog->title=$request->title;
        $blog->slug=Str::slug($request->title);
        $blog->content=$request->content;
        if($request->hasFile('image'))
        {
         $image=$request->image;
         $image_new_name=time().$image->getClientOriginalName();
         $image->move('blog',$image_new_name);
         $blog->image="blog/".$image_new_name;
         $blog->save();
         return redirect()->route('blogs.index');
        }
        else{
        $blog=Blog::find($id);
        $blog->title=$request->title;
        $blog->slug=Str::slug($request->title);
        $blog->content=$request->content;
        $blog->save();
        return redirect()->route('blogs.index')->with('message', 'Data Update Successfully');

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
        $blog=Blog::find($id);
        $blog->delete();
      return redirect()->route('blogs.index');
    }
}
