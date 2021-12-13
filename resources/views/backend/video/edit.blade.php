@extends('backend.app')
@section('heading')
   Videos
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/video" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/video/{{ $video->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input id="title" class="form-control" type="text" name="title" placeholder="Title" value="{{ $video->title }}">
                            </div>

                            <div class="form-group">
                                <label for="video">Video ID</label>
                                <input id="video" class="form-control" type="text" name="video" value="{{ $video->video }}">
                            </div>



                           <button type="submit" class="btn btn-success btn-sm">Update Record</button>

                           @if (session('message'))
                                <div class="alert alert-success alert-dismissible">{{ session('message') }}</div>
                           @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
