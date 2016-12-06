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
	<title>Event Mangement System: Positive Case Recommendation</title>

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
input.radio{
	font-size:16px;
}
</style>
</head>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			
			<a class="header" href="http://localhost/new_home.php">
			<h1 class="topspace">Event Management System</h1>
			<h4 class="topspace">Postive Case Recommendation</h4>
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
  <li><a href="http://localhost/event_search.php" target="_blank"><span class="glyphicon glyphicon-search"></span></a></li>
  <li class="right"><a href="#about">Logout</a></li>
</ul>
</div>
<br></br>
<div class="container">
<form method="post" action="edit_weight_finish.php">
<div class="form-group col-xs-5">
<?php
	$id = $_GET['id'];
	$conn1 = new mysqli("localhost", "root", "", "casebase");
	if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
}
	$name = $date = $budget = $department = $type = $level = $income = $cSize = $feedback = $aPpt = $desc = null;
	$sql = "SELECT * FROM weight WHERE windex=".$id;
	$res = $conn1->query($sql);
	if ($res->num_rows > 0) {
		while($row1 = $res->fetch_assoc()) {
			//$name = $row1['caseName'];
			$date = $row1['date'];
			$budget = $row1['budget'];
			//$department = $row1['department'];
			$expenses = $row1['expenses'];
			//$type = $row1['type'];
			$level = $row1['level'];
			$income = $row1['income'];
			$cSize = $row1['cSize'];
			$feedback = $row1['feedback'];
			$ppt = $row1['ppt'];
			$desc = $row1['description'];
			
			
		}
	}else {
		echo "0 results";
	}
	echo "<label for='date'>Date:</label>";
	echo "<input  class='form-control' id='feedback' min='-0.01' max='100' type='number' step='0.01' name='date' value=".$date." required/>";
	echo "<label for='date'>Budget:</label>";
	echo "<input  class='form-control' id='budget' min='-0.01' max='100' type='number' step='0.01' name='budget' value=".$budget." required/>";
	echo "<label for='date'>Expenses:</label>";
	echo "<input  class='form-control' id='expenses' min='-0.01' max='100' type='number' step='0.01' name='expenses' value=".$expenses." required/>";
	echo "<label for='date'>Level:</label>";
	echo "<input  class='form-control' id='level' min='-0.01' max='100' type='number' step='0.01' name='level' value=".$level." required/>";
	echo "<label for='date'>Income:</label>";
	echo "<input  class='form-control' id='income' min='-0.01' max='100' type='number' step='0.01' name='income' value=".$income." required/>";
	echo "<label for='date'>Cmt. Size:</label>";
	echo "<input  class='form-control' id='cSize' min='-0.01' max='100' type='number' step='0.01' name='cSize' value=".$cSize." required/>";
	echo "<label for='date'>Feedback:</label>";
	echo "<input  class='form-control' id='feedback' min='-0.01' max='100' type='number' step='0.01' name='feedback' value=".$feedback." required/>";
	echo "<label for='date'>Participants:</label>";
	echo "<input  class='form-control' id='ppt' min='-0.01' max='100' type='number' step='0.01' name='ppt' value=".$ppt." required/>";
	echo "<label for='date'>Description:</label>";
	echo "<input  class='form-control' id='desc' min='-0.01' max='100' type='number' step='0.01' name='desc' value=".$desc." required/>";
	echo "<input type='hidden' name='cid' value='$id'>";
	

?>
<br></br>
<button type = "submit" name = "submit" value = "submit" class="btn btn-success btn-md btn-block" onClick="return empty()">Submit</button>

</div>

</form>
</div>


<script src="js/bootstrap.min.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
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