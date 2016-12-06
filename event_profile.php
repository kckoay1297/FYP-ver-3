<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet"  href="css/profile.css" />
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
body {
    background-color:#970700;
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
  div.section1{
	  float:left;
	  background-color: #E89000; 
      color: #ffffff;
	  width:40%;
	  //height:360px;
	  //max-height:670px;
	  float:auto;
  }
  div.section2{
	  float:left;
	  background-color: #C10000; 
      color: #ffffff;
	  width:30%;
	 // height:360px;
	 // max-height:670px;
	  float:auto;
  }
  div.section3{
	  float:right;
	  background-color: #0007F1; 
      color: #ffffff;
	  width:30%;
	  //height:360px;
	  //max-height:670px;
	  float:auto;
  }
  div.section4{
	  margin-bottom:15px;
  }
  h3.title{
	  margin-left:30px;
	  text-decoration: underline;
  }
  h4.content{
	  margin-left:30px;
  }
  p.content{
	  font-size:18px;
  }
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
button.myBtn{
	margin-left:20%;
	margin-right:20%;
}
a.myBtn{
	margin-left:20%;
	margin-right:20%;
}
button.myBtn1{
	background-color:white;
}
button.myBtn2{
	color:red;
}
.price-table {
    margin-top: 50px;
    margin-bottom: 20px;
}
.price-column {
    background-color:white;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    padding-bottom:20px;
    margin:0 auto;
    text-align:center;
}
.price-column h3 {
    background-color:#181A1C;
    text-transform:uppercase;
    text-align: center;
    color:#FECE1A;
    padding:40px 0px;
    font-size: 36px;
    margin-top:0px;
    -moz-border-radius: 0px;
    -webkit-border-radius: 10px 10px 0px 0px;
    border-radius: 10px 10px 0px 0px;
}
.price-column .list{
    list-style:none;
    margin:20px 20px;
}
.price-column .list li{
    font-weight:lighter;
    color:#747C89;
    font-size:16px;
    border-bottom:1px solid #747C89;
    padding:15px 0px;
}
.price-column .list li.price {
    text-align: center;
    font-size:16px;
    background-color:white;
    color:#747C89;
    margin-top:25px;
}
.price-column, .testimonial {
        margin-top:30px;
    }

</style>
</head>
<body>
<title>Event Management Profile</title>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			
			<a class="header" href="http://localhost/homepage.html">
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
		<div id="price" class="section secondary-section">
            <div class="container">
                <div class="price-table row-fluid">
                    <div class="span4 price-column">
                        <h3>Basic Info</h3>
                        <ul class="list">
							<?php
		$id = $_GET['id'];
	$con = new mysqli("localhost", "root", "", "event");
	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
	}
	$sql = "SELECT * FROM event_record WHERE cIndex=".$id;
	$res=$con->query($sql);
	if ($res->num_rows > 0) {
		while( $row = mysqli_fetch_array($res)) {
		echo "<li>".($row['caseName'])." (ID:".strtoupper($row['caseID']).")</li>";
		echo "<li>Date: ".$row['caseDate']."</li>";
		if($row['department']=="ai"){
			echo "<li>Department: Artificial Intelligence</li>";
		}elseif($row['department']=="stk"){
			echo "<li>Department: Networking & Computer System</li>";
		}elseif($row['department']=="it"){
			echo "<li>Department: Information Technology</li>";
		}elseif($row['department']=="se"){
			echo "<li>Department: Software Engineering</li>";
		}elseif($row['department']=="mis"){
			echo "<li>Department: Management Information System</li>";
		}elseif($row['department']=="under_grad"){
			echo "<li>Department: Undergraduate Student</li>";
		}elseif($row['department']=="post_grad"){
			echo "<li>Department: Postgraduate Student</li>";
		}else{
			echo "<li>All Student</li>";
		}echo "<li>Type: ".ucwords($row['type'])."</li>";
		echo "<li>Level: ".ucwords($row['level'])."</li>";
		
		}
	}else{
		echo "<li>Name: Unknown (ID: Unknown)</li>";
		echo "<li>Date: Unknown</li>";
		echo "<li>Department: Unknown</li>";
		echo "<li>Level: Unknown</li>";
	}
?>
                        </ul>
                    </div>
                    <div class="span4 price-column">
                        <h3>Financial Info</h3>
                        <ul class="list">
                            <?php
	$id = $_GET['id'];
	$con = new mysqli("localhost", "root", "", "event");
	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
	}
	$sql = "SELECT * FROM event_record WHERE cIndex=".$id;
	$res=$con->query($sql);
	if ($res->num_rows > 0) {
		while( $row = mysqli_fetch_array($res)) {
		echo "<li>Budget: RM".number_format($row['budget'],2)."</li>";
		echo "<li>Expected Income:RM".number_format($row['expectedIncome'],2)."</li>";
		echo "<li>Actual Income: RM".number_format($row['actualIncome'],2)."</li>";
		echo "<li>Expense: RM".number_format($row['expenses'],2)."</li>";
		
		echo "<li>Event Status: ".ucwords($row['status'])."</li>";
		}
	}else{
		echo "<h3 class='margin'>Database Error</h3>";
	}
