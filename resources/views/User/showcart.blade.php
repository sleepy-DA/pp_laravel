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
          <a class="navbar-brand" href="index.html"><h2>Addmiss <em>Collection</em></h2></a>
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
                <a class="nav-link" href="/product">Our Products</a>
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

                <li class="nav-item active">
                <a class="nav-link " href="{{url('showcart')}}">
                   <span class="sr-only">(current)</span>
                <i class="fas fa-shopping-cart"></i>
                Cart[{{$count}}]</a>
              </li>
                        
                            <x-app-layout>
    
                            </x-app-layout>

                        
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
    <div style="padding:100px;" align="center" >
        <table>
            <tr style="background-color:black;">
                <td style="padding:10px; font-size:20px; color:white"">Product Name</td>
                <td style="padding:10px; font-size:20px; color:white"">Number of Guest</td>
                <td style="padding:10px; font-size:20px; color:white"">Price</td>
                <td style="padding:10px; font-size:20px; color:white"">Action</td>

            </tr >

              <form action="{{url('order')}}" method="POST">
                @csrf
                @foreach($cart as $carts)

            
                <tr style="background-color:black; text-align:center; ">
                    <td style="padding:10px; color:white;  ">
                      <input type="text" name="productname[]" value="{{$carts->product_title}}" hidden=""> 
                    
                    {{$carts->product_title}}
                    </td>
                    <td style="padding:10px; color:white;">
                      <input type="text" name="quantity[]" value="{{$carts->quantity}}" hidden="">
                    {{$carts->quantity}}
                    </td>
                    <td style="padding:10px; color:white;">
                      <input type="text" name="price[]" value="{{$carts->price}}" hidden="">$
                    {{$carts->price}}
                    </td>
                  
                    <td style="padding:10px; color:white;">
                      <a class="btn btn-danger" href="{{url('delete',$carts->id)}}">Delete</a></td>

                  </tr>
                @endforeach
           
        </table>
        <br>
        <button class="btn btn-success">Confirm Order</button>
</form>

    </div>

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
