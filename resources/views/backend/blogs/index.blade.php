@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <a href="/blogs/create" class="btn btn-primary btn-sm ml-4 mb-4">Add</a>
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
                        @foreach ($blogs as $b)
                        <tr>
                            <td>{{$loop->index +1}}</td>
                            <td>{{$b->title}}</td>
                            <td><img src="{{asset($b->image)}}" width="100px;"></td>
                            <td><a href="/blogs/{{$b->id}}/edit" class="badge badge-success">Edit</a>&nbsp;<a href="/newsevent/{{$b->id}}" class="badge badge-danger">Delete</a></td>
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
