@extends('frontend.app')
@section('content')
<div class="container py-5">
    <h1>Gallery Images</h1>
    <div class="line"></div>
    <div class="row">
        @foreach ($images as $item)
            <div class="col-md-4">
                <div class="card">
                   <div class="card-body">
                       <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $item->id }}">
                        <img src="{{ asset($item->name) }}" class="img-fluid" alt="">
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-body">
                                    <img src="{{ asset($item->name) }}" class="img-fluid" alt="">
                                </div>

                            </div>
                            </div>
                        </div>
                       </a>
                   </div>
                  </div>
            </div>
        @endforeach
    </div>

</div>
@endsection
