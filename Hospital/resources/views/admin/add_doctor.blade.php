<!DOCTYPE html>
<html lang="en">
  <head>

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

         <div class="container"  style="padding-top:100px;text-align:center;" align="center">

         <h1>Add Doctor Info</h1>
         <br>
         <br>
                                @if(session()->has('message'))
                                   <div class="alert alert-success alert-dismissiable" role="alert">
                                      {{session()->get('message')}}
                                         <button class="btn-close" data-bs-dismiss="alert" arial-label="Close">
                                        </button>
                 
                                    </div>
 
                                @endif

             <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data"> 
               @csrf
               <div style="padding:15px">

                  <label for="">
                       Doctor Name: 
                  </label>
                  <input type="text" name="name" style="color:#072A6C" placeholder="Write the name" required="">
               </div>

             
               
               <div style="padding:15px">

                  <label for="">
                       Phone: 
                  </label>
                  <input type="tel" name="number" style="color:#072A6C" placeholder="Phone Number" required="">
               </div>
               
               <div style="padding:15px">

                  <label for="">
                       Speciality: 
                  </label>
                  <select name="speciality" id="" style="color:#072A6C; width:210px; text-align:center" required="">
                      <option value="">--Select--</option>
                      <option value="Heart">Heart</option>
                      <option value="Neurology">Neurology</option>
                      <option value="Medicine">Medicine</option>
                      <option value="Surgery">Surgery</option>
                      <option value="Allergy and immunology">Allergy and immunology</option>
                      <option value="Diagnostic radiology">Diagnostic radiology</option>
                      <option value="Urology">Urology</option>
                      <option value="Pathology">Pathology</option>
                      <option value="Physical medicine and rehabilitation">Physical medicine and rehabilitation</option>
                  </select>
               </div>
               
               <div style="padding:15px">

                  <label for="">
                       Doctor Room: 
                  </label>
                  <input type="text" name="room" style="color:#072A6C" placeholder="Write the Room Number" required="">
               </div>
               
               <div style="padding:15px">

                  <label for="">
                       Doctor Image: 
                  </label>
                  <input type="file" name="file" required="">
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