@extends('backend.app')
@section('heading')
    General Settings
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/setting" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/setting/{{ $setting->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">Company Name <span class="text-danger">*</span></label>
                                <input id="name" class="form-control" type="text" name="name" placeholder="Company Name" value="{{ $setting->name }}">
                            </div>

                           <div class="row">
                               <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address">Company Address <span class="text-danger">*</span></label>
                                    <input id="address" class="form-control" type="text" name="address" value="{{ $setting->address }}">
                                </div>
                               </div>
                               <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact">Contact Number <span class="text-danger">*</span></label>
                                    <input id="contact" class="form-control" type="text" name="contact" value="{{ $setting->contact }}">
                                </div>
                               </div>
                           </div>

                           <div class="row">
                               <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Company Email (Optional)</label>
                                    <input id="email" class="form-control" type="text" name="email" placeholder="eg,company@yourdomain.com" value="{{ $setting->email }}">
                                 </div>
                               </div>

                               <div class="col-md-6">
                                <div class="form-group">
                                    <label for="time">Facebook</label>
                                    <input id="time" class="form-control" type="text" name="facebook" placeholder="eg " value="{{ $setting->facebook }}">
                                 </div>
                               </div>
                           </div>

                           <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="time">Instagram</label>
                                    <input id="instagram" class="form-control" type="text" name="instagram" placeholder="eg " value="{{ $setting->instagram}}">
                                 </div>
                               </div>


                               <div class="col-md-6">
                                <div class="form-group">
                                    <label for="time">Youtube</label>
                                    <input id="time" class="form-control" type="text" name="youtube" placeholder="eg youtube" value="{{ $setting->youtube }}">
                                 </div>
                               </div>
                           </div>

                           <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="time">Company Time (Optional)</label>
                                    <input id="time" class="form-control" type="text" name="time" placeholder="eg 10:00 am - 5:00 pm" value="{{ $setting->office_time }}">
                                 </div>
                               </div>

                               <div class="col-md-6">
                                <div class="form-group">
                                    <label for="googlemap">Text</label>
                                    <textarea id="googlemap" class="form-control" name="googlemap" rows="3">{{ $setting->googlemap }}</textarea>
                                </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-md-3">
                                   <div class="form-group">
                                       <label for="logo">Upload Company Logo <span class="text-danger">*</span></label>
                                       <input id="logo" class="form-control-file" type="file" name="logo">
                                   </div>
                               </div>

                               <div class="col-md-2">
                                   <img src="{{ asset($setting->logo) }}" class="img-fluid" alt="">
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
