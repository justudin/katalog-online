<?php
session_start();
error_reporting(0);
include "config.php";
$module=$_GET[module];
$act=$_GET[act];
if ($module=='keranjang' AND $act=='tambah'){

	$sid = session_id();
	
	// check if the product is already
	// in cart table for this session
	$sql = mysql_query("SELECT id_produk FROM orders_temp
			WHERE id_produk='$_GET[id]' AND id_session='$sid'");
	$ketemu=mysql_num_rows($sql);
	if ($ketemu==0){
		// put the product in cart table
		mysql_query("INSERT INTO orders_temp (id_produk, jumlah, id_session, tgl_order_temp)
				VALUES ('$_GET[id]', 1, '$sid', now())");
	} else {
		// update product quantity in cart table
		mysql_query("UPDATE orders_temp 
		        SET jumlah = jumlah + 1
				WHERE id_session ='$sid' AND id_produk='$_GET[id]'");		
	}	
	deleteAbandonedCart();
	header('Location:kantong_belanja.php');			
}

elseif ($module=='keranjang' AND $act=='hapus'){
	mysql_query("DELETE FROM orders_temp WHERE id_orders_temp='$_GET[id]'");
	header('Location:kantong_belanja.php');				
}

elseif ($module=='keranjang' AND $act=='update'){
  $id       = $_POST[id];
  $jml_data = count($id);
  $jumlah   = $_POST[jml]; // quantity
  for ($i=1; $i <= $jml_data; $i++){
	if($jumlah[$i] == 0){
        echo "<script>window.alert('Anda tidak boleh menginputkan angka 0 atau mengkosongkannya!');
        window.location=('kantong_belanja.php')</script>";
    }
    else{
      mysql_query("UPDATE orders_temp SET jumlah = '".$jumlah[$i]."'
                                      WHERE id_orders_temp = '".$id[$i]."'");
      header('Location:kantong_belanja.php');
    }
  }
  }
/*
	Delete all cart entries older than one day
*/
function deleteAbandonedCart(){
	$kemarin = date('Y-m-d', mktime(0,0,0, date('m'), date('d') - 1, date('Y')));
	mysql_query("DELETE FROM orders_temp 
	        WHERE tgl_order_temp < '$kemarin'");
}

?>