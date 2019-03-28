<?php

session_start();

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "website";

$con = mysqli_connect($servername, $username, $password, $dbname);

if($con == NULL){
	echo" connection failed";
}else{
	echo " connection"; 
}

mysqli_select_db($con, 'website');

$name = $_GET["username"];
$pass = $_GET["password"];
$usertype = $_GET["usertype"];
$divs = $_GET["divi"];

$_SESSION["userNAME"] = $name;
$_SESSION["passWORD"] = $pass;

if($usertype == 'student') {
	$table = 'students';
}else
$table = 'faculty';

$q = " select * from $table where name = '$name' && password = '$pass' && division = '$divs' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){

	$_SESSION['username'] = $name;	
	if($usertype == "student") {
		header('location:studenthome.php');
	}
	else {
		header('location:facultyhome.php');
	}
}else{

	echo "Username/Password is incorrect.";
	header('location:login.html');
}

?>
