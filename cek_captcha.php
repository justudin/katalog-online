<?php session_start();
if(($_POST['check']) == $_SESSION['check']) { 
require("input_saran_kritik.php");
//perintah ini merupakan perintah yang akan mengecek kode chapca apakah sama dengan yang diinputkan pada variabel check jika sama maka 
//panggil file input_saran_kritik.php
header("location:isi_saran_kritik.php");
}else{ 
//jika kondisi pertama tidak masuk persyaratan
header("location:isi_saran_kritik.php");
}
?>