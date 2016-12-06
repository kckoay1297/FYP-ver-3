<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-color: #eefffd ;
	overflow = auto;
	width=100%;
}

h1.topspace {
	font-family: Helvetica;
	color: white;
	position: relative;
	left:20px;
}
#header{
	background-color:  #006d5f;
    padding: 6px;
	postion: relative; 
}
h4.topspace{
	font-family: Helvetica;
	color: white;
	position: relative;
	left:20px;
}
h4.title{
	font-family: Helvetica;
	color: black;
	position: relative;
	left:20px;
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
a.link{
	color:#AF0000;
	text-decoration: none;
}
table {
    border-collapse: collapse;
	border: 4px solid black;
    width: 90%;
	height:70%;
	position: relative;
	left:20px;
}

th, td {
	border: 4px solid black;
    padding: 6px;
    text-align: left;
    border-bottom: 1px solid #ddd;
	font-family:Helvetica;
	background-color:white;
}
tr:hover{background-color:#DCDCDC}

th {
    background-color: #4CAF50;
    color: white;
}
input.final{
	width: 60%;
	position:relative;
	left:150px;
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
</style>
</head>
<body>
<title>Event Management Mission</title>
<div id="header">
<a class="header" href="http://localhost/homepage.html">
<h1 class="topspace">Event Mangement System</h1>
</a>
<h4 class="topspace">Mission</h4>
</div>
<br></br>
<h4 class="title">Your Checklist</h4>
<form method="post" action="">
<table>
  <tr>
    <th>Bureau</th>
    <th>Task Description</th>
	<th>Useful Resources</th>
	<th>Latest Update</th>
	<th>Status</th>
	<th>Update Status</th>
		
  </tr>
  
  <?php
  $con = new mysqli("localhost", "root", "", "gtest");
  if ($con->connect_error) {
     die("Connection failed: " . $con->connect_error);
}		
	$sql="SELECT * FROM checklist WHERE type='TRE'";
	$res = $con->query($sql);
	$i = 0;
	while( $row = mysqli_fetch_array($res)) {
		echo "<tr>";
		if($row['type'] == 'PIC'){
			echo "<td>Person in-Charge</td>";
		}elseif($row['type'] == 'TRE'){
			echo "<td>Treasurer</td>";
		}elseif($row['type'] == 'SEC'){
			echo "<td>Secretory</td>";
		}elseif($row['type'] == 'PP2'){
			echo "<td>Promotion</td>";
		}elseif($row['type'] == 'PUB'){
			echo "<td>Publication</td>";
		}elseif($row['type'] == 'PRO'){
			echo "<td>Program</td>";
		}elseif($row['type'] == 'TEC'){
			echo "<td>Technical</td>";
		}elseif($row['type'] == 'REG'){
			echo "<td>Register</td>";
		}elseif($row['type'] == 'LOG'){
			echo "<td>Logistc</td>";
		}elseif($row['type'] == 'FOD'){
			echo "<td>Food</td>";
		}else{
			echo "<td>Task Force</td>";
		}
		
		echo "<td>".$row['g_line']."</td>";
		if($row['url'] != null){
		echo "<td>";
		echo "<a href ='".$row['url']."' target='_blank' class='link'>";
		echo "Click Here</a>";
		echo "</td>";
		}else{
			echo "<td>-</td>";
		}
		if($row['c_date'] != null){
		echo "<td>".$row['c_date']."</td>";
		}else{
			echo "<td>--/--/--</td>";
		}
		echo "<td>".$row['status']."</td>";
		echo "<td>";
		if($row['status'] == 'unassigned' OR $row['status'] == 'cancel'){
		echo "<select disabled>";
		echo "<option value='empty' selected='selected'></option>";
		echo "<option value='incomplete' >Incomplete</option>";
		echo "<option value='ongoing'>Ongoing</option>";
		echo "<option value='unassigned'>Unassigned</option>";
		echo "<option value='cancel'>Cancel</option>";
		echo "<option value='completed'>Completed</option>";
		echo "</select>";
		}else{
		echo "<select name='update'>";
		echo "<option value='empty' selected='selected'></option>";
		echo "<option value='incomplete' >Incomplete</option>";
		echo "<option value='ongoing'>Ongoing</option>";
		echo "<option value='unassigned'>Unassigned</option>";
		echo "<option value='cancel'>Cancel</option>";
		echo "<option value='completed'>Completed</option>";
		echo "</select>";
		}
		echo "</td>";
		echo "</tr>";
		/*
		if(isset($_POST['submit'])){

		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$update=$_POST['update'];
			if($update != ""){
			$sql ="UPDATE checklist SET status = '$update' WHERE type='TRE'";
			mysqli_query($con, $sql);
			}
		}*/	
	
}
	
  ?>
</table>
<input type="submit" name="submit" value="Update" class="final">
</form>


</body>
</html>