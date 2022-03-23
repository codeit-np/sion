@extends('frontend.app')
@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-lg-10">
            <h1>{{$singleblog->title}}</h1>
            <img src="{{asset($singleblog->image)}}" width="100%;">
            <div><p>{!!$singleblog->content!!}</p></div>

        </div>
        <div class="col-lg-2 mt-md-5">
            <div class="row">
                @foreach ($blogs as $b )
                <div class="col-md-12 card">
                    <img src="{{asset($b->image)}}" class="img-fluid" style="max-height:200px;">
                    <strong><a href="/singlepage/{{$b->slug}}" style="text-decoration: none;color:#000;">{{$b->title}}</a></strong>

                </div>
                @endforeach
            </div>

        </div>

    </div>
</div>
@endsection
