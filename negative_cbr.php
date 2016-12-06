<html>
<div class="container">
<h3>Your Requirement:</h3>      
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php 

if(isset($_POST['submit'])){
				 $weight = $_POST['weight'];
				 $expenses = $_POST['expenses'];
                 $date1 = $_POST["date"];
                 $budget1 = $_POST["budget"];
                 $department1 = 'stk';
				 $type1 = 0;
				 $level1 = $_POST["level"];
				 $aIncome1 = $_POST["income"];
				 $cSize1 = $_POST["cSize"];
				 $feedback1 = $_POST["feedback"];
				 $aPpt1 = $_POST["ppt"];
				 $no = $_POST["no"];
	echo "<table class='table table-condensed table-striped table-bordered'>";
	echo "<thead>";
	  echo "<tr>";
		
		echo "<th>Date</th>";
		echo "<th>Department</th>";
		echo "<th>Level</th>";
		echo "<th>Budget</th>";
		echo "<th>Expenses</th>";
		echo "<th>Committee Size</th>";
		echo "<th>Actual Participant</th>";
		echo "<th>Feedback</th>";
		 echo "</tr>";
	echo "</thead>";
	echo "<tbody>";
	echo "<tr>";
	echo "<td>".$date1."</td>";
		if($department1=="ai"){
			echo "<td>Artificial Intelligence</td>";
		}elseif($department1=="stk"){
			echo "<td>Networking & Computer System</td>";
		}elseif($department1=="it"){
			echo "<td>Information Technology</td>";
		}elseif($department1=="se"){
			echo "<td>Software Engineering</td>";
		}elseif($department1=="mis"){
			echo "<td>Management Information System</td>";
		}elseif($department1=="under_grad"){
			echo "<td>Undergraduate Student</td>";
		}elseif($department1=="post_grad"){
			echo "<td>Postgraduate Student</td>";
		}else{
			echo "<td>All Student</td>";
		}
		echo "<td>".ucwords($level1)."</td>";
		echo "<td>".$budget1."</td>";
		echo "<td>".$expenses."</td>";
		echo "<td>".$cSize1."</td>";
		echo "<td>".$aPpt1."</td>";
		echo "<td>".$feedback1."</td>";
	echo "</tr>";
	echo "</tbody>";
	echo "</table>";
				
}
?>
 
<table class="table table-condensed table-striped table-bordered">
<thead>
  <tr>
    <th>Rank</th>
	<th>Similarity</th>
    <th>Date</th>
    <th>Event ID</th>
    <th>Name</th>
	<th>Department</th>
	<th>Type</th>
	<th>Level</th>
	<th>View Profile</th>
	 </tr>
