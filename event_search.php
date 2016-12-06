<html>
<head>
<title>Search Event</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
function search(string){
	var xmlhttp;
	if(window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}else{
		xmlhttp = new ActiveXObject("XMLHTTP");
	}
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById("search").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET", "search.php?s="+string, true);
	xmlhttp.send(null);
}
</script>
<style>
body{
	background: #F1F1F1;
}
#search{
	width: 350px; margin: 0 auto; max-height: 250px; border: 1px solid #f4f4f4; overflow: hidden;
}
#text{
	width: 350px; padding: 10px; border: 1px solid #f4f4f4; border-radius: 3px;
}
#searchtitle{
	width: 350px; padding: 10px; background: #fff;
}
#searchtitle:hover{
	background: #FEFFC5;
}
</style>
</head>
<body>
<div style="text-align: center; width: 500px; margin: 0 auto;">
	<h1>Search Event</h1><br/><br/>
	<input type="text" placeholder="Type to search.." onkeyup="search(this.value)" id="text" >
	<div id="search">
	</div>
</div>
</body>
</html>