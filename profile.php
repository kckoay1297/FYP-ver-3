<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
body {
    background-color:black;
	overflow = auto;
	width=100%;
	margin: 0 auto;
	font: Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
}

#wrapper {
	overflow: hidden;
	background: #FFFFFF;
	
box-shadow: 
        inset 0px 11px 8px -20px #CCC,
        inset 0px -11px 8px -10px #CCC;
}
  #section1 {padding:10px;color: #fff; background-color: #1E88E5;}
  #section2 {padding:10px;color: #fff; background-color: #673ab7;}
  #section3 {padding:10px;color: #fff; background-color: #009688;}
.container {
	width: 1200px;
	margin: 0px auto;
}
.clearfix {
	clear: both;
}
.fluid-ex2{
	padding-left:20%;
	text-align:left;
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

h2.record{
	padding-bottom:20px;
	text-decoration:underline;
}
h2.contact{
	padding-bottom:7px;
	text-decoration:underline;
}
h4.contact{
	padding-left:25%;
	text-align:left;
	
}
h3.end{
	padding:10px;
}
.header{
	font: Montserrat, sans-serif;
}
a {
	color:#6d0058;
}
a.edit{
	text-decoration:underline;
	color:#FF6262;
}
a.edit:hover{
	color:#FFFD80;
}
a.edit:active{
	color:#FF4848;
}
a.header{
	text-decoration:none;
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

.affix {
      top:0;
      width: 100%;
      z-index: 9999 !important;
  }
  .navbar {
      margin-bottom: 0px;
  }

  .affix ~ .container-fluid {
     position: relative;
     top: 50px;
  }

@media screen and (max-width: 600px){
    ul.topnav li.right, 
    ul.topnav li {float: none;}
}

  .margin {margin-bottom: 45px;}
  .col-bg-2 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
	    
  }
  .col-bg-8 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
	  text-align:center;
  }
  .col-bg-2{
	  background-color:#930200;
      text-align:center;
  }

table {
    border-collapse: collapse;
	padding-bottom:50px;
}
  thead{
	background-color:black;
	color:white;
}
  th{
	  text-align:center;
  }
  td{
	  color:black;
  }
  
</style>
</head>
<body>
<title>Event Management Profile</title>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			
			<a class="header" href="http://localhost/new_home.php">
			<h1 class="topspace">Event Management System</h1>
			<h4 class="topspace">Profile</h4>
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

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
  <div class="container-fluid fluid-ex">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <!--<a class="navbar-brand" href="http://localhost/new_home.php">Event Management</a>-->
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#section1">Profile</a></li>
          <li><a href="#section2">Contact</a></li>
          <li><a href="#section3">Record</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav> 

<div class="container-fluid col-bg-2 text-center" id="section1">
<h2 class="contact">Profile</h2>
<?php

	$con = new mysqli("localhost", "root", "", "profile");
	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
	}
	$sql = "SELECT email, staffid, designation, department, firstname, lastname,phone,icnumber FROM user WHERE id=1";
	$res=$con->query($sql);
	if ($res->num_rows > 0) {
		while( $row = mysqli_fetch_array($res)) {
		echo "<h3 class='header'>".strtoupper($row['firstname'])." ".strtoupper($row['lastname'])."</h3>";
		echo "<br></br>";
		echo "<img src='/img/blank profile.png' class='img-responsive img-circle margin' style='display:inline' alt='profile' width='10%' height='10%' box-shadow: '2px 2px 4px #000000'>";
		echo "<h3 class='header'>".$row['department']."</h3>";
		echo "<h3 class='header'>".$row['designation']."</h3>";
		}
	}else{
		echo "<img src='/img/blank profile.png' class='img-responsive img-circle margin' style='display:inline' alt='Bird' width='30%' height='30%'>";
		echo "<h3 class='margin'>Database Error</h3>";
	}
	
?>
</div>

