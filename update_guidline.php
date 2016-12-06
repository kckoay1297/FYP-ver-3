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

a{
	color: white;
	text-decoration: none;
}
<--input[type=text], select {
    width: 100%;
    padding: 12px 12px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	font-family: Helvetica;
	font-size:120%;
}-->

button.choice {
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

button.choice:hover {
    background-color: #45a049;
}

button.choice:active, button.choice:focus {
    background-color: #45a049;
	color: black;
	transform: translateY(4px);
}

input.input{
	padding: 12px 12px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: none;
	font-family: Helvetica;
	font-size: 14px;
}

input.final{
	width: 30%;
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

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}


label {
	font-family: Helvetica;
}
textarea {
    width: 100%;
    height: 100px;
    padding: 12px 12px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: none;
	font-family: Helvetica;
	font-size: 14px;
}
input.url{
	width: 100%;
    height: 50px;
    padding: 12px 12px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: none;
	font-family: Helvetica;
	font-size: 14px;
}
a.edit{
	color:blue;
	text-decoration: initial;
}
select.type{
	border-radius: 4px;
    background-color: #f8f8f8;
    resize: none;
	font-family: Helvetica;
	font-size: 14px;
}
</style>
<body>
<title>Event Management: Update Guidline</title>
<div id="header">
<a class="header" href="http://localhost/homepage.html">
<h1 class="topspace">Event Mangement System</h1>
</a>
<h4 class="topspace">Update Guidline</h4>
</div>
<br></br>
<div>
	<h2 class="topspace">Edit Your Guidline</h2>
	<form method="post" action="update.php">
	<label for="type">Type of Event:</label>
	<br></br>
	<select name="type" id="type" class="type">
		<option value="PIC">Person in-Charge</option>
		<option value="TRE">Treasure</option>
		<option value="SEC">Secretory</option>
		<option value="PP2">Promotion</option>
		<option value="PUB">Publication</option>
		<option value="PRO">Program</option>
		<option value="TEC">Technical</option>
		<option value="REG">Register</option>
		<option value="LOG">Logistc</option>
		<option value="FOD">Food</option>
		<option value="TFF">Other</option>
	</select>
	<br></br>
	<label for="descrip">Task Description</label>
	<textarea name="descrip" id="descrip" class="descrip" required></textarea>
	
	<label for="url">Useful Resources</label>
	<input type="text" class="url"  name="url" class="url">
	<br></br>
	
	<input type="submit" name="submit" value="Submit" class="final">
	
	</form>
	
</div>
</body>

</html>


