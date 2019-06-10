<?php

$sql = "SELECT * FROM `talk`";

$con=mysqli_connect("localhost","root","root","contact") or die('Error with MySQL connection');

@mysqli_select_db($con,"contact") or  die("Unable to select database!"); 

mysqli_query($con,"SET NAMES utf8");

$result=mysqli_query($con,$sql);

?>