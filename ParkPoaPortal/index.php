<?php
  include "header.php"
?>
 <body>

  <div id="main">
    <div id="header">

       <div id="main">
    <div id="header">

      <div id="logo">
        <div id="logo_text">
         <h1><a href="index.php">ParkPoa Portal<span class="logo_colour"></a></h1>
          <h2>Easening Park Booking in Our city</h2>
          <h2>BOOK | PARK | ENJOY</h2>
        </div>
      </div>
      <!-- MAIN MENU -->
      <div id="menubar">
        <ul id="menu">
          <li class="selected"><a href="index.php">Sign In</a></li>
        </ul>             
      </div>

    </div>
    <div id="site_content">
      <div class="sidebar">

        <h3>Car-Park Administrator</h3><br>
        
        <p>On Login in, Please Enter the Parking Site name and Your Password</a></p><br>
        <p>Thank You</p>
        <h4></h4>
      </div>
      <div id="content">
        <!-- PAGE CONTENTS -->
        <h3>Welcome back</h3>
          <p>To Log in, Enter the following Information:</p>
        <form role="form" action="login-exec.php" method="POST">
          Park Name: 
              <input type = "text" name = "parkname"><br><br>
          Password:
              <input type = "password" name = "password"><br><br>

              <input type="submit" name="Login" value="Login"><br><br>

              <button type="button" onclick="window.location.href='http://localhost:1234/parkpoaportal/register.php'">Register</button>

        </form>     
        
      </div>
    </div>
    <?php include "footer.php"?>
  </div>

</body>
</html>

