

<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Product Packages</h2>
        
            <!-- <form action="{{url('search')}}" method="get" class="form-inline" style="float:left; padding:10px">
              
            @csrf
            
            <input class="form-control" type="search" name="search" placeholder="seach">
              <input type="submit" value="Search" class="btn btn-success">
            </form> -->
            </div>
          </div>

        @foreach($data as $product)
        
          <div class="col-md-4">
            <div class="product-item  ">
              <a href="#"><img height="200" width="100" src="/productimage/{{$product->image}}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>{{$product->title}}</h4></a>
                <h6>${{$product->price}}</h6>
                <p>{{$product->description}}</p>
                

                <form action="{{url('addcart',$product->id)}}" method="POST">
                  @csrf
                  <h7 >Guest of Numbers</h7>
                  <br>
                <input type="number" value="1" min="1" class="form-control" style="width:100px" name="quantity">

                <br>

                <input class="btn btn-primary" type="submit" value="Reservation">

                </form>
                        
              </div>
            </div>
          </div>

       @endforeach
        @if(method_exists($data,'links'))

      <div class="d-flex justify-content-center">
        {!! $data->links() !!}
      </div>

      @endif

        </div>
      </div>
    </div>