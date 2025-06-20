<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
  <title>Addmiss Collection</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
  <link rel="stylesheet" href="assets/css/owl.css">

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
</head>

<body>

  <!-- Preloader -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>

  <!-- Header -->
    <header style="background-color:#FFC0CB">
      <nav class="navbar navbar-expand-lg ">
        <div class="container">
          <a class="navbar-brand" href="/"><h2>AddMiss<em>Collection</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item ">
                <a class="nav-link" href="/redirect">Home
                 
                </a>
              </li> 
              <li class="nav-item active">
                <a class="nav-link" href="/productuser">Product</a>
                 <span class="sr-only">(current)</span>
              </li>
              
              <li class="nav-item ">
                <a class="nav-link" href="/about">About Us</a>
                 
              </li>
              <li class="nav-item ">
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


  <!-- Page Heading -->
  <div class="page-heading products-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>new Products</h4>
            <h2 >Product Packages</h2>                     
          </div>
        </div>
      </div>
    </div>
  </div>

  
  @include('user.product') 

  

  

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <p>ADDMIS Collection col.ed@MiDMOON</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/isotope.js"></script>
  <script src="assets/js/accordions.js"></script>

  

</body>

</html>
