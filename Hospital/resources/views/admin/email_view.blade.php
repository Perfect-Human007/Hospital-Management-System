<!DOCTYPE html>
<html lang="en">
  <head>
     <base href="/public">
     <style>
         label
         {
             display: inline-block;
             width: 200px;
         }
     </style>
    <!-- Required meta tags -->
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

         <div class="container"  style="padding-top:100px;" align="center">

         
                                @if(session()->has('message'))
                                   <div class="alert alert-success alert-dismissiable" role="alert">
                                      {{session()->get('message')}}
                                         <button class="btn-close" data-bs-dismiss="alert" arial-label="Close">
                                        </button>
                 
                                    </div>
 
                                @endif

             <form action="{{url('sendemail',$data->id)}}" method="POST" > 
               @csrf
               <div style="padding:15px">

                  <label for="">
                       Greeting: 
                  </label>
                  <input type="text" name="greeting" style="color:#072A6C"  required="">
               </div>
               
               <div style="padding:15px">

                  <label for="">
                       Body: 
                  </label>
                  <input type="text" name="body" style="color:#072A6C" required="">
               </div>
               
             
               
               <div style="padding:15px">

                  <label for="">
                       Action text: 
                  </label>
                  <input type="text" name="actiontext" style="color:#072A6C"  required="">
               </div>
             
                <div style="padding:15px">
                        <label for="">
                           Action Url: 
                        </label>
                      <input type="text" name="actionurl" style="color:#072A6C"  required="">
                </div> 
                <div style="padding:15px">

                    <label for="">
                         Ending: 
                    </label>
                    <input type="text" name="ending" style="color:#072A6C"  required="">
                </div>


             
               
               <div style="padding:15px">

                 <input type="submit" class="btn btn-success">
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