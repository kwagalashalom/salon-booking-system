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
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">login</a>
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

<div class="container pl-5 mt-5 ">
    <div class="row pl-5  justify-content-center">
        <div class="col-md-6 p-5">


         
    <!-- form -->
    <div class="container ">
        <div class="heading text-center"><h3>LOG IN</h3></div>
    <form class="bg-light shadow p-4" action="login_insert.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12">
            
        <div class="mb-3">
            <label for="" class="form-label">EMAIL</label>
            <input type="email" class="form-control" id="" required name="email">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">PASSWORD</label>
            <input type="password" class="form-control" id="" required name="password">
        </div>
    
    
        <button type="submit" name="login" class="btn btn-primary block">Sign In</button>
    </form>
    </div>
    <!-- form -->


        </div>
    </div>
</div>






<script src="./assets/js/bootstrap.js"></script>

<?php include('bootstrap_admin_panel/includes/footer.php');?>