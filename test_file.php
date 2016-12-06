<?php 
$thisdir = getcwd(); 
$new_dir = '1452';
error_reporting(0);
$filename = '/upload/'.$new_dir;

if (is_dir($filename)) {
    //echo "The file $filename exists";
} else {
	echo "file x exist la";
	try{
		if(mkdir($thisdir . "/upload/" . $new_dir, 0777)){
			//echo "Directory has been created successfully...";
		}
		else{
			//echo "Failed to create directory...";
		} 
	} catch(Exception $e){
		//echo $e;
		
	}
    

}

?>