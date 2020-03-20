@extends('frontends.layout')

@section('content')

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" style="height:35em; object-fit: cover;"
                 src="{{asset('frontend/images/banner.jpg')}}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" style="height:35em; object-fit: cover;"
                 src="{{asset('frontend/images/pencil.jpeg')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" style="height:35em; object-fit: cover;"
                 src="{{asset('frontend/images/childern.jpg')}}" alt="Third slide">
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
                <a class="carousel-control-prev" href="#gallery-carousel" role="button" data-slide="prev">
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
                        <div class="col-sm-3">
                            <a href="{{asset('frontend/images/gal3.jpeg')}}" target="_blank">
                                <img src="{{asset('frontend/images/gal3.jpeg')}}" class="img-fluid"
                                     style="object-fit: cover; width:100%; height:10em;">
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="{{asset('frontend/images/gal2.jpeg')}}" target="_blank">
                                <img src="{{asset('frontend/images/gal2.jpeg')}}" class="img-fluid"
                                     style="object-fit: cover; width:100%; height:10em;">
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="{{asset('frontend/images/gal4.jpg')}}" target="_blank">
                                <img src="{{asset('frontend/images/gal4.jpg')}}" class="img-fluid"
                                     style="object-fit: cover; width:100%; height:10em;">
                            </a>
                         </div>
                        <div class="col-sm-3">
                            <a href="{{asset('frontend/images/gal1.jpeg')}}" target="_blank">
                                <img src="{{asset('frontend/images/gal1.jpeg')}}" class="img-fluid"
                                     style="object-fit: cover; width:100%; height:10em;">
                            </a>
                        </div>
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
                                        <img src="{{asset('storage/'. $profile)}}" class="img-fluid"
                                             style="object-fit: cover; width:100%; height:10em;">
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
                         style="height: 16.3rem; margin-left: .6rem;"/>
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
            <a class="carousel-control-prev h-50" href="#multi-item-example" role="button" data-slide="prev">
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
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci
                                    alias iure libero eos, veniam obcaecati? </p>
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
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci alias
                                iure libero eos, veniam obcaecati? </p>
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
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias
                                blanditiis nihil optio mollitia, quas corrupti!</p>
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
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ullam
                                consequatur omnis? Numquam, sequi expedita!</p>
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
@endsection
