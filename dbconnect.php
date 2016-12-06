<?php
error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
$con = mysqli_connect("localhost","root","","dbtest");
if(!mysqli_connect("localhost","root","","dbtest"))
{
     die('oops connection problem ! --> '.mysqli_error());
}
if(!mysqli_select_db($con,"dbtest"))
{
     die('oops database selection problem ! --> '.mysqli_error());
}
?>