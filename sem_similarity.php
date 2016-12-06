<?php 
function similarity($str,$str1){
	file_put_contents('java/file.txt', $str);
	file_put_contents('java/file2.txt', $str1);
	$returnCode = shell_exec("java -jar JavaApplication27.jar ".$str." ".$str1." ");
	//print_r($returnCode);
	return $returnCode;
}
?>