@extends('frontend.app')
@section('content')
<div class="container py-5">
    <h1>Events & News</h1>
    <div class="line"></div>
   <div class="row">
       @foreach ($eventandnews as $item)
            <div class="col-md-3">
                <div class="card">
                    <img src="{{asset($item->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$item->title}}</h5>
                      <p class="card-text">{!! Str::limit($item->content,200)!!}</p>
                      <a href="singleevent/{{$item->slug}}" class="btn btn-danger btn-sm">Readmore</a>
                      <div style="margin-top:3%;">
                      <iframe src="https://www.facebook.com/plugins/share_button.php?href=https://sionschool.edu.np/singleevent/{{$item->slug}}&layout=button_count&size=large&width=110&height=28&appId" width="110" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                      </div>
                    </div>
                  </div>
            </div>
       @endforeach
   </div>
</div>
@endsection
