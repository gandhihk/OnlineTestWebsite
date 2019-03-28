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

$name = $_GET['username'];
$pass = $_GET['password'];
$usertype = $_GET['usertype'];
$divs = $_GET['divi'];

if($usertype == "student"){
$usertype = "students";
}else{
$usertype = "faculty";
}

echo $usertype;

$q = " select * from $usertype where name = '$name' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" duplicate data ";
}else{

	$qy= " insert  into $usertype(name , password , division) values ('$name' , '$pass' , '$divs') ";
	mysqli_query($con, $qy);

	$_SESSION['username'] = $name;
	header('location:login.html');
}

mysqli_close($con);

?>
