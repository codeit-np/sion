@extends('backend.app')
@section('heading')
    Message
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   {{-- @if (empty($principal))
                       <a href="/principal/create" class="btn btn-primary btn-sm">Add Message From Principal</a>
                   @else
                        <h3>Message</h3>
                   @endif --}}

                   <a href="/principal/create" class="btn btn-primary btn-sm">Add Message</a>

                </div>

                @foreach ($principal as $principal)
                    <div class="card-body">
                        @if (!empty($principal))
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset($principal->photo) }}" width="120" alt="">
                            </div>
                        </div>

                        <div class="row py-5">
                            <div class="col-md-12">
                                <h2>{{ $principal->title }}</h2>
                                {!! $principal->message !!}
                            </div>
                        </div>

                        <a href="/principal/{{ $principal->id }}/edit" class="btn btn-primary btn-sm">Edit</a>

                        @else
                            <h4>No Record Found</h4>
                        @endif
                    </div>
                    <hr>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
