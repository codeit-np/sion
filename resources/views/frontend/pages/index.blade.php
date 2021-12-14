@extends('frontend.app')

@section('content')
{{-- Popup --}}
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        {{-- <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> --}}
        <div class="modal-body">
          @if($firstnotice==null)<h2>No Notice Found</h2>@else
            <img src="{{asset($firstnotice->file)}}" width="100%;" height="800px;">
        </h6>
          @endif
        </div>
      </div>
    </div>
  </div>
     <!-- Slider -->
     <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset($firstslide->file) }}" class="d-block w-100" alt="...">
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
    <div class="div">
        {{-- changed py-5 from empty --}}
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

    {{-- Blogs --}}
    <section class="main-content">
        <div class="container-xl">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="section-header">
                        <h3 class="section-title">Blogs</h3>
                        <div class="line"></div>
                    </div>
                    <div class="padding-30 rounded bordered">
                        <div class="row gy-5">
                            <div class="col-sm-6">
                                <!-- post  -->
                                <div class="post">
                                    <div class="thumb rounded">
                                        <a href="/singlepage/{{$firstblog->slug}}">
                                            <div class="inner">
                                                <img src="{{asset($firstblog->image)}}" class="img-fluid  rounded" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <ul class="meta list-inline mt-4 mb-0">
                                        {{-- <li class="list-inline-item">
                                            <a href="#">
                                                <img class="author" src="http://127.0.0.1:8000/slides/1.png" class="img-fluid" alt="" width="100px;">
                                                Techie Coder
                                            </a>
                                        </li> --}}
                                        <li class="list-inline-item">{{$firstblog->created_at->format('d M Y')}}</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3">
                                        <a href="/singlepage/{{$firstblog->slug}}">{{$firstblog->title}}</a>
                                    </h5>
                                    <p class="excerpt mb-0 text-justify">
                                      {!!$firstblog->content!!}

                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                @foreach ($nextblog as $nb )
                                <div class="post post-list-sm square">
                                    <div class="thumb rounded">
                                        <a href="/singlepage/{{$nb->slug}}">
                                            <div class="inner">
                                                <img src="{{asset($nb->image)}}" class="img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="details clearfix">
                                        <h6 class="post-title my-0">
                                            <a href="/singlepage/{{$nb->slug}}">
                                               {{$nb->title}}
                                            </a>
                                        </h6>
                                        <ul class="meta list-inline mt-1 mb-0">
                                            <li class="list-inline-item">{{$nb->created_at->format('d M Y')}}</li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach

                            </div>

                        </div>
                    </div>
                </div>
                {{-- /Blogs --}}

                <div class="col-lg-6">
                    <div class="section-header">
                        <h3 class="section-title">News & Events</h3>
                        <div class="line"></div>
                    </div>
                    <div class="padding-30 rounded bordered">
                        <div class="row gy-5">
                            <div class="col-sm-6">
                                <!-- post  -->
                                <div class="post">
                                    <div class="thumb rounded">
                                        <a href="/singleevent/{{$firstnewsandevent->slug}}">
                                            <div class="inner">
                                                <img src="{{asset($firstnewsandevent->image)}}" class="img-fluid  rounded" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <ul class="meta list-inline mt-4 mb-0">
                                        {{-- <li class="list-inline-item">
                                            <a href="#">
                                                <img class="author" src="http://127.0.0.1:8000/slides/1.png" class="img-fluid" alt="" width="100px;">
                                                Techie Coder
                                            </a>
                                        </li> --}}
                                        <li class="list-inline-item">{{$firstnewsandevent->date}}</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3">
                                        <a href="/singleevent/{{$firstnewsandevent->slug}}">{{$firstnewsandevent->title}}</a>
                                    </h5>
                                    <p class="excerpt mb-0">
                                        {!!$firstnewsandevent->content!!}

                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                @foreach ($nextnewsandevent as $nne )
                                <div class="post post-list-sm square">
                                    <div class="thumb rounded">
                                        <a href="/singleevent/{{$nne->slug}}">
                                            <div class="inner">
                                                <img src="{{asset($nne->image)}}" class="img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="details clearfix">
                                        <h6 class="post-title my-0">
                                            <a href="/singleevent/{{$nne->slug}}">
                                                {{$nne->title}}
                                            </a>
                                        </h6>
                                        <ul class="meta list-inline mt-1 mb-0">
                                            <li class="list-inline-item">{{$nne->date}}</li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>

                </div>
    </div>
</div>
</section>
    {{-- /News and events --}}
@endsection
