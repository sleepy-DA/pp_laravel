


<!DOCTYPE html>
<html lang="en">
  <head>
   

  @include('admin.css')

    <style type="text/css">

        .title
        {
            color:white;
            padding-top: 25px;
            font-size:25px;
        }

        label
        {
            display:inline-block;
            width: 200px;
        }


    </style>
  </head>
  <body>
  
      
      <!-- partial -->
    
    @include('admin.sidebar')


    @include('admin.navbar')
    
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
        <h1 class="title">
            Add Product
        </h1>





        @if(session()->has('message'))

        <div class="alert alert-success">

        {{session()->get('message')}}
        <button type="button" class="close" data-dismiss="alert">X</button>
          
        </div>
        @endif






        <form action={{url('uploadproduct')}} method="post" enctype="multipart/form-data">
        @csrf
        <div style="padding:15px; ">
            <label>Product Title</label>
            <input style="color:black;" type="text" name="title" placeholder="Give a product title"
            require="">
        </div>

         <div style="padding:15px; ">
            <label>Price</label>
            <input style="color:black;" type="number" name="price" placeholder="Give a price"
            require="">
        </div>

         <div style="padding:15px; ">
            <label>Description</label>
            <input style="color:black;" type="text" name="des" placeholder="Give a description"
            require="">
        </div>

         <div style="padding:15px; ">
            <label>Product Quantity</label>
            <input style="color:black;" type="text" name="quantity" placeholder="Product Quantity"
            require="">
        </div>


         <div style="padding:15px; ">
            
            <input type="file" name="file" >
        </div>


        <div style="padding:15px; ">
           <input style="background-color:pink;" class:"btn btn-success" type="submit" >
        </div>

    </form>
    


    </div>

        </div>
          <!-- partial -->
       
          @include('admin.script')


  </body>
</html>