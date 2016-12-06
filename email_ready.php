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
	<title>Event Mangement System: Email</title>
	<script src="js/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Event Mangement System: Send Email</title>

<style>
body {
    //background: url("http://www.borongaja.com/data_images/out/25/663969-night-urban-landscape.jpg") ;
	overflow = auto;
	width=100%;
	margin: 0 auto;
	font-family: 'Lato', sans-serif;
	background:rgba(226,222,219,0.7);
	color: #b3aca7;
}

#wrapper {
	overflow: hidden;
	background: #FFFFFF;
	
box-shadow: 
        inset 0px 11px 8px -20px #CCC,
        inset 0px -11px 8px -10px #CCC;
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
h3.title{
	text-align:center;
}
li.menu{
	
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
@import url(http://fonts.googleapis.com/css?family=Lato:100,300,400);
textarea.msg{
	height:300px;
	float:auto;
}
textarea.end{
	height:120px;
	float:auto;
}
input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
  color: #939393;
  font-size: 16px;
}

input:focus::-webkit-input-placeholder, textarea:focus::-webkit-input-placeholder {
  color: #bbb5af;
}

input::-moz-placeholder, textarea::-moz-placeholder {
  color: #aca49c;
  font-size: 16px;
}

input:focus::-moz-placeholder, textarea:focus::-moz-placeholder {
  color: #bbb5af;
}

input::placeholder, textarea::placeholder {
  color: #aca49c;
  font-size: 16px;
}

input:focus::placeholder, textarea::focus:placeholder {
  color: #bbb5af;
}

input::-ms-placeholder, textarea::-ms-placeholder {
  color: #aca49c;
  font-size: 16px;
}

input:focus::-ms-placeholder, textarea:focus::-ms-placeholder {
  color: #bbb5af;
}

/* on hover placeholder */

input:hover::-webkit-input-placeholder, textarea:hover::-webkit-input-placeholder {
  color: #e2dedb;
  font-size: 16px;
}

input:hover:focus::-webkit-input-placeholder, textarea:hover:focus::-webkit-input-placeholder {
  color: #cbc6c1;
}

input:hover::-moz-placeholder, textarea:hover::-moz-placeholder {
  color: #e2dedb;
  font-size: 16px;
}

input:hover:focus::-moz-placeholder, textarea:hover:focus::-moz-placeholder {
  color: #cbc6c1;
}

input:hover::placeholder, textarea:hover::placeholder {
  color: #e2dedb;
  font-size: 16px;
}

input:hover:focus::placeholder, textarea:hover:focus::placeholder {
  color: #cbc6c1;
}

input:hover::placeholder, textarea:hover::placeholder {
  color: #e2dedb;
  font-size: 16px;
}

input:hover:focus::-ms-placeholder, textarea:hover::focus:-ms-placeholder {
  color: #cbc6c1;
}

#form {
  position: relative;
  width: 500px;
  margin: 50px auto 100px auto;
}

input {
  font-family: 'Lato', sans-serif;
  font-size: 16px;
  width: 470px;
  height: 50px;
  padding: 0px 15px 0px 15px;
  
  background: transparent;
  outline: none;
  color: #726659;
  
  border: solid 1px #b3aca7;
  border-bottom: none;
  
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
}

input:hover {
  background: #212120;
  color: #e2dedb;
}

textarea {
  width: 470px;
  max-width: 600px;
  height: auto;
  //max-height: 110px;
  padding: 15px;
  
  background: transparent;
  outline: none;
  
  color: #726659;
  font-family: 'Lato', sans-serif;
  font-size: 16px;
  
  border: solid 1px #b3aca7;
  
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
}

textarea:hover {
  background: #212120;
  color: #e2dedb;
}

#submit {
  width: 470px;
  
  padding: 0;
  margin: -5px 0px 0px 0px;
  
  font-family: 'Lato', sans-serif;
  font-size: 16px;
  color: #5F5F5F;
  
  outline:none;
  cursor: pointer;
  
  border: solid 1px #b3aca7;
  border-top: none;
}

