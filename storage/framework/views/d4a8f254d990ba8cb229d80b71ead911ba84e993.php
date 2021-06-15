<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inventory System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
  .fakeimg {
    height: 200px;
    background: #aaa
  }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="/home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/usermaster">Users</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="/placemaster">Places</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="/categorymaster">Categories</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="/itemmaster">Items</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="/inwardregister">InwardRegister</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/outwardregister">OutwardRegister</a>
      </li>
      <?php if(session()->has('uname')): ?>
	  <li class="nav-item">
	  
	  <a href="usermaster/logout" class="nav-link"> Logout</a></li>
	 
	<?php else: ?> 

    <li class="nav-item"><a href="login" class="nav-link"></span> Login</a></li>
	 
	<?php endif; ?>
      
    </ul>
  </div>  
</nav>

<div class="jumbotron text-center" style="margin-bottom:0px">
<center><h1 style="color:red"><b>Inventory System</b></h1></center><br>

<div class="container" style="margin-top:30px">
  <div class="row">
   
    <div class="col-sm-12" >
    <br>
			<?php echo $__env->yieldContent("contain"); ?>
			<br><br><br>
	  </div>
  </div>
</div>
<br>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>
<?php /**PATH F:\inventory\resources\views/layout/adminmaster.blade.php ENDPATH**/ ?>