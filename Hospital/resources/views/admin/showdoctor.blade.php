<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')
   <style>
    .center {
  margin-left: auto;
  margin-right: auto;
 
  text-align:center;
  
      border-collapse: collapse;
}

.center2 {
  margin-left: auto;
  margin-right: auto;
 

}


td {
            
            border-style: none solid solid none;
               padding: 10px;
               text-align: center;
 
          }
         table{
           border-collapse: separate;
             border-spacing: 0;
         }
     
 
         tr:last-child td:first-child { border-bottom-left-radius: 20px; }
         tr:last-child td:last-child { border-bottom-right-radius: 20px; }
  
  
   </style>

  </head>
  <body>
    <div class="container-scroller">
       
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper" >

            <div class="center2" style="padding-top:100px; text-align:center;overflow-x:auto;">
               
               <table class="center">
               <br>
               <h1 style="color:#D4AC0D ">All Registered Doctor List</h1>
               <br>

               <tr class="center" style="background-color:Black;text-align:center;">
                        
                        <th class="center"style="padding:10px;">Doctor ID</th>
                        <th class="center"style="padding:10px;">Doctor Name</th>
                        <th class="center"style="padding:10px;">Email</th>
                        <th class="center"style="padding:10px;">Address</th>
                        <th class="center"style="padding:10px;">Phone</th>
                        
                        
                    </tr>

                 @foreach($data2 as $doctor)

                   <tr  style="background-color:#192841;";>

                   <td style="padding:10px;">{{$doctor->id}}</td>
                   <td style="padding:10px;">{{$doctor->name}}</td>
                       <td style="padding:10px;">{{$doctor->email}}</td>
                         <td style="padding:10px;">{{$doctor->address}}</td>
                         <td style="padding:10px;">{{$doctor->phone}}</td>
   
                    </tr>

                   @endforeach
               </table>
               <br>
               <h1 style="color:#D4AC0D ">Control Doctor View</h1>
               <br>
                <table class="center">
                    <tr style="background-color:Black;text-align:center;">
                        
                        <th class="center" style="padding:10px;">Doctor Name</th>
                        <th class="center"style="padding:10px;">Phone</th>
                        <th class="center"style="padding:10px;">Specility</th>
                        <th class="center"style="padding:10px;">Room No</th>
                        <th class="center"style="padding:10px;">Image</th>
                        <th class="center"style="padding:10px;">Dalete</th>
                        <th class="center"style="padding:10px;">Update</th>
                        
                    </tr>

                    @foreach($data as $doctor)

                    <tr class="center" style="background-color:#192841;";>

                       
                        <td style="padding:10px;">{{$doctor->name}}</td>
                        <td style="padding:10px;">{{$doctor->phone}}</td>
                        <td style="padding:10px;">{{$doctor->speciality}}</td>
                        <td style="padding:10px;">{{$doctor->room}}</td>
                        <td style="padding:10px;"> <img height="100px" width='100px' src="doctorimage/{{$doctor->image}}"></td>
                        <td style="padding:10px;"><a onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger" href="{{url('deletedoctor', $doctor->id)}}">Delete</a></td>
                        <td style="padding:10px;"><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>
                    </tr>

                    @endforeach

                    
                   
                </table>
              <br>
              <br>
            </div>


        </div>


      
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>