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
      <h1>Parking Details</h1>
       <h4>The Details of The Parking slot are: </h4><br><br>
      <?php
      $parkingID = $_SESSION["parkID"];
      $sql_query = "select priceday, pricehour, securityoption, surveillanceoption, hoursoption, briefdescription, capacity from parkingInfo where parkingID = $parkingID";
      $result = mysqli_query($link, $sql_query);
      if ($result->num_rows > 0) {
        # code...
        while ($row = $result->fetch_assoc()) {
          # code...
          echo "Brief Description: ". $row['briefdescription'];
          echo "<br><br>";
          echo "Price Rate per Hour: ". $row['pricehour'];
          echo "<br><br>";
          echo "Price Rate per Day: ". $row['priceday'];
          echo "<br><br>";
          echo "Security Available? ". $row['securityoption'];
          echo "<br><br>";
          echo "Surveillance Available?". $row['surveillanceoption'];
          echo "<br><br>";
          echo "Operation Time: ". $row['hoursoption'];
          echo "<br><br>";
          echo "Capacity: ". $row['capacity'];
          echo "<br><br>";
        }
      }
      else {
          echo "0 results";
      }
        $_SESSION['tagID'] = $parkingID;
        $link->close();
      ?>

      <button type="button" onclick="window.location.href='http://localhost:1234/parkpoaportal/park_edit.php'">Edit Details</button>

      </div>
    </div>
    <?php include "footer.php"?>
  </div>

</body>
</html>

