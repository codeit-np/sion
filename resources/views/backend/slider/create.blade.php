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
                        <form action="/sliders" method="post" enctype="multipart/form-data">
                            @csrf
                           <div class="row">
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="file">Slider<span class="text-danger">*</span></label>
                                       <input id="file" class="form-control-file" type="file" name="file" accept="image/*">
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
