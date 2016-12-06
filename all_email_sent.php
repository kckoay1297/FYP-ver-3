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
	<title>Event Mangement System: Select People</title>
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
</style>
</head>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			
			<a class="header" href="hhttp://localhost/new_home.php">
			<h1 class="topspace">Event Management System</h1>
			<h4 class="topspace">Email: Select People</h4>
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
<form method="post" action="all_email_sent_b.php">          
<table class="table table-condensed table-striped table-bordered">
<thead>
  <tr>
    <th>Email To:</th>
	<th>CC: </th>
	<th>Name <i class="fa fa-sort sort" onclick="sort_table(people, 0, asc1); asc1 *= -1; asc2 = 1; asc3 = 1;"></i></th>
    <th>Email <i  class="fa fa-sort sort" onclick="sort_table(people, 1, asc1); asc1 *= -1; asc2 = 1; asc3 = 1;"></i></th>
    <th>Department <i  class="fa fa-sort sort" onclick="sort_table(people, 2, asc1); asc1 *= -1; asc2 = 1; asc3 = 1;"></i></th>
	<th>Position <i class="fa fa-sort sort" onclick="sort_table(people, 3, asc1); asc1 *= -1; asc2 = 1; asc3 = 1;"></i></th>
	<th>Phone <i class="fa fa-sort sort" onclick="sort_table(people, 4, asc1); asc1 *= -1; asc2 = 1; asc3 = 1;"></i></th>
	</tr>
</thead>

  <tbody id="member">
<?php
  $conn = new mysqli("localhost", "root", "", "profile");
  if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}		
	$sql="SELECT * FROM user";
	$res = $conn->query($sql);
	while( $row = mysqli_fetch_array($res)) {
		echo "<tr>";
		echo "<td><label class='checkbox-inline'><input type='checkbox' name='to_list[]' value='".$row['email']."'>Choose</label></td>";
		echo "<td><label class='checkbox-inline'><input type='checkbox' name='cc_list[]' value='".$row['email']."'>Choose</label></td>";
		echo "<td>".$row['firstname']." ".$row['lastname']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['department']."</td>";
		echo "<td>".$row['designation']."</td>";
		echo "<td>".$row['phone']."</td>";
		echo "</tr>";
	}
	$sql1="SELECT * FROM student";
	$res1 = $conn->query($sql1);
	while( $row1 = mysqli_fetch_array($res1)) {
		echo "<tr>";
		echo "<td><label class='checkbox-inline'><input type='checkbox' name='to_list[]' value='".$row1['email']."'>Choose</label></td>";
		echo "<td><label class='checkbox-inline'><input type='checkbox' name='cc_list[]' value='".$row1['email']."'>Choose</label></td>";
		echo "<td>".$row1['firstname']." ".$row1['lastname']."</td>";
		echo "<td>".$row1['email']."</td>";
		echo "<td>".$row1['department']."</td>";
		echo "<td>".$row1['level']."</td>";
		echo "<td>".$row1['phone']."</td>";
		echo "</tr>";
	}
	$sql2="SELECT * FROM outsider";
	$res2 = $conn->query($sql2);
	while( $row2 = mysqli_fetch_array($res2)) {
		echo "<tr>";
		echo "<td><label class='checkbox-inline'><input type='checkbox' name='to_list[]' value='".$row2['email']."'>Choose</label></td>";
		echo "<td><label class='checkbox-inline'><input type='checkbox' name='cc_list[]' value='".$row2['email']."'>Choose</label></td>";
		echo "<td>".$row2['firstname']." ".$row2['lastname']."</td>";
		echo "<td>".$row2['email']."</td>";
		echo "<td>".$row2['company']."</td>";
		echo "<td>".$row2['position']."</td>";
		echo "<td>".$row2['phone']."</td>";
		echo "</tr>";
	}
	if(isset($_POST['submit'])){
    $from = $_POST['from']; // this is your Email address
    //$to = $_POST['to']; // this is the sender's Email address
    $subject = "<b>".htmlspecialchars($_POST['subject'])."</b>";
	$content = $_POST['message'];
	$lt = htmlspecialchars($_POST['endtext']);
	$message = $content. "<br>". $lt."</br>";
	echo "<input type='hidden' name='from' value='".$from."' />";
	echo "<input type='hidden' name='subject' value='".$subject."' />";
	echo "<input type='hidden' name='message' value='".$message."' />";
	}
?>
  </tbody>
</table>

<input type='submit' name='submit' value='Submit' class='btn btn-success btn-md btn-block'>
 
</form>
</table>

<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php 

?>