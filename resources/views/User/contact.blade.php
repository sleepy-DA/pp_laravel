<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <title>Addmiss Collection</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

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
              <li class="nav-item ">
                <a class="nav-link" href="/redirect">Home
                  
                </a>
              </li> 

              <li class="nav-item">
                <a class="nav-link" href="/productuser">Product</a>
                
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="/about">About Us</a>
                
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="/contact">Contact Us</a>
                <span class="sr-only">(current)</span>
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
              
              
              </a>
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
    <div class="page-heading contact-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>contact us</h4>
              <h2>let’s get in touch</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Location on Maps</h2>
            </div>
          </div>
          <div class="col-md-8">

            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d31271.386392128352!2d104.9034751909247!3d11.557356237604274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1srupp!5e0!3m2!1sen!2skh!4v1750350681152!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h4>About our office</h4>
              <p>
                Phnom Penh</p>
                <p>Cambodia</p>
                <p>
                Phone Number:07535654</p>
                <p>Email Address: addmiss@gmail.com</p>
                
              <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    
          
   
    
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
