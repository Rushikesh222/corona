<?php 
 $username ="root";
 $password ="";
 $server = 'localhost';
 $db =  'corona';
 

	
$con = mysqli_connect($server,$username,$password,$db); 


    $Fname = $_POST['Fname']; 
	$Lname = $_POST['Lname'];
	$Mobileno = $_POST['Mobileno'];
	$Email = $_POST['Email'];
	$Location = $_POST['Location'];
	$Subject = $_POST['Subject'];
	$Address = $_POST['Address'];
	


 $sql = "INSERT INTO banner(Fname, Lname, Mobileno, Email, Location, Subject, Address)VALUES ('','$Fname','$Lname',$Mobileno','$Email','$Location','$Subject','$Address')";
 
if (mysqli_query($con, $sql)) {

echo"STRING ";
	
}else 
{

echo "Something wrong ";
}
	
	 ?>


