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
      <div id="menubar">
        <ul id="menu">
          <li><a href="park_details.php">Park Details</a></li>
          <li class="selected"><a href="booking_info.php">Booking Details</a></li>
        </ul>             
      </div>

    </div>

    <div id="site_content">
      <div class="sidebar">
        <h3>Car-Park Administrator</h3><br>
        
        <p>The Table Displays Number of Cars Booked to your Parking site </a></p><br>
        <h4></h4>
      </div>
      <div id="content">
        <h1>Booking Information</h1>
        <table>
          <tr>
            <th>Plate Number</th>
            <th>Car Model</th>
            <th>Duration Type</th>
            <th>Booking Time</th>
          </tr>
        <?php
        $parkingID = $_SESSION["parkID"];
        $sql = "SELECT plateno, cartype, durationtype, BookingTime FROM carbooking WHERE parkId = $parkingID";
        $result = $link -> query($sql);
        if ($result -> num_rows >0) {
          # code...
          while ($row = $result -> fetch_assoc()) {
            # code...
            echo "<tr><td>". $row["plateno"]. "</td><td>". $row["cartype"]. "</td><td>". $row["durationtype"]. "</td><td>". $row["BookingTime"]. "</td></tr>" ;
          }
          echo "</table>";
        }else { echo "0 Bookings Made";}
        $link ->close();
        ?>
      </div>
    </div>
    <?php include "footer.php"?>
  </div>

</body>
</html>

