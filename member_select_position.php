<html>
	<script src="js/bootstrap.min.js"></script>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>Event Mangement System: Choose Position</title>
<body>
<form method="post" action="select_member_finish.php">          
<table class="table table-condensed table-striped table-bordered">
<thead>
  <tr>
    <th>Name</th>
    <th>Member ID</th>
	<th>Department</th>
	<th>Position</th>
	<th>Bureau</th>
	</tr>
</thead>
<tbody>
<?php 
if(isset($_POST['submit'])){
	$cid = $_POST['cid'];
	$sender = $_POST['sender'];
	$member = array();
	$con = new mysqli("localhost","root","","profile");
	if($con->connect_error){
            die("Connection failed: " . $con2->connect_error);
    }
	if(!empty($_POST['to_list'])) {
	$i = 0;
    foreach($_POST['to_list'] as $to_) {
			 $member[]= $to_; 
			 //echo $member[$i] . " . ";
			 $sql = "SELECT * FROM user WHERE id=".$member[$i];
			 $res = $con->query($sql);
			 if($res->num_rows > 0){
				 while($row = mysqli_fetch_array($res)){
					 echo "<tr>";
					 echo "<td>".$row['firstname']." ".$row['lastname']."</td>";
					 echo "<td>".strtoupper($row['staffid'])."</td>";
					 echo "<td>".$row['department']."</td>";
					 echo "<td>";
					 echo "<select class='form-control' id='sel1' name='position[]'>";
					 echo "<option value='member'>Member</option>";
					 echo "<option value='dh'>Department Head</option>";
					 echo "<option value='treasurer'>Treasurer</option>";
					 echo "<option value='secretory'>Secretory</option>";
					 echo "<option value='vp'>Vice President</option>";
					 echo "<option value='helper'>External Helper</option>";
					 echo "</select>";
					 echo "</td>";
					 echo "<td>";
					 echo "<select class='form-control' id='sel1' name='bureau[]'>";
					 echo "<option value='CC'>Central Comittee</option>";
					 echo "<option value='TEC'>Technical</option>";
					 echo "<option value='REG'>Registration</option>";
					 echo "<option value='PUB'>Publishing</option>";
					 echo "<option value='PRY'>Prayer</option>";
					 echo "<option value='PRO'>Programme</option>";
					 echo "<option value='PP2'>Publicity & Promotion</option>";
					 echo "<option value='LOG'>Logistic</option>";
					 echo "<option value='FOD'>Food</option>";
					 echo "<option value='AWD'>Award</option>";
					 echo "<option value='DEC'>Decoration</option>";
					 echo "<option value='FIN'>Finance</option>";
					 echo "<option value='ACA'>Academic</option>";
					 echo "<option value='INV'>Invitation</option>";
					 echo "<option value='OTR'>Other</option>";
					 echo "</select>";
					 echo "<input type='hidden' name='uid[]' value='$member[$i]'>";
					 echo "<input type='hidden' name='sender' value=".$sender.">";
					 echo "</td>";
					 echo "</tr>";
				 }
			 }else{
				 
			 }
			 $i++;
		}
		
	}
	echo "</tbody>";
	echo "<input type='hidden' name='cid' value='$cid'>";
	
    
    }
?>
</table>
<input type='submit' name='submit' value='Submit' class='btn btn-success btn-md btn-block'>
</form>
</body>
</html>