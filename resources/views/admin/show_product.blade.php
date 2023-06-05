<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    
    <style>
         .center{
            margin: auto;
            width: 100%;
            border: 1px solid white;
            text-align: center;
            margin-top: 40px;
        }
        .font_size{
            text-align: center;
            font-size: 40px;
            padding-top: 20px;
        }
        .img_size{
            width: 100px;
            height: 100px;
            margin-left: 50px;
        }
        .th_color{
            background-color: darkblue;
        }
        .th_design{
            padding: 20px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      
        <!-- partial:partials/_navbar.html -->
     @include('admin.header ')
        
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          @if(session()->has('message'))
                <div class="alert alert-primary">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}

                </div>
            @endif

            <h2 class="font_size">All Products</h2>

          <table class="center">
            <tr class="th_color">
                <th class="th_design">Product Category</th>
                <th class="th_design">Product Name</th>
                <th class="th_design">Description</th>
                <th class="th_design">Quantity</th>
                <th class="th_design">Price</th>
                <th class="th_design">Discount Price</th>
                <th class="th_design">Product Image</th>
                <th class="th_design">Update</th>
                <th class="th_design">Delete</th>
            </tr>
            @foreach($product as $p)
            <tr>
                <td>{{$p->category}}</td>
                <td>{{$p->name}}</td>
                <td>{{$p->description}}</td>
                <td>{{$p->quantity}}</td>
                <td>{{$p->price}}</td>
                <td>{{$p->discount_price}}</td>
                <td><img class="img_size" src="/product/{{$p->image}}" alt=""></td>
                <td>
                  <a class="btn btn-success" href="{{URL::TO('update_product',$p->id)}}">Update</a>
                </td>
                <td>
                  <a onclick="return confirm('Are You Sure To Delete This')" class="btn btn-danger" href="{{URL::TO('delete_product',$p->id)}}">Delete</a>
                </td>
            </tr>
            @endforeach
          </table>


</div>
</div>
       

    @include('admin.script')

    <!-- container-scroller -->
    <!-- plugins:js -->
    
  </body>
</html>