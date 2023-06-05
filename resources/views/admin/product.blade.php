<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        .div_center{
            text-align: center;
            padding-top: 40px;
        }
        .font_size{
            font-size: 40px;
            padding-bottom: 40px;
        }
        .text_color{
            color: black;
        }
        .div_design{
        padding-bottom: 15px;            
        }
        label{
            display: inline-block;
            width: 200px;
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
          <div class="div_center">

            <h1 class="font_size">Add product</h1>
            <form action="{{URL::TO('/add_product')}}" method="post" enctype="multipart/form-data">
              @csrf
              
            <div class="div_design">
                <label>Product Name :</label>
            <input class="text_color" type="text" name="name" placeholder="Write A Product Name" required="">
            
          </div>
          <div class="div_design">
                <label>Product Description : </label>
            <input class="text_color" type="text" name="description" placeholder="Write A Description" required="">
            
          </div>
          <div class="div_design">
                <label>Product Price :</label>
            <input class="text_color" type="number" name="price" placeholder="Write A Product Price" required="">
            
          </div>
          
          <div class="div_design">
                <label>Discount Price :</label>
            <input class="text_color" type="number" name="dis_price" placeholder="Write A Price">
            
          </div>
          <div class="div_design">
                <label>Product Quantity :</label>
            <input class="text_color" type="number" name="quantity"  min="1" placeholder="Write A Quantity" required="">
          </div>
            
          
          <div class="div_design">
                <label>Product Category :</label>
                    <select class="text_color" name="category" id="" required="">
                        <option value="" selected="">Add A Category</option>
                        @foreach($category as $c)
                        <option value="{{$c->category_name}}">{{$c->category_name}}</option>
                        @endforeach
                    </select>            
          </div>
            <div  class="div_design">
          <label>Product Image :</label>
            <input type="file" name="image" placeholder="Product Image" required="">
          </div>
            <div  class="div_design">
            <input type="submit" value="Add Product" class="btn btn-primary">
          </div>
          </form>
          </div>
        </div>
        </div>       

    @include('admin.script')

    <!-- container-scroller -->
    <!-- plugins:js -->
    
  </body>
</html>