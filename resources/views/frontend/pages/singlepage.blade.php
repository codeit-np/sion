@extends('frontend.app')
@section('content')
<div class="container py-5">
    <h1>Blogs</h1>
    <div class="line"></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12 p-2">
            <h1 class="text-center">{{$singleblog->title}}</h1>
        </div>
        <div class="col-lg-8 justify-center p-2 container">
            <img src="{{asset($singleblog->image)}}" width="100%;">
        </div>
        <div><p>{!!$singleblog->content!!}</p></div>
    </div>
</div>
@endsection
