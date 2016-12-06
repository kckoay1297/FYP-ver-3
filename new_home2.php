<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
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

.btn {
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
  width:400px ;
  height:280px;
  margin: 10px;
  float:left;
}

.btn-lg {
  font-size: 16px;
  line-height: 1.33;
  border-radius: 6px;
}

.btn-primary {
  color: #fff;
  background-color: #E46BFF;
  border-color: #E46BFF;
}
.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active,
.open .dropdown-toggle.btn-primary {
  color: #fff;
  background-color: #E46BFF;
  border-color: #E46BFF;
  opacity: 1.0;
}
/***********************
  SHARP BUTTONS
************************/
.sharp {
  border-radius:0;
}

/***********************
  CUSTON BTN VALUES
************************/

.btn {
    border: 0 none;
    font-weight: 700;
    letter-spacing: 1px;
	opacity: 0.8;
    /*position:absolute;*/
}
.btn:focus, .btn:active:focus, .btn.active:focus {
    outline: 0 none;
	background: #A30FC4;
    color: #ffffff;
	opacity: 1.0;
}

.btn-primary {
    background: #8000BB;
    color: #ffffff;
}
.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open > .dropdown-toggle.btn-primary {
    background: #590182;
	//8000BB
	opacity: 1.0;
	box-shadow: 2px 2px 8px #000000;
}
.btn-primary:active, .btn-primary.active {
    background: #8E04CD;
    box-shadow: none;
	opacity: 1.0;
}

div.content{
padding-left:60px;
padding-bottom:5px;
margin: 5px 0;
height:480px;
width:auto;
}
div.nav{
padding-left:60px;
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
    color:#6d0058;
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

.navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c ;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red ;
  }
  
  
  button.menu{
	  width:220px ;
	 height:5px;
  }

#search{
	width: 200px; margin: 0 auto; max-height: 120px; border: 1px solid #f4f4f4; overflow: hidden;
	margin:5px;
}
#text{
	width: 200px; padding: 5px; border: 1px solid #f4f4f4; border-radius: 3px;
	margin:5px;
}
#searchtitle{
	width: 200px; padding: 5px; background: #fff;
	margin:5px;
}
#searchtitle:hover{
	background: #f4545f;
}
</style>
</head>
<body>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			
			<a class="header" href="http://localhost/new_home.php">
			<h1 class="topspace">Event Management System</h1>
			<h4 class="topspace">Homepage</h4>
			</a>
		</div>
	</div>
</div>


<div id="nav collapse navbar-collapse" id="myNavbar">
<ul class="topnav  nav-pills">
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

<title>Event Recommendation</title>
<br></br>

<div class="content">
<a href="http://localhost/event_recom.php"><button type="btn" class="btn btn-primary btn-lg sharp ">Create Event on Recommendation</button></a>
<a href="http://localhost/record_list.php"><button type="btn" class="btn btn-primary btn-lg sharp ">View Past Event List</button></a>
<a href="http://localhost/hosting_feedback_other.php"><button type="btn" class="btn btn-primary btn-lg sharp ">Hosting Event</button></a>
<a href="http://localhost/event_involved.php"><button type="btn" class="btn btn-primary btn-lg sharp ">Event Involved</button></a>
<a href="http://localhost/invitation_list.php"><button type="btn" class="btn btn-primary btn-lg sharp ">Invitation to Event</button></a>
<a href="http://localhost/pending_list.php"><button type="btn" class="btn btn-primary btn-lg sharp ">View Pending Event</button></a>
<?php
$userid = 1;
$con = new mysqli("localhost", "root", "", "profile");
	// Check connection
	if ($con->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
	$sql = "SELECT * FROM admin";
	$res = $con->query($sql);
	if ($res->num_rows > 0) {
		while( $row = mysqli_fetch_array($res)) {
			if($userid == $row['user_id']){
				echo "<a href='http://localhost/pending_approve.php'><button type='btn' class='btn btn-primary btn-lg sharp'>Event Waiting for  Approval</button></a>";
			}else{
				
			}
		}
	}else{
		echo "0 result";
	}

?>
</div>

<div></div>
</div>

<nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
					<li>
                        <a href="http://myum.um.edu.my/" target="_blank">UM</a>
                    </li>
                    <li>
                        <a href="http://myum.um.edu.my/" target="_blank">Staff Portal</a>
                    </li>
                    <li>
                        <a href="http://www.fsktm.um.edu.my/" target="_blank">FCSIT</a>
                    </li>
                    <li>
                        <a href="https://docs.google.com/forms/d/1UsLkpzp73qr0Vfb8y8Q0l8WT7C9yRmaSdxHjMhw5_R8/viewform" target="_blank">Room Booking</a>
                    </li>
					<li>
                        <a href="http://hep.um.edu.my/" target="_blank">HEP</a>
                    </li>
					<li>
                        <a href="http://vmis.um.edu.my/" target="_blank">Bus Booking</a>
                    </li>
					<li>
                        <a href="https://siswa.um.edu.my/" target="_blank">Siswamail</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip();
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})

function search(string){
	var xmlhttp;
	if(window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}else{
		xmlhttp = new ActiveXObject("XMLHTTP");
	}
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById("search").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET", "search.php?s="+string, true);
	xmlhttp.send(null);
}
</script>
</body>
</html>
