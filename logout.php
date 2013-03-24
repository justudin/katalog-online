<?php 
unset($_SESSION['id']);
session_unregister('$_POST[email]'.'$encrypt_pass');
header("location:index.php");
?>