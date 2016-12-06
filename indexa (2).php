<?php

mysql_connect("localhost", "root", "");
mysql_select_db("test");

if(isset($_GET['s']) && $_GET['s'] != ''){
	$s = $_GET['s'];
	$sql = "SELECT * FROM `search` WHERE Searchtitle LIKE '%$s%'";
	$result = mysql_query($sql);
	while($row = mysql_fetch_array($result)){
		$url = $row['Searchlink'];
		$title = $row['Searchtitle'];
		echo "<div style='' id='searchtitle'>" . "<a style='font-family: verdana; text-decoration: none; color: black;' href='$url'>" . $title . "</a>" . "</div>";
	}
	
}

?>