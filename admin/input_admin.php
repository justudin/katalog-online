<? require("../config.php");
$encrypt_password = md5($password);
$perintah = "INSERT INTO admin (username,password)
VALUES ('$_POST[username]','$encrypt_password')";
$result = mysql_query($perintah);
if ($result) {
header("location:admin.php");
} else { echo "Data belum dapat di simpan!!"; 
} ?>