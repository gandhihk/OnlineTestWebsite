<?php

session_start();

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "website";

$con = mysqli_connect($servername, $username, $password, $dbname);

if($con == NULL){
	echo" connection failed";
}
if(!isset($_SESSION['subject'])){
$_SESSION['subject'] = $_GET['subject'];}

mysqli_select_db($con, 'website');
?>

<!DOCTYPE html>
<html>
<head>
<title>Activity Page</title>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial;
}

/* The grid: Three equal columns that floats next to each other */
.column {
    float: left;
    width: 50%;
    padding: 50px;
    text-align: center;
    font-size: 30px;
    cursor: pointer;
    color: black;
    border-style: solid;
    border-width: 1px;
}

.rules {
	border:1px solid #888;
	box-shadow: 2px 2px #aaa;
	width:75%;
	margin:2px auto;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

.containerTab {
    text-align: center;
    padding: 20px;
    color: black;
}

.col-25 {
    float: left;
    margin-top: 6px;
}

.col-75 {
    float: left;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Closable button inside the container tab */
.closebtn {
    float: right;
    color: black;
    font-size: 35px;
    cursor: pointer;
}
</style>
</head>

<body>

<div style="text-align:center">
  	<h1>Activity Page</h1>
  	<h2>Subject : <?php echo $_SESSION["subject"]; ?></h2>
 	<h4>Click on the boxes below either to add questions for <?php echo $_SESSION["subject"]; ?> subject or to view students' performance in <?php echo $_SESSION["subject"]; ?> subject :</h4><br><br>
</div>

<!-- Three columns -->
<div class="row">
  	<div class="column" onclick="openTab('b1');" style="background:#D3D3D3;">
    Add Questions (Create test)
  	</div>
  
  	<div class="column" onclick="openTab('b3');" style="background:#D3D3D3;">
    View students' performance
  	</div>
</div>

<!-- Full-width columns: (hidden by default) -->

<div id="b1" class="containerTab" style="display:none;">
  	<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  	<h2>Adding Questions :</h2>
  		<div class="rules">
			<h4>Rules to add questions for <?php echo $_SESSION["subject"]; ?>:</h4>
			<ol>
				<li>After you create test for this subject then only YOU can add questions for it.</li><br>
				<li>You cannot add questions/create test for any subject other than <?php echo $_SESSION["subject"]; ?>.</li><br>
				<li>If number of questions exceeds, then students will get random questions from YOUR question set.</li><br>
				<li>Length of each question and answer should be less than 255 characters.</li>
			</ol>	
			
		</div><br>

		<div class="rules" style="text-align:center;">
			<form action="insert.php" method="GET"><br>
        			Question : &nbsp &nbsp &nbsp
        			<textarea id="question" name="question" placeholder="Write question.." cols="50" required></textarea><br><br>
				Question no. : &nbsp &nbsp &nbsp
				<input id="1" type="number" maxlength=255 name="number" min="1" required><br><br>
				1st option :&nbsp &nbsp &nbsp
				<input id="1" type="text" maxlength=255 name="option1" required><br><br>
				2nd option :&nbsp &nbsp &nbsp
				<input id="2" type="text" maxlength=255 name="option2" required><br><br>
				3rd option :&nbsp &nbsp &nbsp
				<input id="3" type="text" maxlength=255 name="option3" required><br><br>
				<input type="submit" value="Submit" onclick="submit();" class="btn btn-success m-auto d-block">
			</form>
		</div>
</div>


<div id="b3" class="containerTab" style="display:none;">
  	<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  	<h2>Students' performance :</h2>
  		<div class="rules">
			<h4>Rules and Regulations Regarding Conduction Of The Test</h4>
			<ol>
				<li>Each student, who has attended YOUR test for <?php echo $_SESSION["subject"]; ?> subject, will appear here.</li><br>
				<li>Each answer submitted by the student will be shown.</li>
			</ol>	
			
		</div>
		<div>
			<h3>Performance table for <?php echo $_SESSION["subject"]; ?></h3><br>
			<?php 
				$faculty_user = $_SESSION['username'];
				$q1 = " select division from faculty where name='$faculty_user' ";
				$result = mysqli_query($con,$q1);
				$row = mysqli_fetch_array($result);
				$d = $row['division'];
				$subject= $_SESSION['subject'];
				$q3 = " select * from records where division='$d' and subject='$subject'";
				$result = mysqli_query($con, $q3);
			
			if(mysqli_num_rows($result) > 0)
				{
				echo "<table class='w3-table-all'>
    				<thead>
      					<tr class='w3-light-grey'>
        					<th>Name</th>
        					<th>Question 1</th>
        					<th>Question 2</th>
						<th>Question 3</th>
						<th>Question 4</th>
						<th>Question 5</th>
						<th>Question 6</th>
						<th>Question 7</th>
						<th>Question 8</th>
						<th>Question 9</th>
						<th>Question 10</th>
      					</tr>
    				</thead>";
					while($rows = mysqli_fetch_array($result)) {
						echo "<tr>";
						echo "<td>" . $rows['username'] . "</td>";
						echo "<td>" . $rows['q1'] . "</td>";
						echo "<td>" . $rows['q2'] . "</td>";
						echo "<td>" . $rows['q3'] . "</td>";
						echo "<td>" . $rows['q4'] . "</td>";
						echo "<td>" . $rows['q5'] . "</td>";
						echo "<td>" . $rows['q6'] . "</td>";
						echo "<td>" . $rows['q7'] . "</td>";
						echo "<td>" . $rows['q8'] . "</td>";
						echo "<td>" . $rows['q9'] . "</td>";
						echo "<td>" . $rows['q10'] . "</td>";
						echo "</tr>";
					} 
				}else {
					echo "0 results.";
				}
			echo "</table>";
			?>
			
		</div>
</div>

<script>
function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}



function submit() {
	alert("All questions were added.");
}
</script>

</body>
</html> 

