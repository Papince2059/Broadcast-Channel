<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Fun Olympics</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom CSS for table styling */
    .table-hover tbody tr:hover {
      background-color: #f8f9fa;
    }

    .table-hover tbody tr:hover td {
      color: #000;
    }
  </style>

</head>
<body>
   
<?php include 'header.php'; ?>






<section >
<div class="container mt-5">
    <h1 class="mb-4">Olympic Games Routine</h1>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Olympic Game Name</th>
          <th>Game Date</th>
          <th>Game Venue</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Swimming</td>
          <td>April 1, 2024</td>
          <td>Payris Stadium</td>
        </tr>
        <tr>
          <td>Gymnastics</td>
          <td>April 2, 2024</td>
          <td>Payris Stadium</td>
        </tr>
        <tr>
          <td>Track and Field</td>
          <td>April 3, 2024</td>
          <td>Payris Stadium</td>
        </tr>
        <tr>
          <td>Basketball</td>
          <td>April 4, 2024</td>
          <td>Payris Stadium</td>
        </tr>
        <tr>
          <td>Football</td>
          <td>April 5, 2024</td>
          <td>Payris Stadium</td>
        </tr>
        <tr>
          <td>Tennis</td>
          <td>April 1, 2024</td>
          <td>Payris Stadium</td>
        </tr>
        <tr>
          <td>Weightlifting</td>
          <td>April 2, 2024</td>
          <td>Payris Stadium</td>
        </tr>
        <tr>
          <td>Cycling</td>
          <td>April 3, 2024</td>
          <td>Payris Stadium</td>
        </tr>
        <tr>
          <td>Archery</td>
          <td>April 4, 2024</td>
          <td>Payris Stadium</td>
        </tr>
        <tr>
          <td>Boxing</td>
          <td>April 5, 2024</td>
          <td>Payris Stadium</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>





<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>