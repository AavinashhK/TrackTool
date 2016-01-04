<?php

/* Tracking Tool - Version 1 */

include('../db.php');

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


}  else {

echo 'Required Valid Track/Mail ID';

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
<form action="save.php" method="POST">
<input type="hidden" name="trackid" value="<?php echo $tracking; ?>">
<table>
<tr>
<td>Track ID: </td>
<td><b><?php echo $tracking; ?></b></td>
</tr>
<tr>
<td>Name: </td>
<td><b><input type="text" name="name" value="<?php echo $name; ?>"</b></td>
</tr>
<tr>
<td>Email: </td>
<td><b><input type="text" name="email" value="<?php echo $email; ?>"</b></td>
</tr>
<tr>
<td>Phone No: </td>
<td><b><input type="text" name="phone" value="<?php echo $phone; ?>"</b></td>
</tr>
<tr>
<td>Material: </td>
<td><b><input type="text" name="material" value="<?php echo $material; ?>"</b></td>
</tr>
<tr>
<td>Present Location: </td>
<td><b><input type="text" name="location" value="<?php echo $location; ?>"</b></td>
</tr>
<tr>
<td>Status: </td>
<td><b><input type="text" name="status" value="<?php echo $status; ?>"</b></td>
</tr>
</table>
<input type="submit" value="Update" ></form><br />

<hr><hr>
<hr><hr>
</body>
</html>
