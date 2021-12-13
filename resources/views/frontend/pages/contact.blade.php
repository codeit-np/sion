@extends('frontend.app')
@section('style')
<style>
    input{
        margin-bottom:10px;
    }
</style>
@endsection
@section('content')
<div class="container py-5">
    <h1>Contact Us</h1>
    <div class="line"></div>
</div>
<div class="form-section">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <!-- All the inputs are situated here  -->
            <div class="form-div col-lg-6 bg-light mx-4">
                <h3>Ready to Get Started?</h3>
                <form action="#">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Enter name" required>
                      </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" rows="8" id="message" placeholder="Message"></textarea>
                      </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-danger" id="btnSubmit">Send Message</button>
                      </div>
                </form>
            </div>

            <!-- Side information  -->
            <div class="info-div col-lg-5 my-2">
                <h1>Contact Anytime</h1>
                <div class="form-group">
                    <button type="submit" class="btn btn-danger" style="background-color:#032198;border:none;" id="btnGetDirection"><a href="#btnGetDirection" style="color:#fff;">Get Direction</a>&#8594;</button>
                </div>
                <hr class="my-5">
                <h5 class="mb-3">Our Location</h5>
                <address>
                    {{ $setting->address }} <br>
                    <strong>Tel: </strong> {{ $setting->contact }} <br>
                    <strong>Email</strong> {{ $setting->email }}
                </address>
            </div>

        </div>
    </div>
</div>

<!-- Map Information  -->
<div class="map-section">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" id="btnGetDirection">
           @if($setting==null)
           <h2>No Data Found</h2>
           @else
           {!!  $setting->googlemap !!}
           @endif
        </div>
    </div>
</div>
</div>
@endsection
