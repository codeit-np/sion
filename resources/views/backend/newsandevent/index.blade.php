@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <a href="/newsandevent/create" class="btn btn-primary btn-sm ml-4 mb-4">Add</a>
            <div class="col-md-12">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sn</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($newsandevent as $ne )
                        <tr>
                            <td>{{$loop->index +1}}</td>
                            <td>{{$ne->title}}</td>
                            <td><img src="{{asset($ne->image)}}" width="100px;"></td>
                            <td><a href="/newsandevent/{{$ne->id}}/edit" class="badge badge-success">Edit</a>&nbsp;<a href="/newsevent/{{$ne->id}}" class="badge badge-danger">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sn</th>
                            <th>Title</th>
                            {{-- <th>File</th> --}}
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