</thead>
<tbody>
<?php
        
        class SimMeasure {
        
         public $date1;
         public $budget1;
         public $department1;
	 public $type1;
	 public $level1;
	 public $aIncome1;
	 public $cSize1;
	 public $feedback1;
	 public $aPpt1;
		 
	 public $date2;
         public $budget2;
         public $department2;
         public $type2;
	 public $level2;
	 public $eIncome2;
	 public $aIncome2;
	 public $cSize2;
	 public $feedback2;
	 public $ePpt2;
	 public $aPpt2;
         
        public function __construct($date1, $date2, $budget1, $budget2, $department1, $department2, $level1, $level2,$aIncome1, $aIncome2, $feedback1, $feedback2, $cSize1, $cSize2,$aPpt1, $aPpt2, $weight,$expenses1,$expenses2) {
             $this->$date1 = $date1;
             $this->$budget1 = $budget1;
             $this->$department1 = $department1;
             $this->$level1 = $level1;
             $this->$aIncome1 = $aIncome1;
             $this->$cSize1 = $cSize1;
             $this->$feedback1 = $feedback1;
             $this->$aPpt1 = $aPpt1;
             $this->$date2 = $date2;
             $this->$budget2 = $budget2;
             $this->$department2 = $department2;
             $this->$level2 = $level2;
             $this->$aIncome2 = $aIncome2;
             $this->$cSize2 = $cSize2;
             $this->$feedback2 = $feedback2;
             $this->$aPpt2 = $aPpt2;
			 $this->$weight = $weight;
			 $this->$expenses1 = $expenses1;
			 $this->$expenses2 = $expenses2;
        } 
                 public function calculateSim($date1, $date2, $budget1, $budget2, $level1, $level2,$aIncome1, $aIncome2, $feedback1, $feedback2, $cSize1, $cSize2,$aPpt1, $aPpt2,$weight,$expenses1,$expenses2){
                     $date_max = 13.0;
                     $level_max = 1.0;
                     $feedback_max = 100.0;
                     $cSize_max = 100;
                     $con = new mysqli("localhost", "root", "", "casebase");
                     if($con->connect_error){
                        die("Connection failed: " . $con->connect_error);
                     }
                     
                     $sql = "SELECT * FROM weight WHERE windex = ".$weight;
                     $result = $con->query($sql);
                     while(($row = mysqli_fetch_array($result))){
                            $wdate = $row['date'];
                            $wbudget = $row['budget'];
                            $wlevel = $row['level'];
                            $wincome = $row['income'];
                            $wfeedback = $row['feedback'];
                            $wcSize = $row['cSize'];
                            $wppt = $row['ppt'];
							$wexpenses = $row['expenses'];
                     }
                     $sum = $wdate + $wbudget + $wlevel + $wincome + $wfeedback + $wcSize + $wppt + $wexpenses;
                     $level1a = self::level_sim($level1);
                     $level2a = self::level_sim($level2);
                     $date1 = self::chgDate($date1);
                     $date2 = self::chgDate($date2);
                     $upper = ($wdate * self::distance($date1,$date2,$date_max)) + ($wbudget * self::money_distance($budget1,$budget2)) + ($wlevel * self::distance($level1a,$level2a,$level_max))
                             + ($wincome * self::money_distance($aIncome1,$aIncome2)) + ($wfeedback * self::distance($feedback1, $feedback2,$feedback_max)) + ($wcSize * self::distance($cSize1,$cSize2,$cSize_max))
                             + ($wppt * self::ppt_distance($aPpt1,$aPpt2)) + ($wexpenses * self::money_distance($expenses1,$expenses2));
                     $sim = $upper/$sum;
                     return $sim;
                 }
                 public function distance($new, $old, $max){
                        $ans = abs((double)$new - (double)$old)/$max;
                        return 1 - $ans;
                 }
                public function  level_sim($lvl){
                    if($lvl=="department"){
                        return 0.4;
                    }elseif($lvl=="faculty"){
                        return 0.6;
                    }elseif($lvl=="university"){
                        return 0.7;
                    }elseif($lvl == "state"){
                         return 1.0;
                    }else{
                        return 0.0;
                    }
                }
                public function ppt_distance($new, $old){
                    $ans  = 0;
                    $max = 100;
                    $new1 = 0;
                    $ans1 = 0;
                    if($old > $new){
                        if($old < 100){
                            $max = 100;
                        }elseif($old >= 100 and $old < 500){
                            $max = 500;
                        }else{
                            $max = 2000;
                        }
                    }elseif ($old < $new) {
                        if($new < 100){
                            $max = 100;
                        }elseif($new >= 100 and $new < 500){
                            $max = 500;
                        }else{
                            $max = 2500;
                        }
                    }else{
                        $max = 1;
                    }
                        $ans = abs((double)$new - (double)$old)/$max;
                        return 1 - $ans;
                }
                
                public function money_distance($new, $old){
                    $max = 1000.0;
                    if($old > $new){
                        if($old < 1000){
                            $max = 1000.0;
                        }elseif ($old >= 1000 and $old < 5000) {
                            $max = 5000.0;
                
                        }elseif($old >= 5000 and $old < 10000){
                            $max = 10000.0;
                        }elseif ($old >= 10000 and $old <15000) {
                            $max = 15000.0;
                        }else{
                            $max = 20000.0;
                        }
                    }elseif($new > $old){
                        if($new < 1000){
                            $max = 1000.0;
                        }elseif ($new >= 1000 and $new < 5000) {
                            $max = 5000.0;
                
                        }elseif($new >= 5000 and $new < 10000){
                            $max = 10000.0;
                        }elseif ($new >= 10000 and $new <15000) {
                            $max = 15000.0;
                        }else{
                            $max = 20000.0;
                        }
                    }else{
                        $max = 1;
                    }
                    
                        
                        $ans = abs((double)$new - (double)$old)/$max;
                        return 1 - $ans;
                    
                }
                public function chgDate($cdate){
                    if($cdate != 0){
                                        $datetime = DateTime::createFromFormat("Y-m-d", $cdate);
                                        $cdate = $datetime -> format("m");
					$cdate = $cdate -1+1;
                                        $day = $datetime -> format("d");
                                        if($cdate %2 == 1 or $cdate == 8){
                                            $day = $day/32.0;
                                        }elseif($cdate == 2){
                                            $day = $day/30.0;
                                            
                                        }else{
                                            $day = $day/31.0;
                                        }
                                       $cdate += $day;
				}else{
					$cdate = 0;
				}
                                return $cdate;
                }
         }
		 
	if(isset($_POST['submit'])){
				 $weight = $_POST['weight'];
				 $expenses = $_POST['expenses'];
                 $date1 = $_POST["date"];
                 $budget1 = $_POST["budget"];
                 $department1 = 'stk';
		 $type1 = 0;
		 $level1 = $_POST["level"];
		 $aIncome1 = $_POST["income"];
		 $cSize1 = $_POST["cSize"];
		 $feedback1 = $_POST["feedback"];
		 $aPpt1 = $_POST["ppt"];
		 $no = $_POST["no"];
		
		
        $con = new mysqli("localhost", "root", "", "casebase");
        if($con->connect_error){
            die("Connection failed: " . $con->connect_error);
        }
        
        $sql = "SELECT cIndex, caseDate, budget,expenses, department, level,actualIncome,cmtSize, feedback, actualPtcpt FROM positivecase ORDER BY cIndex";
        $result = $con->query($sql);
        $attribute = array();
        while(($row = mysqli_fetch_array($result))){
            $attribute[] = $row;
        }
        //print_r($attribute);    
        //
        //echo $attribute[0]['cIndex'];
        //echo "<br></br>";
        $len = count($attribute);
        $displayArray = array();
		for ($i = 0;$i < $len;$i++){
           // echo "<br></br>";   
		   
             $Sim = new SimMeasure($date1, $attribute[$i]['caseDate'], $budget1, $attribute[$i]['budget'], $department1,$attribute[$i]['department'], $level1,
			 $attribute[$i]['level'],$aIncome1, $attribute[$i]['actualIncome'], $feedback1, $attribute[$i]['feedback'], $cSize1, $attribute[$i]['cmtSize'],$aPpt1, $attribute[$i]['actualPtcpt'],
$weight,$expenses,$attribute[$i]['expenses']);
       // echo $attribute[$i]['cIndex'];
       // echo ' .';
       // echo $Sim->calculateSim($date1, $attribute[$i]['caseDate'], $budget1, $attribute[$i]['budget'], $level1, $attribute[$i]['level'],$aIncome1, $attribute[$i]['actualIncome'], $feedback1, $attribute[$i]['feedback'], $cSize1, $attribute[$i]['cmtSize'],$aPpt1, $attribute[$i]['actualPtcpt']);
			$displayArray[$attribute[$i]['cIndex']] = $Sim->calculateSim($date1, $attribute[$i]['caseDate'], $budget1, $attribute[$i]['budget'], $level1, $attribute[$i]['level'],$aIncome1, $attribute[$i]['actualIncome'], $feedback1, $attribute[$i]['feedback'], $cSize1, $attribute[$i]['cmtSize'],$aPpt1, $attribute[$i]['actualPtcpt'],$weight,$expenses,$attribute[$i]['expenses']);
        }
		$_SESSION['list'] = $displayArray;
		
		asort($displayArray);
			$i = 0;
		foreach($displayArray as $x => $x_value) {
			if($i < $no){
			//echo "Key=" . $x . ", Value=" . $x_value;
			$con1 = new mysqli("localhost", "root", "", "casebase");
        if($con1->connect_error){
            die("Connection failed: " . $con1->connect_error);
        }
            $sql1 = "SELECT * FROM positivecase WHERE cIndex =".$x;
			$res = $con1->query($sql1);
			$rank = $i + 1;
			while(($row = mysqli_fetch_array($res))){
				$pop = "Budget: RM".$row['budget']."<br />Expenses: RM".$row['expenses']."<br />Size: ".$row['cmtSize']."<br />Participant: ".$row['actualPtcpt']."<br />Feedback: ".$row['feedback'];
				echo "<td>".$rank."</td>";
				echo "<td>".number_format($x_value*100, 2, '.', '')."%</td>";
		echo "<td>".$row['caseDate']."</td>";
		echo "<td><a href='#' data-toggle='popover' title='More Info..' data-content='$pop' data-html='true' data-trigger='focus'>".strtoupper($row['caseID'])."</a></td>";
		echo "<td>".$row['caseName']."</td>";
		if($row['department']=="ai"){
			echo "<td>Artificial Intelligence</td>";
		}elseif($row['department']=="stk"){
			echo "<td>Networking & Computer System</td>";
		}elseif($row['department']=="it"){
			echo "<td>Information Technology</td>";
		}elseif($row['department']=="se"){
			echo "<td>Software Engineering</td>";
		}elseif($row['department']=="mis"){
			echo "<td>Management Information System</td>";
		}elseif($row['department']=="under_grad"){
			echo "<td>Undergraduate Student</td>";
		}elseif($row['department']=="post_grad"){
			echo "<td>Postgraduate Student</td>";
		}else{
			echo "<td>All Student</td>";
		}
		echo "<td>".ucwords($row['type'])."</td>";
		echo "<td>".ucwords($row['level'])."</td>";
		echo "<td><a href='case_profile.php?id=".$row["cIndex"]."&id2=".$row['caseID']."' target='_blank'>click me <i class='fa fa-external-link'></i></a></td>";
		echo "</tr>";
			}
			$i++;
			}else{
			 break;
			}
			
			
		}
	}
        ?>
