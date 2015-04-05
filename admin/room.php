<?php
require_once("../DBconnection/dbcon.php");


?>

<h3>List of Rooms : </h3>

<table align='center' cellspacing='5', cellpadding='5'>

	<tr align="center">
		<th> Room No</th>
		<th> Bed1 Student</th>
		<th> Bed2 Student</th>
		<th> Bed Available </th>
	</tr>

	<?php
	$r = mysql_query("SELECT * FROM room");
	while($room = mysql_fetch_assoc($r))
	{
		echo "<tr align='center'> <td> ".$room['rid']." </td>";
		echo "<td> ".$room['sid1']. "</td>";
		echo "<td> ".$room['sid2']. "</td>";
		echo "<td> ".$room['bed']. "</td> </tr>";
	}
	?>

</table>