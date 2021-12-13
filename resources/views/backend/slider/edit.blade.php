@extends('backend.app')
@section('heading')
    Notice
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/sliders" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/sliders/{{ $slider->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="slider">Photo<span class="text-danger">*</span></label>
                                        <input id="slider" class="form-control-file" type="file" name="file">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <img src="{{ asset($slider->file) }}" class="img-fluid" alt="">
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
