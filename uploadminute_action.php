<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image


$filename  = basename($_FILES['fileToUpload']['name']);
$extension = pathinfo($filename, PATHINFO_EXTENSION);
$new       = $filename.'.'.$extension;



if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "" . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
		echo "" . $check["mime"] . ".";
        $uploadOk = 1;
        
    }
}
echo "<br>".$filename."<br>";
$filename  = basename($_FILES['fileToUpload']['name']);
$extension = pathinfo($filename, PATHINFO_EXTENSION);
$ni = 'ni';
$soh = 52;
$newfile = $ni." ".$soh.'.'.$extension;



if (file_exists($newfile)) {
	unlink($newfile);
    //rename('upload/tmp/'.$_POST['overwrite_file_name'],'upload/'.$_POST['overwrite_file_name']);
    echo "file exist and try to rename it. ";
    $uploadOk = 1;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000000000) {
    echo "Sorry, your file is too large.";
	echo '<script language="javascript">';
	echo 'alert("Exceed file size.")';
	echo '</script>';
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
	echo '<script language="javascript">';
	echo 'alert("Sorry, your file was not uploaded.")';
	echo '</script>';
	
// if everything is ok, try to upload file
} else {
	$new = $target_dir.$newfile;
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $new)) {
        echo "The file ". basename( $newfile). " has been uploaded.";
		echo '<script language="javascript">';
		echo 'alert("File Uploaded.")';
		echo '</script>';
		
    } else {
       /* echo " Sorry, there was an error uploading your file.";
		echo '<script language="javascript">';
		echo 'alert("Error.")';
		echo '</script>';*/
		
    }
}
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Redirecting...')
    window.location.href='http://localhost/uploadminute.php';
    </SCRIPT>");
?>