<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<title>Event Mangement System: Create Event</title>

<style>
body {
    background-color:white;
	overflow = auto;
	width=100%;
	margin: 0 auto;
	
}

#wrapper {
	overflow: hidden;
	background: #FFFFFF;
	
box-shadow: 
        inset 0px 11px 8px -20px #CCC,
        inset 0px -11px 8px -10px #CCC;
}

.container {
	width: 1200px;
	margin: 0px auto;
}
.clearfix {
	clear: both;
}
#header-wrapper {
	overflow: hidden;
	height: 150px;
	background-color: black;
	//border-left: 60px solid #282828;
}
#header {
	width: 1200px;
	height: 150px;
	margin: 0 auto;
    padding: 1px;
	postion: relative; 
}
#logo {
	float: left;
	width: 507 px;
	height: 50 px;
	//padding: 0px 0px 0px 40px;
}
h1.topspace {
	font-size: 35px; 
	letter-spacing: -1px; 
	color: white; 
	text-transform: uppercase; 
	text-shadow: 1px 1px 0 #000, margin: 10px 0 24px; 
	//text-align: center; 
	line-height: 50px;
	position: relative;
	left:1px;
}

h4.topspace{
	font-size: 25px; 
	letter-spacing: -1px; 
	color: white; 
	text-transform: uppercase; 
	text-shadow: 1px 1px 0 #000, margin: 10px 0 24px; 
	//text-align: center; 
	line-height: 50px;
	position: relative;
	left:1px;
	text-decoration: underline;
}

p{
	font-family: Helvetica;
	color: black;
	text-align:center;
	float: clear;
	position: relative;
	top:120px;
	
}

a{
	color: white;
	text-decoration: none;
}
label{
	color:black;
	font-size:24px;
}
textarea{
	font-size:16px;
}
@media (max-width:767px) {
.logo {
	margin: 15px;
	float: none;
	text-align: center;
}
}
p{
	font-family: Helvetica;
	color: black;
	text-align:center;
	float: clear;
	position: relative;
	top:120px;
	
}

ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #4CAF50;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px){
    ul.topnav li.right, 
    ul.topnav li {float: none;}
}
input.final{
	width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 12px 12px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-family: Helvetica;
	font-size:120%;
}
input.final:hover{
	background-color: #45a049;
}
input.final:active{
	background-color: #45a049;
	color: black;
	transform: translateY(4px);
}
</style>
</head>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			
			<a class="header" href="http://localhost/new_home.php">
			<h1 class="topspace">Event Management System</h1>
			<h4 class="topspace">Creating Event</h4>
			</a>
		</div>
	</div>
</div>
<div id="nav">
<ul class="topnav">
  <li><a class="active" href="http://localhost/new_home.php">Home</a></li>
  <li><a href="http://localhost/profile.php">Profile</a></li>
  <li><a href="http://localhost/memberlist.php">Member</a></li>
  <li><a href="http://localhost/email_start.php">Email</a></li>
  <li><a href="http://localhost/doc_list.php">Documents</a></li>
  <li><a href="http://localhost/readme.docx">About</a></li>
  <li><a href="http://localhost/readme.docx">About</a></li>
  <li class="right"><a href="#about">Logout</a></li>
