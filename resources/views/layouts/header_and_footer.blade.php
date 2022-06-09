<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="bootsrapFiles\css\bootstrap.min.css" type="text/css">
    <link href="fontAwesome\all.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="stylesheet\head.css">
    {{-- <link href="fontAwesome\fontawesome.css" rel="stylesheet" type="text/css">
    <link href="fontAwesome\brands.css" rel="stylesheet" type="text/css">
    <link href="fontAwesome\regular.css" rel="stylesheet" type="text/css">
    <link href="fontAwesome\solid.css" rel="stylesheet" type="text/css"> --}}

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>Acco Aid GH  </title> --}}
    <link rel="icon" type="image/x-icon" href="images\favicon.png">
</head>
<body class="">

    {{-- Header Section --}}
    <div class="head-section fixed-top">
        {{-- First navbar --}}
        <nav class="navbar navbar-light First-navbar ">
          {{-- left side --}}
          <div class="ms-5" >
              <a class="text-decoration-none text-dark me-3" href="#">
                  <i class=" h6 text-danger fa-regular fa-envelope" mailto=""></i> 
                  <span class="">info@accoaidgh.com</span>
                </a>
                <a class=" text-decoration-none text-dark" href="tel:+">
                  <i class="h6 text-danger fa-solid fa-phone"></i>
                  +233-000-000-000
              </a> 
          </div>

          {{-- Right side --}}
          <div class="mx-5 " >
              <a class=" " href="#"></a> <i class="mx-3 h5 text-danger fa-brands fa-facebook-square"></i>
              <a class=" " href="#"></a> <i class="mx-3 h5 text-danger fa-brands fa-instagram-square"></i>
              <a class= "" href="#"></a> <i class="mx-3 h5 text-danger fa-brands fa-google"></i>
              <a class=" " href="#"></a> <i class="mx-3 h5 text-danger fa-brands fa-youtube"></i>
          </div>
        </nav>

        {{-- Second navbar --}}
        <nav class="navbar navbar-expand-lg navbar-light Second-navbar ">
            <div class="container-fluid">
              <a class="navbar-brand ps-5" href="/" style="" >
                <img src="images\logo.png" alt="logo" srcset="" style="width:250px">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-center " id="navbarSupportedContent">
                <ul class="navbar-nav navbar-head">
                  <li class="nav-item mx-5">
                    <a class="nav-link  " aria-current="" href="#">Book A Room</a>
                  </li>
                  
                  <li class="nav-item dropdown mx-5 ">
                    <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Pages
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="/">Our platform</a></li>
                      <li><a class="dropdown-item" href="about-us">About Us</a></li>
                      <li><a class="dropdown-item" href="/#available-rooms">How to book a room</a></li>
                      <li><a class="dropdown-item" href="faq">FAQ / Help</a></li>
                      <li><a class="dropdown-item" href="review">Reviews</a></li>
                      {{-- <li><a class="dropdown-item" href="#">Help</a></li> --}}
                      <li><a class="dropdown-item" href="contact">Contacts</a></li>
                      <li><a class="dropdown-item" href="terms and conditions">Terms & Conditions </a></li>
                      <li><a class="dropdown-item" href="privacy policy">Privacy policy</a></li>
                    </ul>
                  </li>

                  <li class="nav-item mx-5">
                    <a class="nav-link text-dark" aria-current="page" href="#">Blog</a>
                  </li>
                  <li class="nav-item mx-5">
                    <button class=" advertise" >
                        <a class="nav-link advertise-link" aria-current="page" href="#">Advertise Room For Free</a>
                    </button>
                  </li>

                </ul>
              </div>
            </div>
          </nav>
     
    </div>

    @yield('body')


    {{-- Footer Section--}}
    <div class="bg-dark footer" style="background-color: ">
        <div class="row text-light">
          <div class="col-3">
            <a class="navbar-brand " href="#" style="" >
              <img src="images\logo.png" alt="logo" srcset="" style="width:250px">
            </a>
            <div class="rights-reserved">
              &#169; All rights reserved.
               <br>
               Web Design by DickCode Services Ltd.
            </div>
          </div>
          <div class="col-3">
            <div class="footer-title">
              Pages
            </div>
            <div class="footer-body">
              <a href="#"> Our Platform </a> <br>
              <a href="#">About Us </a> <br>
              <a href="#">How To Book A Room </a> <br>
              <a href="#">FAQ </a> <br>
            </div>
          </div>
          <div class="col-4">
            <div class="footer-title">
              Payment Methods We Accept
            </div>
            <div class="payment-method">
              Logos here
            </div>
          </div>
          <div class="col-2">
            <div class="footer-title">
              Information
            </div>
            <div class="footer-body">
              <a href="#" style="color: tomato">Tel : </a> <br>
              <a href="#" style="color: tomato">Email : </a> <br>
              <a href="#" style="color: tomato"> Location : </a> <br>
            </div>
          </div>
        </div>
    </div>

    {{-- Terms of Service | Privacy Policy --}}
    <div class="terms-privacy">
      <span class="terms">Terms of Services </span> <a class="privacy" href="privacy">Privacy Policy</a>
    </div>



    {{-- Bootstrap files --}}
    <script src="js/Bootstrapjquery.js"></script>
    <script defer src="js/all.js"></script>
    <script src="js/Propper.js"></script>
    <script src="js/bootstrap.js"></script>     
</body>
</html>