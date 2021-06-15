<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Inventory System</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="/plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="/plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="/plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="/plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="/plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="/plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="/css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
  <link rel="icon" href="/images/favicon.png" type="image/x-icon">

</head>

<body>
  <!-- preloader start -->
  <div class="preloader">
    <img src="/images/img6.gif" alt="preloader">
  </div>
  <!-- preloader end -->

<!-- header -->
<header class="fixed-top header">
  
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
       <h2 style="color:white;font-size:55px;margin:20px 0px 20px 0px;"> Inventory System</h2>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item active">
              <a class="nav-link" href="/home">Home</a>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link" href="/usermaster">Users</a>
            </li>
            <li class="nav-item @@courses">
              <a class="nav-link" href="/categorymaster">Categories</a>
            </li>
            <li class="nav-item @@events">
              <a class="nav-link" href="/placemaster">Places</a>
            </li>
            <li class="nav-item @@blog">
              <a class="nav-link" href="/itemmaster">Items</a>
            </li>
            <li class="nav-item @@blog">
              <a class="nav-link" href="/inwardregister">Inward</a>
            </li>
            <li class="nav-item @@blog">
              <a class="nav-link" href="/outwardregister">Outward</a>
            </li>
            
  @if(session()->has('uname'))
	  
    <li class="nav-item @@blog">
	     <a class="nav-link" href="/usermaster/logout"> Logout</a>
    </li>
	@else 

    <li class="nav-item @@blog">
    <a class="nav-link" href="/login"> <b>Login</b></a>
      <!--<div class="container">
       <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#loginModal">Login</button>    
        <div class="modal fade" id="loginModal" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login</h4>
              </div>
              <div class="modal-body">
                <p>Ansh shah</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>-->
    </li>
	@endif

            
	  </ul>

        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- hero slider -->
<section class="hero-section overlay bg-cover" data-background="/images/banner/banner-1.png" size="50%">
  <div class="container">
    <div class="hero-slider">
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
          <h1 style="color:orange;">Welcome {{session()->get('uname')}} !</h1><br>
            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Our Purpose</h1>
            <h5 class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">
              The Primary Purpose of an Inventory System is to keep an accurate records of stockroom supplies.The resons to maintain accurate inventory records includes financial accounting, customer order fulfillment, stock replenishment and maintaining the ability to locate specific an item.
            </h5>
            </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Importance Of Inventory System</h1>
            <h5 class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">
              Inventory management is important to small businesses because it helps them prevent stockouts, manage multiple locations, and ensure accurate recordkeeping. An inventory solution makes these processes easier than trying to do them all manually.
              </h5>
            </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-9">
            <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1"><i>Your bright future is our Mission</i></h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4"></p>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /hero slider -->

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-12">
    <br>
			@yield("contain")
			<br><br><br>
	  </div>
  </div>
</div>



<!-- jQuery -->
<script src="/plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="/plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="/plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="/plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="/plugins/venobox/venobox.min.js"></script>
<!-- filter -->
<script src="/plugins/filterizr/jquery.filterizr.min.js"></script>

<!-- Main Script -->
<script src="/js/script.js"></script>

</body>
</html>