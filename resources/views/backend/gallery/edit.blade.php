@extends('backend.app')
@section('heading')
   Image Gallery Edit
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/gallery" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/gallery/{{ $gallery->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">Gallery Name <span class="text-danger">*</span></label>
                                <input id="name" class="form-control" type="text" name="name" placeholder="name" value="{{ $gallery->name }}">
                            </div>

                           <div class="row">
                               <div class="col-md-3">
                                   <div class="form-group">
                                       <label for="featured">Photo<span class="text-danger">*</span></label>
                                       <input id="featured" class="form-control-file" type="file" name="featured">
                                   </div>
                               </div>
                               <div class="col-md-3">
                                   <img src="{{ asset($gallery->featured) }}" class="img-fluid" alt="">
                               </div>


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
