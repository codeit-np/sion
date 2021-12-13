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
                        <a href="/post-notice" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/post-notice/{{ $notice->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="title">Notice Title <span class="text-danger">*</span></label>
                                <input id="title" class="form-control" type="text" name="title" placeholder="Notice Title" value="{{ $notice->title }}">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="file">Attach Notice<span class="text-danger">*</span></label>
                                        <input id="file" class="form-control-file" type="file" name="file" accept="image/*">
                                    </div>
                                </div>
                            </div>

                            <div class="my-3">
                                <img src="{{ asset($notice->file) }}" width="120" alt="">
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
