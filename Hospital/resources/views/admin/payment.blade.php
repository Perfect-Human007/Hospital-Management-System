<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')
   <style>
    .center {
  margin-left: auto;
  margin-right: auto;
  margin-left: auto;
  margin-right: auto;
 
  text-align:center;
  
      
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
         <br>
         <br>
        
            <div  style="padding-top:100px; text-align:center;overflow-x:auto;">
            <h1  style="color:#922B21  ">Advanced Payment History</h1>
            <br>
            <br>
                <table class="center">
                    <tr style="background-color:Black;text-align:center;">
                        <th style="padding:20px;">Patient Name</th>

                        <th style="padding:20px;">Doctor</th>
                        <th style="padding:20px;">Email</th>
                        <th style="padding:20px;">Phone</th>
                        <th style="padding:20px;">Amount</th>
                        <th style="padding:20px;">Adress</th>
                        
                        
                        <th style="padding:20px;">transaction Id</th>
                        
                
                    </tr>

                    @foreach($data as $payment)

                    <tr style="background-color:#192841";>
                        <td style="padding:10px;">{{$payment->name}}</td>
                        <td style="padding:10px;">{{$payment->doctor}}</td>
                        <td style="padding:10px;">{{$payment->email}}</td>
                        <td style="padding:10px;">{{$payment->phone}}</td>
                        <td style="padding:10px;">{{$payment->amount}}-{{$payment->currency}}</td>
                        <td style="padding:10px;">{{$payment->address}}</td>
                        
                        <td style="padding:10px;">{{$payment->transaction_id}}</td>
                      
                    </tr>

                    @endforeach

                    
                   

                  

                </table>

            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>