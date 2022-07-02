<?php

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

include("admin/connection.php");

$q_ins = "insert into tbl_contact(name, email, mobile, message, date) values('$name', '$email', '$number', '$message', now())";

if(mysqli_query($dbCon, $q_ins)){
    header("location:index.php?msg=Message sent successfully");
}else{
    header("location:index.php?msg=Sorry, something went wrong !");
}

?>