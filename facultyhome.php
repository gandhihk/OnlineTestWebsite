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
		<title>Faculty Home</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.css">
		<style type="text/css">
	
		.rules
		{
			border:1px solid #888;
			box-shadow: 2px 2px #aaa;
			width:75%;
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

		hr
		{
			
		
		}

		#container {height: 100%; font-size: 0;font-size: 30px;}
		#sub1, #sub2, #sub3{display: inline-block; *display: inline; zoom: 1;margin:2px 300px; vertical-align: top; font-size: 12px;}
		
		#sub1{width: 30%;height:370px; border:1px solid black; margin:1px 2px; padding:4px;}
		#sub2{width: 30%;height:370px; border:1px solid black; margin:1px 2px; padding:4px;}
		#sub3{width: 30%;height:370px; border:1px solid black; margin:1px 2px; padding:4px;}
		

		#sub1:hover{box-shadow: 2px 2px 2px 2px #888;}
		#sub2:hover{box-shadow: 2px 2px 2px 2px #888;}
		#sub3:hover{box-shadow: 2px 2px 2px 2px #888;}
		

		p
		{
			font-size: 16px;
		}
</style>

</head>	

<body>
	<br><h1 style="text-align:center;">Welcome <?php echo $_SESSION["username"];?></h1><br>
		<div class="rules">
			
			<img id="imagerule" src="images/teacher.jpg">

			<h4>Rules and Regulations Regarding Conduction Of The Test</h4>
			<ol>
				<li>Each faculty can post questions for any one subject only.</li>
				<li>Each faculty can submit a maximum of 10 questions per test.</li>
				<li>Every question must be given four options.</li>
				<li>The questions should be such that they have only one correct answer.</li>
				<li>The correct answer for each question must be given by the faculty.</li>
				<li>Marking Scheme for each question must be decided by the faculty.</li>
				<li>The faculty must specify the duration of the test.</li>
				<li>The faculty can view the results of all the students who have attempted the test.</li>
			</ol>	
			
		</div>	

		<form method="get" action="facultyactivity.php">
			Select Your Subject :- 
			<select name="subject" id="subject">
				<option value="DS">Data Structures</option>
				<option value="DCN">Data Communication Networks</option>
				<option value="AOA">Algorithms</option>
				<option value="DBMS">DataBase Management Systems</option>
			</select><br><br>
			<input type="submit" onclick="buttonClicked();" value="Submit">	
		</form>	

		<hr>

		<h1 align="center"> The Faculty Can Now </h1>
		<div id="container" style="height:100%; width:100%" >



        	<div id="sub1">
            	<h2 align="center">Create Tests</h2>
            	<img src="images/fachome2.png">
            	<p>Create Tests with set Questions or have Questions selected at random from your Question bank.</p>
        	</div>

        	<div id="sub2">
            	<h2 align="center">View Results</h2>
            	<img src="images/fachome1.png">
            	<p>Results are graded instantly. Provide individual Question feedback and overall Test feedback in real time to Test takers.</p>
        	</div>

        	<div id="sub3">
            	<h2 align="center">Analyze Statistics</h2>
            	<img src="images/fachome3.png">
            	<p>Break down individual and Group performance by Test, Questions with our Quiz maker tool.</p>
        	</div>
	<br><div style="text-align:center;" class="m-auto d-block">
	<a href="logout.php" class="btn btn-primary "> LOGOUT </a>
	</div>
    	</div>
	</body>	
</html>
