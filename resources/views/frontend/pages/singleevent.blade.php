@extends('frontend.app')
@section('facebook')
<meta property="og:title" content="{{$singleevent->title }}">
<meta property="og:image" content="{{asset($singleevent->image)}}">
<meta property="og:description" content="{{$singleevent->content}}">
@endsection
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-10">
            <h1>{{$singleevent->title}}</h1>
            <img src="{{asset($singleevent->image)}}" width="100%;">
            <div><p>{!!$singleevent->content!!}</p></div>
             <iframe src="https://www.facebook.com/plugins/share_button.php?href=https://sionschool.edu.np/singleevent/{{$singleevent->slug}}&layout=button_count&size=large&width=110&height=28&appId" width="110" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>
        <div class="col-lg-2 mt-md-5">
            <div class="row">
                @foreach ($eventsandnews as $en )
                <div class="col-md-12 card">
                    <img src="{{asset($en->image)}}" class="img-fluid" style="max-height:200px;">
                    <strong><a href="/singleevent/{{$en->slug}}" style="text-decoration: none;color:#000;">{{$en->title}}</a></strong>

                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
@endsection
