<?php 
include_once("db_conn.php");
session_start();
global $link;
//Parse the log in form if the user has filled it out and pressed "Log in"
if(isset($_POST["Login"])){
	
	$parkname = filter_var($_POST["parkname"],
	FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$password = filter_var($_POST["password"],
	FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	
	

$sql= mysqli_query
($link, "SELECT * FROM parkadmin WHERE parkname='".$parkname."' AND password='".$password."' LIMIT 1") 
or die (mysqli_error());

//Make  sure the person exists
$count=mysqli_num_rows($sql);
$row = mysqli_fetch_array($sql);
if($count > 0){
$_SESSION['id']=$row['adminId'];

$id=$row['adminId'];
$parkname=$row['parkname'];
$password=$row['password'];

$sql = mysqli_query($link,"INSERT INTO owner_log_in_activity(park_id,parkname,password,login_date) VALUES ('".$id."','".$parkname."','".$password."',now())");

$_SESSION['tagId'] = $id;
echo $_SESSION['parkID'];
header("location: booking_info.php");


}	else{
		header("location:index.php");
}

}

?>