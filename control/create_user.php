<?php

include '../model/db.php';

 $name = $_POST['name'];
 $email = $_POST['email'];
 $password = $_POST['password']; 

//data retrieve part
//mysqli_fetch_array default function can be retrieve  data as separately

$db_email="";
$sql="SELECT * from user WHERE email= '$email'";
$result= mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($result)){
    $db_email = $row['email'];
}

 if($name!="" && $email!="" && $password!="") {
 	
 	if ($db_email=="") {

         $sql=" INSERT INTO user (name,email,password) VALUES ('$name','$email','$password')";
    if(!mysqli_query($con, $sql)){
        die('Error = '.mysqli_error($con)); 
    }

    header("location:../index.php");

    }else{
        echo 'already have an account corresponding this email';
        header("location:../sign_up.php");
    }

 }else{
 	echo 'Please fill all details';
    header("location:../sign_up.php");
 }


?>