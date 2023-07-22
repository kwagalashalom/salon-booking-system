<!-- establishing a connection -->
<?php include('bootstrap_admin_panel/includes/connection.php');?>
<!-- establishing a connection -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
<!-- accessing the form -->
<?php

if (isset($_POST['submit']))
{
    date_default_timezone_set('Africa/Kampala');
    $name= $_POST['name'];
    $hairstyle= $_POST['hairstyle']; 
    $location= $_POST['location'];
    $contact= $_POST['contact'];
    $email=$_POST['email'];
    $time=$_POST['time'];
 
        $time = date('g:i',strtotime($time));

           // checking for time
           $sql="select * from bookings where hairstyle='$hairstyle' order by id desc";
           $query=mysqli_query($connect,$sql);
           $row=mysqli_fetch_array($query);
      
                $dbTime=$row['time'];
              

                 $dbTime = date('g:i', strtotime($dbTime));
                 $dbTime = date('g:i', strtotime($dbTime . '+1 hour'));
            $dbTime = date('g:i', strtotime($dbTime , strtotime($dbTime . '+1 hour')));
           if( $time > $dbTime)
           {
              // submitting data to the database
    $sql="INSERT INTO `bookings` (`id`, `name`, `hairstyle`, `time`, `location`, `contact`, `email`) 
    VALUES (NULL, ' $name', '$hairstyle', '$time', '$location', '$contact', '$email')";
    $query=mysqli_query($connect,$sql);

   
    if(!$query)
    {
        echo "error in data saving ";
    }
    else
    {
             echo "Booking successfully recieved";
             ?>
             <a href="index.php" class="btn btn-primary btn-sm mx-2">Back</a>
             <?php
    } 
           }else{

                                    // PHP variable
                       

                        // JavaScript alert with the PHP variable
                        echo '<script>';
                        echo 'var message = "Book after ' . $dbTime . ' for '.$hairstyle.' ";'; // Echo the PHP variable value as a JavaScript variable
                        echo 'alert(message);'; // Display the alert with the JavaScript variable
                        echo '</script>';
                       ?>
                       <script>
                        window.location="booking_form.php";
                       </script>
                       <?php
                     
       
           }
          
       

        //  accessing the form
      

    
}
?>
