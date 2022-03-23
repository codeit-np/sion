@extends('backend.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/admission" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <address>
                            <h5>Personal Details</h5>
                            <hr>
                            <span style="font-weight: bold">Student Name: </span> {{ $student->name }} <br>
                            <span style="font-weight: bold">Address: </span> {{ $student->address }} <br>
                            <span style="font-weight: bold">Email: </span> {{ $student->email }} <br>
                            <span style="font-weight: bold">Mobile: </span> {{ $student->mobile }} <br>
                            <hr>
                            <h5>Guardian Details</h5>
                            <span style="font-weight: bold">Guardian Name: </span> {{ $student->parents }} <br>
                            <span style="font-weight: bold">Guardian Number: </span> {{ $student->nameandphone }} <br>

                            <hr>
                            <h5>School Details</h5>
                            <span style="font-weight: bold">Previous School: </span> {{ $student->previousschool }} <br>
                            <hr>
                            <h5>Interested in</h5>
                            <span style="font-weight: bold">Faculty: </span> {{ $student->faculty }} <br>
                            <span style="font-weight: bold">Hostel Required : </span> {{ $student->hostel }} <br>
                            <span style="font-weight: bold">Transportation Required : </span> {{ $student->transportation }} <br>
                        </address>

                        <div class="row no-print">
                            <div class="col-md-12 d-flex justify-content-end">
                                <button class="btn btn-sm mr-3 mb-3" id="btnbrown" onclick="window.print()">
                                    <i class="fa fa-print" aria-hidden="true"></i><span> Print</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
