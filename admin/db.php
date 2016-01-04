<?php

/* Tracking Tool - Version 1
Developed by: Atechkid @ fiverr.com */

$dbname ='sumit759_track';
$dbhost = 'localhost';
$dbuser = 'sumit759_track';
$dbpass = 'sumit759_track';

$db = mysql_connect($dbhost, $dbuser, $dbpass);
$db = mysql_select_db($dbname);

date_default_timezone_set('Europe/London');

?>