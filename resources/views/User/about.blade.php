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
          <a class="navbar-brand" href="/"><h2>Addmiss <em>Collection</em></h2></a>
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
              
              <li class="nav-item active">
                <a class="nav-link" href="/about">About Us</a>
                 <span class="sr-only">(current)</span>
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
    <div class="page-heading about-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>about us</h4>
              <h2>our company</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Background</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/clothing-production.webp" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Who we are &amp; What we do?</h4>
              <p style="text-align: justify;">
                We are a motivated and collaborative team consisting of Thann Kanikar, Choup Chanthida, and Chab Songha. Each of us brings unique strengths and perspectives, allowing us to work effectively together toward our shared goals. Our focus is on delivering quality work through dedication, teamwork, and a strong sense of responsibility. Whether it's in research, development, or project coordination, we strive to create meaningful impact and continuously improve in everything we do. Our diverse skills and mutual support help us tackle challenges with confidence and deliver successful outcomes.
              </p>
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

    
    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Team Members</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="assets/images/knaikar.jpg" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                    
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Thann kanikar</h4>
                <span>CO-Founder</span>
                <p>
                  who leads the team with a strong vision and strategic direction. She ensures all projects align with the team’s goals and drives growth through leadership and innovation.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="assets/images/thida.jpg" alt="">
                <div class="hover-effect">
                  
                </div>
              </div>
              <div class="down-content">
                <h4>Choup chanthida</h4>
                <span>Product Expert</span>
                <p>who focuses on developing user-centered solutions. She ensures the quality and functionality of every product through research and detailed planning.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="assets/images/songhachab.jpg" alt="">
                <div class="hover-effect">
                  
                </div>
              </div>
              <div class="down-content">
                <h4>Chab Songha</h4>
                <span>Chief Marketing</span>
                <p>Officer responsible for promoting the brand and engaging with the target audience. She leads marketing strategies that boost visibility and build strong customer relationships.</p>
              </div>
            </div>
          </div>
          
              
         
              
          
              
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
