<?php

include 'config.php';

if (isset($_POST['submit'])) 
{

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $user_type = $_POST['user_type'];
   $contact = mysqli_real_escape_string($conn, $_POST['contact']);
   $country = mysqli_real_escape_string($conn, $_POST['country']);
   $favsport = mysqli_real_escape_string($conn, $_POST['favsport']);

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if (mysqli_num_rows($select_users) > 0) 
   {
      $message[] = 'user already exists!';
   } 
   else 
   {
      if ($pass != $cpass) 
      {
         $message[] = 'confirm password not matched!';
      } else {
         mysqli_query($conn, "INSERT INTO `users`(name, email, password, user_type, contact, country, favsport) VALUES('$name', '$email', '$cpass', '$user_type', '$contact', '$country', '$favsport')") or die('query failed');
         $message[] = 'registered successfully!';
         header('location:login.php');
      }
   }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
        body {
                background-image: url('bg.jpeg');
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
                transition: background-image 0.5s ease;
            }
            .form-container{
               background-color: transparent;
            }
            .form-container form{
               width: 60rem

            }
   </style>

</head>

<body>



   <?php
   if (isset($message)) {
      foreach ($message as $message) {
         echo '
      <div class="message">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
      }
   }
   ?>

   <div class="form-container">

      <form action="" method="post">
         <h3 class="text-center">Register</h3>
         <input type="text" name="name" placeholder="enter your name" required class="box">
         <input type="email" name="email" placeholder="enter your email" required class="box">
         <input type="number" name="contact" placeholder="Enter contact number" pattern="[0-9]{10}" maxlength="10"
            required class="box">


         <select name="country" required class="box">
            <option value="">Select Country</option>
            <?php
            // Establish database connection
            include 'config.php';

            // Query to fetch countries from the database
            $query = "SELECT * FROM `country` ORDER BY name ASC";
            $result = mysqli_query($conn, $query);

            // Loop through the query results to generate select options
            while ($row = mysqli_fetch_assoc($result)) {
               echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
            }

            // Close database connection
            mysqli_close($conn);
            ?>
         </select>
         <select name="favsport" required class="box">
            <option value="" disabled>Select your favorite sport</option>
            <option value="football">Football</option>
            <option value="basketball">Basketball</option>
            <option value="tennis">Tennis</option>
            <option value="cricket">Cricket</option>
            <!-- Add more options as needed -->
         </select>

         <input type="password" name="password" placeholder="enter your password" required class="box">
         <input type="password" name="cpassword" placeholder="confirm your password" required class="box">
         <select name="user_type" class="box">
            <option value="user">user</option>
            <option value="admin">admin</option>


         </select>
         <input type="submit" name="submit" value="register now" class="btn">
         <p>already have an account? <a href="login.php">Login Now</a></p>
      </form>

   </div>

</body>

</html>