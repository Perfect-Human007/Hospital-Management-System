<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('doctorhome.css')
  </head>
  <body>
    <div class="container-scroller">
       
      <!-- partial:partials/_sidebar.html -->
     @include('doctorhome.sidebar')
      <!-- partial -->
     @include('doctorhome.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper" >
        <div align="center"style="padding:70px">
         <table>
        <tr style="background-color:#58D68D ;">
            
            <th style="padding:20px; font-size:20px; color:black; text-align:center;" >Patient Name</th>
            <th style="padding:20px; font-size:20px; color:black; text-align:center;">Email</th>
            <th style="padding:20px; font-size:20px; color:black; text-align:center;">Phone</th>
            <th style="padding:20px; font-size:20px; color:black; text-align:center;">Date</th>
            <th style="padding:20px; font-size:20px; color:black; text-align:center;">Message</th>
            <th style="padding:20px; font-size:20px; color:black; text-align:center;">Status</th>
            <th style="padding:20px; font-size:20px; color:black; text-align:center;">Payment</th>
            <th style="padding:20px; font-size:20px; color:black; text-align:center;">Prescribe  Medicine</th>
           
        </tr>

        @foreach($appoint as $appoints)
        <tr>
            <td style="text-align:center; padding:20px;">{{$appoints->name}}</td>
            <td style="text-align:center; padding:20px;">{{$appoints->email}}</td>
            <td style="text-align:center; padding:20px;">{{$appoints->phone}}</td>
            <td style="text-align:center; padding:20px;">{{$appoints->date}}</td>
            <td style="text-align:center; padding:20px;">{{$appoints->message}}</td>
            <td style="text-align:center; padding:20px;">{{$appoints->status}}</td>
            <td  style="text-align:center; padding:20px;" > [-{{$appoints->payment_status}}-] <br>
                        <a type="submit" class="btn btn-success" href="{{url('paid', $appoints->id)}}">Paid</a> </td>
            <td style="padding:10px;text-align:center; "> <a type="submit" class="btn btn-success" href="{{url('upprescription',$appoints->id)}}">Prescribe</a> </td>
        </tr>

        @endforeach
    </table>
  </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('doctorhome.script')
    <!-- End custom js for this page -->
  </body>
</html>