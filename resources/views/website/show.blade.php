<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HamroPizza</title>
    <link rel="stylesheet" href="{{asset('resources-food-test/main.css')}}">
  </head>
  <body>
    <section class="header">
      <div class="navbar">
        <h3>HamroPizza</h3>
        <ul class="nav">
          <div class="navlist">
            <li><a href="#">Pizzas</a></li>
            <li><a href="#">Places</a></li>
            <li><a href="#">Delivery</a></li>
            <li><a href="#">Become A Member</a></li>
          </div>
        </ul>
      </div>
      <div class="banner">
        <img
          src="{{asset('storage/'. $web->last()->banner)}}"
          class="banner"
          alt="This is an image of a pizza"
        />
      </div>
    </section>
    <section class="mid-section">
      <div class="headings">
        <h1>BEST</h1>
        <h1>PIZZAS</h1>
        <h4>In The Whole Town.</h4>
      </div>
      <div class="search-box">
        <p class="search-title">What pizza would you like?</p>
        <input type="text" name="search-field" id="search-field" />
        <button type="button" class="search-btn" id="search-btn">
          Find Pizzas
        </button>
      </div>
    </section>
    <section class="bottom-section">
      <div class="article">
        <div class="para-image">
          @foreach ($web as $forms)
          <img src="{{asset('storage/'. $forms->image)}}" alt="This is an image of a pizza" />
          @endforeach
        </div>
        <div class="para-text">
          <div class="top-para">
            <h3>Awesome Title For Pizza.</h3>
            <p>
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
              nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
              erat, sed diam voluptua. At vero eos et accusam et justo duo
              dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
              sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
              amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
              invidunt ut labore et dolore magna aliquyam erat, sed diam
              voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
            </p>
          </div>
          <div class="bottom-para">
            <h6>Secondary Title.</h6>
            <p>
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
              nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
              erat, sed diam voluptua. At vero eos et accusam et justo duo
              dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
              sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
              amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
              invidunt ut labore et dolore magna aliquyam erat, sed diam
              voluptua.
            </p>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
