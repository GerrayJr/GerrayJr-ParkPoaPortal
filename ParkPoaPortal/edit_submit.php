<?php
require ("db_conn.php");
//Insert Member
if(isset($_POST['Save'])){

	$description = filter_var($_POST['description'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$hourRate = filter_var($_POST['hourRate'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$dayRate = filter_var($_POST['dayRate'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);	
	$security = filter_var($_POST['security'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$survey = filter_var($_POST['survey'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$operation = filter_var($_POST['operation'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$capacity = filter_var($_POST['capacity'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

	$parkingID = $_SESSION["parkID"];      

	
	$sql = "UPDATE parkinginfo SET briefdescription = '$description', pricehour = '$hourRate' , priceday = '$dayRate',securityoption = '$security', surveillanceoption = '$survey', hoursoption = '$operation', capacity = '$capacity' WHERE parkingID = '$parkingID'"; 


	if(mysqli_query($link,$sql));
{
	$result["success"] = "1";
	$result["message"] = "success";	

	header('location:park_details.php?success');
    $_SESSION['parkID'] = $parkingID;
	mysqli_close($link);
	exit();	}
}		
			
	



?>
