<?php 
$servername="localhost";
$username="root";
$password="";
$table="gala";


$conn=mysqli_connect($servername,$username,$password,$table);

// if ($conn){
// 	echo "ok";
// }else{
// 	echo "not";
// }

mysqli_set_charset($conn,"utf8");

?>