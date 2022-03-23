<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="FYZUkMf9gAZ6ZjPOarwnH8Cqmj7KVqEsBWcjOkPZyuM" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
    integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    @yield('facebook')
    <title>{{ $setting->name??'CODE IT' }}</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
    @yield('style')
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W00Q8YFZFH"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-W00Q8YFZFH');
    </script>

  </head>
  <body>

        <!-- Address -->
        <div class="text-white py-1" style="background-color: #032198">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row g-0">
                            <div class="col-lg-2 px-0"><i class="fas fa-phone-square-alt"></i>
                                <a class="text-white text-decoration-none" href="">{{ $setting->contact??'9862130505' }}</a></div>
                            <div class="col-lg-10 px-0"><i class="far fa-envelope"></i>
                                <a class="text-white text-decoration-none" href="">{{ $setting->email??'info@codeit.com.np' }}</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Address end -->
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container">
              <a class="navbar-brand" href="/">
                @if($setting==null)
                <h1>No Title Found</h1>
                @else
                <img src="{{asset($setting->logo) }}" width="62" alt="">
                @endif
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      About Us
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach ($aboutMenue as $item)
                        @if($item==null)
                        No data found:
                        @else
                        <li><a class="dropdown-item" href="/about-us/{{ $item->slug }}">{{ $item->title }}</a></li>
                        @endif
                        @endforeach

                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Information
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach ($informationMenu as $item)
                        <li><a class="dropdown-item" href="/informations/{{ $item->slug }}">{{ $item->title }}</a></li>
                        @endforeach


                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Downloads
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach ($download as $d )
                        <li><a class="dropdown-item" href="{{$d->link}}" target="_blank">{{$d->title}}</a></li>
                        @endforeach
                    </ul>
                  </li>
                  {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Career</a>
                  </li> --}}
                  <li class="nav-item">
                    <a class="nav-link" href="/photogallery">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/notice">Notice</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/blogall">Blog</a>
                  </li>
                  
                <li class="nav-item">
                    <a class="nav-link" href="/admissionform">Admission</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/eventandnewsall">News & Events</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <!-- Navbar End -->



        <!-- Main content -->
          @yield('content')
        <!-- Main Content End -->

        <!-- Footer -->
        <footer class="section footer-classic context-dark bg-image">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <h3 class="red_sketch widgettitle">About Us</h3>
                        @foreach ($aboutMenue as $am )
                        @if ($am->id==1)
                        <p>{!! Str::limit($am->description,200)!!}</p>
                        @endif
                        @endforeach

                    </div>
                      @if(!empty($setting))
                    <div class="col-md-3 col-sm-12">
                        <h3 class="orange_sketch widgettitle">Contact Us</h3>
                        <dl class="contact-list">
                            <dt>
                             <i class="fa fa-map-marker" aria-hidden="true"></i>
                             Address
                            </dt>
                            <dd>{{$setting->address}}</dd>
                            <dt>
                                <i class="fa-solid fa-phone"></i>
                                Contact
                               </dt>
                               <dd><a href="tel:{{$setting->contact}}" class="text-decoration-none text-dark">{{$setting->contact}}</a></dd>

                               <dt>
                                <i class="fa-solid fa-envelope"></i>
                                Email
                               </dt>
                               <dd><a href="mailto:{{$setting->email}}" class="text-decoration-none text-dark">{{$setting->email}}</a></dd>
                        </dl>
                    </div>
                    @endif

                    @if(!empty($setting))

                    <div class="col-md-3 col-sm-12">
                        <h3 class="green_sketch widgettitle">Links</h3>
                        <ul class="nav-list">
                            <li><a href="{{$setting->facebook}}" target="_blank"><i class="fab fa-facebook"></i> Facebook
                            </a></li>
                            <li> <a href="{{$setting->instagram}}" target="_blank"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
                            <li><a href="{{$setting->youtube}}" target="_blank"><i class="fa-brands fa-youtube"></i>YouTube</a></li>
                        </ul>
                    </div>
                    @endif

                    <div class="col-md-3 col-sm-12">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsionschooldharan16&tabs&width=340&height=70&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%;" height="70" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe> <br>
                    </div>
                </div>
            </div>
        </footer>
        <div>
            <div class="container text-center">Powered By <strong>Code IT</strong></div>
        </div>
        <!-- Footer End -->

        <!-- JS -->
        <script  src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script  src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script>$(document).ready(function() {
            $('#example').DataTable();
        } );</script>

        {{-- popup --}}
        <script type="text/javascript">
          $(document).ready(function(){
        $("#exampleModal").modal('show');
    });
        </script>
        <script src="https://www.google.com/recaptcha/api.js"></script
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e96e0e39d880658"></script>

  </body>
</html>
