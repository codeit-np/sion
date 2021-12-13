@extends('frontend.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $about->title }}</h1>
            <div class="line"></div>
            {!! $about->description !!}
        </div>
        <div class="col-md-4">
            <img src="{{ asset($about->photo) }}" class="img-fluid img-rounded" alt="">
        </div>
    </div>
</div>
@endsection
