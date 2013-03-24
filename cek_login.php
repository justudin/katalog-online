<?php
	include "config/koneksi.php";
	$op = $_GET['op'];
	if($op=="in"){
		if(isset($_POST['email'], $_POST['password']))
		{
			if(get_magic_quotes_gpc())
			{
				$email = mysql_real_escape_string(stripslashes($_POST['email']));
				$password = stripslashes($_POST['password']);
			}
			else
			{
				$email = mysql_real_escape_string($_POST['email']);
				$password = $_POST['password'];
			}
			$req = mysql_query('select * from pelanggan where email="'.$email.'"');
			$dn = mysql_fetch_array($req);
			if($dn['password']==md5($password))
			{
				$_SESSION['email']=$dn['email'];
				$_SESSION['id_pelanggan']=$dn['id_pelanggan'];
				echo "<script type='text/javascript'>document.location='index.php';</script>";
				exit;
			}else{
				echo "<script type='text/javascript'>alert('Email atau Password Salah!');document.location='index.php';</script>";
				exit;
			}
		}
		
		}else if($op=="out"){
			unset($_SESSION['email'],$_SESSION['id_pelanggan']);
			echo "<script type='text/javascript'>alert('Logout Berhasil!');document.location='index.php';</script>";
			exit;
		}
	?>
