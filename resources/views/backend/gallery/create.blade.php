@extends('backend.app')
@section('heading')
   featured Gallery
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
                        <form action="/gallery" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Gallery Name <span class="text-danger">*</span></label>
                                <input id="name" class="form-control" type="text" name="name" placeholder="name">
                            </div>

                           <div class="row">
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="featured">Featured Image<span class="text-danger">*</span></label>
                                       <input id="featured" class="form-control-file" type="file" name="featured">
                                   </div>
                               </div>
                           </div>

                           <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="images">Upload Images<span class="text-danger">*</span></label>
                                    <input id="images" class="form-control-file" type="file" name="images[]" multiple>
                                </div>
                            </div>
                        </div>

                           <button type="submit" class="btn btn-success btn-sm">Save Record</button>

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