#submit:hover {
  background-color:#057500;
  color: #e2dedb;
}
</style>
</head>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			
			<a class="header" href="http://localhost/new_home.php">
			<h1 class="topspace">Event Management System</h1>
			<h4 class="topspace">Send Email</h4>
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
<div class="">
  <ul class="nav nav-tabs">
    <li class="active menu"><a href="#individual"  data-toggle="tab">INDIVIDUAL</a></li>
    <li class="menu"><a href="#menu1"  data-toggle="tab">MULTIPLE</a></li>
   </ul>

<div class="tab-content">
<div id="individual" class="tab-pane fade in active">
<form id="form" class="topBefore" action="email_sent.php" method="post">
<h3 class="title">INDIVIDUAL EMAIL</h3>
<?php
	$userid = $_GET['id'];
	$tempid = $_GET['temp_id'];
	$con = new mysqli("localhost", "root", "", "profile");
	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
	}
	$sql = "SELECT user_tempt.tempt,user.email FROM user_tempt JOIN user WHERE user.id=user_tempt.user_id AND user_tempt.temp_id=".$tempid." AND user_tempt.user_id = ".$userid;
	$res=$con->query($sql);
	if ($res->num_rows > 0) {
		while( $row = mysqli_fetch_array($res)) {
		  echo "<input id='email' type='text' name='from' placeholder='FROM' value=".$row['email'].">";
		  echo "<input id='email' type='text' name='to' placeholder='TO'>";
		  echo "<input id='email' type='text' name='cc' placeholder='CC'>";
		  echo "<input id='name' type='text' name='subject' placeholder='SUBJECT' >";
		  echo "<textarea id='message' type='text' name='message' placeholder='MESSAGE' class='msg'>".$row['tempt']."</textarea>";
		  echo "<textarea id='message' type='text' name='endtext' placeholder='END TEXT' class='end'>Best regard, 
Mr. John Doe
FSKTM, Jalan University, 57200 Kuala Lumpur</textarea>";
		}
	}else{
		echo "<h3 class='margin'>Database Error</h3>";
	}
	
		  
?>
  <input id="submit" type="submit" value="SEND" name="submit">
  
</form>
</div>
<!--menu 2 -->
	<div id="menu1" class="tab-pane fade">
	<form id="form" class="topBefore" action="all_email_sent.php" method="post">
<h3 class="title">MULTIPLE EMAIL</h3>
<?php
	$userid = $_GET['id'];
	$tempid = $_GET['temp_id'];
	$con = new mysqli("localhost", "root", "", "profile");
	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
	}
	$sql = "SELECT user_tempt.tempt,user.email FROM user_tempt JOIN user WHERE user.id=user_tempt.user_id AND user_tempt.temp_id=".$tempid." AND user_tempt.user_id = ".$userid;
	$res=$con->query($sql);
	if ($res->num_rows > 0) {
		while( $row = mysqli_fetch_array($res)) {
		  echo "<input id='email' type='text' name='from' placeholder='FROM' value=".$row['email'].">";
		  echo "<input id='name' type='text' name='subject' placeholder='SUBJECT' >";
		  echo "<textarea id='message' type='text' name='message' placeholder='MESSAGE' class='msg'>".$row['tempt']."</textarea>";
		  echo "<textarea id='message' type='text' name='endtext' placeholder='END TEXT' class='end'>Best regard, 
Mr. John Doe
FSKTM, Jalan University, 57200 Kuala Lumpur</textarea>";
		}
	}else{
		echo "<h3 class='margin'>Database Error</h3>";
	}
?>
  <input id="submit" type="submit" value="CONTINUE" name="submit">
  
</form>
	</div>
	<!--menu 2 -->
</div>
</div>
</body>
</html>