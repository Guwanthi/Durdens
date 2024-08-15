<?php

include '../model/db.php';
session_start();
 
$em=$_POST['email'];
$pw=$_POST['pw'];

$email=""; $password=""; $user_id=0;
$sql="SELECT * from user WHERE email= '$em'&& password= '$pw' ";
$result= mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($result)){
    $email= $row['email'];
    $password= $row['password'];
    $user_id = $row['user_id'];
}

if ($em==$email && $pw==$password) {
	//login success
	$_SESSION['uid'] = $user_id;
	header("location:../home.php");
}else{
	//email or password error
	header("location:../index.php");
}

?> 