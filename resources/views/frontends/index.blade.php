<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SBK School</title>
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: rgb(34, 47, 77);">
            <a class="navbar-brand" href="#" style="color:white;">SBK ACADEMY</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#" style="color:white;">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color:white;">Gallery</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color:white;">Notice</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color:white;">About us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color:white;" href="#" id="navbarDropdown"
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

</head>

<body>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('frontend/images/banner.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('frontend/images/banner.jpg')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('frontend/images/banner.jpg')}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container" style="padding: 0.2rem;">
        <section class="image">
            <h3 class="py-2 mt-4"
                style="background-color: rgb(34, 47, 77); width: 100%; text-align: center; color: white;">
                Gallery</h3>



                <div id="gallery-carousel" class="carousel slide carousel-multi-item" data-ride="carousel">

                    <!--Controls-->
                    <div class="controls-top">
                        <a class="carousel-control-prev"  href="#gallery-carousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#gallery-carousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        
                    </div>
                    <!--/.Controls-->
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
        
                        <!--First slide-->
        
                        <div class="carousel-item active">
                            <div class="row" style="margin-top:2em;">
                                @foreach ($gallery as $image)
                                @foreach (explode(',',$image->profile) as $profile)
                                    <div class="col-sm-3">
                                        <a href="{{asset('storage/'. $profile)}}" target="_blank">
                                            <img src="{{asset('storage/'. $profile)}}" class="img-fluid" style="object-fit: cover; width:100%; height:10em;">
                                        </a>
                                    </div>
                                @endforeach
                                @endforeach
                            </div>
                        </div>
                        <!--/.First slide-->
        
                        <!--Second slide-->
                        @foreach ($gallery as $image)
                        <div class="carousel-item">
                            <div class="row" style="margin-top:2em;">
                                @foreach (explode(',',$image->profile) as $profile)
                                    <div class="col-sm-3">
                                        <a href="{{asset('storage/'. $profile)}}" target="_blank">
                                            <img src="{{asset('storage/'. $profile)}}" class="img-fluid" style="object-fit: cover; width:100%; height:10em;">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>






           
        </section>

        <section>
            <div class="my-4">
                <h3 class="my-4">Message From Board</h3>
                <div class="row">
                    <div class="col-sm-2">
                        <img src="{{asset('frontend/images/pr.jpg')}}" class="rounded img-fluid img-xs"
                            style="height: 16.3rem; margin-left: .6rem;" />
                    </div>

                    <div class="col-sm-6" style="flex-wrap: wrap;">
                        <p style="text-overflow: ellipsis; word-wrap: break-word; overflow:scroll; max-height: 16em; line-height: 1.8em;">

                            Lorem ipsum dolor sit ame consectetur adipisicing
                            elit. Error ex eos laborum delectus, maxime, quae perferendis numquam quisquam accusantium
                            eligendi odit doloremque dolorem harum
                            ratione,nihil quia officiis facilis in sapiente! Quaerat, voluptatem sapiente maiores non
                            ipsum fugit
                            quaecommodi, error minus distinctio quia consequuntur debitis temporibus esse rerum. Totam
                            libero at
                            aut quaerat hic, labore iure earum nostrum corporis ullam optio dolore, vel dolores sint
                            fugiat Lorem ipsum dolor sit ame consectetur adipisicing
                            elit. Error ex eos laborum delectus, maxime, quae perferendis numquam quisquam accusantium
                            eligendi odit doloremque dolorem harum
                            ratione,nihil quia officiis facilis in sapiente! Quaerat, voluptatem sapiente maiores non
                            ipsum fugit
                            quaecommodi, error minus distinctio quia consequuntur debitis temporibus esse rerum. Totam
                            libero at
                            aut quaerat hic, labore iure earum nostrum corporis ullam optio dolore, vel dolores sint
                            fugiat
                            velit odi iste accusantium quidem illum dicta eos minima culpa quisquam! Tenetur, error?
                            Neque architecto quia
                            id at nostrum dolorum repellendus reprehenderit consequuntur sapiente? Similique deleniti ea
                            doloremque quo
                            mollitia inventore accusantium maiores.
                            velit odi iste accusantium quidem illum dicta eos minima culpa quisquam! Tenetur, error?
                            Neque architecto quia
                            id at nostrum dolorum repellendus reprehenderit consequuntur sapiente? Similique deleniti ea
                            doloremque quo
                            mollitia inventore accusantium maiores.</p>
                    </div>

                    <div class="col-sm-4 card">
                        <div class="card-body">
                            <h4 class="card-title">Notices</h4>
                            <ul class="card-text">

                                @foreach ($notices as $notice)

                                <a href="{{'storage/'.$notice->file}}">
                                    <li style="list-style-type: none;">
                                        @if ($notice->category == 'Event')

                                        <i class="fa fa-calendar"></i>  

                                        @elseif ($notice->category == 'Result')

                                        <i class="fa fa-paperclip"></i>

                                        @endif

                                            {{$notice->title}}</li>
                                </a>    
                               
                                @endforeach

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <h3 class="my-4 py-2" style="background-color: rgb(34, 47, 77); width: 100%; text-align: center; color: white;">
            Testimonials</h3>
        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

            <!--Controls-->
            <div class="controls-top">
                <a class="carousel-control-prev h-50"  href="#multi-item-example" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next h-50" href="#multi-item-example" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                
            </div>
            <!--/.Controls-->

            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                <li data-target="#multi-item-example" data-slide-to="1"></li>
                <li data-target="#multi-item-example" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->

            <!--Slides-->
            <div class="carousel-inner" role="listbox">

                <!--First slide-->

                <div class="carousel-item active">
                    <div class="row">
                        @foreach ($testimonial as $tst)
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top w-100 img-fluid" style="object-fit: cover; height:15rem;"
                            src="{{'storage/'.$tst->profile}}"
                                alt="Card image cap">
                                <div class="card-body">
                                <h4 class="card-title">{{$tst->name}}</h4>
                                    <p class="card-text">{{$tst->testimonial}}</p>
                                    <a class="btn btn-primary text-white">Read More</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!--/.First slide-->

                <!--Second slide-->

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top w-100 img-fluid" style="object-fit: cover; height:15rem;"
                                src="{{asset('frontend/images/book.jpeg')}}"
                                alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Suman Khanal</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci alias iure libero eos, veniam obcaecati? </p>
                                    <a class="btn btn-primary text-white">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.Second slide-->

            <!--Third slide-->
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <img class="card-img-top w-100 img-fluid" style="object-fit: cover; height:15rem;"
                            src="{{asset('frontend/images/book.jpeg')}}"
                            alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Suman Khanal</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci alias iure libero eos, veniam obcaecati? </p>
                                <a class="btn btn-primary text-white">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-2">
                            <img class="card-img-top w-100 img-fluid" style="object-fit: cover; height:15rem;"
                                src="{{asset('frontend/images/class.jpg')}}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Sabina Khadka</h4>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias blanditiis nihil optio mollitia, quas corrupti!</p>
                                <a class="btn btn-primary text-white">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-2">
                            <img class="card-img-top w-100 img-fluid" style="object-fit: cover; height:15rem;"
                                src="{{asset('frontend/images/child.jpg')}}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Mahima Gautam</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ullam consequatur omnis? Numquam, sequi expedita!</p>
                                <a class="btn btn-primary text-white">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.Third slide-->

        </div>
        <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->

    </div>

    <!-- Footer -->
    <footer class="mainfooter mt-5 pt-3 text-white small" role="contentinfo" style="background-color: rgb(34, 47, 77);">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4>Sports Department</h4>
                            <ul class="list-unstyled">
                                <li><a href="#"></a></li>
                                <li><a href="#">Payment Center</a></li>
                                <li><a href="#">Contact Directory</a></li>
                                <li><a href="#">Forms</a></li>
                                <li><a href="#">News and Updates</a></li>
                                <li><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4>Events Department</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Website Tutorial</a></li>
                                <li><a href="#">Accessibility</a></li>
                                <li><a href="#">Disclaimer</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Webmaster</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4>College Department</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Parks and Recreation</a></li>
                                <li><a href="#">Public Works</a></li>
                                <li><a href="#">Police Department</a></li>
                                <li><a href="#">Fire</a></li>
                                <li><a href="#">Mayor and City Council</a></li>
                                <li>
                                    <a href="#"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4>Follow Us</h4>
                        <ul class="social-network social-circle list-unstyled d-flex">
                            <li><a href="#" class="icoFacebook text-white px-2" title="Facebook"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="icoLinkedin text-white px-2" title="Linkedin"><i
                                        class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="icoLinkedin text-white px-2" title="Linkedin"><i
                                        class="fa fa-twitter  "></i></a></li>
                            <li><a href="#" class="icoLinkedin text-white px-2" title="Linkedin"><i
                                        class="fa fa-envelope"></i></a></li>
                            <li><a href="#" class="icoLinkedin text-white px-2" title="Linkedin"><i
                                        class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="icoLinkedin text-white px-2" title="Linkedin"><i
                                        class="fa fa-car"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 copy">
                        <p class="text-center">&copy; Copyright 2020 - SBK School. All rights reserved.</p>
                    </div>
                </div>


            </div>
        </div>
    </footer>

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