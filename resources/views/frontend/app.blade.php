<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <title>{{ $setting->name??'CODE IT' }}</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
    @yield('style')

  </head>
  <body>

        <!-- Address -->
        <div class="text-white py-1" style="background-color: #032198">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <i class="fas fa-phone-square-alt"></i>
                        <a class="text-white text-decoration-none" href="">{{ $setting->contact??'9862130505' }}</a> |
                        <i class="far fa-envelope"></i>
                        <a class="text-white text-decoration-none" href="">{{ $setting->email??'info@codeit.com.np' }}</a> |
                        <a class="text-white text-decoration-none" href=""></a> News & Events |
                        <a class="text-white text-decoration-none" href=""></a> Blogs
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
                        <li><a class="dropdown-item" href="/about-us/{{ $item->id }}">{{ $item->title }}</a></li>
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
                        <li><a class="dropdown-item" href="/informations/{{ $item->id }}">{{ $item->title }}</a></li>
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
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/photogallery">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/notice">Notice</a>
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
            <div class="container-fluid px-4 pt-4">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <h3 class="red_sketch widgettitle">About Us</h3>
                        @foreach ($aboutMenue as $am )
                        @if ($am->id==1)
                        <p>{!! Str::limit($am->description,200)!!}</p>
                        @endif
                        @endforeach

                    </div>

                    <div class="col-md-3 col-sm-12">
                        <h3 class="orange_sketch widgettitle">Contact Us</h3>
                        <dl class="contact-list">
                            <dt>
                             <i class="fa fa-map-marker" aria-hidden="true"></i>
                             Address
                            </dt>
                            <dd>{{$setting->contact}}</dd>
                            <dt>
                                <i class="fa-solid fa-phone"></i>
                                Contact
                               </dt>
                               <dd>{{$setting->contact}}</dd>

                               <dt>
                                <i class="fa-solid fa-envelope"></i>
                                Email
                               </dt>
                               <dd>{{$setting->email}}</dd>
                        </dl>
                    </div>

                    <div class="col-md-3 col-sm-12">
                        <h3 class="green_sketch widgettitle">Links</h3>
                        <ul class="nav-list">
                            <li><a href="{{$setting->facebook}}"><i class="fas fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li> <a href="{{$setting->instagram}}"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="{{$setting->youtube}}"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-12">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%;" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                </div>
            </div>
        </footer>
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
        <script src="https://www.google.com/recaptcha/api.js"></script>
  </body>
</html>
