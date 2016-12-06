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

a{
	color: white;
	text-decoration: none;
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
    color:#F30000;
}
a:active{
	color:#9F0000;
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

a.disabled {
    pointer-events: none;
   cursor: default;
   color:#D5D5D5;
}
</style>
</head>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			
			<a class="header" href="http://localhost/homepage.html">
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
<table class="table table-condensed table-striped table-bordered">
<thead>
  <tr>
    <th>Firstname <i class="fa fa-sort sort" onclick="sort_table(people, 0, asc1); asc1 *= -1; asc2 = 1; asc3 = 1;"></i></th>
    <th>Lastname <i  class="fa fa-sort sort" onclick="sort_table(people, 1, asc1); asc1 *= -1; asc2 = 1; asc3 = 1;"></i></th>
    <th>Department <i  class="fa fa-sort sort" onclick="sort_table(people, 2, asc1); asc1 *= -1; asc2 = 1; asc3 = 1;"></i></th>
	<th>Position <i class="fa fa-sort sort" onclick="sort_table(people, 3, asc1); asc1 *= -1; asc2 = 1; asc3 = 1;"></i></th>
	<th>Staff ID <i class="fa fa-sort sort" onclick="sort_table(people, 4, asc1); asc1 *= -1; asc2 = 1; asc3 = 1;"></i></th>
	<th>Phone <i class="fa fa-sort sort" onclick="sort_table(people, 5, asc1); asc1 *= -1; asc2 = 1; asc3 = 1;"></i></th>
	<th>IC Number <i  class="fa fa-sort sort" onclick="sort_table(people, 6, asc1); asc1 *= -1; asc2 = 1; asc3 = 1;"></i></th>
	<th>View Profile </th>
	  </tr>
</thead>

  <tbody id="member">
  <?php
  $userid = 15;
  $conn = new mysqli("localhost", "root", "", "profile");
  if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}		
	$sql="SELECT id,email, staffid, designation, department, firstname, lastname,phone,icnumber FROM user WHERE id != ".$userid;
	$res = $conn->query($sql);
	while( $row = mysqli_fetch_array($res)) {
		echo "<tr>";
		echo "<td>".$row['firstname']."</td>";
		echo "<td>".$row['lastname']."</td>";
		echo "<td>".$row['department']."</td>";
		echo "<td>".$row['designation']."</td>";
		echo "<td>".$row['staffid']."</td>";
		echo "<td>".$row['phone']."</td>";
		echo "<td>".$row['icnumber']."</td>";
		$sql2 = "SELECT * FROM admin";
		$res2 = $conn->query($sql2);
		$idid = $row["id"];
		$func = "<td><a href='user_profile.php?id=".$row["id"]."' target='_blank'><i class='fa fa-external-link'></i> View </a>
		<a href='promote_user.php?id=".$row["id"]."&id2=".$userid."' target='_blank'><i class='fa fa-chevron-circle-up'></i> Promote </a>		
		<a href='edit_user_profile.php?id=".$row["id"]."' target='_blank'><i class='fa fa-edit'></i> Edit </a>
		<a href='delete_user_profile.php?id=".$row["id"]."' target='_blank'><i class='fa fa-ban'></i> Remove </a></td>";
			while( $row2 = mysqli_fetch_array($res2)) {
				
				if($idid == $row2['user_id']){
					echo "hello";
					$func = "<td><a href='user_profile.php?id=".$row["id"]."' target='_blank'><i class='fa fa-external-link'></i> View </a>
						<a href='promote_user.php?id=".$row["id"]."&id2=".$userid."' target='_blank'><i class='fa fa-chevron-circle-up'></i> Promote </a>			
		<a class='disabled' target='_blank' disabled><i class='fa fa-edit'></i> Edit </a>
		<a class='disabled' target='_blank' disabled><i class='fa fa-ban'></i> Remove </a></td>";
				}
			}
		
		
		echo $func;
		echo "</tr>";
	}
  ?>
  </tbody>
</table>


<script src="js/bootstrap.min.js"></script>
</body>
</html>