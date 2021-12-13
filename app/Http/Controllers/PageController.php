<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Download;
use App\Models\Gallery;
use App\Models\GalleryDetail;
use App\Models\Information;
use App\Models\Notice;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Video;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index()
   {
       $setting = Setting::first();
       $aboutMenue = About::all();
       $informationMenu = Information::all();
       $download=Download::take(4)->orderBy('id','desc')->get();
       $message = About::where('id',2)->first();
       $about = About::where('id',1)->first();
       $preprimary = Information::where('id',6)->first();
       $firstnotice=Notice::orderBy('id','desc')->take(1)->first();
       $firstslide=Slider::OrderBy('id','desc')->take(1)->first();
       $nextslide=Slider::skip(1)->take(2)->get();
       $videos = Video::paginate(3);

       return view('frontend.pages.index',compact('setting','aboutMenue','informationMenu','message','about','preprimary','videos','download','firstnotice','firstslide','nextslide'));
   }

   public function about($id)
   {
       $setting = Setting::first();
       $aboutMenue = About::all();
       $informationMenu = Information::all();
       $about = About::find($id);
       $download=Download::take(4)->orderBy('id','desc')->get();


       return view('frontend.pages.about',compact('setting','aboutMenue','informationMenu','about','download'));
   }

   public function information($id)
   {
       $setting = Setting::first();
       $aboutMenue = About::all();
       $informationMenu = Information::all();
       $information = Information::findOrFail($id);
       $download=Download::take(4)->orderBy('id','desc')->get();
       return view('frontend.pages.information',compact('setting','aboutMenue','informationMenu','information','download'));
   }

   public function photogallery()
   {
    $setting = Setting::first();
    $aboutMenue = About::all();
    $informationMenu = Information::all();
    $photogallery = Gallery::all();
    $download=Download::take(4)->orderBy('id','desc')->get();
    return view('frontend.pages.photo-gallery',compact('setting','aboutMenue','informationMenu','photogallery','download'));
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
    $download=Download::take(4)->orderBy('id','desc')->get();
    // return $images;
    return view('frontend.pages.video-gallery',compact('setting','aboutMenue','informationMenu','videos','download'));
   }

   public function contact()
   {
    $setting = Setting::first();
    $aboutMenue = About::all();
    $informationMenu = Information::all();
    $photogallery = Gallery::all();
    $download=Download::take(4)->orderBy('id','desc')->get();
       return view('frontend.pages.contact',compact('setting','aboutMenue','informationMenu','photogallery','download'));
   }

   public function notice()
   {
       $setting = Setting::first();
       $aboutMenue = About::all();
       $informationMenu = Information::all();
       $photogallery = Gallery::all();
       $download=Download::take(4)->orderBy('id','desc')->get();
       $notice=Notice::orderBy('id','desc')->get();
       return view('frontend.pages.notice',compact('notice','setting','aboutMenue','informationMenu','photogallery','download'));
   }



}
