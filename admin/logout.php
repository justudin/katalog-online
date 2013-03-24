<?php session_start();
session_unregister('$_POST[username]'.'$encrypt_pass');
header("location:index.php");
?>