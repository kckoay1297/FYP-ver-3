<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;    
}
</style>
</head>
<body>






<h2>Cell that spans two rows:</h2>
<table style="width:100%">
  <tr>
    <th>Name:</th>
    <td>Bill Gates</td>
  </tr>
  <tr>
    <th rowspan="2">Telephone:</th>
    <td>55577854</td>
  </tr>
  <tr>
    <td>55577855</td>
  </tr>
</table>
<?php 
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15),
  array("Land Rover",17,19),
  array("Saab",17,35),
  array("Land Rover",27,15),
  array("Volvo",17,25),
  array("Land Rover",17,5),
  );
echo "<table>";
$len = count($cars);
echo $cars[0][0];
echo $len;
//usort($cars);
for ($row = 0; $row < $len; $row++) {
  echo "<tr>";
  for ($col = 0; $col < 3; $col++) {
    echo "<td>".$cars[$row][$col]."</td>";
  }
  echo "</tr>";
}
echo "</table>";
$data[] = array('name' => 'KC','volume' => 67, 'edition' => 2);
$data[] = array('name' => 'KC','volume' => 87, 'edition' => 1);
$data[] = array('name' => 'JC','volume' => 167, 'edition' => 6);
$data[] = array('name' => 'KC','volume' => 97, 'edition' => 2);
$data[] = array('name' => 'WC', 'volume' => 17,'edition' => 9);
$data[] = array('name' => 'WC','volume' => 47, 'edition' => 7);

$len2 = count($data);
echo $len2;

$marks = array( 
            array (
			"name" => "cibai",
               "physics" => 35,
               "maths" => 30,	
               "chemistry" => 39
            ),
            
             array (
			"name" => "sohai",
               "physics" => 30,
               "maths" => 32,
               "chemistry" => 29
            ),
            
            array (
			"name" => "lj",
               "physics" => 31,
               "maths" => 22,
               "chemistry" => 39
            )
         );
$marks[] = array("name" => "diuloh", "physics"=>31,"maths"=>50,"chemistry"=>0);
		 echo "<table>";
		 $name = array();
		 foreach($marks as $names){
			 $name[] = $names['name'];
		 }
		 array_multisort($name, SORT_ASC, $marks);
		/* for($i=0;$i<count($marks);$i++) {
  echo('<tr>');
  for($j=0;$j<count($marks[$i]);$j++) {
    echo('<td>' . $marks[$i][$j] . '</td>');
  } 
  echo('</tr>');
}*/

 foreach($marks as $row) {
  echo('<tr>');
  foreach($row as $cell) {
    echo('<td>' . $cell . '</td>');
  }
  echo('</tr>');
} 
echo "</table>";
file_put_contents('file.txt', 'bar');
echo file_get_contents('file.txt'); // bar
file_put_contents('file.txt', 'foo');
echo file_get_contents('file.txt'); // foo
?>
</body>
</html>
