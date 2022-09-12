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
          <div  style="padding-top:100px;text-align:center;overflow-x:auto;">
           
            <h1 style="color:#A569BD">Control Appointments</h1>
            <br>
                <table class="center" >
                    <tr style="background-color:Black;text-align:center;">
                        <th style="padding:20px;">Patient Name</th>
                        <th style="padding:20px;">Email</th>
                        <th style="padding:20px;">Phone</th>
                        <th style="padding:20px;">Doctor Name</th>
                        <th style="padding:20px;">Date</th>
                        <th style="padding:20px;">Message</th>
                        <th style="padding:20px;">Status</th>
                        
                        <th style="padding:20px;">Payment Status</th>
                        <th style="padding:20px;">Forward To Doctor</th>
                        <th style="padding:20px;">Send Mail</th>
                    </tr>

                    @foreach($data as $appoint)

                    <tr style="background-color:#192841";>
                        <td style="padding:15px;">{{$appoint->name}}</td>
                        <td style="padding:15px;">{{$appoint->email}}</td>
                        <td style="padding:15px;">{{$appoint->phone}}</td>
                        <td style="padding:15px;">{{$appoint->doctor}}</td>
                        <td style="padding:15px;">{{$appoint->date}}</td>
                        <td style="padding:15px;">{{$appoint->message}}</td>
                        
                        <td > [-{{$appoint->status}}-] <a type="submit"class="btn btn-success" href="{{url('approved', $appoint->id)}}">Approve</a>
                        <br>
                        <br>
                         <a type="submit" class="btn btn-danger" href="{{url('canceled', $appoint->id)}}">Cancel</a> </td>

                        <td  > [-{{$appoint->payment_status}}-] <br>
                        <a type="submit"class="btn btn-success" href="{{url('paid', $appoint->id)}}">Paid</a> </td>
                        

                        <td > <a type="submit"class="btn btn-primary" href="{{url('forward', $appoint->id)}}">Forward</a> </td>

                        <td> <a type="submit" class="btn btn-primary" href="{{url('emailview', $appoint->id)}}">Send Mail</a> </td>
                    </tr>

                    @endforeach

                    
                   

                  

                </table>
                
             <br>
             <br>
            
          </div>

              
        </div>
      

        
            
    </div>
          
   
        
     
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
  
    <!-- End custom js for this page -->
  </body>
</html>