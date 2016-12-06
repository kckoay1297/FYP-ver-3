<!DOCTYPE html>
<html>
<style>
body {
    background-color: #eefffd ;
	overflow = auto;
	width=100%;
}
#header{
	background-color:  #006d5f;
    padding: 6px;
	postion: relative; 
}
h1,h4.topspace {
	font-family: Helvetica;
	color: white;
	position: relative;
	left:20px;
	
}
a {
    color:#6d0058;
}
a.header{
	color: white;
	text-decoration: none;
}
input[type=text], select {
    width: 100%;
    padding: 12px 12px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	font-family: Helvetica;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 12px 12px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-family: Helvetica;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
textarea {
    width: 100%;
    height: 200px;
    padding: 12px 12px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: none;
	font-family: Helvetica;
}
textarea.leavetalk {
    width: 100%;
    height: 80px;
    padding: 12px 12px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: none;
	font-family: Helvetica;
}
label {
	font-family: Helvetica;
}
</style>
<body>
<title>Event Management: Email</title>
<div id="header">
<a class="header" href="http://localhost/homepage.html">
<h1 class="topspace">Event Mangement System</h1>
</a>
<h4 class="topspace">Email</h4>
</div>
<br></br>
<div>
  <form method="post" action="">
    <label for="name">Your Email</label>
    <input type="name" id="name" name="name">
	<br> </br>

    <label for="title">Title</label>
    <input type="text" id="title" name="title">

    <label for="template">Type of Template</label>
    <select id="template" name="template" method="post" action="">
      <option value="0">Select your template</option>
	  <option value="1">Invitation</option>
      <option value="2">Recruitment</option>
      <option value="3">Feedback</option>
	  <option value="4">None</option>
    </select>
	
    <label for="content">Content</label>
    <?php

	// Create connection
	$conn = new mysqli("localhost", "root", "", "etest");
	// Check connection
	if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
	$i = 1; 
	if(isset($_POST['1'])){
		$i = 1; 
	}elseif(isset($_POST['2'])){
		$i = 2;
	}elseif(isset($_POST['3'])){
		$i = 3;
	}elseif(isset($_POST['0'])){
		$i = 4;
	}else{
		$i = 4;
	}
		if($i == 1){
			$sql = "SELECT template FROM tempt WHERE temp_id = 1";
		}elseif($i == 2){
			$sql = "SELECT template FROM tempt WHERE temp_id = 2";
		}elseif($i == 3){
			$sql = "SELECT template FROM tempt WHERE temp_id = 3";
		}else{
			$sql = "SELECT template FROM tempt WHERE temp_id = 4"; 
		}
		$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	
		echo "<textarea>";
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo $row["template"];
		}
		echo "</textarea>";
	} else {
		echo "0 results";
	}

$conn->close();
?> 

	<label for="leavetalk">Leave-talking</label>
	<textarea class="leavetalk">Some text...</textarea>
    <input type="submit" name="submit" value="Submit">
  </form>
</div>

</body>
</html>
		

