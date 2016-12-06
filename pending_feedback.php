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
	<title>Event Mangement System: View Hosting Event</title>

<style>
body {
    background: url("http://www.borongaja.com/data_images/out/25/663969-night-urban-landscape.jpg") ;
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
button.aluba{
  display: inline-block;
  font-size: 16px;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
  padding: 35px 25px;
  width:360px ;
  height:180px;
  margin: 5px;
  float:left;
}
a{
	color: white;
	text-decoration: none;
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
p.br{
	opacity:0.0;
}
a {
    color:black;
}
a.header{
	color: white;
	text-decoration: none;
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


div.content{
padding-left:60px;
padding-bottom:5px;
margin: 5px 0;
height:480px;
width:auto;
}
label{
	color:white;
}
small{
	color:white;
}
</style>
</head>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			
			<a class="header" href="http://localhost/new_home.php">
			<h1 class="topspace">Event Management System</h1>
			<h4 class="topspace">View Hosting Event</h4>
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

<div class="content">
<?php
	$uid = $_GET['id'];
	$eid = $_GET['eid'];
	$act = $_GET['act'];
	if($act == 0){
		//echo $eid;
		$con = new mysqli("localhost", "root", "", "event");
			// Check connection
			if ($con->connect_error) {
			 die("Connection failed: " . $conn->connect_error);
		}
		$sql = "SELECT * FROM feedback WHERE userid=".$uid." AND confirm=0";
		$res = $con->query($sql);
		if ($res->num_rows > 0) {
			while( $row = mysqli_fetch_array($res)) {
				echo "<a href='pending_feedback.php?id=".$uid."&eid=".$row['event_id']."&act=1'><button type='btn' class='btn btn-primary btn-lg sharp aluba'><i class='fa fa-comment-o' style='font-size:36px'></i><br>".ucwords($row['name'])."</br></button></a>";	
	
			}
		}
	}else{
		//echo $eid;
			echo "<form method='post' action='feedback_finish.php' enctype='multipart/form-data'>";
			$con = new mysqli("localhost", "root", "", "event");
			// Check connection
			if ($con->connect_error) {
			 die("Connection failed: " . $conn->connect_error);
		}
			$sql = "SELECT * FROM feedback WHERE userid=".$uid." AND confirm=0 AND event_id = '$eid'";
			$res = $con->query($sql);
			if ($res->num_rows > 0) {
				while( $row = mysqli_fetch_array($res)) {
					echo "<label for='report'>Post Morterm Report:</label>";
					echo "<textarea class='form-control' rows='7' id='report' name='report'>".$row['report']."</textarea>";
					echo "<label for='report'>Feedback in %:</label>";
					echo "<input class='form-control' id='feedback' name='feedback' value=".$row['feedback'].">";
				}
			}else{
					echo "<label for='report'>Post Morterm Report:</label>";
					echo "<textarea class='form-control' rows='7' id='report' name='report'></textarea>";
					echo "<label for='report'>Feedback in %:</label>";
					echo "<input class='form-control' id='feedback' name='feedback'>";
			}
			echo "<label for='type'>Status:</label> <small>Choose end to end and submit post-moerterm report</small>";
					echo "<select class='form-control' id='sel1' name='status'>";
					
			echo "<option value='0'>Unfinished</option>";
			echo "<option value='0'>End</option>";
			echo "</select>";
			
			echo "<input type='hidden' name='eid' value=".$eid.">";
			echo "<label for='fileToUpload'>File to Upload:</label>";
			
			echo "<input type='file' name='fileToUpload' id='fileToUpload' class='form-control'>";
			echo "<br><button type = 'submit' name = 'submit' value = 'submit' class='btn btn-success btn-md btn-block' >Update</button></form>";
			echo "</form>";
	}
	
?>
</div>
<p class="br">Prototype</p><br></br><br></br>
<script src="js/bootstrap.min.js"></script>
</body>
</html>