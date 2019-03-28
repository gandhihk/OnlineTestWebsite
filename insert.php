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

$faculty_user = $_SESSION['username'];
echo "$faculty_user";
$q1 = " select division from faculty where name='$faculty_user' ";
$result = mysqli_query($con,$q1);
$row = mysqli_fetch_array($result);
$d = $row['division'];
$subject= $_SESSION['subject'];
echo "$d";
$question = $_GET['question'];
echo "$question";
$number = $_GET['number'];
$ans1 = $_GET['option1'];
$ans2 = $_GET['option2'];
$ans3 = $_GET['option3'];
$sql = " INSERT INTO Questions (number,division,subject,quests) values ('$number','$d','$subject','$question') ";
$sql2 = " insert into Options (number,option_number,division,subject,answers) values ('$number','1','$d','$subject','$ans1'),('$number','2','$d','$subject','$ans2'),('$number','3','$d','$subject','$ans3')";
$result1 = mysqli_query($con, $sql);
$result2 = mysqli_query($con, $sql2);
if ($result1 && $result2) {
	header('location:facultyactivity.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

?>