</ul>
</div>
<br></br>
<div class="container">
<h2>Create Event:Information & Proposal</h4>
<h3>Section A:Information</h3>
<?php
	if(isset($_POST['submit'])){
 $date = $_POST['date'];
 $pdate = $_POST['date'];
 //$uid = $_POST['uid'];
 //$email = trim($email);
 $budget = $_POST['budget'];
 $department = $_POST['department'];
 $level = $_POST['level'];
 //$staffid = trim($staffid);
 
 $type = $_POST['type'];
 $income = $_POST['income'];
 $cmtSize = $_POST['cSize'];
 $ppt = $_POST['ppt'];
 $feedback = $_POST['feedback'];
$userid=$_POST['userid'];
 $userid2=$_POST['userid2']; 
	echo "<form  method='post' action='event_created.php'>";
	echo "<div class='form-group'>";
	

		echo "<label for='ename'>Event Name:</label>";
			echo "<input type='text' class='form-control' id='event_name' name='name'>";
			echo "<label for='date'>Event Date:</label>";
			echo "<input type='text' class='form-control' id='datepicker' name='date' value='$date'>";
			echo "<label for='date1'>Propose Date:</label>";
			echo "<input type='text' class='form-control' id='datepicker1' name='pdate'>";
			echo "<label for='budget'>Budget:</label>";
			echo "<input type='number' min='0' max='20000' class='form-control' id='budget' name='budget' step='0.01' value=".$budget.">";
			echo "<label for='department'>Depertment:</label>";
			echo "<select class='form-control' id='sel1' name='department'>";
			echo "<option value='ai'>Artificial Intelligence</option>";
				echo "<option value='stk'>Computer System & Network</option>";
				echo "<option value='se'>Software Engineering</option>";
				echo "<option value='mis'>Management Information System</option>";
				echo "<option value='it'>Information Technology</option>";
				echo "<option value='under_grad'>All Undergraduate Students</option>";
				echo "<option value='post_grad'>All Postgraduate Students</option>";
				echo "<option value='all' selected=''>All Level Students</option>";
		echo "</select>";
			echo "<label for='level'>Level:</label>";
			echo "<select class='form-control' id='sel1' name='level'>";
			if($level == 'department'){
				echo "<option value='department' selected='selected'>Department</option>";
				echo "<option value='faculty'>Faculty</option>";
				echo "<option value='university'>University</option>";
				echo "<option value='state'>State</option>";
			}elseif($level == 'faculty'){
				echo "<option value='department'>Department</option>";
				echo "<option value='faculty' selected='selected'>Faculty</option>";
				echo "<option value='university'>University</option>";
				echo "<option value='state'>State</option>";
			}elseif($level == 'university'){
				echo "<option value='department'>Department</option>";
				echo "<option value='faculty'>Faculty</option>";
				echo "<option value='university' selected='selected'>University</option>";
				echo "<option value='state'>State</option>";
			}else{
				echo "<option value='department'>Department</option>";
				echo "<option value='faculty'>Faculty</option>";
				echo "<option value='university'>University</option>";
				echo "<option value='state' selected='selected'>State</option>";
			}
			echo "</select>";
			echo "<label for='type'>Type:</label>";
			echo "<select class='form-control' id='sel1' name='type'>";
			echo "<option value='workshop'>Workshop</option>";
				echo "<option value='talk'>Talk</option>";
				echo "<option value='sports'>Sports</option>";
				echo "<option value='orientation'>Orientation</option>";
				echo "<option value='industrial_visit'>Industrial Visit</option>";
				echo "<option value='exhibition'>Exhibition</option>";
				echo "<option value='dinner'>Diner</option>";
				echo "<option value='conferrence'>Conferrence</option>";
				echo "<option value='competition'>Competition</option>";
				echo "<option value='seminar' selected='selected'>Seminar</option>";
			echo "</select>";
			echo "<label for='eincome'>Expected Income:</label>";
			echo "<input type='number' min='0' max='20000' class='form-control' id='budget' name='income'  step='0.01' value=".$income.">";
			echo "<label for='cmtSize'>Comittee Size:</label>";
			echo "<input type='number' min='0' max='100' class='form-control' id='budget' name='cmtSize'  value=".$cmtSize.">";
			echo "<label for='eppt'>Expected Participants:</label>";
			echo "<input type='number' min='0' max='2000' class='form-control' id='budget' name='ppt' value=".$ppt.">";
			echo "<label for='ename'>Expected Feedback:</label>";
			echo "<input type='number' min='0' max='100' class='form-control' id='feedback' name='feedback' step='0.01' value=".$feedback.">";
	}


echo "<h3>Section B:Proposal</h3>";

	
		
			echo "<label for='aim'>Aim:</label>";
			echo "<textarea class='form-control' rows='5' id='aim' name='aim'></textarea>";
			echo "<label for='justification'>Justification:</label>";
			echo "<textarea class='form-control' rows='5' id='justification' name='justification'></textarea>";
			echo "<label for='objective'>Objective:</label>";
			echo "<textarea class='form-control' rows='5' id='objective' name='objective'></textarea>";
			echo "<label for='hasil_bengkel'>Required Equipment:</label>";
			echo "<textarea class='form-control' rows='5' id='hasil_bengkel' name='hasil_bengkel'></textarea>";
			echo "<label for='schedule'>Schedule:</label>";
			echo "<textarea class='form-control' rows='10' id='schedule' name='schedule'></textarea>";
			echo "<label for='pby'>Prepared by:</label>";
			echo "<textarea class='form-control' rows='10' id='pby' name='pby'></textarea>";
			$stfid = null;
			$userid = 1;
			$con1 = new mysqli("localhost", "root", "", "profile");
			if ($con1->connect_error) {
				die("Connection failed: " . $con1->connect_error);
			}
			$sql1 = "SELECT staffid FROM user WHERE id =".$userid;
			$res1=$con1->query($sql1);
			if ($res1->num_rows > 0) {
				while( $row1 = mysqli_fetch_array($res1)) {
				$stfid = $row1['staffid'];
			}
			}
			
			
			echo "<input type='hidden' name='userid' value='".$userid."' />";
	echo "<input type='hidden' name='userid2' value='".$stfid."' />";
	
	
	
?>
<input type='submit' name='submit' value='Submit' class='btn btn-success btn-lg btn-block'>
</form>
</div>
<script>
  $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
	$( "#datepicker1" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  function empty() {
    var x;
    x = document.getElementById("val").value;
    if (x == "") {
        alert("Enter a Variable");
        return false;
    };
}
  </script>
</body>
</html>