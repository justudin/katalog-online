<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db ="katalog";
	$konek=mysql_connect($host, $user, $pass);
	if(!$konek){
		echo "Koneksi ke database gagal!";
	}
	mysql_select_db($db) or die("Database tidak ditemukan!");
	
	//inisiasi bwt ngecek user uda login pa blm
	include "init.php";

?>