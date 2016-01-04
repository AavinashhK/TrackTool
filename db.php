<?php

/* Tracking Tool - Version 1*/

$dbname ='DATABASE NAME';
$dbhost = 'HOST NAME';
$dbuser = 'DATABASE USER';
$dbpass = 'DATABASE PASSWORD';

$db = mysql_connect($dbhost, $dbuser, $dbpass);
$db = mysql_select_db($dbname);

date_default_timezone_set('Europe/London');

?>