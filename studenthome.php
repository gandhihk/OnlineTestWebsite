<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login.html');
}
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "website";

$con = mysqli_connect($servername, $username, $password, $dbname);

if($con == NULL){
	echo" connection failed";
}

mysqli_select_db($con, 'website');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Student Home</title>
		
		<style type="text/css">
	
		.rules
		{
			border:1px solid #888;
			box-shadow: 2px 2px #aaa;
			width:80%;
			margin:2px auto;
		}

		#imagerule
		{
			float:left;
		}

		form
		{
			margin: 40px 450px;
		}

		#container {height: 100%; width:100%; font-size: 0;margin :20px auto;font-size: 30px;}
		#sub1, #sub2, #sub3, #sub4{display: inline-block; *display: inline; zoom: 1; vertical-align: top; font-size: 12px;}
		
		#sub1{width: 22%;height:300px; border:1px solid black; margin:1px 2px; padding:4px;}
		#sub2{width: 22%;height:300px; border:1px solid black; margin:1px 2px; padding:4px;}
		#sub3{width: 22%;height:300px; border:1px solid black; margin:1px 2px; padding:4px;}
		#sub4{width: 22%;height:300px; border:1px solid black; margin:1px 2px; padding:4px;}

		#sub1:hover{box-shadow: 2px 2px 2px 2px #888;}
		#sub2:hover{box-shadow: 2px 2px 2px 2px #888;}
		#sub3:hover{box-shadow: 2px 2px 2px 2px #888;}
		#sub4:hover{box-shadow: 2px 2px 2px 2px #888;}

	
</style>

</head>	

<body>
		<br><h1 style="text-align:center;">Welcome <?php echo $_SESSION["username"];?></h1><br>
		<div class="rules">
			
			<img id="imagerule" src="images/teacher.jpg">

			<h4>Rules and Regulations Regarding The Test</h4>
			<ol>
				<li>There are in all 4 Subjects.</li>
				<li>The student can choose to attempt the test for any of these subjects.</li>
				<li>The test contains 10 questions each for any subject.</li>
				<li>Each question is a multiple choice question with 4 options.</li>
				<li>Only one of the four options is correct for any of the question.</li>
				<li>The test must be completed by the student in a given time limit.</li>
				<li>If the student fails to complete the test within the alloted time,his score will be considered as zero.</li>
				<li>The result of the test will be displayed once the student presses the submit button.</li>
				<li>The marks scored by student in the first attempt will be considered as final.</li>
			</ol>	
			
		</div>	

		<form method="get" action="Question.php">
			Select Any Subject :- 
			<select name="subject">
				<option value="DS">Data Structures</option>
				<option value="DCN">Data Communication Networks</option>
				<option value="AOA">Algorithms</option>
				<option value="DBMS">DataBase Management Systems</option>
			</select>	
			<input type="submit" name="GO"  value="GO">
		</form>	

		<div id="container" style="height:100%; width:100%" >

        	<div id="sub1">
            	<h2 align="center">Data Structures</h2>
            	<img src="images/ds.jpg">
            	<p>A data structure is a data organization and storage format that enables efficient access and modification.More precisely, a data structure is a collection of data values, the relationships among them.</p>
        	</div>

        	<div id="sub2">
            	<h2 align="center">Data Communication Networks</h2>
            	<img src="images/networking.jpg">
            	<p>A computer network, or data network, is a digital telecommunications network which allows nodes to share resources. In computer networks, computing devices exchange data with each other using connections (data links) between nodes.</p>
        	</div>

        	<div id="sub3">
            	<h2 align="center">Algorithms</h2>
            	<img src="images/algo.jpg">
            	<p>In mathematics and computer science, an algorithm is an unambiguous specification of how to solve a class of problems. Algorithms can perform calculation, data processing and automated reasoning tasks.</p>
        	</div>

        	<div id="sub4">
            	<h2 align="center">DataBase Management Systems</h2>
            	<img src="images/db.jpg">
            	<p>A database-management system (DBMS) is a computer-software application that interacts with end-users, other applications, and the database itself to capture and analyze data. (Sometimes a DBMS is loosely referred to as a "database".) </p>
        	</div>
    	</div>
<br><div style="text-align:center;" class="m-auto d-block">
	<a href="logout.php" class="btn btn-primary "> LOGOUT </a>
	</div>
	</body>	
</html>
