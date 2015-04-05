<?php
require_once("../DBconnection/dbcon.php");


?>

<h3>List of Students : </h3>

<table align='center' cellspacing='10', cellpadding='10'>

	<tr align="center">
		<th> <u>Name</u> </th>
		<th> <u>Versity ID</u> </th>
		<th> <u>Username</u> </th>
		<th> <u>Contact</u> </th>
		<th> <u>Email</u> </th>
		<th> <u>Picture</u> </th>
	</tr>

	<?php
	$s = mysql_query("SELECT * FROM student");
	while($student= mysql_fetch_assoc($s))
	{
		$pic = $student['pic'];
		echo "<tr align='center'> <td> ".$student['name']." </td>";
		echo "<td> ".$student['vid']. "</td>";
		echo "<td> ".$student['uname']. "</td>";
		echo "<td> ".$student['contact']. "</td>";
		echo "<td> ".$student['email']. "</td>";
		echo "<td> <img src='$pic' height='42' width='42'> </td> </tr>";
	}
	?>

</table>