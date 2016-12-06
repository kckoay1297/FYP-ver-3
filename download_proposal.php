<?php
$id = 0;
$id = $_GET['pid'];
$con = new mysqli("localhost", "root", "", "event");
	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
	}
	$sql = "SELECT * FROM pending_event WHERE pd_index =".$id;//.strtolower($id);
	$res=$con->query($sql);
	if ($res->num_rows > 0) {
		while( $row = mysqli_fetch_array($res)) {
			header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=Proposal ".$row['caseName'].".doc");

echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo "<body>";
echo nl2br("<style 'text-align: center'><b>Proposal: ".$row['caseName']."</b></style> \n");
echo " <br>";
echo nl2br("Date: \n".$row['caseDate']." \n");
echo " <br>";
echo nl2br("Aim:  \n".$row['aim']." \n");
echo " <br>";
echo nl2br("Justification:  \n".$row['justification']." \n");
echo " <br>";
echo nl2br("Objective:  \n".$row['objective']." \n");
echo " <br>";
$table1 = "SELECT * FROM steps_imp WHERE pd_index=".$id;
			$res1=$con->query($table1);
					echo "<h4>Information: </h4>";
					
					echo "<table style='border: 1px solid black;'>";
					echo "<thead style='border: 1px solid black;'>";
					echo "<tr style='border: 1px solid black;'>";
					echo "<th style='border: 1px solid black;'>Duty</th>";
					echo "<th style='border: 1px solid black;'>Description</th>";
					echo "</tr>";
					echo "</thead>";
					echo "<tbody style='border: 1px solid black;'>";
				$button = 0;
			if ($res1->num_rows > 0) {
				echo "<tr class='success'>";
				while( $row1 = mysqli_fetch_array($res1)) {
					echo "<td style='border: 1px solid black;'>Time: </td>";
					echo "<td style='border: 1px solid black;'>".$row1['time']."</td>";
					echo "</tr>";
					echo "<tr style='border: 1px solid black;'>";
					echo "<td style='border: 1px solid black;'>Place: </td>";
					echo "<td style='border: 1px solid black;'>".$row1['place']."</td>";
					echo "</tr>";
					echo "<tr style='border: 1px solid black;'>";
					echo "<td style='border: 1px solid black;'>Participants: </td>";
					echo "<td style='border: 1px solid black;'>".$row1['partNo']."</td>";
					echo "</tr>";
					echo "<tr style='border: 1px solid black;'>";
					echo "<td style='border: 1px solid black;'>Fees: </td>";
					echo "<td style='border: 1px solid black;'>".$row1['fees']."</td>";
					echo "</tr>";
					echo "<tr style='border: 1px solid black;'>";
					echo "<td style='border: 1px solid black;'>Other: </td>";
					echo "<td style='border: 1px solid black;'>".$row1['other']."</td>";
					
				}
				echo "</tr>";
			}else{
				echo "<tr style='border: 1px solid black;'>";
				echo "<td style='border: 1px solid black;'>Time: </td>";
				echo "<td style='border: 1px solid black;'>-</td>";
				echo "</tr>";
				echo "<tr style='border: 1px solid black;'>";
				echo "<td style='border: 1px solid black;'>Place: </td>";
				echo "<td style='border: 1px solid black;'>-</td>";
				echo "</tr>";
				echo "<tr style='border: 1px solid black;'>";
				echo "<td style='border: 1px solid black;'>Participants: </td>";
				echo "<td style='border: 1px solid black;'>-</td>";
				echo "</tr>";
				echo "<tr style='border: 1px solid black;'>";
				echo "<td style='border: 1px solid black;'>Fees: </td>";
				echo "<td style='border: 1px solid black;'>-</td>";
				echo "</tr>";
				echo "<tr style='border: 1px solid black;'>";
				echo "<td style='border: 1px solid black;'>Other: </td>";
				echo "<td style='border: 1px solid black;'>-</td>";
				echo "</tr>";
				$button =1;
			}
			echo "</tbody>";
				
			echo "</table>";

			
			$table2 = "SELECT * FROM budget_plan WHERE pd_index=".$id;
			$res2=$con->query($table2);
					echo "<h4>Financial Plan: </h4>";
					
					echo "<table style='border: 1px solid black;'>";
					echo "<thead style='border: 1px solid black;'>";
					echo "<tr style='border: 1px solid black;'>";
					echo "<th style='border: 1px solid black;'>Description</th>";
					echo "<th style='border: 1px solid black;'>Expense (RM)</th>";
					echo "<th style='border: 1px solid black;'>Income (RM)</th>";
					echo "</tr>";
					echo "</thead>";
					echo "<tbody>";
				$button = 0;
			if ($res2->num_rows > 0) {
				$total1 = 0;
				$total2= 0;
				while( $row2 = mysqli_fetch_array($res2)) {
					if($row2['type'] == 'expense'){
						echo "<tr style='border: 1px solid black;'>";
						echo "<td style='border: 1px solid black;'><b>".$row2['name']."</b><br>".$row2['description']."</td>";
						echo "<td style='border: 1px solid black;'>".$row2['amount']."</td>";
						echo "<td style='border: 1px solid black;'>-</td>";
						echo "</tr>";
						$total1 += $row2['amount'];
					}else{
						echo "<tr style='border: 1px solid black;'>";
					
						echo "<td style='border: 1px solid black;'><b>".$row2['name']."</b><br>".$row2['description']."</td>";
						echo "<td style='border: 1px solid black;'>-</td>";
						echo "<td style='border: 1px solid black;'>".$row2['amount']."</td>";
						echo "</tr>";
						$total2 += $row2['amount'];
					}
					
				}
				echo "<tr style='border: 1px solid black;'><td style='border: 1px solid black;'>Total: </td><td style='border: 1px solid black;'>".$total1."</td><td style='border: 1px solid black;'>".$total2."</td></tr>";
			}else{
					echo "<td style='border: 1px solid black;'>-</td>";
					echo "<td style='border: 1px solid black;'>-</td>";
					echo "<td style='border: 1px solid black;'>-</td>";
			}
			echo "</tbody>";
				
			echo "</table>";
			echo "<br>";
echo nl2br("Budget: \n RM:".$row['budget']." \n");
echo " <br>";
echo nl2br("Hasil Bengkel: \n".$row['hasil_bengkel']." \n");
echo " <br>";
echo nl2br("Prepared by: \n".$row['prepare_by']." \n");
echo "<br></br>";

			}
	
	}else{
		echo "<b>Error</b>";
	}
echo "</body>";
echo "</html>";
?>