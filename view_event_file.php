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
	<title>Event Mangement System: Document List</title>

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
width:auto;
background-color:white;
}
</style>
</head>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			
			<a class="header" href="http://localhost/new_home.php">
			<h1 class="topspace">Event Management System</h1>
			<h4 class="topspace">Document List</h4>
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
<table class="table table-condensed table-striped table-bordered">
<thead>
<tr>
	<th>Member</th>
	<th>Duty</th>
	<th>File Uploaded</th>
</tr>
	</thead>
<?php
$cid= $_GET['cid'];
$uid= $_GET['uid'];
$dir = "upload/".$cid."/";
$ds = scandir($dir);
$thelist = null;
$con = new mysqli("localhost", "root", "", "event");
$duty = $f = $n= null;

if ($handle = opendir($dir)) {
    while (false !== ($file = readdir($handle))) {
      if ($file != "." && $file != "..") {
		  $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file);
		  $sql2 = "SELECT * from event_checklist WHERE ec_index=".$withoutExt;
		  $res=$con->query($sql2);
		  if ($res->num_rows > 0) {
				while( $row = mysqli_fetch_array($res)) {
					$duty = $row['duty'];
					$f = $row['caseID']."_".$row['ec_index']."_".$row['memberid'];
					$con1 = new mysqli("localhost", "root", "", "profile");
					$sql = "SELECT * from user WHERE id=".$row['memberid'];
					$res1=$con1->query($sql);
					if ($res1->num_rows > 0) {
						while( $row1 = mysqli_fetch_array($res1)) {
							$n = $row1['firstname'] . " " . $row1['lastname'];
						}
					}
				}
		  }else{
				echo "Error";
		  }
        $thelist .= '<tr><td>'.$n.'</td><td>'.$duty.'</td><td><a href="upload/'.$cid.'/'.$file.'" target="_blank">'.ucwords($f).'</a></td></tr>';
      }
    }
    closedir($handle);
	
  }
  echo $thelist;
?>
</tbody>
</table>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>