<?php session_start();
//menjalankan sesion
if(!session_is_registered('$_POST[username]'.'$encrypt_pass')){
header("location:index.php");}
//cek sesion
require ("../config.php");
  include "../fungsi_rupiah.php";
  include "../library.php";

	$data=mysql_query("SELECT * FROM orders WHERE id_orders='$_GET[id]'");
	$r = mysql_fetch_array($data);
    $tanggal=tgl_indo($r[tgl_order]);
    
    if ($r[status]=='Baru'){
        $pilihan_status = array('Baru', 'Lunas','Batal');
    }
    elseif ($r[status]=='Lunas'){
        $pilihan_status = array('Lunas','Dikirim');    
    } elseif ($r[status]=='Bayar'){
        $pilihan_status = array('Bayar','Lunas', 'Batal');    
    }elseif ($r[status]=='Batal'){
        $pilihan_status = array('Batal','Bayar');    
    } elseif ($r[status]=='Dikirim'){
        $pilihan_status = array('Dikirim');    
    }
    $pilihan_order = '';
	
	foreach ($pilihan_status as $status) {
	   $pilihan_order .= "<option value=$status";
	   if ($status == $r[status_order]) {
		    $pilihan_order .= " selected";
	   }
	   $pilihan_order .= ">$status</option>\r\n";
    }

    echo "<table width=100%> 
		<tr>
             <td width=50% bgcolor=#0B78B3 colspan=6><div align=center><span class=style15>Data Detail Order</span></div></td>
		</tr>    
		</table>
          <form method=POST action=update_order.php>
          <input type=hidden name=id value=$r[id_orders]>

          <table>
          <tr><td>No. Order</td>        <td> : $r[id_orders]</td></tr>
          <tr><td>Tgl Order</td> <td> : $tanggal</td></tr>
          <tr><td>Status Order      </td><td>: <select name=status_order>$pilihan_order</select> 
          <input type=submit name=ubah value='Ubah Status'></td></tr>
          </table></form>";

  // tampilkan rincian produk yang di order
  $sql2=mysql_query("SELECT * FROM orders_detail, produk 
                     WHERE orders_detail.id_produk=produk.id 
                     AND orders_detail.id_orders='$_GET[id]'");
  
  echo "<table border=1 width=100% cellpadding=2 cellspacing=0>
        <tr><th>Nama Produk</th><th>Jumlah</th><th>Harga Satuan</th><th>Sub Total</th></tr>";
  
  while($s=mysql_fetch_array($sql2)){
     // rumus untuk menghitung subtotal dan total		
    $subtotal    = $s[harga] * $s[jumlah];
    $total       = $total + $subtotal;
    $subtotal_rp = format_rupiah($subtotal);    
    $total_rp    = format_rupiah($total);    
    $harga       = format_rupiah($s[harga]);

    echo "<tr><td>$s[nama]</td><td align=center>$s[jumlah]</td><td>Rp. $harga</td><td>Rp. $subtotal_rp</td></tr>";
  }

echo "<tr><td colspan=3 align=right>Total              : Rp.</td><td align=right><b>$total_rp</b></td></tr>
      </table>";

  // tampilkan data kustomer
  echo "<table border=1 width=100% cellpadding=2 cellspacing=0>
        <tr><th colspan=2>Data Pemesan</th></tr>
        <tr><td>Nama Pembeli</td><td> : $r[nama_pemesan]</td></tr>
        <tr><td>Alamat Pengiriman</td><td> : $r[alamat]</td></tr>
        <tr><td>No. Telpon/HP</td><td> : $r[notelp]</td></tr>
        <tr><td>Email</td><td> : $r[email]</td></tr>
		<tr><td>Catatan</td><td> : $r[catatan]</td></tr>
        </table>";
	
	$bayar=mysql_query("select * from pembayaran where id_orders='$_GET[id]'");
	$jml=mysql_num_rows($bayar);
	if($jml>0){
	$dtpembayaran=mysql_fetch_array($bayar);
	echo "<table border=1 width=100% cellpadding=2 cellspacing=0>
        <tr><th colspan=2>Data Pembayaran</th></tr>
        <tr><td>Pembayaran via</td><td> : $dtpembayaran[nama_bank]</td></tr>
        <tr><td>No Rekening</td><td> : $dtpembayaran[no_rek]</td></tr>
        <tr><td>Jam Pembayaran</td><td> : $dtpembayaran[jam_pembayaran]</td></tr>
        <tr><td>Jumlah Pembayaran</td><td> : $dtpembayaran[jumlah]</td></tr>
        </table>";
	
}
	echo "<br/><a href=order.php >Kembali ke Order</a>";
?>
<style type="text/css">
<!--
.style5 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #FFFFFF; font-weight: bold; }
body {
	margin-top: 0px;
	margin-left: 0px;
}
.style15 {font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color: #FFFFFF; }
.style35 {font-family: Arial, Helvetica, sans-serif; font-size: 10; }
.style36 {font-size: 10}
-->
</style>