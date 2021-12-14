@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/newsandevent" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/newsandevent/{{$newsandevent->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input id="title" class="form-control" type="text" value="{{$newsandevent->title}}" name="title" placeholder="Title">
                            </div>

                            <div class="form-group">
                                <label for="content">Description <span class="text-danger">*</span></label>
                                <textarea id="editor" class="form-control" name="content" rows="3">{{$newsandevent->content}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="title">Date <span class="text-danger">*</span></label>
                                <input id="title" class="form-control" type="date" value="{{$newsandevent->date}}" name="date" placeholder="Title">
                            </div>



                           <div class="row">
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="photo">Photo<span class="text-danger">*</span></label>
                                       <input id="photo" class="form-control-file" value="{{$newsandevent}}" type="file" name="image">
                                   </div>
                                   <img src="{{asset($newsandevent->image)}}" width="200px;">
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