<!-- Second Container -->
<div class="container-fluid col-bg-8 fluid-ex2" id="section2">
<h2 class="contact">Contact</h2>
  <?php

	$con = new mysqli("localhost", "root", "", "profile");
	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
	}
	$sql = "SELECT email, staffid, designation, department, firstname, lastname,phone,icnumber FROM user WHERE id=1";
	$res=$con->query($sql);
	if ($res->num_rows > 0) {
		while( $row = mysqli_fetch_array($res)) {
		echo "<a class='edit' href='http://localhost/editprof.php' target='_blank'><h5>EDIT INFO</h5></a>";
		echo "<h4 class='contact' >Staff ID: ".$row['staffid']."</h4>";
		echo "<h4 class='contact' >Email: ".$row['email']."</h4>";
		echo "<h4 class='contact' >Phone. No: ".$row['phone']."</h4>";
		echo "<h4 class='contact' >IC Number: ".$row['icnumber']."</h4>";
		}
	}else{
		echo "<h3 class='margin'>Database Error</h3>";
	}
	
?>
</div>
<div class="container-fluid col-bg-8" id="section3">
<h2 class='record'>Event Record</h4>
<table class="table table-hover active table-responsive">
    <thead>
      <tr>
        <th>EVENT</th>
        <th>DATE</th>
        <th>DEPARTMENT</th>
		<th>POSITION</th>
		<th>STATUS</th>
      </tr>
    </thead>
	<tbody>
  <?php
	$con = new mysqli("localhost", "root", "", "event");
	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
	}
	$department = null;
	$sql = "SELECT member_record.event_name, member_record.department, member_record.position, event_record.status, event_record.caseDate FROM member_record JOIN event_record ON member_record.event_id = event_record.caseID WHERE member_record.member_id = 1";
	$res=$con->query($sql);
	if ($res->num_rows > 0) {
		while( $row = mysqli_fetch_array($res)) {
		
		
		echo $department;
		if(strtolower($row['status']) == "success"){
			echo "<tr class='info'>";
			echo "<td>".strtoupper($row['event_name'])."</td>";
			echo "<td>".$row['caseDate']."</td>";
			
			if(strtoupper($row['department']) == 'CC'){
			echo '<td>Central Comittee</td>';
		}elseif(strtoupper($row['department'])  == 'TEC'){
			echo '<td>Technical</td>';
		}elseif(strtoupper($row['department'])  == 'REG'){
			echo '<td>Registration</td>';
		}elseif(strtoupper($row['department'])  == 'PUB'){
			echo '<td>Publishing</td>';
		}elseif(strtoupper($row['department'])  == 'PRY'){
			echo '<td>Prayer</td>';
		}elseif(strtoupper($row['department'])  == 'PRO'){
			echo '<td>Progamme</td>';
		}elseif(strtoupper($row['department'])  == 'PP2'){
			echo '<td>Publication and Publicity</td>';
		}elseif(strtoupper($row['department'])  == 'LOG'){
			echo '<td>Logistic</td>';
		}elseif(strtoupper($row['department'])  == 'AWD'){
			echo '<td>Award</td>';
		}elseif(strtoupper($row['department'])  == 'DEC'){
			echo '<td>Decoration</td>';
		}elseif(strtoupper($row['department'])  == 'FIN'){
			echo '<td>Finance</td>';
		}elseif(strtoupper($row['department'])  == 'ACA'){
			echo '<td>Academic</td>';
		}elseif(strtoupper($row['department'])  == 'INV'){
			echo '<td>Invitation</td>';
		}else{
			echo '<td>Other</td>';
		}
			if(strtolower($row['position'])  == 'vp'){
				echo '<td>Vice President</td>';
			}elseif(strtolower($row['position'])  == 'dh'){
				echo '<td>Department Head</td>';
			}else{
				echo "<td>".ucwords($row['position'])."</td>";
			
			}
			echo "<td>".strtoupper($row['status'])."</td>";
			echo "</tr>";
		}elseif(strtolower($row['status']) == "ongoing"){
			echo "<tr class='warning'>";
			echo "<td>".strtoupper($row['event_name'])."</td>";
			echo "<td>".$row['caseDate']."</td>";
			
			if(strtoupper($row['department']) == 'CC'){
			echo '<td>Central Comittee</td>';
		}elseif(strtoupper($row['department'])  == 'TEC'){
			echo '<td>Technical</td>';
		}elseif(strtoupper($row['department'])  == 'REG'){
			echo '<td>Registration</td>';
		}elseif(strtoupper($row['department'])  == 'PUB'){
			echo '<td>Publishing</td>';
		}elseif(strtoupper($row['department'])  == 'PRY'){
			echo '<td>Prayer</td>';
		}elseif(strtoupper($row['department'])  == 'PRO'){
			echo '<td>Progamme</td>';
		}elseif(strtoupper($row['department'])  == 'PP2'){
			echo '<td>Publication and Publicity</td>';
		}elseif(strtoupper($row['department'])  == 'LOG'){
			echo '<td>Logistic</td>';
		}elseif(strtoupper($row['department'])  == 'AWD'){
			echo '<td>Award</td>';
		}elseif(strtoupper($row['department'])  == 'DEC'){
			echo '<td>Decoration</td>';
		}elseif(strtoupper($row['department'])  == 'FIN'){
			echo '<td>Finance</td>';
		}elseif(strtoupper($row['department'])  == 'ACA'){
			echo '<td>Academic</td>';
		}elseif(strtoupper($row['department'])  == 'INV'){
			echo '<td>Invitation</td>';
		}else{
			echo '<td>Other</td>';
		}
		
			if(strtolower($row['position']) == 'vp'){
				echo '<td>Vice President</td>';
			}elseif(strtolower($row['position'])  == 'dh'){
				echo '<td>Department Head</td>';
			}else{
				echo "<td>".ucwords($row['position'])."</td>";
			}
			echo "<td>".strtoupper($row['status'])."</td>";
			echo "</tr>";
		}elseif(strtolower($row['status']) == "cancelled"){
			echo "<tr class='active'>";
			echo "<td>".strtoupper($row['event_name'])."</td>";
			echo "<td>".$row['caseDate']."</td>";
			if(strtoupper($row['department']) == 'CC'){
			echo '<td>Central Comittee</td>';
		}elseif(strtoupper($row['department'])  == 'TEC'){
			echo '<td>Technical</td>';
		}elseif(strtoupper($row['department'])  == 'REG'){
			echo '<td>Registration</td>';
		}elseif(strtoupper($row['department'])  == 'PUB'){
			echo '<td>Publishing</td>';
		}elseif(strtoupper($row['department'])  == 'PRY'){
			echo '<td>Prayer</td>';
		}elseif(strtoupper($row['department'])  == 'PRO'){
			echo '<td>Progamme</td>';
		}elseif(strtoupper($row['department'])  == 'PP2'){
			echo '<td>Publication and Publicity</td>';
		}elseif(strtoupper($row['department'])  == 'LOG'){
			echo '<td>Logistic</td>';
		}elseif(strtoupper($row['department'])  == 'AWD'){
			echo '<td>Award</td>';
		}elseif(strtoupper($row['department'])  == 'DEC'){
			echo '<td>Decoration</td>';
		}elseif(strtoupper($row['department'])  == 'FIN'){
			echo '<td>Finance</td>';
		}elseif(strtoupper($row['department'])  == 'ACA'){
			echo '<td>Academic</td>';
		}elseif(strtoupper($row['department'])  == 'INV'){
			echo '<td>Invitation</td>';
		}else{
			echo '<td>Other</td>';
		}
		
			if(strtolower($row['position']) == 'vp'){
				echo '<td>Vice President</td>';
			}elseif(strtolower($row['position'])  == 'dh'){
				echo '<td>Department Head</td>';
			}else{
				echo "<td>".ucwords($row['position'])."</td>";
			}
			echo "<td>".strtoupper($row['status'])."</td>";
			echo "</tr>";
		}elseif(strtolower($row['status']) == "setback"){
			echo "<tr class='danger'>";
			echo "<td>".strtoupper($row['event_name'])."</td>";
			echo "<td>".$row['caseDate']."</td>";
			
			if(strtoupper($row['department']) == 'CC'){
			echo '<td>Central Comittee</td>';
		}elseif(strtoupper($row['department'])  == 'TEC'){
			echo '<td>Technical</td>';
		}elseif(strtoupper($row['department'])  == 'REG'){
			echo '<td>Registration</td>';
		}elseif(strtoupper($row['department'])  == 'PUB'){
			echo '<td>Publishing</td>';
		}elseif(strtoupper($row['department'])  == 'PRY'){
			echo '<td>Prayer</td>';
		}elseif(strtoupper($row['department'])  == 'PRO'){
			echo '<td>Progamme</td>';
		}elseif(strtoupper($row['department'])  == 'PP2'){
			echo '<td>Publication and Publicity</td>';
		}elseif(strtoupper($row['department'])  == 'LOG'){
			echo '<td>Logistic</td>';
		}elseif(strtoupper($row['department'])  == 'AWD'){
			echo '<td>Award</td>';
		}elseif(strtoupper($row['department'])  == 'DEC'){
			echo '<td>Decoration</td>';
		}elseif(strtoupper($row['department'])  == 'FIN'){
			echo '<td>Finance</td>';
		}elseif(strtoupper($row['department'])  == 'ACA'){
			echo '<td>Academic</td>';
		}elseif(strtoupper($row['department'])  == 'INV'){
			echo '<td>Invitation</td>';
		}else{
			echo '<td>Other</td>';
		}
		
			if(strtolower($row['position'])  == 'vp'){
				echo '<td>Vice President</td>';
			}elseif(strtolower($row['position'])  == 'dh'){
				echo '<td>Department Head</td>';
			}else{
				echo "<td>".ucwords($row['position'])."</td>";
			}
			echo "<td>".strtoupper($row['status'])."</td>";
			echo "</tr>";
		}else{
		echo "<tr>";
		echo "<h4 class='contact'>".$row['event_name']."</h4>";
		echo "<h4 class='contact'>".$row['caseDate']."</h4>";
		if(strtoupper($row['department']) == 'CC'){
			echo '<td>Central Comittee</td>';
		}elseif(strtoupper($row['department'])  == 'TEC'){
			echo '<td>Technical</td>';
		}elseif(strtoupper($row['department'])  == 'REG'){
			echo '<td>Registration</td>';
		}elseif(strtoupper($row['department'])  == 'PUB'){
			echo '<td>Publishing</td>';
		}elseif(strtoupper($row['department'])  == 'PRY'){
			echo '<td>Prayer</td>';
		}elseif(strtoupper($row['department'])  == 'PRO'){
			echo '<td>Progamme</td>';
		}elseif(strtoupper($row['department'])  == 'PP2'){
			echo '<td>Publication and Publicity</td>';
		}elseif(strtoupper($row['department'])  == 'LOG'){
			echo '<td>Logistic</td>';
		}elseif(strtoupper($row['department'])  == 'AWD'){
			echo '<td>Award</td>';
		}elseif(strtoupper($row['department'])  == 'DEC'){
			echo '<td>Decoration</td>';
		}elseif(strtoupper($row['department'])  == 'FIN'){
			echo '<td>Finance</td>';
		}elseif(strtoupper($row['department'])  == 'ACA'){
			echo '<td>Academic</td>';
		}elseif(strtoupper($row['department'])  == 'INV'){
			echo '<td>Invitation</td>';
		}else{
			echo '<td>Other</td>';
		}
		
		echo "<h4 class='contact'>".$row['position']."</h4>";
		echo "<h4 class='contact'>".$row['status']."</h4>";
		echo "</tr>";
		}
		}
	}else{
		echo "<h3 class='margin'>Database Error</h3>";
	}
	
?>
	</tbody>
</table>
</div>
<div class="container-fluid col-bg-2">
<h3 class='end'>End of Page</h4>
</div>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.1.0.min.js"></script>
</body>
</html>