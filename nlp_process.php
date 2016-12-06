<?php


function nlp($text){
	include_once 'stopword.php';
	$words = extractCommonWords($text);
    $text = implode(' ', array_keys($words));
	/*require_once('porter_stemmer.php');
	$words = explode(' ',$text);
	$porter = new PorterStemmer();
	$newtext = "";
	$text_a = array();
	for($x = 0;$x < count($words);$x++){
		$text_a[]= $porter->Stem($words[$x])." ";
	}
	//sort($text_a);
	for($x = 0;$x < count($text_a);$x++){
		$newtext.= $porter->Stem($text_a[$x])." ";
	}*/
	
	return $text;
}
?>