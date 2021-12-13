@extends('backend.app')
@section('heading')
    <h1>Information Menu Section</h1>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-2">
            <a href="/information/create" class="btn btn-info btn-lg"><i class="fas fa-plus-square"></i> Add Information</a>

        </div>
    </div>
    <div class="row">
        @foreach ($information as $item)
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
                    @if (!empty($information))
                      <div class="row">
                          <div class="col-md-3">
                            <img src="{{ asset($item->image) }}" width="120" alt="">
                          </div>
                      </div>

                      <div class="row py-5">
                          <div class="col-md-12">{!! $item->description !!}</div>
                      </div>

                      <a href="/information/{{ $item->id }}/edit" class="btn btn-primary btn-sm">Edit</a>

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
