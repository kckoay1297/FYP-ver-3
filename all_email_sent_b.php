<?php 
if(isset($_POST['submit'])){
    $from = $_POST['from']; // this is your Email address
    //$to = $_POST['to']; // this is the sender's Email address
    $subject = "<b>".htmlspecialchars($_POST['subject'])."</b>";
	$content = $_POST['message'];
	//$cc = $_POST['cc'];
	$to = "";
	if(!empty($_POST['to_list'])) {
	$i = 0;
    foreach($_POST['to_list'] as $to_) {
		if($i==0){
			 $to .= $to_; 
			 $i++;
		}else{
			$to .=" , ".$to_;
			$i++;
		}
		}
		echo $to;
	}
	$cc = "";
	if(!empty($_POST['to_list'])) {
	$i = 0;
    foreach($_POST['cc_list'] as $cc_) {
		if($i==0){
			 $cc .= $cc_; 
			 $i++;
		}else{
			$cc .=" , ".$cc_;
			$i++;
		}
		}
		echo $cc;
	}

    $header = "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$header .= "From: <".$from.">\r\n";
	if($cc != null){
		$header .= "Cc: <".$cc.">\r\n";
	}
	//echo $message;
    //echo $to;
	//echo $from;
	//echo $cc;
    $verify = mail($to,$subject,$content,$header);
    //mail($from,$subject2,$message2,$header2); // sends a copy of the message to the sender
	if($verify == true){
		 echo '<script language="javascript">';
		 echo 'alert("Email Sent Succesfully!")';
		 echo '</script>';  
		 echo "<script>setTimeout(\"location.href = 'http://localhost/email_start.php';\",1500);</script>";
	}else{
		 echo '<script language="javascript">';
		 echo 'alert("Email Sent.")';
		 echo '</script>'; 
echo "<script>setTimeout(\"location.href = 'http://localhost/email_start.php';\",1500);</script>";		 
	}
    
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>