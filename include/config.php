<?php
date_default_timezone_set("Asia/Tehran");
$LINK=@mysqli_connect("localhost","root","","company-2025");

if(mysqli_connect_errno())
    die("Error in connect DB");

mysqli_set_charset($LINK,'utf8');
mb_internal_encoding("UTF-8");
?>