@extends('backend.app')
@section('heading')
    Message
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/principal" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/principal" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input id="title" class="form-control" type="text" name="title" placeholder="Title">
                            </div>

                            <div class="form-group">
                                <label for="message">Message <span class="text-danger">*</span></label>
                                <textarea id="editor" class="form-control" name="message" rows="3"></textarea>
                            </div>


                           <div class="row">
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="photo">Photo<span class="text-danger">*</span></label>
                                       <input id="photo" class="form-control-file" type="file" name="photo">
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
