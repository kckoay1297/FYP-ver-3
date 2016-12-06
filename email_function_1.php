<?php
	$conn = new mysqli("localhost", "root", "", "etest");
	// Check connection
	if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}		
	$sql="SELECT template FROM tempt";
	$res = $conn->query($sql);
	$id = 1; 
	if ($res->num_rows > 0) {
	
		
		// output data of each row
	while( $row = mysqli_fetch_array($res)) {
			if($id == 1){
			echo "<textarea id = 't1' name='t1' class = 't3'>";
			echo $row["template"];
			echo "</textarea>";
			}elseif($id == 2){
			echo "<textarea id = 't2' name='t2'>";
			echo $row["template"];
			echo "</textarea>";
			}elseif($id ==3){
			echo "<textarea id = 't3' name='t3'>";
			echo $row["template"];
			echo "</textarea>";
			}else{
			echo "<textarea id = 't4' name='t4'>";
			echo $row["template"];
			echo "</textarea>";
			}
			$id++;
	}
		
	} else {
		echo "0 results";
	}
$conn->close();
?>

<style>
textarea.t3{
	width: 100%;
    height: 200px;
    padding: 12px 12px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: none;
	font-family: Helvetica;
	font-size: 14px;
}

</style>