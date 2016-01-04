<?php

/* Tracking Tool - Version 1 */

include('../db.php');


$tracking = $_POST['trackid'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$material = $_POST['material'];
$location = $_POST['location'];
$status = $_POST['status'];

$query="INSERT INTO  `".$dbname."`.`tracking` (
`trackid` ,
`name` ,
`email` ,
`phone` ,
`material` ,
`location` ,
`status`
)
VALUES (
'".$tracking."',  '".$name."',  '".$email."',  '".$phone."',  '".$material."',  '".$location."',  '".$status."')";

if(@mysql_query($query)) {

header('location: ./index.php');

} else {

echo 'Failed to Save';

}




?>


