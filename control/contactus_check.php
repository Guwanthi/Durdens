<?php
session_start();
include '../model/db.php';

 $user_id = $_POST['$_SESSION['uid']'];
 $name = $_POST['name'];
 $email = $_POST['email'];
 $subject = $_POST['subject']; 
 $message = $_POST['message']; 

//data retrieve part
//mysqli_fetch_array default function can be retrieve  data as separately

 if($name!="" && $email!="" && $subject!="" && $message!="") {
 	
         $sql=" INSERT INTO contact (user_id,name,email,subject,message) VALUES ('$user_id','$name','$email','$subject','$message')";
    if(!mysqli_query($con, $sql)){
        die('Error = '.mysqli_error($con)); 
    }

    header("location:../contactus.php");
 }else{
 	echo 'Please fill all details';
    header("location:../contactus.php");
 }


?>