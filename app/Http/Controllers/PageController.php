<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Gallery;
use App\Models\GalleryDetail;
use App\Models\Information;
use App\Models\Setting;
use App\Models\Video;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index()
   {
       $setting = Setting::first();
       $aboutMenue = About::all();
       $informationMenu = Information::all();
       $message = About::where('id',2)->first();
       $about = About::where('id',1)->first();
       $preprimary = Information::where('id',6)->first();
       $videos = Video::paginate(3);

       return view('frontend.pages.index',compact('setting','aboutMenue','informationMenu','message','about','preprimary','videos'));
   }

   public function about($id)
   {
       $setting = Setting::first();
       $aboutMenue = About::all();
       $informationMenu = Information::all();
       $about = About::find($id);


       return view('frontend.pages.about',compact('setting','aboutMenue','informationMenu','about'));
   }

   public function information($id)
   {
       $setting = Setting::first();
       $aboutMenue = About::all();
       $informationMenu = Information::all();
       $information = Information::findOrFail($id);
       return view('frontend.pages.information',compact('setting','aboutMenue','informationMenu','information'));
   }

   public function photogallery()
   {
    $setting = Setting::first();
    $aboutMenue = About::all();
    $informationMenu = Information::all();
    $photogallery = Gallery::all();
    return view('frontend.pages.photo-gallery',compact('setting','aboutMenue','informationMenu','photogallery'));
   }

   public function photogalleryimages($id)
   {

    $setting = Setting::first();
    $aboutMenue = About::all();
    $informationMenu = Information::all();
    $images = GalleryDetail::where('gallery_id',$id)->get();
    // return $images;
    return view('frontend.pages.gallery-images',compact('setting','aboutMenue','informationMenu','images'));
   }

   public function videogallery()
   {

    $setting = Setting::first();
    $aboutMenue = About::all();
    $informationMenu = Information::all();
    $videos = Video::all();
    // return $images;
    return view('frontend.pages.video-gallery',compact('setting','aboutMenue','informationMenu','videos'));
   }



}
