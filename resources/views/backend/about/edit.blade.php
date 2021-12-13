@extends('backend.app')
@section('heading')
    <h1>About Us Menu Section</h1>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/about" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/about/{{ $about->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input id="title" class="form-control" type="text" name="title" placeholder="Title" value="{{ $about->title }}">
                            </div>

                            <div class="form-group">
                                <label for="description">Description <span class="text-danger">*</span></label>
                                <textarea id="editor" class="form-control" name="description" rows="3">{{ $about->description }}</textarea>
                            </div>


                           <div class="row">
                               <div class="col-md-3">
                                   <div class="form-group">
                                       <label for="photo">Photo<span class="text-danger">*</span></label>
                                       <input id="photo" class="form-control-file" type="file" name="photo">
                                   </div>
                               </div>
                               <div class="col-md-3">
                                   <img src="{{ asset($about->photo) }}" class="img-fluid" alt="">
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
