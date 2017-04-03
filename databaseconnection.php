<?php
$mysql_hostname = "mysql.hostinger.in";
$mysql_user = "u704250527_sri";
$mysql_password = "sridharan";
$mysql_database = "u704250527_csmit";
$prefix = "";
$bd = @mysql_connect($mysql_hostname, $mysql_user,$mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("<h1>Could not select database<h1>");
if(!$bd)
echo "<h1>Connection to Database failed<h1>";
else
{
 //echo "Connected";
}
?>