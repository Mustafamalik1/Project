<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      
        <!-- partial:partials/_navbar.html -->
     @include('admin.header ')
        
        <!-- partial -->
     @include('admin.body ')
       

    @include('admin.script')

    <!-- container-scroller -->
    <!-- plugins:js -->
    
  </body>
</html>