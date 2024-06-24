<?php

//include("config.php");
//include("iot.php");

date_default_timezone_set('Asia/Kuala_Lumpur');
$uptime = date("Y,m,d,H,i,s");
/*
if(isset($_GET["data"]) && isset($_GET["id"])){
    echo $uptime;

$tablename = "datalog";
$row_name = "devid,data";
$row_value = "'".$_GET["id"]."','".$_GET["data"]."'";

insert_db($tablename,$row_name,$row_value);

}
*/

if(isset($_GET["rtc"]))echo $uptime;

?>
