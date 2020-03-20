<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SBK School</title>
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <link rel="stylesheet" href="{{asset('frontend\assets\css\bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend\assets\css\frontend.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

<header>
    <nav class="navbar navbar-expand-lg" style="background-color: rgb(34, 47, 77);">
        <a class="navbar-brand" href="#" style="color:white;">SBK ACADEMY</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars text-white"></i>
        </button>




        <div class="collapse navbar-collapse navbar-dark" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Home <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/sbk/gallery')}}">Gallery</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="{{url('/sbk/notice')}}">Notice</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="{{url('/sbk/about')}}">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/dashboard')}}">AdminLogin</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                       role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sports
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Weekly</a>
                        <a class="dropdown-item" href="#">Monthly</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Semesters</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>

@yield('content')

<!-- Footer -->
<footer class="page-footer font-small text-white pt-1 mt-4" style="background-color: rgb(34, 47, 77);">

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">
  
      <!-- Grid row -->
      <div class="row mt-3">
  
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
  
          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">SBK Academy</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos nihil fugiat, ex dolore totam odio repellat quod doloribus mollitia exercitationem.</p>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-5 col-lg-4 col-xl-4 mx-auto mb-4">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="359" height="211" id="gmap_canvas" src="https://maps.google.com/maps?q=zenlab&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.online-timer.net">countdown com</a></div><style>.mapouter{position:relative;text-align:right;height:211px;width:359px;}.gmap_canvas {overflow:hidden;background:none!important;height:211px;width:359px;}</style></div>
        </div>

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
  
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fa fa-envelope mr-3"></i> info@example.com</p>
          <p>
            <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
          <p>
            <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>

    <div style="background-color: #6351ce;" class="w-100">
        <div class="container">
    
          <!-- Grid row-->
          <div class="row py-4 d-flex align-items-center">
    
            <!-- Grid column -->

            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-6 col-lg-7 text-center text-md-right">
    
              <!-- Facebook -->
              <a class="fb-ic">
                <i class="fa fa-facebook white-text mr-4"> </i>
              </a>
              <!-- Twitter -->
              <a class="tw-ic">
                <i class="fa fa-twitter white-text mr-4"> </i>
              </a>
              <!-- Google +-->
              <a class="gplus-ic">
                <i class="fa fa-google-plus white-text mr-4"> </i>
              </a>
              <!--Linkedin -->
              <a class="li-ic">
                <i class="fa fa-linkedin white-text mr-4"> </i>
              </a>
              <!--Instagram-->
              <a class="ins-ic">
                <i class="fa fa-instagram white-text"> </i>
              </a>
    
            </div>
            <!-- Grid column -->
    
          </div>
          <!-- Grid row-->
    
        </div>
      </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->

<!-- Footer -->


</body>
<script>
    $('.carousel').carousel()
</script>
<script>
    $(document).ready(function () {
        $("#myCarousel").carousel();
    });
</script>
<script>
    $(document).ready(function () {
        $("#galleryCarousel").carousel();
    });
</script>
<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>

</html>
