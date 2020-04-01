<?php
require ("db_conn.php");
//Insert Member
if(isset($_POST['Save'])){

	$name = filter_var($_POST['name'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$tagId = filter_var($_POST['tagId'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$password = filter_var($_POST['password'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);	
	$pass=md5($password);

	//see if that member is an identical match to another in the system
	 $sql = mysqli_query($link,"SELECT parkname FROM parkadmin WHERE parkname='".$name."'  LIMIT 1");
	$data_match=mysqli_num_rows($sql);//count the output
	
	if($data_match>0){
	
	echo "<script>
	if(confirm('User with that name already
	 exists')){
		window.location = 'register.php';
	}
	</script>";
	}	
	
	else{
		//$sql = mysqli_query($link,"INSERT INTO parkadmin(parkname,tagid,password) VALUES ('".$name."','".$tagId."','".$password."')");
		
		$sql = "INSERT INTO parkadmin(parkname,tagid,password)  VALUES ('$name','$tagId','$password')";										

if(mysqli_query($link,$sql));
{
	$result["success"] = "1";
	$result["message"] = "success";	

	header('location:index.php?success');

	mysqli_close($link);
	exit();	}
}		
		
		
}
?>