@extends('backend.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/blogs" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="card-body">
                    <form action="/blogs/{{ $blogs->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="title">Title <span class="text-danger">*</span></label>
                            <input id="title" class="form-control" type="text" name="title" placeholder="Title" value="{{ $blogs->title }}">
                        </div>

                        <div class="form-group">
                            <label for="description">Description <span class="text-danger">*</span></label>
                            <textarea id="editor" class="form-control" name="content" rows="3">{{ $blogs->content }}</textarea>
                        </div>


                       <div class="row">
                           <div class="col-md-3">
                               <div class="form-group">
                                   <label for="photo">Photo<span class="text-danger">*</span></label>
                                   <input id="photo" class="form-control-file" type="file" name="image">
                               </div>
                           </div>
                           <div class="col-md-3">
                               <img src="{{ asset($blogs->image) }}" class="img-fluid" alt="">
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
