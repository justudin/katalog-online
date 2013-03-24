<?php require("../config.php");
$nama=$_POST[nama];
$jenis=$_POST[jenis];
$deskripsi=$_POST[deskripsi];
$harga=$_POST[harga];
$status=$_POST[status];
$gambar=$_POST[gambar];
$isi = str_replace("\r\n","<br>", $deskripsi);

if(empty($_FILES['gambar']['name'])){
$cek = "UPDATE produk SET nama='$nama', jenis='$jenis', deskripsi = '$deskripsi', harga ='$harga', status='$status' WHERE id='$_POST[id]'";
	$hasil = mysql_query($cek);
	if ($hasil) {
		header("location:produk.php");
	} else {
		echo("Produk gagal diupdate.");	
	}
} else {
$gambar = $_FILES['gambar']['tmp_name'];
$filename = $_FILES['gambar']['name'];
$path='../produk/' . $filename;
if(!move_uploaded_file($gambar, $path)){
echo "Upload Gambar GAGAL!!";	
} else {
	$cek = "UPDATE produk SET nama='$nama', jenis='$jenis', deskripsi = '$deskripsi', harga ='$harga', status='$status', gambar='$filename' WHERE id='$_POST[id]'";
	$hasil = mysql_query($cek);
	if ($hasil) {
		header("location:produk.php");
	} else {
		echo("Produk gagal diupdate.");	
	}
} 
}
?>