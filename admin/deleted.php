<?php

/* Tracking Tool - Version 1 */

include('../db.php');

if(isset($_POST['trackid'])) {

$tracking = $_POST['trackid'];


$query="DELETE FROM  `tracking` WHERE  `trackid` =".$tracking."";
if(@mysql_query($query)) {

header('location: ./index.php');

} else {

echo 'Failed to Delete';

}

}


?>

