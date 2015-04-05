<?php
require_once("../DBconnection/dbcon.php");


?>

<table align='center' cellspacing='5', cellpadding='5'>

	<tr align="center">
		<th> Serial </th>
		<th> Name </th>
		<th> Amount </th>
	</tr>

	<?php
	$s = mysql_query("SELECT * FROM student");
	while($student= mysql_fetch_assoc($s))
	{
		$sid = $student['sid'];
		echo "<tr align='center'> <td> ".$sid." </td>";
		echo "<td> ".$student['name']. "</td>";
		$b = mysql_query("SELECT amount FROM bill WHERE sid=$sid ");
		$bill = mysql_fetch_row($b);
		echo "<td> ".$bill[0]. "</td> </tr>";
	}
	?>

</table>