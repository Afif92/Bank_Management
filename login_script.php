<?php
	include 'connect.php';

	$userName    =    $_POST['ID'] ;
	$password    =    $_POST['PASSWORD'];



 
	if(isset($_POST['Login'])) 
	{

	if($userName=='1')
	{
	header("location:Admin_Homepage.html");
	}
	else
	{
	$query  =    "select * from INFORMATION where ID='$userName' and password='$password' and status='1'";
	$res    =    mysqli_query($con,$query);
	$count	=	mysqli_num_rows($res);
	if($count==1){

	session_start(); 
  
	$_SESSION['ID']=$userName;
	header("location:User_Homepage.php");
	}
	else 
	{ 
	header("location:wrong_login.php");
 
	}
	} 
	}





 
?>