<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">

    <style>
        label{
            display:inline-block;
            width: 200px;
        }
    </style>

   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
       
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            
            <div class="container" align="center" style="padding:100px">

                @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissiable" role="alert">
                        {{session()->get('message')}}
                            <button class="btn-close" data-bs-dismiss="alert" arial-label="Close">
                        </button>
                 
                    </div>
 
                @endif

                <form action="{{url('editappoint', $data->id)}}" method="POST" enctype="multipart/form-data">

                    @csrf

                  

                    <div style="padding:15px">
                        <label for="">Doctor</label>
                        <input type="text" style="color:black" name="room" value="{{$data->doctor}}">
                    </div>

                    <div style="padding:15px">
                        <label for="">Doctor ID</label>
                        <input type="text" style="color:black" name="doctor_id" value="{{$data->doctor_id}}">
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