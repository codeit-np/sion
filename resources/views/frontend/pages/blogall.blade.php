@extends('frontend.app')
@section('content')
<div class="container py-5">
    <h1>Blogs</h1>
    <div class="line"></div>
   <div class="row">
       @foreach ($blogall as $item)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset($item->image)}}" class="card-img-top" alt="..." style="max-height:200px;">
                    <div class="card-body">
                      <h6 class="card-title">{{$item->title}}</h6>
                      <p class="card-text">{!! Str::limit($item->content,150)!!}</p>
                      <a href="singlepage/{{$item->slug}}" class="btn btn-danger btn-sm">Readmore</a>
                    </div>
                  </div>

            </div>
       @endforeach
   </div>
</div>
@endsection
