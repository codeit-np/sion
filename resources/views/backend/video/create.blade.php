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
                        <form action="/video" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input id="title" class="form-control" type="text" name="title" placeholder="Title">
                            </div>

                            <div class="form-group">
                                <label for="video"><span>Video ID (eg youtube.com/watch?v=</span><span class="text-danger">DqfbSBggxvY</span>)</label>
                                <input id="video" class="form-control" type="text" name="video" placeholder="DqfbSBggxvY">
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
