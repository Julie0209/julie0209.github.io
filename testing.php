<?php

$sql = "SELECT * FROM `talk`";

$con=mysqli_connect("localhost","root","root","contact") or die('Error with MySQL connection');

mysqli_select_db($con,"contact") or  die("Unable to select database!"); 

mysqli_query($con,"SET NAMES utf8");

$result=mysqli_query($con,$sql);

$list=mysqli_fetch_assoc($result);


$data=mysqli_query($con,"select * from `talk` order by ID");


$insert = "INSERT INTO talk (name, content) VALUES ('$_POST[name]','$_POST[content]')";




 
if ($con->query($insert) === TRUE) {
    echo "插入成功";
} else {
    echo "Error: ";
}
 
$con->close();

header ( "location:talk.php " ) ;



?>