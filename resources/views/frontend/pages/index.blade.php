@extends('frontend.app')

@section('content')
{{-- Popup --}}
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Notice</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @if($firstnotice)?<h2>No Notice Found</h2>:<h6>{{$firstnotice->title}}</h6>
          @endif
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
     <!-- Slider -->
     <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('slides/1.png') }}" class="d-block w-100" alt="...">
          </div>
          @foreach ($nextslide as $ns )
          <div class="carousel-item">
            <img src="{{ asset($ns->file) }}" class="d-block w-100" alt="...">
          </div>
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    <!-- Slider End -->

    <!-- Message From Principal -->
    <div class="div py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-4">
                   @if($message==null)
                   <h1>No Photo Found</h1>
                   @else
                   <img class="img-fluid img-rounded" src="{{ asset($message->photo) }}" alt="">
                   @endif
                </div>
                <div class="col-md-8">
                    <img src="" alt="">
                    @if($message==null)
                    <h1>No title Found</h1>
                    @else
                    <h1>{{ $message->title }}</h1>
                    @endif
                    <div class="line"></div>
                    @if($message==null)
                    <h1>No description Found</h1>
                    @else
                    {!! Str::limit($message->description,900) !!}
                    @endif
                    <div></div>
                    @if($message==null)
                    <h1>No Id Found</h1>
                    @else
                    <a href="/about-us/{{ $message->id }}" class="btn btn-danger mt-3 float-end">Readmore</a>
                    @endif
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Academic -->
    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://kws.edu.np/assets/img/plus_slider/ele.jpg" class="img-fluid" alt="">
                    @if($preprimary==null)
                    <h1>No Title Found</h1>
                    @else
                    <h2>{{ $preprimary->title }}</h2>
                    @endif
                    @if($preprimary==null)
                    <h1>No Description Found</h1>
                    @else
                    {!! Str::limit($preprimary->description,100) !!}
                    @endif

                    @if($preprimary==null)
                    <h1>No Image Found</h1>:
                    @else
                    <img src="{{ asset($preprimary->image) }}" class="img-fluid py-2" alt="">
                    @endif

                    @if($preprimary==null)
                    <h1>No Id Found</h1>
                    @else
                    <a href="/informations/{{ $preprimary->id }}" class="btn btn-danger ">Readmore</a>
                    @endif
                </div>


                <div class="col-md-8">
                    <img src="https://kws.edu.np/assets/img/plus_slider/swm1.jpg" class="img-fluid" alt="">
                    <h1 class="display-6 py-4">We offer the following subjects in grade 11 and 12</h1>
                    <p>
                        Nepali | English | Mathematics | Social Studies | Physics | Chemistry | Biology | Economics | Accounts | Computer Science | Business Studies and Law.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Academic End -->

    <!-- Why SION School -->
    <div class="py-5">
        <div class="container">
           <div class="row">
            <div class="col-md-6">
                @if($about==null)
                <h1>No Title Found</h1>
                @else
                <h1>{{ $about->title }}</h1>
                @endif
                <div class="line"></div>
                @if($about==null)
                <h1>No Title Found</h1>
                @else
                {!! Str::limit($about->description,700) !!}
                @endif
                <div></div>

                @if($about==null)
                <h1>No  Found</h1>
                @else
                <a href="/about-us/{{ $about->id }}" class="btn btn-danger">Readmore</a>
                @endif
            </div>
            <div class="col-md-6">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/62kKja452hI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
           </div>
        </div>
    </div>
    <!-- End -->

    <!-- Video Gallery -->
    <div class="bg-light py-5">
        <div class="container">
            <h1>Video Gallery</h1>
            <div class="line"></div>
           <div class="row">
               @foreach ($videos as $item)
                    <div class="col-md-4">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{ $item->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
               @endforeach
           </div>

           <div class="row">
               <div class="col-md-12">
                   <a href="/video-gallery" class="float-end btn btn-danger">View All</a>
               </div>
           </div>
        </div>
    </div>
    <!-- Video Gallery End -->
@endsection
