<?php
if(isset($message))
{
   foreach($message as $message)
   {
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="header-1">
      <div class="flex">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
        
      </div>
   </div>

   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo">Fun Olympic</a>

         <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
           
            <a href="contact.php">Contact</a>
            <a href="Video.php">Watch Video</a>
            <a href="game_data.php">Game </a>
            
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            
            <div id="user-btn" class="fas fa-user"></div>
            
         </div>

         <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
         </div>
      </div>
   </div>

</header>