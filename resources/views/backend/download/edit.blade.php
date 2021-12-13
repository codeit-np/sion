@extends('backend.app')
@section('heading')
   Information Menu Section
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/download" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/download/{{ $download->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input id="title" class="form-control" type="text" value="{{$download->title}}" name="title" placeholder="Title">
                            </div>

                            <div class="form-group">
                                <label for="description">Link<span class="text-danger">*</span></label>
                               <input type="text" value="{{$download->link}}" class="form-control" name="link" placeholder="Enter Your Link">
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
