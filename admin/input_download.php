<? require("../config.php");
$perintah = "INSERT INTO download (judul,link)
VALUES ('$_POST[judul]','images/file/$_POST[link]')";
$result = mysql_query($perintah);
if ($result) {
header("location:download.php");
} else {
echo "Data belum dapat di simpan!!";	
} ?>