<?php
// database connection code
if(isset($_POST['SIGNUP']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', 'sindhu@123','Kivyoinc');

// get the post records

$fullname = $_POST['fullname'];
$emailaddress = $_POST['emailaddress'];
$username = $_POST['username'];
$password = $_POST['password'];

// database insert SQL code
$sql = "INSERT INTO `candidate_details` (`Id`, `fullname`, `emailaddress`, `username`, `password`) VALUES ('0', '$fullname', '$emailaddress', '$username', '$password')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Sucessfully signup, Please loginin into KivyoInc";
}
}
else
{
	echo "sorry unable to singup,please check the all fields.";
	
}
?>