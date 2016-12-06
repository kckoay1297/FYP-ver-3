<?php 
$con = new mysqli("localhost", "root", "", "casebase");
	// Check connection
	if ($con->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
	$sql = "SELECT * FROM negativecase ORDER BY caseDate";
	$res = $con->query($sql);
	if ($res->num_rows > 0) {
		while( $row = mysqli_fetch_array($res)) {
			echo $row['caseName'].":".defuzzification($row['feedback'],$row['actualPtcpt'],$row['expenses'],$row['budget'],$row['actualIncome'])."<br>";
		}
	}
function feedbackRule($feedback){
	$x1 = $x2 = 0;
	if($feedback <= 40){
		$x1 = 0;
	}elseif($feedback <= 80 AND $feedback > 40){
		$x1 = ($feedback - 40)/(80-40);
	}else{
		$x1 = 1;
	}
	return $x1;
}

function PtcptRule($ptcpt){
	$x = 0;
	$max = 0;
	if($ptcpt < 50){
		$max = 50;
	}elseif($ptcpt >= 50 AND $ptcpt < 100){
		$max = 100;
	}elseif($ptcpt >= 100 AND $ptcpt < 500){
		$max = 500;
	}else{
		$max = 2500;
	}
	if($max == 50){
		if($ptcpt < 5){
			$x = 0;
		}elseif($ptcpt <= 50 AND $ptcpt > 5){
			$x = ($ptcpt - 5)/(50 - 5);
		}else{
			$x = 1;
		}
	}elseif($max == 100){
		if($ptcpt <= 60){
			$x = (60 -50)/(100- 50);
		}elseif($ptcpt <= 100 AND $ptcpt > 60){
			$x = ($ptcpt - 50)/(100 - 50);
		}else{
			$x= 1;
		}
	}elseif($max == 500){
		if($ptcpt <= 200){
			$x = (200-100)/(500-100);
		}elseif($ptcpt <= 500 AND $ptcpt > 200){
			$x = ($ptcpt - 100)/(500-100);
		}else{
			$x = 1;
		}
	}elseif($max == 2500){
		if($ptcpt <= 800){
			$x = (2500-800)/(2500-500);
		}elseif($ptcpt <= 500 AND $ptcpt > 200){
			$x = ($ptcpt - 500)/(2500-500);
		}else{
			$x = 1;
		}
	}

}

function Rule1($feedback,$ptcpt){
	$x = 0;
	$feedback1 = feedbackRule($feedback);
	$ptcpt1 = PtcptRule($ptcpt);
	if($feedback1 > $ptcpt1){
		$x = $ptcpt1;
	}elseif($feedback1 < $ptcpt1){
		$x = $feedback1;
	}else{
		$x = $feedback1;
	}
	return $x;
}

function expensesRule($expense){
	$x = 0;
	$max = 0;
	if($expense < 1000){
         $max = 1000.0;
    }elseif ($expense >= 1000 and $expense < 5000) {
         $max = 5000.0;
                
    }elseif($expense >= 5000 and $expense < 10000){
         $max = 10000.0;
    }elseif ($expense >= 10000 and $expense <15000) {
          $max = 15000.0;
    }else{
          $max = 20000.0;
    }
	$maxPartial = 0.8 * $max;
	if($max == 1000.0){
		if($expense == 0){
			$x = 1;
		}elseif($expense < $maxPartial){
			$x = ($max - $expense)/$max; 
		}else{
			$x = ($max - $maxPartial)/$max;
		}
	}elseif($max == 5000.0){
		if($expense < 1000){
			$x = 1;
		}elseif($expense < $maxPartial){
			$x = ($max - $expense)/($max-1000); 
		}else{
			$x = ($max - $maxPartial)/($max-1000);
		}
	}elseif($max == 10000.0){
		if($expense < 5000){
			$x = 1;
		}elseif($expense < $maxPartial){
			$x = ($max - $expense)/($max-5000); 
		}else{
			$x = ($max - $maxPartial)/($max-5000);
		}
	}elseif($max == 15000.0){
		if($expense < 10000){
			$x = 1;
		}elseif($expense < $maxPartial){
			$x = ($max - $expense)/($max-10000); 
		}else{
			$x = ($max - $maxPartial)/($max-10000);
		}
	}else{
		if($expense < 15000){
			$x = 1;
		}elseif($expense < $maxPartial){
			$x = ($max - $expense)/($max-15000); 
		}else{
			$x = ($max - $maxPartial)/($max-15000);
		}
	}
}
function Rule2($feedback,$expense){
	$x = 0;
	$feedback1 = feedbackRule($feedback);
	$expense1 = expensesRule($expense);
	if($feedback1 > $expense1){
		$x = $expense1;
	}elseif($feedback1 < $expense1){
		$x = $feedback1;
	}else{
		$x = $feedback1;
	}
	return $x;
}
function budgetGaussian($budget){
	//$x = 0;
	$centre = 0;
	$width = 6000;
	$factor = 2;
	if($budget <= 1000){
         $width = 280;
    }elseif ($budget > 1000 and $budget <= 5000) {
         $width = 1500;
                
    }elseif ($budget > 5000 and $budget <= 10000) {
         $width = 2800;
                
    }else{
          $width = 6000;
    }
	$func = pow((($budget - $centre)/$width),$factor);
	return exp($func * -0.5);
}

function Rule3($budget, $expense){
	$x = 0;
	$budget1 = budgetGaussian($budget);
	$expense1 = expensesRule($expense);
	if($budget1 > $expense1){
		$x = $expense1;
	}elseif($budget1 < $expense1){
		$x = $budget1;
	}else{
		$x = $budget1;
	}
	return $x;
}

function Rule4($budget){
	$x = 0;
	$max = 0;
	if($budget <= 5000){
		$x = 1;
	}elseif($budget < 20000 AND $budget > 5000){
		$x = (20000 - $budget)/(20000-5000);
	}else{
		$x = 0;
	}
	return $x;
	
}

function incomeRule($income){
	$x = 0;
	$max = 0;
	if($income < 1000){
         $max = 1000.0;
    }elseif ($income >= 1000 and $income < 5000) {
         $max = 5000.0;
                
    }elseif($income >= 5000 and $income < 10000){
         $max = 10000.0;
    }elseif ($income >= 10000 and $income <15000) {
          $max = 15000.0;
    }else{
          $max = 20000.0;
    }
	$maxPartial = 0.8 * $max;
	if($income < $maxPartial){
		$x = ( $income)/($maxPartial);
	}else{
		$x = 1;
	}
	return $x;
}

function expensesRule5($expense){
	$x = 0;
	$max = 0;
	if($expense < 1000){
         $max = 1000.0;
    }elseif ($expense >= 1000 and $expense < 5000) {
         $max = 5000.0;
                
    }elseif($expense >= 5000 and $expense < 10000){
         $max = 10000.0;
    }elseif ($expense >= 10000 and $expense <15000) {
          $max = 15000.0;
    }else{
          $max = 20000.0;
    }
	$maxPartial = 0.8 * $max;
	if($expense < $maxPartial){
		$x = ($maxPartial - $expense)/$maxPartial;
	}else{
		$x = 1;
	}
	return $x;
}

function Rule5($income, $expense){
	$x = 0;
	$income1 = incomeRule($income);
	$expense1 = expensesRule5($expense);
	if($income1 > $expense1){
		$x = $income1;
	}elseif($income1 < $expense1){
		$x = $expense1;
	}else{
		$x = $expense1;
	}
	return $x;
}

function defuzzification($feedback,$ptcpt,$expense,$budget,$income){

$x = 0;
$x = (Rule1($feedback,$ptcpt)*0.3) + (Rule2($feedback,$expense) * 0.3) + (Rule3($budget,$expense) * 0.3) + (Rule4($budget) * 0.1) + (Rule5($income,$expense) * 0.1);
$x1 = $x/(0.3+0.3+0.3+0.1+0.1);
return $x1;
}
?>