@extends('frontend.app')
@section('content')
<div class="container py-5">
    <h1>Photo Gallery</h1>
    <div class="line"></div>
    <div class="row">
        @foreach ($photogallery as $item)
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset($item->featured) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">{{ Str::limit($item->name,50) }}</p>
                      <a href="/photogallery/{{ $item->id }}" class="btn btn-primary">View All</a>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>

</div>
@endsection
