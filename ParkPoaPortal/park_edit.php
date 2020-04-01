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
          <li class="selected"><a href="park_details.php">Park Details</a></li>
          <li><a href="booking_info.php">Booking Details</a></li>
        </ul>             
      </div>

    </div>
    <div id="site_content">
      <div id="content">
        <!-- PAGE CONTENTS -->
       <h1>Parking Details</h1>
       <h4>Edit the following Details of The Parking slot. </h4><br><br>
       <form role="form" action="edit_submit.php" method="POST">
          Brief description: 
              <input type = "text" name = "description"><br><br>

          Rate per Day:
              <input type = "text" name = "dayRate"><br><br>

          Rate per Hour: 
              <input type = "text" name = "hourRate"><br><br>

          Security availability:
              <input type = "text" name = "security"><br><br>
             
          Survaillance availability: 
              <input type = "text" name = "survey"><br><br>

          Operation Time: 
              <input type = "text" name = "operation"><br><br>

          Capacity:
              <input type = "text" name = "capacity"><br><br>


               <input type="submit" name="Save" value="Save"><br><br>


        </form> 

         <button type="button" onclick="window.location.href='http://localhost:1234/parkpoaportal/park_reg.php'">Register</button>    
        <?php 
        $parkingID = $_SESSION["parkID"];

        $_SESSION['parkID'] = $parkingID;

        ?>
       

      </div>
    </div>
    <?php include "footer.php"?>
  </div>

</body>
</html>

