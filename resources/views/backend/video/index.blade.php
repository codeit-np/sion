@extends('backend.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/video/create" class="btn btn-primary btn-sm">Add Video</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>SN</th>
                            <th>Video Title</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($video as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>
                                    <a href="/video/{{ $item->id }}/edit" class="badge bg-primary">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
