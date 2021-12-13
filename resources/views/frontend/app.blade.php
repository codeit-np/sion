<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ $setting->name??'CODE IT' }}</title>

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
                  <img src="{{asset($setting->logo) }}" width="62" alt="">
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
                             <li><a class="dropdown-item" href="/about-us/{{ $item->id }}">{{ $item->title }}</a></li>
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
                      <li><a class="dropdown-item" href="#">Academic Calendar </a></li>
                      <li><a class="dropdown-item" href="#">Prospectus</a></li>
                      <li><a class="dropdown-item" href="#">Application Form for Admission</a></li>
                      <li><a class="dropdown-item" href="#">Document Request Form</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Career</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
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
        <footer></footer>
        <!-- Footer End -->

        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
