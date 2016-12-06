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
	<title>Event Mangement System: Member</title>
<script>
		var people, asc1 = 1,
            asc2 = 1,
            asc3 = 1;
        window.onload = function () {
            people = document.getElementById("member");
        }

        function sort_table(tbody, col, asc) {
            var rows = tbody.rows,
                rlen = rows.length,
                arr = new Array(),
                i, j, cells, clen;
            // fill the array with values from the table
            for (i = 0; i < rlen; i++) {
                cells = rows[i].cells;
                clen = cells.length;
                arr[i] = new Array();
                for (j = 0; j < clen; j++) {
                    arr[i][j] = cells[j].innerHTML;
                }
            }
            // sort the array by the specified column number (col) and order (asc)
            arr.sort(function (a, b) {
                return (a[col] == b[col]) ? 0 : ((a[col] > b[col]) ? asc : -1 * asc);
            });
            // replace existing rows with new rows created from the sorted array
            for (i = 0; i < rlen; i++) {
                rows[i].innerHTML = "<td>" + arr[i].join("</td><td>") + "</td>";
            }
        }

		
</script>
<style>
body {
    background: #000428; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #000428 , #004e92); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #000428 , #004e92); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */overflow = auto;
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
h3{
	
	color:white;
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
table {
    border-collapse: collapse;
	padding-bottom:50px;
}
  thead{
	background-color:black;
	color:white;
}
  
  td{
	  color:black;
  }

i.sort:hover{
	color:#FF8663;
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
td.success{
	color:#006B9D;
}
td.ongoing{
	color:#9D7700;
}
td.cancelled{
	color:#9D2100;
}
td.setback{
	color:#F20606;
}
</style>
</head>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			
			<a class="header" href="http://localhost/new_home.php">
			<h1 class="topspace">Event Management System</h1>
			<h4 class="topspace">Member</h4>
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
<div class="table-responsive container">  
<h3>Mission List</h3>        
<table class="table table-condensed table-bordered table-responsive">
<thead>
  <tr>
    <th>People <i class="fa fa-sort sort" onclick="sort_table(people, 0, asc1); asc1 *= -1; asc2 = 1; asc3 = 1;"></i></th>
    <th>Bureau <i  class="fa fa-sort sort" onclick="sort_table(people, 1, asc1); asc1 *= -1; asc2 = 1; asc3 = 1;"></i></th>
    <th>Mission <i  class="fa fa-sort sort" onclick="sort_table(people, 2, asc1); asc1 *= -1; asc2 = 1; asc3 = 1;"></i></th>
	  </tr>
</thead>

  <tbody id="member">
  
  <?php
  $id2 = $_GET['id2'];
  $conn = new mysqli("localhost", "root", "", "event");
  if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}		
	$sql="SELECT * FROM event_checklist WHERE caseID = '$id2'";
	$res = $conn->query($sql);
	if ($res->num_rows > 0) {
	while( $row = mysqli_fetch_array($res)) {
		echo "<tr class='info'>";
			echo "<td><a href='user_profile.php?id=".$row["memberid"]."' target='_blank'>View Profile <i class='fa fa-external-link'></i></a></td>";
		$sql1 = "SELECT * FROM member_record WHERE event_id = '$id2' AND member_id=".$row['memberid'];
		$res1 = $conn->query($sql1);
		$biro = "Other";
		while( $row1 = mysqli_fetch_array($res1)) {
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
		}
		echo "<td>".$biro."</td>";
		echo "<td>".$row['duty']."</td>";
		echo "</tr>";
	}
	}else{
		echo "<tr class='danger'>";
		echo "<td>No Result</td><td>No Result</td><td>No Result</td></tr>";
	}
	echo "</tbody></table>";
	echo "<a href='view_event_file.php?cid=".$id2."&uid=1' class='myBtn btn btn-primary btn-md btn-block' role='button'>View Uploaded File</a>";
			
  ?>
  


<script src="js/bootstrap.min.js"></script>
</body>
</html>