<?php
require_once("../DBconnection/dbcon.php");
//
if ( isset($_POST['Submit']) )
{
	$serial = trim($_POST['serial']);
	if ( $serial>0 ) {
		$r = mysql_query("SELECT * FROM room WHERE bed>0 LIMIT 1");
		$room = mysql_fetch_row($r);
		$rid = $room[0];
		$bed = $room[1] - 1;

		if ( $room[2]>0 ) {
			mysql_query("UPDATE room SET bed=$bed, sid2=$serial WHERE rid=$rid");
		}else{
			mysql_query("UPDATE room SET bed=$bed, sid1=$serial WHERE rid=$rid");
		}
		mysql_query("UPDATE student SET rid=$rid WHERE sid=$serial");

	}else{
		echo "Enter a Serial No";
	}

}

?>

<h3>List of new students : </h3>

<form method='post' action='new_student.php'>
<table align='center' cellspacing='5', cellpadding='5'>

	<tr align="center">
		<th> Serial </th>
		<th> Name </th>
		<th> Versity id </th>
	</tr>

	<?php
	$s = mysql_query("SELECT * FROM student WHERE rid=0");
	while($student= mysql_fetch_assoc($s))
	{
		echo "<tr align='center'> <td> ".$student['sid']." </td>";
		echo "<td> ".$student['name']. "</td>";
		echo "<td> ".$student['vid']. "</td> </tr>";
	}
	?>

	<tr align="left">
		<td>Aprove Student : </td>
		<td> <input type='text' name='serial'/> </td>
		<td> <input type='submit' name='Submit' value='Aprove'/> </td>
	</tr>

</table>
</form>
