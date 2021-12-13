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
                        <form action="/setting" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Company Name <span class="text-danger">*</span></label>
                                <input id="name" class="form-control" type="text" name="name" placeholder="Company Name">
                            </div>

                           <div class="row">
                               <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address">Company Address <span class="text-danger">*</span></label>
                                    <input id="address" class="form-control" type="text" name="address">
                                </div>
                               </div>
                               <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact">Contact Number <span class="text-danger">*</span></label>
                                    <input id="contact" class="form-control" type="text" name="contact">
                                </div>
                               </div>
                           </div>

                           <div class="row">
                               <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Company Email (Optional)</label>
                                    <input id="email" class="form-control" type="text" name="email" placeholder="eg,company@yourdomain.com">
                                 </div>
                               </div>

                               <div class="col-md-6">
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input id="text" class="form-control" type="text" name="facebook" placeholder="eg,">
                                 </div>
                               </div>
                           </div>

                           <div class="row">
                            <div class="col-md-6">
                             <div class="form-group">
                                 <label for="instagram">Instagram</label>
                                 <input id="text" class="form-control" type="text" name="instagram" placeholder="eg,">
                              </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="time">Youtube</label>
                                    <input id="time" class="form-control" type="text" name="youtube" placeholder="eg 10:00 am - 5:00 pm">
                                 </div>
                               </div>
                           </div>

                           <div class="row">
                            <div class="col-md-6">
                             <div class="form-group">
                                 <label for="time">Company Time (Optional)</label>
                                 <input id="time" class="form-control" type="text" name="time" placeholder="eg 10:00 am - 5:00 pm">
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="time">Google Map</label>
                                    <input id="text" class="form-control" type="text" name="googlemap" placeholder="eg">
                                 </div>
                               </div>
                           </div>
                        </div>


                           <div class="row">
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="logo">Upload Company Logo <span class="text-danger">*</span></label>
                                       <input id="logo" class="form-control-file" type="file" name="logo">
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