</tbody>
</div>
<div>
<?php 
echo "<form method = 'post' action='create_based.php'>";
if(isset($_POST['submit'])){
         $date1 = $_POST["date"];
         $budget1 = $_POST["budget"];
         $department1 = 'stk';
		 $type1 = 0;
		 $level1 = $_POST["level"];
		 $aIncome1 = $_POST["income"];
		 $cSize1 = $_POST["cSize"];
		 $feedback1 = $_POST["feedback"];
		 $aPpt1 = $_POST["ppt"];
		 $userid = 1;
		 $stfid = 1;
		 $app = 0;
		
	echo "<input type='hidden' name='date' value='".$date1."' />";	
    echo "<input type='hidden' name='budget' value='".$budget1."' />";	
    echo "<input type='hidden' name='department' value='".$department1."' />";	
    echo "<input type='hidden' name='type' value='".$type1."' />";	
    echo "<input type='hidden' name='level' value='".$level1."' />";	
    echo "<input type='hidden' name='income' value='".$aIncome1."' />";	
    echo "<input type='hidden' name='cSize' value='".$cSize1."' />";	
    echo "<input type='hidden' name='feedback' value='".$feedback1."' />";	
    echo "<input type='hidden' name='ppt' value='".$aPpt1."' />";	
    echo "<input type='hidden' name='userid' value='".$userid."' />";
	$con1 = new mysqli("localhost", "root", "", "profile");
			if ($con1->connect_error) {
				die("Connection failed: " . $con1->connect_error);
			}
			$sql1 = "SELECT staffid FROM user WHERE id =".$userid;
			$res1=$con1->query($sql1);
			if ($res1->num_rows > 0) {
				while( $row1 = mysqli_fetch_array($res1)) {
				$stfid = $row1['staffid'];
			}
	}
	echo "<input type='hidden' name='userid2' value='".$stfid."' />";
    
	//echo "<input type='submit' name='submit' value='Create Event Based On User Input' class='btn btn-lg btn-block'>";
	echo "<a href='create_event.php?app=0&id2=0&id=0' class='myBtn btn btn-primary btn-lg btn-block' role='button' id='myBtn'>Create New Event</a>";
	echo "<br></br>";
	echo "<h3>Least Similar Events:</h3>";
	echo "</form>";
}
?>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
</div>
</html>