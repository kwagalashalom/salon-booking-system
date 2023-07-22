<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./assets/css/bootstrap.css">

    <title>Salon Booking System</title>
    <style>
    
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Online Saloon</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>


<!-- slider -->
<style>
  .carousel-caption{
    top:20%
  }
</style>
<section id="slider">

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" style="height:40rem">
    <div class="carousel-item active">
      <img src="slides/salon1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="display-5 fw-bold color-blue">ONLINE SALON BOOKING AND SCHEDULING SYSTEM</h5>
        <p>We Offer Nothing But The Best</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="slides/salon2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>COME EXPLORE OUR SALONS' SERVICES</h5>
        <p>Giving You the Best Feeling is our Priority</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 
</section>


<section id="cards">

<div class="container p-4">
  <div class="row">
    <h2 class="text-center fw-bold ">Registered Salons</h2>
    <div class="col-md-10">
      <div class="row">

      <?php include('bootstrap_admin_panel\includes\connection.php');?>
      <?php
        $sql="SELECT * FROM `salons` order by id desc";
        $query=mysqli_query($connect, $sql);
        while($row=mysqli_fetch_array($query))
        {
          ?>
                 <div class="col-md-4 mb-4">
                  <div class="card" style="width: 18rem;">
                    <img src="bootstrap_admin_panel\images\<?php echo $row['image'];?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo  strtolower($row['name']);?></h5>
                      <p class="card-text"><?php echo strtolower($row['hairstyle']);?></p>
                      <p><?php echo $row['charge'];?></p>
                      <p><?php echo strtolower($row['location']);?></p>
                      <a href="booking_form.php" class="btn btn-primary">Book Now</a>
                    </div>
               </div>
        </div>
          <?php
        }
      
      ?>
      
        </div>
      </div>
    </div>
  </div>
</div>
</section>


    <script src="./assets/js/bootstrap.js"></script>
  </body>
</html> 