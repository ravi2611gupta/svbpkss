<?php
session_start();
$_SESSION['user']="";
unset($_SESSION['user']);
session_destroy();
header("Location:index.php?msg=2");

?>