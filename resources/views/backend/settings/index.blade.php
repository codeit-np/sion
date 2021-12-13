@extends('backend.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   @if (empty($setting))
                       <a href="/setting/create" class="btn btn-primary btn-sm">Add General Setting</a>
                   @else
                        <h3>General Setting</h3>
                   @endif

                </div>
                <div class="card-body">
                    @if (!empty($setting))
                    <table class="table">
                        <tr>
                            <th>Logo</th>
                            <th>Company</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Office Time</th>
                            <th>Action</th>
                        </tr>

                        <tr>
                            <td><img src="{{ asset($setting->logo) }}" alt="" width="64"></td>
                            <td>{{ $setting->name }}</td>
                            <td>{{ $setting->address }}</td>
                            <td>{{ $setting->contact }}</td>
                            <td>{{ $setting->email }}</td>
                            <td>{{ $setting->office_time }}</td>
                            <td>
                                <a href="/setting/{{ $setting->id }}/edit" class="badge bg-primary">Edit</a>
                            </td>
                        </tr>
                    </table>

                    @else
                        <h4>No Record Found</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
