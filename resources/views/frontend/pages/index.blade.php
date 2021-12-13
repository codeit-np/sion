@extends('frontend.app')

@section('content')
     <!-- Slider -->
     <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('slides/1.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('slides/2.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('slides/1.png') }}" class="d-block w-100" alt="...">
          </div>
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
                    <img class="img-fluid img-rounded" src="{{ asset($message->photo) }}" alt="">
                </div>
                <div class="col-md-8">
                    <img src="" alt="">
                    <h1>{{ $message->title }}</h1>
                    <div class="line"></div>
                    {!! Str::limit($message->description,900) !!}
                    <div></div>
                    <a href="/about-us/{{ $message->id }}" class="btn btn-danger mt-3 float-end">Readmore</a>
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
                    <h2>{{ $preprimary->title }}</h2>
                    {!! Str::limit($preprimary->description,100) !!}

                    <img src="{{ asset($preprimary->image) }}" class="img-fluid py-2" alt="">

                    <a href="/informations/{{ $preprimary->id }}" class="btn btn-danger ">Readmore</a>
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
                <h1>{{ $about->title }}</h1>
                <div class="line"></div>
                {!! Str::limit($about->description,700) !!}
                <div></div>
                <a href="/about-us/{{ $about->id }}" class="btn btn-danger">Readmore</a>
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
