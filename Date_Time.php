<?php
date_default_timezone_set("America/New_York");
$Current_Time=time();
//$DateTime=strftime("%Y-%m-%d %H-%M-%S", $Current_Time);
$DateTime=strftime(" Current Date: %A %B-%d-%Y <br /> Current Time: %H:%M:%S", $Current_Time);
//echo $Current_Time . "<br />";
echo $DateTime;


 ?>
