@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <div class="card">
                   <div class="card-header">
                       <h5>Admission Form</h5>

                   </div>
                   <div class="card-body">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sn</th>
                                <th>Full Name</th>
                                <th>Phone</th>
                                <th>Previous School</th>
                                <th>Hostel</th>
                                <th>Transportation</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admission as $index=>$a)
                            <tr>
                                <td>{{++$index}}</td>
                                <td>{{$a->name}}</td>
                                <td>{{$a->mobile}}</td>
                                <td>{{$a->previousschool}}</td>
                                <td>{{$a->hostel}}</td>
                                <td>{{$a->transportation}}</td>
                                <td>
                                    <a href="/admission/{{ $a->id }}" class="badge bg-info">Show</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                   </div>
               </div>
            </div>
        </div>
    </div>
@endsection
