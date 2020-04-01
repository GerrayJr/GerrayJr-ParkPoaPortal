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
          <li class="selected"><a href="register.php">Register</a></li>
        </ul>             
      </div>

    </div>
    <div id="site_content">
      <div id="content">
        <!-- PAGE CONTENTS -->
        <h3>Register your Parking Lot</h3>
        <form role="form" action="reg_submit.php" method="POST">
          Park Name: 
              <input type = "text" name = "name"><br><br>
          Park Name: 
              <input type = "text" name = "tagId"><br><br>
          Password: 
              <input type = "password" name = "password"><br><br>


               <input type="submit" name="Save" value="Save"><br><br>

        </form>     
       
        
      </div>
    </div>
    <?php include "footer.php"?>
  </div>

</body>
</html>

