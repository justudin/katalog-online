<?php
	error_reporting(0);
	//untuk ngecek apakah user uda login apa belum
	session_start();
	if(empty($_SESSION['email']) AND empty($_SESSION['id_pelanggan'])){
		echo "";	
	}
?>