@extends('frontend.app')
@section('content')
<div class="container py-5">
    <h1>Video Gallery</h1>
    <div class="line"></div>
   <div class="row">
       @foreach ($videos as $item)
            <div class="col-md-4">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{ $item->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
       @endforeach
   </div>
</div>
@endsection
