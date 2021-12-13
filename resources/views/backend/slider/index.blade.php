@extends('backend.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                       <a href="/sliders/create" class="btn btn-primary btn-sm">Add Slider</a>

                </div>
                <div class="card-body">
                    @if (!empty($slider))
                    <table class="table">
                        <tr>
                            <th>Sn</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($slider as $s )
                        <tr>
                            <td>{{$loop->index +1}}</td>
                           <td><img src="{{ asset($s->file) }}" alt="" width="64"></td>
                           <td>
                               <a href="/sliders/{{ $s->id }}/edit" class="badge bg-primary">Edit</a>
                           </td>
                       </tr>
                        @endforeach


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
