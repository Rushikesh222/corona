<<?php 

 $username ="root";
 $password ="";
 $server = 'localhost';
 $db =  'corona';
 $con = mysqli_connect($server,$username,$password,$db);
 if ($con) {
 	echo "connection successfully";
 }
 else {
 	echo "no connection";
 }
 ?>
