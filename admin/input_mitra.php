<? require("../config.php");
$perintah = "INSERT INTO mitra (nama,link)
VALUES ('$_POST[nama]','$_POST[link]')";
$result = mysql_query($perintah);
if ($result) {
header("location:mitra.php");
} else { echo "Data belum dapat di simpan!!";	
} ?>