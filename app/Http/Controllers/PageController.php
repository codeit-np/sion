<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Download;
use App\Models\Gallery;
use App\Models\GalleryDetail;
use App\Models\Information;
use App\Models\Newsandevents;
use App\Models\Notice;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Models\Admission;
use App\Rules\GoogleRecaptcha;

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
       $preprimary = Information::where('id',3)->first();
       $firstnotice=Notice::orderBy('id','desc')->take(1)->first();
       $firstslide=Slider::OrderBy('id','desc')->take(1)->first();
       $nextslide=Slider::orderBy('id','desc')->skip(1)->take(2)->get();
       $firstblog=Blog::orderBy('id','desc')->take(1)->first();
       $nextblog=Blog::orderBy('id','desc')->skip(1)->take(4)->get();
       $firstnewsandevent=Newsandevents::orderBy('id','desc')->take(1)->first();
       $nextnewsandevent=Newsandevents::orderBy('id','desc')->skip(1)->take(4)->get();
       $videos = Video::orderBy('id','desc')->paginate(3);

       return view('frontend.pages.index',compact('setting','aboutMenue','informationMenu','message','about','preprimary','videos','download','firstnotice','firstslide','nextslide','firstblog','nextblog','firstnewsandevent','nextnewsandevent'));
   }

   public function about($slug)
   {
       $setting = Setting::first();
       $aboutMenue = About::all();
       $informationMenu = Information::all();
       $about = About::where('slug',$slug)->first();
       $download=Download::take(4)->orderBy('id','desc')->get();


       return view('frontend.pages.about',compact('setting','aboutMenue','informationMenu','about','download'));
   }

   public function information($slug)
   {
       $setting = Setting::first();
       $aboutMenue = About::all();
       $informationMenu = Information::all();
       $information = Information::where('slug','=',$slug)->first();
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
    $download=Download::take(4)->orderBy('id','desc')->get();
    // return $images;
    return view('frontend.pages.gallery-images',compact('setting','aboutMenue','informationMenu','images','download'));
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

   public function contactsend(Request $request)
   {
       $this->validate($request,[
           "name"=>"required",
           "email"=>"required",
           "message"=>"required",
        'g-recaptcha-response' => ['required', new GoogleRecaptcha]
       ]);

       $contact=Contact::create([
           "name"=>$request->name,
           "email"=>$request->email,
           "message"=>$request->message
       ]);

       return redirect()->back();


   }

   public function singlepage($slug)
   {
       $singleblog=Blog::where('slug','=',$slug)->first();
       $setting = Setting::first();
       $aboutMenue = About::all();
       $informationMenu = Information::all();
       $blogs=Blog::all();
       $download=Download::take(4)->orderBy('id','desc')->get();
       return view('frontend.pages.singlepage',compact('setting','aboutMenue','informationMenu','download','singleblog','blogs'));
   }

   public function singleevent($slug)
   {
       $singleevent=Newsandevents::where('slug','=',$slug)->first();
       $setting = Setting::first();
       $aboutMenue = About::all();
       $informationMenu = Information::all();
       $eventsandnews=Newsandevents::all();
       $download=Download::take(4)->orderBy('id','desc')->get();
       return view('frontend.pages.singleevent',compact('setting','aboutMenue','informationMenu','download','singleevent','eventsandnews'));
   }
   public function blogall()
   {
       $setting = Setting::first();
       $aboutMenue = About::all();
       $informationMenu = Information::all();
       $download=Download::take(4)->orderBy('id','desc')->get();
       $blogall=Blog::all();
       return view('frontend.pages.blogall',compact('setting','aboutMenue','informationMenu','download','blogall'));
   }

   public function eventall()
   {
       $setting = Setting::first();
       $aboutMenue = About::all();
       $informationMenu = Information::all();
       $eventall=Newsandevents::all();
       $download=Download::take(4)->orderBy('id','desc')->get();
       $eventandnews=Newsandevents::all();
       return view('frontend.pages.eventall',compact('setting','aboutMenue','informationMenu','download','eventall','eventandnews'));
   }

   public function admissionform()
   {
         $setting = Setting::first();
       $aboutMenue = About::all();
       $informationMenu = Information::all();
       $eventall=Newsandevents::all();
       $download=Download::take(4)->orderBy('id','desc')->get();
       $eventandnews=Newsandevents::all();
       return view('frontend.pages.admissionform',compact('aboutMenue','informationMenu','eventall','download','eventandnews','setting'));
   }

   public function admission(Request $request)
   {
         $this->validate($request,[
           "email"=>"required",
           "name"=>"required",
           "address"=>"required",
           "mobile"=>"required",
           "parents"=>"required",
           "previouschool"=>"required",
           "faculty"=>"required",
           "hostel"=>"required",
           "transportation"=>"required",
           "nameandphone"=>"required",
           'terms'=>"required"
       ]);


       $admission=new Admission();
       $admission->email=$request->email;
       $admission->name=$request->name;
       $admission->address=$request->address;
       $admission->mobile=$request->mobile;
       $admission->parents=$request->parents;
       $admission->previousschool=$request->previouschool;
       $admission->faculty=$request->faculty;
       $admission->hostel=$request->hostel;
       $admission->transportation=$request->transportation;
       $admission->nameandphone=$request->nameandphone;
       $admission->terms=1;
       $admission->save();
       return redirect()->back();
   }


}
