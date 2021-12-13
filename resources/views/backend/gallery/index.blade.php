@extends('backend.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/gallery/create" class="btn btn-primary btn-sm">Add New Gallery</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>SN</th>
                            <th>Image</th>
                            <th>Facilities</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($gallery as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td><img src="{{ asset($item->featured) }}" width="64" alt=""></td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <a href="/gallery/{{ $item->id }}/edit" class="badge bg-primary">Edit</a>
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
