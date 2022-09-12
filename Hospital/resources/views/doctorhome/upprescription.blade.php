<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">
   @include('admin.css')
   
 

  </head>
  <body>
    <div class="container-scroller">
       
      <!-- partial:partials/_sidebar.html -->
     @include('doctorhome.sidebar')
      <!-- partial -->
     @include('doctorhome.navbar')
        <!-- partial -->
        <div  class="container-fluid page-body-wrapper" >
            <div align="center" style="padding-top:100px;">

            <form action="{{url('uploadprescription',$data->id)}}" method="POST" enctype="multipart/form-data">

            @csrf
            <div style="padding:15px">
             <input type="file" name="file">
             </div>
             <div style="padding:15px">
                        <input type="submit" class="btn btn-primary">

                    </div>
             </form>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>