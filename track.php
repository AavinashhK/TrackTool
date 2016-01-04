<?php

/* Tracking Tool - Version 1
*/

include('db.php');

if(isset($_POST['trackid'])) {

$trackid = $_POST['trackid'];

$query='SELECT * FROM `tracking` WHERE `trackid`='.$trackid.' LIMIT 0, 30';
$result=@mysql_query($query);
$view=mysql_fetch_assoc($result);

$tracking = $view['trackid'];
$name = $view['name'];
$email = $view['email'];
$phone = $view['phone'];
$material = $view['material'];
$location = $view['location'];
$status = $view['status'];
}

?>
<html>
<body>
<br /><br /><br />
<hr><hr>
<br />
<center><h1>Tracking Tool</h1> </center><br /><br />
<hr><hr>
<br /><center>
<table>
<tr>
<td>Track ID: </td>
<td><b><?php echo $tracking; ?></b></td>
</tr>
<tr>
<td>Name: </td>
<td><b><?php echo $name; ?></b></td>
</tr>
<tr>
<td>Email: </td>
<td><b><?php echo $email; ?></b></td>
</tr>
<tr>
<td>Phone No: </td>
<td><b><?php echo $phone; ?></b></td>
</tr>
<tr>
<td>Material: </td>
<td><b><?php echo $material; ?></b></td>
</tr>
<tr>
<td>Present Location: </td>
<td><b><?php echo $location; ?></b></td>
</tr>
<tr>
<td>Status: </td>
<td><b><?php echo $status; ?></b></td>
</tr>
</table><br />

<hr><hr>
<hr><hr>
</body>
</html>
