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
	<title>Event Mangement System: To-do List</title>

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
	color: blue;
	text-decoration: none;
}

a.edit{
	color: red;
	text-decoration: none;
}
a.edit:active{
	color:#FF6464;
}
a.sm{
	color:#7CC5FF;
}
a.sm:active{
	color:#004C89;
}
label{
	color:black;
	font-size:24px;
}
textarea{
	font-size:16px;
}
div.info{
	background:#FFD8D7;
	margin:10px;
	padding:10px;
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
input.update{
	margin:10px;
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
thead{
	background-color:#333;
	color:white;
}
tbody{
	background-color:white;
}
th:hover{
	color:#FDFFD0;
}
td:hover{
	background-color:#FDFFD0;
}
i.sort:hover{
	color:#FF8663;
}
</style>
</head>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			
			<a class="header" href="http://localhost/new_home.php">
			<h1 class="topspace">Event Management System</h1>
			<h4 class="topspace">To-do List</h4>
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
<body>
<div class="container">
<table class="table table-condensed table-striped table-bordered">
<thead>
  <tr>
    <th>Name <small>(Click to Add Task)</small></th> 
	<th>Biro</th>
    <th>Position </th>
	<th>Duty <small>(Click to Edit Task)</small></th>
	<th>Date Assigned</th>
	<th>Upload File</th>
	<th>Useful File</th>
	<th>Status</th>
	<th>Update</th>
	</tr>
</thead>
<tbody>
<?php
$uid = $_GET['uid'];
$cid = $_GET['cid'];
$fname = $lname = $department = $biro = $po = $duty = $upfile = $usefile = $status = $name= $zero = $upload=$url=$url2= null;

$con = new mysqli("localhost", "root", "", "event");
if ($con->connect_error) {
     die("Connection failed: " . $con->connect_error);
}
$condition = "SELECT * FROM member_record WHERE member_id = ".$uid." AND event_id = '$cid'";
$resc = $con->query($condition);
$po_special = null;
if($resc->num_rows > 0){
	while( $cz = mysqli_fetch_array($resc)) {
		if($cz['position'] == 'president'){
			$zero = 3;
		}elseif($cz['position'] == 'vp' or $cz['position'] == 'secretory' or $cz['position'] == 'treasurer'){
			$zero = 2;
		}elseif($cz['position'] == 'dh'){
			$zero = 1;
		}else{
			$zero = 0;
		}
		$po_special = $cz['position'];
	}
}else{
	echo "erorr";
}
$dh = "SELECT * FROM member_record WHERE member_id=".$uid." AND event_id = '$cid' AND position = 'dh'";
$dh_special = null;
$RESD = $con->query($dh);
if($RESD->num_rows > 0){
	while( $D = mysqli_fetch_array($RESD)) {
		$dh_special = $D['department'];
		
	}
}
$update = "UPDATE hosting_event SET act2 = 2 WHERE caseID = '$cid'";
$sql = "SELECT * FROM hosting_event WHERE caseID = '$cid'";
$res = $con->query($sql);
if($res->num_rows > 0){
	while( $row = mysqli_fetch_array($res)) {
		if($row['act2'] == 1){
			if(mysqli_query($con,$update)){
				
			}else{
				echo "Error";
			}
		}
	}
}

$sql1 = "SELECT h.caseID,h.caseDate,h.level,h.type,e.cIndex,m.event_id,m.event_name,m.member_id, m.position,m.department,m.name,m.lastname FROM hosting_event AS h INNER JOIN member_record AS m ON h.caseID = '$cid' AND m.event_id = '$cid' INNER JOIN event_record AS e ON h.caseID = '$cid' AND e.caseID='$cid'";
$res1 = $con->query($sql1);
$dutylist = array();
$duty_index = array();
if($res1->num_rows > 0){
	while( $row1 = mysqli_fetch_array($res1)) {
		
		$fname = $row1['name'];
		$lname = $row1['lastname'];
		if($row1['department']=='CC'){
					$biro ="Central Committee";
				}elseif($row1['department'] == 'TEC'){
					$biro= "Technical";
				}elseif($row1['department'] == 'LOG'){
					$biro ="Logistc";
				}elseif($row1['department'] == 'REG'){
					$biro = "Registration";
				}elseif($row1['department'] == 'PUB'){
					$biro = "Publication";
				}elseif($row1['department'] == 'PRY'){
					$biro = "Prayer";
				}elseif($row1['department'] == 'PRO'){
					$biro = "Programme & Protocol";
				}elseif($row1['department'] == 'PP2'){
					$biro = "Publicity & Promotion";
				}elseif($row1['department'] == 'FOD'){
					$biro = "Food";
				}elseif($row1['department'] == 'AWD'){
					$biro = "Award";
				}elseif($row1['department'] == 'DEC'){
					$biro = "Deccoration";
				}elseif($row1['department'] == 'FIN'){
					$biro = "Finance";
				}elseif($row1['department'] == 'ACA'){
					$biro = "Academic";
				}elseif($row1['department'] == 'INV'){
					$biro = "Invitation";
				}else{
					$biro = "Other";
				}
				if($row1['position']=='dh'){
					$po= "Department Head";
				}elseif($row1['position']=='vp'){
					$po= "Vice President";
				}elseif($row1['position']=='helper'){
					$po= "External Helper";
				}else{
					$po= ucwords($row1['position']);
				}
		$cid = $row1['caseID'];
		if($row1['member_id'] == $uid and $row1['position'] == 'dh'){
			$dh_special = $row1['department'];
			file_put_contents('dh_special.txt', $dh_special);
		}
		
		if($row1['member_id'] == $uid){
			$upload = "<input type='file' name='fileToUpload' id='fileToUpload'>";
		}else{
			$upload = "Not available";
		}
		if($zero == 2 ){
			if($row1['position'] == 'president'){
				$name = $fname." ".$lname;
			}else{
				$name = "<a href='add_dutylist.php?uid=".$row1['member_id']."&cid=".$cid."' target='_blank'>".$fname ." ".$lname."</a>";
			}
		}elseif($zero == 3){
			$name = "<a href='add_dutylist.php?uid=".$row1['member_id']."&cid=".$cid."' target='_blank'>".$fname ." ".$lname."</a>";
		}elseif($zero == 1){
			if($row1['position'] == 'member' and $row1['department'] == $dh_special){
				$name = "<a href='add_dutylist.php?uid=".$row1['member_id']."&cid=".$cid."' target='_blank'>".$fname ." ".$lname."</a>";
			}elseif($row1['member_id'] == $uid){
				$name = "<a href='add_dutylist.php?uid=".$row1['member_id']."&cid=".$cid."' target='_blank'>".$fname ." ".$lname."</a>";
			}else{
				$name = $fname." ".$lname;
			}
		}else{
			if($row1['member_id'] == $uid){
				$name = "<a href='add_dutylist.php?uid=".$row1['member_id']."&cid=".$cid."' target='_blank'>".$fname ." ".$lname."</a>";
			}else{
				$name = $fname." ".$lname;
			}
			
		}
		$button = "-";
		if($row1['member_id'] == $uid){
			$button = "<button type = 'submit' name = 'submit' value = 'submit' class='btn btn-success btn-md btn-block' onClick='return empty()'>Submit</button>";
		}
		$duty = "SELECT * FROM event_checklist WHERE memberid=".$row1['member_id']." AND caseID = '$cid'";
		$res_d = $con->query($duty);
		if($res_d->num_rows > 0){
			while( $rowd = mysqli_fetch_array($res_d)) {
				$url = $rowd['url'];
				$url2 = $rowd['url2'];
		
				$duty_index[] = $rowd['ec_index'];
				if($rowd['memberid'] == $uid){
				if($rowd['status'] == '0'){
					$status = 'Pending';
					$update = "<select class='form-control' id='sel1' name='status'><option value='0' Selected>Pending</option>
	<option value='1'>Completed</option>
        <option value='-1'>Failed</option>
      </select>";
				}elseif($rowd['status'] == '1'){
					$update = "<select class='form-control' id='sel1' name='status'><option value='0'>Pending</option>
	<option value='1' Selected>Completed</option>
        <option value='-1'>Failed</option>
      </select>";
				}else{
					$update = "<select class='form-control' id='sel1' name='status'><option value='0'>Pending</option>
	<option value='1' >Completed</option>
        <option value='-1' Selected>Failed</option>
      </select>";
				}
				}else{
					if($rowd['status'] == '0'){
					$update = 'Pending';
					
				}elseif($rowd['status'] == '1'){
					$update = 'Completed';
				}else{
					$update = 'Failed';
				}
				}
				$list = null;
				if($zero == 3){
					$list="<a href='edit_duty.php?eid=".$rowd['ec_index']."&uid=".$uid."' class = 'edit'>".$rowd['duty']."</a>";
					$list .= " <a href='delete_duty.php?eid=".$rowd['ec_index']."&uid=".$uid."&cid=".$cid."'><small>Delete</small></a>";
					
				}elseif($zero == 2){
					if($row1['position'] == "president"){
						
					}else{
						$list="<a href='edit_duty.php?eid=".$rowd['ec_index']."&uid=".$uid."' class = 'edit'>".$rowd['duty']."</a>";
						$list .= " <a href='delete_duty.php?eid=".$rowd['ec_index']."&uid=".$uid."&cid=".$cid."'><small>Delete</small></a>";
					}
				}elseif($zero == 1){
					if($row1['position'] == "member"){
						$list="<a href='edit_duty.php?eid=".$rowd['ec_index']."&uid=".$uid."' class = 'edit'>".$rowd['duty']."</a>";
						$list .= " <a href='delete_duty.php?eid=".$rowd['ec_index']."&uid=".$uid."&cid=".$cid."'><small>Delete</small></a>";
					}else{
						$list = $rowd['duty'];
					}
				}else{
					$list = $rowd['duty'];
				}
					if($url != null AND $url2 ==null){
						$list .=  " <small><a href='$url' class='sm' target='_blank'>Useful Link</a></small>";
					}elseif($url != null AND $url2 != null){
						$list .=  " <small><a href='$url' class='sm' target='_blank'>Useful Link 1</a> <a href='$url2'  class='sm' target='_blank'>Useful Link 2</a></small>";
					}elseif($url == null AND $url2 != null){
						$list .=  " <small><a href='$url2' class='sm' target='_blank'>Useful Link </a></small>";
					}else{
						$url = $url2 = null;
					}
				$list .= "<input type='hidden' name='did' value=".$rowd['ec_index'].">";
				$dutylist[] = array("name" => $name, "biro"=>$biro,"position"=>$po,"duty"=>$list,"date"=>$rowd['date1'],"upload"=>$upload,"template"=>"-","status"=>$update,"btn"=>$button);
				
			}
		}else{
			$dutylist[] = array("name" => $name, "biro"=>$biro,"position"=>$po,"duty"=>"Assign a task to your crew now!","date"=>'Not Available',"upload"=>"Not Available","template"=>"-","status"=>"-","btn"=>$button);
		}
		//echo $fname."<br>".$lname."<br>".$department."<br>".$biro."<br>".$po."<br>";
		/*echo "<tr>";
		
				//echo $row1['position'];
				
		echo "</tr>";*/
		
	}
}else{
	echo "error";
}
		/*for($x = 0;$x < count($duty_index);$x++){
			echo $duty_index[$x] . "<br>";
		}*/
		$biroA = array();
		 foreach($dutylist as $biros){
			 $biroA[] = $biros['biro'];
		 }
		 array_multisort($biroA, SORT_ASC, $dutylist);
		 //$key = 'Hyundai';
		 $x = 0;
		 foreach($dutylist as $row) {
			 
			 echo "<form method='post' action='dutylist_submit.php' enctype='multipart/form-data'>";
				echo('<tr>');
				foreach($row as $cell) {
					echo('<td>' . $cell . '</td>');
					echo "<input type='hidden' name='cid' value=".$cid.">";
					echo "<input type='hidden' name='uid' value=".$uid.">";
					//echo $duty_index[$x]."<br>";
					$x++;
				}
			 echo "</form>";
		echo('</tr>');
		}
		echo "</tbody>";
		echo "</table>";
		//echo $po_special;
		if($po_special == 'president' or $po_special == 'vp' or $po_special == 'secretory' or $po_special == 'treasurer' or $po_special == 'dh'){
			echo "<a href='end_event.php?cid=".$cid."' class='myBtn btn btn-primary btn-md btn-block' role='button'>End Event</a>";
			echo "<a href='view_event_file.php?cid=".$cid."&uid=".$uid."' class='myBtn btn btn-primary btn-md btn-block' role='button'>View Uploaded File</a>";
			echo "<a href='edit_event_info.php?cid=".$cid."' class='myBtn btn btn-primary btn-md btn-block' role='button'>Edit Event</a>";
			$i = 0;
					$event = "SELECT * from event_record WHERE caseID='$cid'";
					$rese=$con->query($event);
					if ($rese->num_rows > 0) {
						while( $e = mysqli_fetch_array($rese)) {
							$i = $e['cIndex'];
						}
					}
			echo "<a href='event_profile.php?id=".$i."&id2=".$cid."' class='myBtn btn btn-primary btn-md btn-block' role='button'>View Event</a>";
		}else{
				$i = 0;
					$event = "SELECT * from event_record WHERE caseID='$cid'";
					$rese=$con->query($event);
					if ($rese->num_rows > 0) {
						while( $e = mysqli_fetch_array($rese)) {
							$i = $e['cIndex'];
						}
					}
			echo "<a href='event_profile.php?id=".$i."&id2=".$cid."' class='myBtn btn btn-primary btn-md btn-block' role='button'>View Event</a>";
		}
		
						

?>

</div>
</body>
</html>