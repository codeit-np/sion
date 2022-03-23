@extends('frontend.app')
@section('content')
<div class="container py-5">

    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset($information->image) }}" class="img-fluid img-rounded" alt="">
                </div>
            </div>
            <h1>{{ $information->title }}</h1>
            <div class="line"></div>
            {!! $information->description !!}
            
           
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5>Related link</h5>
                </div>
                <div class="card-body">
                    <table>
                        @foreach ($informationMenu as $item)
                                <tr>
                                   <td> <a class="text-decoration-none badge bg-info" href="/informations/{{ $item->slug}}">{{ $item->title }}</a></td>
                                </tr>
                        @endforeach
                    </table>
                </div>
            </div>

            <div class="card my-2">
                <div class="card-header">
                    <h5>About us</h5>
                </div>
                <div class="card-body">
                    <table>
                        @foreach ($aboutMenue as $item)
                                <tr>
                                   <td> <a class="text-decoration-none badge bg-info" href="/about-us/{{ $item->slug }}">{{ $item->title }}</a></td>
                                </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
