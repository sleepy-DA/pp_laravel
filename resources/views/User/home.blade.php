<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <title>Addmiss Collection </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header style="background-color:#FFC0CB">
      <nav class="navbar navbar-expand-lg ">
        <div class="container">
          <a class="navbar-brand" href="/"><h2>Addmiss<em>Collection</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="/productuser">Product</a>
                
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="/about">About Us</a>
                
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact Us</a>
              </li>         

             <li  class="nav-item">
                @if (Route::has('login'))           
              @auth            
                <li class="nav-item">
                <a class="nav-link" href="{{url('showcart')}}">
                <i class="fas fa-shopping-cart"></i>
                Cart</a>
                </li>
                  <x-app-layout>
                 </x-app-layout>                       
              </li>                                       
                    @else
                        <li><a class="nav-link"
                            href="{{ route('login') }}" >
                             Login
                        </a></li>
                        @if (Route::has('register'))
                           <li> <a
                                class="nav-link"
                                href="{{ route('register') }}"
                                >Register
                            </a></li>
                        @endif
                    @endauth
            @endif
          </li>
            
           </ul>
          </div>
        </div>
      </nav>

 @if(session()->has('message'))

        <div class="alert alert-success">

        {{session()->get('message')}}
        <button type="button" class="close" data-dismiss="alert">X</button>
          
        </div>
        @endif


    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>

            <h2>New Collection</h2>
            
            
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Make Cusomer</h4>
            <h2>Mordern and Classic</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Best Seller</h4>
            <h2>Of The Year</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->
          <div class="best-features">
            <div class="col-md-12">
           <form action="{{url('search')}}" method="get"  style="float:center; padding:10px">
              
            @csrf
            
            <input style="width:300px; border:1px solid pink; border-radius: 100px; padding:10px" type="search" name="search" placeholder="search of Places">
              <input type="submit" value="Search" class="btn btn-success">
            </form>
          </div>
           </div>
        @include('user.product') 
    
  
    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Addmiss Collection</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking product?</h4>
              <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">Addmiss Collection  </a> 
              is an online clothing store that offers a wide range of stylish and affordable fashion for men and women. Our mission is to provide trendy outfits that suit every occasion—from casual everyday wear to special events. We focus on quality, comfort, and customer satisfaction, making it easy for shoppers to browse, select, and order their favorite styles from the comfort of home.
              <a rel="nofollow" href="https://templatemo.com/contact">
              <br>  
              Our</a> categories</p>
              <ul class="featured-list">
                <li><a href="#">Dresses</a></li>
                <li><a href="#">Tops & Blouses</a></li>
                <li><a href="#">T-Shirts</a></li>
                <li><a href="#">Skirts</a></li>
                <li><a href="#">Pants & Trousers</a></li>
                <li><a href="#">Jeans</a></li>
                <li><a href="#">Outerwear (Jackets, Coats)</a></li>
              </ul>
              <a href="/about" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/cute.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>ADDMIS Collection col.ed@MiDMOON
            
            </p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
