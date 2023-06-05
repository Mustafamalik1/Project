@extends("main")



@section("master")

@if(session()->has('message'))
                <div class="alert alert-primary">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}

                </div>
            @endif

<section class="vh-100" style="background-color: whitesmoke;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <p><span class="h2">Shopping Cart </span>

        <div class="card mb-4">
          <div class="card-body p-4">
            <div class="row align-items-center">
        <?php $totalprice=0; ?>

                @foreach($cart as $c)
                <div class="col-md-2" style="padding: 20px;">
                    <img src="/product/{{$c->image}}"
                    class="img-fluid" alt="image">
                </div>
                <div class="col-md-3 d-flex justify-content-center">
                    <div>
                        <p class="small text-muted mb-4 pb-2">Product name</p>
                        <p class="lead fw-normal mb-0">${{$c->product_name}}</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center">
                    <div>
                        <p class="small text-muted mb-4 pb-2">Product Quantity</p>
                        <p class="lead fw-normal mb-0">{{$c->quantity}}</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center">
                    <div>
                        <p class="small text-muted mb-4 pb-2">Price</p>
                        <p class="lead fw-normal mb-0">${{$c->price}}</p>
                    </div>
                </div>
                <form action="{{URL::TO('/remove_cart',$c->id)}}" method="post">
                  @csrf
                <button type="submit" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
      </button>
      </form>
                <!-- <form action="{{URL::TO('/remove_cart',$c->id)}}" method="post">
                  <button type="submit" >Remove</button>
                </form> -->
  <!-- <span aria-hidden="true">&times;</span>
</a> -->
               
                <?php $totalprice=$totalprice + $c->price?>

                @endforeach
            </div>
            
        </div>
        </div>

        <div class="card mb-5">
          <div class="card-body p-4">

            <div class="float-end">
              <p class="mb-0 me-5 d-flex align-items-center">
                <span style="padding: 12px;" class="text-muted me-2">Order total :</span> <span
                  class="lead fw-normal">${{$totalprice}}</span>
              </p>
            </div>

          </div>
        </div>
        <h1 style="display: flex;padding: 25px;justify-content: center;align-items: center;font-size: 25px;font-family: 'Times New Roman', Times, serif;font-weight: 600;">Proceed to Order</h1>

        <div class="d-flex justify-content-center" >
          <a href="{{URL::TO('cash_order')}}"><button type="button" style="display: block;width: 500px;" class="btn btn-primary btn-lg">Cash On Delivery</button></a>
        </div>
        <a href="{{URL::TO('product1')}}">
        <button type="button" class="btn btn-light btn-lg me-2 col-md-3">Continue Shopping</button>
        </a>
      </div>
    </div>
  </div>
</section>

@endsection("master")