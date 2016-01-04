<?php

/* Tracking Tool - Version 1 */

include('../db.php');

if(isset($_POST['trackid'])) {

$tracking = $_POST['trackid'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$material = $_POST['material'];
$location = $_POST['location'];
$status = $_POST['status'];

$query="UPDATE  `".$dbname."`.`tracking` SET  `name` =  '".$name."',
`email` =  '".$email."',
`phone` =  '".$phone."',
`material` =  '".$material."',
`location` =  '".$location."',
`status` =  '".$status."' WHERE  `tracking`.`trackid` =".$tracking."";
if(@mysql_query($query)) {

header('location: ./index.php');

} else {

echo 'Failed to Save';

}

}


?>

