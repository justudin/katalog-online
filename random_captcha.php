<?php session_start(); 
//imagecreatefrompng :: membuat tampilan image baru 
//untuk lokas image sam dengan lokasi file index dengan nama black.png
$img = imagecreatefrompng('black.png'); 
//menampikan nilai random teks
$numero = rand(100, 999); 
$_SESSION['check'] = ($numero); 
//menggunakan sedikit pengaturan gambar
$white = imagecolorallocate($img, 255, 255, 255); 
imagestring($img, 10, 8, 3, $numero, $white);
 header ("Content-type: image/png"); imagepng($img); 
?>