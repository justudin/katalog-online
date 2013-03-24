<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.Teks_Visitor {
	font-family: Verdana, Geneva, sans-serif;
}
.Teks_Visitor {
	font-size: 10px;
}
.Teks_Visitor {
	color: #F00;
}
</style>
</head>
<body>
<div align="center" class="Teks_Visitor">
<?php
$tframe = 10;   
require("config.php");   
$db_table= "visits";                 
$vis_ip = ip2long($_SERVER['REMOTE_ADDR']);
$vis_time = time();
$new_vis = 1;
$get_ip = mysql_query("SELECT * FROM ".$db_table." WHERE visits_ip=".$vis_ip." LIMIT 1");
     while ($row=mysql_fetch_object($get_ip))
         {
         mysql_query("UPDATE ".$db_table." SET visits_time='$vis_time' WHERE visits_ip='$vis_ip'") 
            or die (mysql_error());
        $new_vis = 0;
        }
if ($new_vis == 1)
    {
    mysql_query("INSERT INTO ".$db_table." (visits_ip, visits_time) VALUES ('$vis_ip','$vis_time')") 
        or die (mysql_error());
    }
$tcheck = time() - (60 * $tframe);
$query = mysql_query("SELECT * FROM ".$db_table." WHERE visits_time > $tcheck");
$onlinenow = mysql_num_rows($query);
if($onlinenow == 1)
    {
    echo"<b>$onlinenow</b>";
    }
else
    {
    echo"<b>$onlinenow</b>";
    }
 ?></div>
</body>
</html>