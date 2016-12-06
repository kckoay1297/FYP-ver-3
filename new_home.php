<?php
include('session.php');
?>

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
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>
body {
    background: url("http://eskipaper.com/images/black-wallpaper-23.jpg") ;
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
div.temp{
	height:70%;
	width:auto;
	margin:60px;
	padding-bottom:20px;
	background-color:#F8F8F8;
	background: -webkit-linear-gradient(left top, #F8F8F8, #E3E3E3); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(bottom right, #F8F8F8, #E3E3E3); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(bottom right, #F8F8F8, #E3E3E3); /* For Firefox 3.6 to 15 */
    background: linear-gradient(to bottom right, #F8F8F8, #E3E3E3); /* Standard syntax (must be last) */
	padding-left:40px;
	border-radius: 8px;
	border: 3px solid #8C8C8C;
	float:auto;
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
h2{
	text-decoration:underline;
	letter-spacing: 1px;
	line-height: 1.8;
}
h3{
	letter-spacing: 1px;
	line-height: 1.8;
	margin-left:10px;
}
p{
	margin-left:10px;
}
a{
	color: white;
	text-decoration: none;
}
a.edit{
	font-size:12px;
	color:#187FFA;
}
a.edit:hover{
	color:#0061D6;
}
a.edit:active{
	color:#D60000;
}
a.reset{
	font-size:12px;
	color:#FF3F3F;
}
a.reset:hover{
	color:#B90000;
}
a.reset:active{
	color:#5A0000;
}
@media (max-width:767px) {
.logo {
	margin: 15px;
	float: none;
	text-align: center;
}
}
a {
    color:black;
}
a.header{
	color: white;
	text-decoration: none;
}
a.btn{
	margin-top:20px;
	margin-bottom:15px;
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
li.temp{
	color:white;
}
li.tit{
	font-size:24px;
	padding:2px;
	margin:5px;
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
  width:350px ;
  height:280px;
  margin: 10px;
  float:left;
 // margin:0 auto;
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
.menu1{
	text-align:center;
}
p {
   // text-indent: 50px;
    text-align: justify;
    letter-spacing: 3px;
}
a.link{
	color:red;
}
</style>
</head>
<body>
<title>Event Management: Choose Template</title>
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

<div id="nav">
<ul class="topnav">
  <li><a class="active" href="http://localhost/new_home.php">Home</a></li>
  <li><a href="http://localhost/profile.php">Profile</a></li>
  <li><a href="http://localhost/memberlist.php">Member</a></li>
  <li><a href="http://localhost/email_start.php">Email</a></li>
  <li><a href="http://localhost/doc_list.php">Documents</a></li>
  <li><a href="http://localhost/readme.docx">About</a></li>
  <li><a href="http://localhost/event_search.php" target="_blank"><span class="glyphicon glyphicon-search"></span></a></li>
  <li class="right"><a href="http://localhost/logout_final.php">Logout</a></li>
</ul>
</div>
 
<div class="container temp">
<?php 
$uid = $login_session;
//echo $uid;
$conn1 = new mysqli("localhost", "root", "", "profile");
	if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
}
	$uid = 1;
	$sql = "SELECT * FROM user WHERE id=".$uid;
	$res = $conn1->query($sql);
	$name = null;
	if ($res->num_rows > 0) {
		while($row1 = $res->fetch_assoc()) {
			$name = $row1['firstname']." ".$row1['lastname'];
		}
	}
  echo "<h3>Welcome ".$name."</h3>";
  ?>
  <ul class="nav nav-tabs nav-pills titl" >
<li class="active tit"><a data-toggle="pill" href="#home" >Start</a></li>
    <li class="tit"><a data-toggle="pill" href="#menu1">Before Event</a></li>
    <li class="tit"><a data-toggle="pill" href="#menu2">During/After Event</a></li>
    <li class="tit"><a data-toggle="pill" href="#menu3">Invitation</a></li>
	<li class="tit"><a data-toggle="pill" href="#menu4">Instruction</a></li>
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
				echo "<li class='tit'><a data-toggle='pill' href='#menu5'>Admin</a></li>";
			}
		}
	}
?>
  </ul>
 
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
	<h3>Home</h3>
	<a href="http://localhost/create_event.php?app=0&id2=0&id=0"><button type="btn" class="btn btn-primary btn-lg sharp ">New Event<br><br><i class="material-icons" style="font-size:36px">create_new_folder</i></button></a>
	   
       <a href="http://localhost/event_recom.php"><button type="btn" class="btn btn-primary btn-lg sharp ">Create/Recommend Event<br><br><i class="material-icons" style="font-size:36px">event</i></button></a>
	   <a href="http://localhost/pending_list.php"><button type="btn" class="btn btn-primary btn-lg sharp ">Pending Events<br><br><i class="material-icons" style="font-size:36px">add_to_queue</i></button></a>
   <a href="http://localhost/record_list.php"><button type="btn" class="btn btn-primary btn-lg sharp ">Past Events<br><br><i class="material-icons" style="font-size:36px">filter_list</i></button></a>
	    
      <a href="http://localhost/hosting_feedback_other.php"><button type="btn" class="btn btn-primary btn-lg sharp ">Hosting Event<br><br><i class="material-icons" style="font-size:36px">directions_run</i></button></a>
	  <a href='hosting_event.php'><button type='btn' class='btn btn-primary btn-lg sharp'>Your Event<br><br><i class="fa fa-table" style='font-size:36px'></i></button></a>
	  <?php 
		$uid = 1;
		echo "<a href='http://localhost/event_feedback.php?id=".$uid."'><button type='btn' class='btn btn-primary btn-lg sharp'>Feedback<br><br><i class='material-icons' style='font-size:36px'>feedback</i></button></a>";
	  ?>
	  <a href="http://localhost/invitation_list.php"><button type="btn" class="btn btn-primary btn-lg sharp ">Invitation to Event<br><br><i class="material-icons" style="font-size:36px">email</i></button></a> 
	  <a href="http://localhost/event_involved.php"><button type="btn" class="btn btn-primary btn-lg sharp ">Event Involved<br><br><i class="material-icons" style="font-size:36px">subtitles</i></button></a>
    </div>
    <div id="menu1" class="tab-pane fade">
	<h3>Start Event</h3>
	<a href="http://localhost/create_event.php?app=0&id2=0&id=0"><button type="btn" class="btn btn-primary btn-lg sharp ">New Event<br><br><i class="material-icons" style="font-size:36px">create_new_folder</i></button></a>
	
	   <a href="http://localhost/event_recom.php"><button type="btn" class="btn btn-primary btn-lg sharp ">Create/Recommend Event<br><br><i class="material-icons" style="font-size:36px">event</i></button></a>
	   <a href="http://localhost/pending_list.php"><button type="btn" class="btn btn-primary btn-lg sharp ">Pending Events<br><br><i class="material-icons" style="font-size:36px">add_to_queue</i></button></a>
   <a href="http://localhost/record_list.php"><button type="btn" class="btn btn-primary btn-lg sharp ">Past Events<br><br><i class="material-icons" style="font-size:36px">filter_list</i></button></a>
	    </div>
    <div id="menu2" class="tab-pane fade">
	<h3>View Mission/End of Event</h3>
      <a href="http://localhost/hosting_feedback_other.php"><button type="btn" class="btn btn-primary btn-lg sharp ">Hosting Event<br><br><i class="material-icons" style="font-size:36px">directions_run</i></button></a>
	   <a href='hosting_event.php'><button type='btn' class='btn btn-primary btn-lg sharp'>Your Event<br><br><i class="fa fa-table" style='font-size:36px'></i></button></a>
	
	  <?php 
		$uid = 1;
		echo "<a href='http://localhost/event_feedback.php?id=".$uid."'><button type='btn' class='btn btn-primary btn-lg sharp'>Feedback<br><br><i class='material-icons' style='font-size:36px'>feedback</i></button></a>";
	  ?>
      
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Invitation/Involvement of Event</h3>
      <a href="http://localhost/invitation_list.php"><button type="btn" class="btn btn-primary btn-lg sharp ">Invitation to Event<br><br><i class="material-icons" style="font-size:36px">email</i></button></a> 
	  <a href="http://localhost/event_involved.php"><button type="btn" class="btn btn-primary btn-lg sharp ">Event Involved<br><br><i class="material-icons" style="font-size:36px">subtitles</i></button></a>

    </div>
	<div id="menu4" class="tab-pane fade">
      <h3>How to Create Event?</h3>
	  <p>First, you can go have a look on past event list, or you can direct go to "Before Event" section, click "<a class='link' href='event_recom.php' target='_blank'>Create/Recommend Event</a>" or "<a class='link' href='http://localhost/create_event.php?app=0&id2=0&id=0' target='_blank'>New Event</a>", after complete all the details and submit your proposal. Wait for approval of management, which is department head, financial officer, and dean. Therefore
	  , after management approve your event, you can continue at section of "During/After Event".</p>
	  <br>
	  <h3>Approval of Events?</h3>
	  <p>Every events have to be approved by management, you can check your pending status at "<a class='link' href='pending_list.php' target='_blank'>Pending Events</a>". If it take too long time to approve, you should probably use the <a class='link' href='email_start.php' target='_blank'>email</a> function to email the management. If your event is rejected, you will receive a message of them, and don't feel depressed, try to redo your proposal, 
	  change some of your information. If your event is accepted, please go to "Hosting Event"/"Your Event" to invite members (at least 4 person) to help you out.</p>
	  <br>
	  <h3>Assign Member?</h3>
	  <p>After certain <a class='link' href='memberlist.php' target='_blank'>member</a> accept your invitation, you can assign missions to them, and assign useful link/website inside the checklist function. Member can update their mission status, submit relevant documents. You can update the task of anyone who is below your ranks.</p>
	  <br>
	  <h3>How to End Event?</h3>
	  <p>After an event ended, you can choose to end an event in "<a class='link' href='hosting_event.php' target='_blank'>Your Event</a>" section, and you can use "Feedback" function to submit the post-mortem report in the system and finalized the information of your event.</p>
	  <br>
	  <h3>Invite to an Event?</h3>
	  <p>When you are invited to an event, you can go to "<a class='link' href='invitation_list.php' target='_blank'>Invitation</a>" choose to accept or reject, and you can view your mission list in "<a class='link' href='event_involved.php' target='_blank'>Event Involved</a>".</p>
	</div>
	<div id="menu5" class="tab-pane fade">
	<h3>Admin Panel</h3>
		<a href="http://localhost/admin_casebase.php"><button type="btn" class="btn btn-primary btn-lg sharp ">Manage Casebase<br><br><i class="material-icons" style="font-size:36px">account_balance_wallet</i></button></a>
		<a href="http://localhost/admin_email_template.php"><button type="btn" class="btn btn-primary btn-lg sharp ">Manage Email<br><br><i class="material-icons" style="font-size:36px">format_list_bulleted</i></button></a>
		<a href="http://localhost/admin_member.php"><button type="btn" class="btn btn-primary btn-lg sharp ">Manage Member<br><br><i class="material-icons" style="font-size:36px">person</i></button></a>
		<a href="http://localhost/admin_event.php"><button type="btn" class="btn btn-primary btn-lg sharp ">Manage Event<br><br><i class="material-icons" style="font-size:36px">event_note</i></button></a>
		<a href="http://localhost/pending_event.php"><button type="btn" class="btn btn-primary btn-lg sharp ">Pending Event<br><br><i class="material-icons" style="font-size:36px">event</i></button></a>
		<a href="http://localhost/create_file.php"><button type="btn" class="btn btn-primary btn-lg sharp ">Upload File/Link<br><br><i class="material-icons" style="font-size:36px">file_upload</i></button></a>
	</div>
  </div>
</div>

</body>
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
</html>