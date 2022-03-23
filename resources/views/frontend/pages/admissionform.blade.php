@extends('frontend.app')
@section('content')
<div class="container py-5">
    <h1>Admission</h1>
    <div class="line"></div>
   <div class="row">
    <div class="col-lg-12">
          <form action="/student/admission" method="POST">

        @if(session()->has('message'))
        <div class="alert alert-danger">
            {{ session()->get('message') }}
        </div>
    @endif
        @csrf
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <h1 class="text-center">Admission Form</h1>
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
                <label class="form-label"  for="form6Example1">Email *</label>
              <input type="email" id="form6Example1" name="email" class="form-control" value="{{ old('email') }}" />
             @error('email')
                 <span class="text-danger">{{ $message }}</span>
             @enderror
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example2">Full name *</label>
              <input type="text" id="form6Example2" name="name" class="form-control" value="{{ old('name') }}" />
              @error('name')
              <span class="text-danger">{{ $message }}</span>
          @enderror
            </div>
          </div>
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
            <label class="form-label"  for="form6Example3">Address(Please mention your full address) *</label>
          <input type="text" id="form6Example3" name="address" class="form-control" value="{{ old('address') }}"/>
          @error('address')
          <span class="text-danger">{{ $message }}</span>
      @enderror
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form6Example4">Mobile no *</label>
          <input type="number" id="form6Example4" name="mobile" class="form-control" value="{{ old('mobile') }}" />
          @error('mobile')
          <span class="text-danger">{{ $message }}</span>
      @enderror
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
            <label class="form-label"  for="form6Example5">Name of Parents *</label>
          <input type="text" id="form6Example5" name="parents" class="form-control" value="{{ old('parents') }}" />
          @error('parents')
          <span class="text-danger">{{ $message }}</span>
      @enderror
        </div>

        <!-- Number input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form6Example6">Name and address of Previous School attended *</label>
          <input type="text" id="form6Example6" name="previouschool" class="form-control" value="{{ old('previouschool') }}" />
          @error('previouschool')
          <span class="text-danger">{{ $message }}</span>
      @enderror
        </div>

         <div class="form-outline mb-4">
            <label class="form-label"  for="form6Example6">Name and Phone No of Applicant *</label>
          <input type="text" id="form6Example6" name="nameandphone" class="form-control" value="{{ old('nameandphone') }}" />
          @error('nameandphone')
          <span class="text-danger">{{ $message }}</span>
      @enderror
        </div>

        <!-- Default radio -->
        <div class="form-group">
            <h5>Stream/Faculty you are planning to join. *</h5>
      <div class="form-check">
        <label class="form-check-label" for="flexRadioDefault1">Science</label>
        <input class="form-check-input" type="radio" name="faculty" value="Science" id="flexRadioDefault1" checked/>

      </div>

      <!-- Default checked radio -->
      <div class="form-check">
        <label class="form-check-label" for="flexRadioDefault2">Commerce</label>
        <input class="form-check-input" type="radio" name="faculty" value="Commerce" id="flexRadioDefault2"/>

      </div>

      <div class="form-check">
        <label class="form-check-label" for="flexRadioDefault2">Computer Science</label>
        <input class="form-check-input" type="radio" name="faculty" value="Computer Science" id="flexRadioDefault2"/>

      </div>

      <div class="form-check">
        <label class="form-check-label" for="flexRadioDefault2">Hotel Management</label>
        <input class="form-check-input" type="radio" name="faculty" value="Hotel Management" id="flexRadioDefault2"/>

      </div>
        </div>

      <div class="form-group">
        <h5>Hostel Required *</h5>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="hostel" value="yes" id="flexRadioDefault2"/>
        <label class="form-check-label" for="flexRadioDefault2">Yes</label>
      </div>
      <div class="form-check">
      <input class="form-check-input" type="radio" name="hostel" value="no" id="flexRadioDefault2"/>
      <label class="form-check-label" for="flexRadioDefault2">No</label>
    </div>
      </div>
<div class="form-group">
    <h5>Transportation Required *</h5>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="transportation" value="yes" id="flexRadioDefault2"/>
      <label class="form-check-label" for="flexRadioDefault2">Yes</label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="transportation" value="no" id="flexRadioDefault2"/>
    <label class="form-check-label" for="flexRadioDefault2">No</label>
  </div>
  <div class="form-group">
    <h5>Terms and Conditions.The above information filled by me on this online registration form is correct. I agree to follow the rules and regulations of Sion School. ( We will contact you very soon.) Thank you very much for you patience and kind cooperation. *</h5>
    <input type="checkbox" name="terms" value="1"> Yes I Agree
    @error('terms')
        <span class="text-danger">Please Accept Terms & Condition</span>
    @enderror
  </div>
</div>







        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Save</button>
      </form>
    </div>
   </div>
</div>
@endsection
