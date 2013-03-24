<?php
  include "config/koneksi.php";	
  include "fungsi_rupiah.php";
  include "library.php";
  
 $sid = session_id();
// fungsi untuk mendapatkan isi keranjang belanja
function isi_keranjang(){
	$isikeranjang = array();
	$sid = $sid = session_id();
	$sql = mysql_query("SELECT * FROM orders_temp WHERE id_session='$sid'");
	
	while ($r=mysql_fetch_array($sql)) {
		$isikeranjang[] = $r;
	}
	return $isikeranjang;
}

if(($_POST['kode']) == $_SESSION['check']){
	$tgl_skrg = date("Ymd");
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$email=$_POST['email'];
	$notelp=$_POST['telepon'];
	$catatan=$_POST['catatan'];
	
	$jenis = "N";  
	$query = "SELECT max(id_orders) as maxID FROM orders WHERE id_orders LIKE '$jenis%'";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
	$idMax = $data['maxID'];
	$noUrut = (int) substr($idMax, 1, 4);
	$noUrut++;
	$newID = $jenis . sprintf("%04s", $noUrut);
	$id_orders=$newID;
	$status="Baru";
	$id_pelanggan = $_SESSION['id_pelanggan'];
// simpan data pemesanan 
mysql_query("INSERT INTO orders(id_orders,id_pelanggan,nama_pemesan,alamat,notelp,catatan,email,status,tgl_order) 
             VALUES('$id_orders','$id_pelanggan','$nama','$alamat','$notelp','$catatan','$email','$status',now())");
  

// panggil fungsi isi_keranjang dan hitung jumlah produk yang dipesan
$isikeranjang = isi_keranjang();
$jml          = count($isikeranjang);

// simpan data detail pemesanan  
for ($i = 0; $i < $jml; $i++){
  mysql_query("INSERT INTO orders_detail(id_orders, id_produk, jumlah) 
               VALUES('$id_orders',{$isikeranjang[$i]['id_produk']}, {$isikeranjang[$i]['jumlah']})");
}
  
// setelah data pemesanan tersimpan, hapus data pemesanan di tabel pemesanan sementara (orders_temp)
for ($i = 0; $i < $jml; $i++) {
  mysql_query("DELETE FROM orders_temp
	  	         WHERE id_orders_temp = {$isikeranjang[$i]['id_orders_temp']}");
}
	echo "<table width=100% height=31 border=0>
                  <tr>
                    <td height=21 bgcolor=#0B78B3><div align=center><span class=style81>Proses Belanja Selesai</span></div></td>
                  </tr>
</table>
";
echo "Data pemesan beserta ordernya adalah sebagai berikut: <br />
      <table>
      <tr><td>Nama           </td><td> : <b>$nama</b> </td></tr>
      <tr><td>Alamat Lengkap </td><td> : $alamat </td></tr>
      <tr><td>Telpon         </td><td> : $notelp </td></tr>
      <tr><td>E-mail         </td><td> : $_POST[email] </td></tr></table><hr /><br />
      
      Nomor Order: <b>$id_orders</b><br /><br />";

      $daftarproduk=mysql_query("SELECT * FROM orders_detail,produk 
                                 WHERE orders_detail.id_produk=produk.id 
                                 AND id_orders='$id_orders'");

echo "<table cellpadding=10>
      <tr bgcolor=#6da6b1><th>No</th><th>Nama Produk</th><th>Qty</th><th>Harga</th><th>Sub Total</th></tr>";

$no=1;
while ($d=mysql_fetch_array($daftarproduk)){
   $subtotal    = $d[harga] * $d[jumlah];
   $total       = $total + $subtotal;
   $subtotal_rp = format_rupiah($subtotal);    
   $total_rp    = format_rupiah($total);    
   $harga       = format_rupiah($d[harga]);

   echo "<tr bgcolor=#dad0d0><td>$no</td><td>$d[nama]</td><td align=center>$d[jumlah]</td><td>Rp. $harga</td><td>Rp. $subtotal_rp</td></tr>";

   $no++;
}
echo "<tr><td colspan=4 align=right>Total : Rp. </td><td align=right><b>$total_rp</b></td></tr></table>";

} else  echo "Kode Yang Anda Masukkan Salah!";

 
 
?>
 
</td>
</tr>
</table>

