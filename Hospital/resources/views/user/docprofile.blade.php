<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  

  <title>One Health - Medical Center</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
  

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
   
    tr:nth-child(even) {
          background-color: #5DADE2 ;
         }
         tr:nth-child(odd) {
          background-color: #AED6F1 ;
         }
         tr:hover {
          background-color: #5f6ef3;
          color:white;
        }

           td {
  
           border-radius: 10px;
         }
        
  </style>
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> onehealth1000@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary">One</span>-Health</a>

        <form action="#">
          <div class="input-group input-navbar">
            
           
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('aboutus')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('doctorlist')}}">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('newsdetails')}}">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('contact')}}">Contact</a>
            </li>

            @if(Route::has('login'))

            @auth

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3"   href="{{url('myappointment')}}">My Appointment</a>
            </li>

            <x-app-layout>
            </x-app-layout>


            @else
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login </a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register </a>
            </li>

            @endauth
            @endauth
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>

 </header>

 <div class="container" style="background-color:#D2D5D8 ;border-radius: 0px 0px 10px 10px ">
    <div class="py-5 text-center">
        <h1 class="text-center mb-5 wow fadeInUp">Doctor Profile</h1>

     
    </div>

    
     <div class="clearfix">
        <div class="row justify-content-center">
           <div class="col-6 col-sm-4" >
             <img src="/doctorimage/{{$data->image}}" alt="" height="400px" width="300px" style=" border-radius: 10px 10px 0px 0px"  >
            </div>
            <div class="col-6 col-sm-4">
                <h3 style="color: #2289CE ">
                <b>PROFILE</b>
                </h3>
                <h2>{{$data->name}}</h2>
                <p>{{$data->speciality}}</p>
                <br>

                <br>
                <h3 style="color: #2289CE ">
                <b>SPECIALITY</b>
                </h3>
                
                <Ii>{{$data->speciality}}</li>

            </div>

            <div class="w-100 d-none d-md-block"></div>

            <div class="col-6 col-sm-4" style="background-color:#3E9CDC ; color:white" >
                
                <h2><b>{{$data->name}}</b></h2>
                <p>{{$data->speciality}}</p>

                
            </div>
            <div class="col-6 col-sm-4" >
              

                <h3 style="color: #2289CE ">
                <b>EXPERIENCE</b>
                </h3>
                <p>22 Years</p>
                <h3 style="color: #2289CE ">
                <b>LANGUAGE</b>
                </h3>
                <p>English</p>
               
            </div>

            <div class="w-100 d-none d-md-block"></div>

            <div class="col-6 col-sm-4"  >
                  <br>
                  <br>
                 <h3 style="color: #2289CE "><b>BIOGRAPHY</b></h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima maxime sequi quod consectetur commodi quaerat laudantium molestiae! Maiores, eum quia, reiciendis tempore quis harum alias architecto sit vel corrupti labore.</p>

    
            </div>
            <div class="col-6 col-sm-4" >
  
               <br>
               <br>
               <h3 style="color: #2289CE ">
                <b>TYPE</b>
                </h3>
                <p>FULL time </p>
                <br>
              <h3 style="color: #2289CE ">
              <b>CONTACT</b>
              </h3>
              <p>Your mail@exa,ple.com</p>
            </div>
            

         </div>
    </div>
   
</div>
   <br>
   <br>
</div>
  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Doctors</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">One-Fitness</a></li>
            <li><a href="#">One-Drugs</a></li>
            <li><a href="#">One-Live</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
          <a href="#" class="footer-link">701-573-7582</a>
          <a href="#" class="footer-link">healthcare@temporary.net</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2022 <a href="#" target="_blank">Acute Triangle</a>. All right reserved</p>
    </div>
  </footer>




<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>