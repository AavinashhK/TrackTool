<?php

/* Tracking Tool - Version 1 */

?>

<html>
<title>Edit Tracking</title>
<body>
<br /><hr><hr>
<center><h1> Search for Tracking </h1></center>
<br /> <hr><hr>
<br /><center>
<table>
<tr>

<td><h3>Search by ID </h3><br /> <form action="editor.php" method="POST">
Tracking ID: <input type="text" name="trackid"> <br /> <input type="Submit" value="Search"></td>
</tr>

<tr>
<td><br /><h3> List All <br /> <form action="editor.php" method="POST">
<input type="hidden" name="all" value="all"> <br /> <input type="Submit" value="List All"></h3></td>
</table>
</center>

</br /><hr><hr>
</body>
</html>
