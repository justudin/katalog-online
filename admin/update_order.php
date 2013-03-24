<?php session_start();
require ("../config.php");
if(!session_is_registered('$_POST[username]'.'$encrypt_pass')){
header("location:../index.php");}

if($_POST[ubah]=='Ubah Status'){
   // Update stok barang saat transaksi sukses (Lunas)
   if($_POST[status_order]=='Lunas'){ 
    
      // Update status order
      mysql_query("UPDATE orders SET status='$_POST[status_order]' where id_orders='$_POST[id]'");
	  
      header('location:order.php');
    }elseif($_POST[status_order]=='Batal'){
	    // Update status order Batal
      mysql_query("UPDATE orders SET status='$_POST[status_order]' where id_orders='$_POST[id]'");
		header('location:order.php');
	  }
    else{
     mysql_query("UPDATE orders SET status='$_POST[status_order]' where id_orders='$_POST[id]'");
		header('location:order.php');
    }
}
?>
