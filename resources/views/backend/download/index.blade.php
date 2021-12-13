@extends('backend.app')
@section('heading')
    <h1>Downloads Menu Section</h1>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-2">
            <a href="/download/create" class="btn btn-info btn-lg"><i class="fas fa-plus-square"></i> Add Information</a>

        </div>
    </div>
    <div class="row">
        @foreach ($download as $item)
        <div class="col-md-12">
            <div class="card my-2">
                <div class="card-header">
                   {{-- @if (empty($information))
                       <a href="/information/create" class="btn btn-primary btn-sm">Add</a>
                   @else --}}
                        <h3>{{ $item->id }} {{ $item->title }}</h3>
                   {{-- @endif --}}

                </div>
                <div class="card-body">
                    @if (!empty($download))
                      <div class="row py-5">
                          <div class="col-md-12">{{$item->link}}</div>
                      </div>

                      <a href="/download/{{ $item->id }}/edit" class="btn btn-primary btn-sm">Edit</a>

                    @else
                        <h4>No Record Found</h4>
                    @endif
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