?>
                        </ul>
                    </div>
                    <div class="span4 price-column">
                        <h3>Other</h3>
                        <ul class="list">
                            <?php
	$id = $_GET['id'];
	$con = new mysqli("localhost", "root", "", "event");
	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
	}
	$sql = "SELECT * FROM event_record WHERE cIndex=".$id;
	$res=$con->query($sql);
	if ($res->num_rows > 0) {
		while( $row = mysqli_fetch_array($res)) {
		echo "<li>Committee Size:".$row['cmtSize']."</lo>";
		echo "<li>Size of Event: ";
		if($row['cmtSize'] < 10){
			echo "Small Event</li>";
		}elseif($row['cmtSize'] >= 10 & $row['cmtSize'] < 30){
			echo "Medium Event</li>";
		}elseif($row['cmtSize'] >= 30 & $row['cmtSize'] < 50){
			echo "Big Event</li>";
		}else{
			echo "Mega Event</li>";
		}
		echo "<li>Expected Participants: ".$row['expectedPtcpt']."</li>";
		echo "<li>Actual Participants: ".$row['actualPtcpt']."</li>";
		echo "<li>Feedback: ".number_format($row['feedback'],2)."%";
		if($row['feedback'] < 45.0){
			echo " (Bad)</li>";
		}elseif($row['feedback'] >= 45.0 & $row['feedback'] < 55.0){
			echo " (Moderate)</li>";
		}elseif($row['feedback'] >= 55.0 & $row['feedback'] < 80.0){
			echo " (Good)</li>";
		}else{
			echo " (Very Good)</li>";
		}
		}
	}else{
		echo "<h3 class='margin'>Database Error</h3>";
	}
?>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>



<div class="container-fluid col-md-8 section4 desc">
<h2 class='content'>Description</h2>
<?php
	$id = $_GET['id'];
	
	$id2 = $_GET['id2'];
	$con = new mysqli("localhost", "root", "", "event");
	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
	}
	$sql = "SELECT * FROM event_record WHERE cIndex=".$id;
	$res=$con->query($sql);
	if ($res->num_rows > 0) {
		while( $row = mysqli_fetch_array($res)) {
		echo "<p class='content'>".$row['description']."</h4>";
		}
	}else{
		echo "<h3 class='margin'>Database Error</h3>";
	}
?>
<br></br>
<button id="myBtn" class="myBtn btn btn-primary btn-lg btn-block">View Member</button>
<a href='create_event.php?app=0&id2=0&id=0' class='myBtn btn btn-primary btn-lg btn-block' role='button' id="myBtn">Create New Event</a>
<?php
	$id = $_GET['id'];
	$id2 = $_GET['id2'];
echo "<a href='create_event.php?app=1&id=".$_GET['id']."&id2=".$_GET['id2']."' class='myBtn btn btn-primary btn-lg btn-block' role='button' id='myBtn'>Create Similar Event</a>";
echo "<a href='view_duty.php?id2=".$_GET['id2']."' class='myBtn btn btn-primary btn-lg btn-block' role='button' id='myBtn'>View Duty List</a>";

?>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">×</span>
      <h2>Member List</h2>
    </div>
    <div class="modal-body">
	<table class="table table-hover active table-responsive">
    <thead>
      <tr>
        <th>Position</th>
        <th>Department</th>
		<th>Member Name</th>
		<th>View Profile</th>
      </tr>
    </thead>
	<tbody>
	<?php
      $id = $_GET['id'];
	$con = new mysqli("localhost", "root", "", "event");
	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
	}
	$sql = "SELECT * FROM member_record WHERE event_index =".$id;//.strtolower($id);
	$res=$con->query($sql);
	if ($res->num_rows > 0) {
		while( $row = mysqli_fetch_array($res)) {
			echo "<tr class='info'>";
			$biro = null;
			if($row['department']=='CC'){
					$biro ="Central Committee";
				}elseif($row['department'] == 'TEC'){
					$biro= "Technical";
				}elseif($row['department'] == 'LOG'){
					$biro ="Logistc";
				}elseif($row['department'] == 'REG'){
					$biro = "Registration";
				}elseif($row['department'] == 'PUB'){
					$biro = "Publication";
				}elseif($row['department'] == 'PRY'){
					$biro = "Prayer";
				}elseif($row['department'] == 'PRO'){
					$biro = "Programme & Protocol";
				}elseif($row['department'] == 'PP2'){
					$biro = "Publicity & Promotion";
				}elseif($row['department'] == 'FOD'){
					$biro = "Food";
				}elseif($row['department'] == 'AWD'){
					$biro = "Award";
				}elseif($row['department'] == 'DEC'){
					$biro = "Deccoration";
				}elseif($row['department'] == 'FIN'){
					$biro = "Finance";
				}elseif($row['department'] == 'ACA'){
					$biro = "Academic";
				}elseif($row['department'] == 'INV'){
					$biro = "Invitation";
				}else{
					$biro = "Other";
				}
				
			echo "<td>".strtoupper($row['position'])."</td>";
			echo "<td>".strtoupper($biro)."</td>";
			echo "<td>".strtoupper($row['name'])." ".strtoupper($row['lastname'])."</td>";
			echo "<td><a href='user_profile.php?id=".$row["member_id"]."' target='_blank'>click me <i class='fa fa-external-link'></i></a></td>";
			
			echo "</tr>";
		}
	}else{
		echo "<tr class='danger'>";
		echo "<td>Unknown</td>";
		echo "<td>Unknown</td>";
		echo "<td>Unknown</td>";
		echo "<td>Unknown</td>";
		echo "</tr>";
	}
    ?>
	</tbody>
	</table>
	</div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.1.0.min.js"></script>
</body>
</html>