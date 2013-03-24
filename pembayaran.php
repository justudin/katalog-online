<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link ilo-full-src="Gambar/Icon.ico" rel="SHORTCUT ICON" href="Gambar/Icon.ico" type="image/x-icon">
<title>RaChick Cipanas</title>
<style type="text/css">
.Teks_Menu_Kiri {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
.Teks_Menu_Kiri {
	color: #FFF;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 12px;
}
.Menu_Costumer {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	color: #00F;
	font-weight: bold;
}
body {
	text-align: right;
	color: #000;
	background-image: url(Gambar/Latar.jpg);
	margin-top: 0px;
	margin-bottom: 0px;
}
.Teks_Menu_Atas {
	font-family: Tahoma, Geneva, sans-serif;
	font-weight: bold;
	font-size: 12px;
}
.Teks_Login {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 12px;
}
.Teks_Garis {
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	color: #333;
	text-align: center;
}
.Teks_Info {
	font-family: Times New Roman, Times, serif;
	font-size: 14px;
	color: #333;
	font-weight: bold;
}
.Teks_Menu_Bawah {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 12px;
	text-align: center;
}
a:link {
	color: #F90;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #F90;
}
a:hover {
	text-decoration: none;
	color: #F00;
}
a:active {
	text-decoration: none;
	color: #000;
}
body,td,th {
	color: #000000;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
}
</style>
</head>

<body>
<div align="center">
  <table width="800" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img src="Gambar/Header.gif" width="800" height="238" /></td>
        </tr>
        <tr>
          <td><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#666666" class="Teks_Menu_Atas">
            <tr bgcolor="#CCCCCC">
              <td><div align="center"><a href="index.php">Home</a><a href="index.php"></a></div></td>
              <td><div align="center"><a href="produk.php">Produk</a></div></td>
              <td><div align="center"><a href="kantong_belanja.php">Kantong Belanja</a></div></td>
              <td><div align="center"><a href="katalog.php">Katalog</a></div></td>
              <td><div align="center"><a href="tentang_kami.php">Tentang Kami</a></div></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
            <tr valign="top">
              <td width="30%" height="825" bgcolor="#0B78B3"><table width="100%" border="0" cellpadding="0" cellspacing="5" bgcolor="#0B78B3">
                <tr>
                  <td><div align="center"><img src="Gambar/Pencarian.gif" width="30" height="30" /></div></td>
                  <td class="Teks_Menu_Kiri">Pencarian</td>
                </tr>
                <tr>
                  <td colspan="2"><div align="center">
                    <form id="form1" name="form1" method="post" action="cari.php">
                      <label for="Pencarian"></label>
                      <input type="cari" name="Pencarian" id="Pencarian" />
                      <input type="submit" name="Cari" id="Cari" value="Cari" />
                    </form>
                  </div></td>
                  </tr>
                <tr>
                  <td colspan="2" class="Teks_Garis">----------------------------------------------</td>
                  </tr>
                <tr>
                  <td><div align="center"><img src="Gambar/Menu.gif" width="30" height="30" /></div></td>
                  <td class="Teks_Menu_Kiri">Menu Pilihan</td>
                </tr>
                <tr>
                  <td><div align="center"><img src="Gambar/Sub Menu.gif" width="10" height="10" /></div></td>
                  <td class="Teks_Menu_Kiri"><a href="index.php">Home</a></td>
                </tr>
                <tr>
                  <td><div align="center"><img src="Gambar/Sub Menu.gif" alt="" width="10" height="10" /></div></td>
                  <td class="Teks_Menu_Kiri"><a href="produk.php">Produk</a></td>
                </tr>
                <tr>
                  <td><div align="center"><img src="Gambar/Sub Menu.gif" alt="" width="10" height="10" /></div></td>
                  <td class="Teks_Menu_Kiri"><a href="isi_saran_kritik.php">Isi Saran &amp; Kritik</a></td>
                </tr>
                <tr>
                  <td><div align="center"><img src="Gambar/Sub Menu.gif" alt="" width="10" height="10" /></div></td>
                  <td class="Teks_Menu_Kiri"><a href="lihat_saran_kritik.php">Lihat Saran &amp; Kritik</a></td>
                </tr>
                <tr>
                  <td><div align="center"><img src="Gambar/Sub Menu.gif" alt="" width="10" height="10" /></div></td>
                  <td class="Teks_Menu_Kiri"><a href="tentang_kami.php">Tentang Kami</a></td>
                </tr>
                <tr>
                  <td><div align="center"><img src="Gambar/Sub Menu.gif" alt="" width="10" height="10" /></div></td>
                  <td class="Teks_Menu_Kiri"><a href="mitra_bisnis.php">Mitra Bisnis</a></td>
                </tr>
                <!-- <tr>
                  <td><div align="center"><img src="Gambar/Sub Menu.gif" alt="" width="10" height="10" /></div></td>
                  <td class="Teks_Menu_Kiri"><a href="download.php">Download</a></td>
                </tr> -->
                <tr>
                  <td><div align="center"><img src="Gambar/Sub Menu.gif" alt="" width="10" height="10" /></div></td>
                  <td class="Teks_Menu_Kiri"><a href="hubungi_kami.php">Hubungi Kami</a></td>
                </tr>
                <tr>
                  <td colspan="2" class="Teks_Garis">----------------------------------------------</td>
                  </tr>
				   <tr>
                  <td><div align="center"><img src="Gambar/Menu.gif" width="30" height="30" /></div></td>
                  <td class="Teks_Menu_Kiri">Menu Member</td>
                </tr>
				 <tr>
                  <td colspan="2"><?php include "login_pelanggan.php";?></td>
                  </tr>
				 <tr>
                  <td colspan="2" class="Teks_Garis">----------------------------------------------</td>
                  </tr>
                <tr>
                  <td><div align="center"><img src="Gambar/Costumer Service.gif" width="30" height="30" /></div></td>
                  <td class="Teks_Menu_Kiri">Costumer Service</td>
                </tr>
                <tr>
                  <td colspan="2"><div align="center" class="Teks_Info">Sen-Jum 08:00 - 16:30</div></td>
                  </tr>
                <tr>
                  <td colspan="2"><div align="center" class="Teks_Login"><span class="Teks_Info">Sabtu 08:00 - 15:00</span></div></td>
                  </tr>
                <tr>
                  <td colspan="2" class="Teks_Garis">----------------------------------------------</td>
                  </tr>
                <tr>
                  <td colspan="2" class="Menu_Costumer"><? require("status_ym.php") ?></td>
                </tr>
                <tr>
                  <td colspan="2" class="Teks_Garis">----------------------------------------------</td>
                </tr>
                <tr>
                  <td colspan="2"><div align="center"><span class="Teks_Info">Telp : 0263-5052600</span></div></td>
                  </tr>
               <!--  <tr>
                  <td colspan="2"><div align="center"><span class="Teks_Info">Fax : 0711-111111</span></div></td>
                  </tr>
                <tr>
                  <td colspan="2"><div align="center"><span class="Teks_Info">Sms : 0711-010101</span></div></td>
                  </tr> -->
               
                <tr>
                  <td colspan="2"><div align="center" class="Teks_Menu_Kiri">User Online</div></td>
                  </tr>
                <tr>
                  <td colspan="2"><div align="center"><? require("visitor.php") ?>
                    <p>&nbsp;</p>
                  </div></td>
                  </tr>
                <tr>
                  <td colspan="2"><? require("tanggal.php") ?></td> 
                  </tr>
              </table></td>
              <td width="70%"><p><?php include "form_pembayaran.php"; ?></p>
              
      </p></td>
            </tr>
          </table></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td class="Teks_Menu_Bawah"><div align="left"><? require("footer.php") ?></div></td>
        </tr>
      </table></td>
    </tr>
  </table>
</div>
</body>
</html>