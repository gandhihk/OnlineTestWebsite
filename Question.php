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


$name = $_SESSION["userNAME"];
$pass = $_SESSION["passWORD"];
$step1 = " select division from students where name = '$name' && password = '$pass' ";
$step2 = mysqli_query($con, $step1);
$step3 = mysqli_fetch_array($step2);
$divs = $step3['division'];
$sub = $_GET['subject'];

$_SESSION["division"] = $divs;
$_SESSION["subject_selected"] = $sub;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Home</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	 <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>
<div class="container">


	<br> <h1 class="text-center text-primary"> Somaiya Quiz Centre </h1><br>
	
	<h2 class="text-center text-success"> Welcome <?php echo $_SESSION['username']; ?> </h2> <br>

<div class="col-lg-8 m-auto d-block">
	<div class="card" >


		<h3 class="text-center card-header">  Welcome <?php echo $_SESSION['username']; ?>, you have to select only one out of 4. Best of Luck :)  </h3>

	 </div><br>

	 <form action="check.php" method="post">

	 <?php

	 for($i=1 ; $i < 4 ; $i++){
	 $q = " select * from Questions where subject = '$sub' && division = '$divs' && number = '$i' ";
	 $query = mysqli_query($con, $q);

	 while ($rows = mysqli_fetch_array($query) ) {
	 	?>
	 	
	 	<div class="card">
	 		<h4 class="card-header"> <?php echo $rows['quests']  ?>  </h4>


	 		<?php
	 			 $q = " select * from Options where number = '$i' && division = '$divs' && subject = '$sub'";
				 $query = mysqli_query($con, $q);

				 while ($rows = mysqli_fetch_array($query) ) {
				 	?>

				 	<div class="card-body">
				 		
				 		<input type="radio" name="quizcheck[<?php echo $rows['number']; ?>]" value="<?php echo $rows['option_number']; ?>"> 
				 		<?php echo $rows['answers']; ?>

				 	</div>
<?php
	 }
	 }
	}

	 ?>

	 <input type="submit" name="submit" value="Submit" class="btn btn-success m-auto d-block">

	 </form>
</div>
</div><br><br>

	 <div class="m-auto d-block">
	 <a href="logout.php" class="btn btn-primary "> LOGOUT </a>
	 </div><br>

	 <div>
	 	<h5 class="text-center">  Thank You! </h5>
	 </div><br><br>
</div>
</body>
</html>





















