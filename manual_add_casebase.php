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
<form method="post" action="manual_add_casebase_finish.php">
<div class="form-group col-xs-5">
<?php
	
	
	echo "<label for='name'>Name:</label>";
	echo "<input type='text' class='form-control' id='name' min='0' name='name' placeholder='AI Day 2015' required/>";
	echo "<label for='name'>EventID:</label>";
	echo "<input type='text' class='form-control' id='id' min='0' name='id' placeholder='AID2015 for AI Day 2015' required/>";
	echo "<label for='budget'>Budget:</label>";
	echo "<span class='help-block'>Not more than RM20000</span>";
	echo "<input type='number' class='form-control' id='budget' min='0' max='20000' placeholder='200' name='budget' required/>";
	echo "<label for='expenses'>Expenses:</label>";
	echo "<span class='help-block'>Not more than RM20000</span>";
	echo "<input type='number' class='form-control' id='expenses' min='0' max='20000' placeholder='200' name='expenses' required/>";
	echo "<label for='date'>Date:</label>";
	echo "<input  class='form-control' id='datepicker' type='text' placeholder='2016-09-27' name='date'  required/>";
	echo "<label for='sel1'>Level of Event (select one):</label>";
      echo "<select class='form-control' id='sel1' name='level'>";
	  $level1 = array("Department","Faculty","University","State");
	  $lower = null;
	  for($x = 0;$x < count($level1);$x++){
		  
			  $lower = strtolower($level1[$x]);
			  echo "<option value='$lower'>".$level1[$x]."</option>";
		  
	  }
	  echo "</select>";
      echo "<br>";
	echo "<label for='sel1'>Department (select one):</label>";
	echo "<select class='form-control' id='sel1' name='department'>";
	$d1 = array("ai","stk","se","mis","it","under_grad","post_grad","all");
	$d2 = array("Artificial Intelligence","Computer System & Networking","Software Engineering","Management Information System","Information Technology","Undergraduate Students","Postgraduate Students","All Students");
	
	  for($x = 0;$x < count($d1);$x++){
			  $lower = strtolower($d1[$x]);
			  echo "<option value='$lower'>".$d2[$x]."</option>";
		  }
	echo "</select>";
	echo "<label for='sel1'>Types of Event (select one):</label>";
	echo "<select class='form-control' id='sel1' name='type'>";
	$t1 = array("workshop","talk","sports","orientation","industrial_visit","academic_workshop","exhibition","dinner","conferrence","competition","seminar","other");
	  for($x = 0;$x < count($t1);$x++){
		  $string = str_replace("_", ' ', $t1[$x]);
			  $lower = strtolower($t1[$x]);
			  echo "<option value='$lower'>".ucwords($string)."</option>";
	  }
	echo "</select>";
	echo "<label for='income'>Income:</label>";
	echo "<span class='help-block'>Not more than RM20000</span>";
	echo "<input  class='form-control' id='income' min='0' max='20000' placeholder='500' type='number' name='income'  required/>";
	echo "<label for='size'>Committee Size:</label>";
	echo "<span class='help-block'>Not more than 100</span>";
	echo "<input  class='form-control' id='cSize' min='1' max='100' placeholder='20' type='number' name='cSize'required/>";
	echo "<label for='size'>Degree of Satisfactory:</label>";
	echo "<span class='help-block'>Not more than 100</span>";
	echo "<input  class='form-control' id='feedback' min='1' max='100' placeholder='70.5' type='number' step='0.01' name='feedback'  required/>";
	echo "<label for='size'>Number of Participants:</label>";
	echo "<span class='help-block'>Not more than 2500</span>";
	echo "<input  class='form-control' id='ptp' min='1' max='2500' placeholder='20' type='number' name='ppt'  required/>";
	echo "<label for='size'>Description:</label>";
	echo "<span class='help-block'>At most 2 sentences</span>";
	echo "<textarea class='form-control' rows='3' id='desc' name='desc'></textarea>";
	//echo "<input type='hidden' name='cid' value=".$id.">";

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