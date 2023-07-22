<?php include('bootstrap_admin_panel/includes/connection.php');?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
<!-- accessing the form -->
<?php

if(isset($_POST['login']))
{
     $email=$_POST['email'];
   $password=$_POST['password'];
   $sql="select * from login where email='$email'&& password='$password'";
   $query=mysqli_query($connect, $sql);
   $row=mysqli_fetch_array($query);
   if($row)
   {
       header('location: bootstrap_admin_panel/');
       }

   else{
    
    echo "Try Again Please";
    ?>
    <a href="login.php" class="btn btn-danger btn-sm mx-2">login Again</a>
    <?php
   }
}
?>