<?php
require_once("../DBconnection/dbcon.php");

$s = mysql_query("SELECT name,vid,rid from student where sid = 1 ");
$student = mysql_fetch_row($s);

$b = mysql_query("SELECT amount from bill where sid = 1 ");
$bill = mysql_fetch_row($b);

?>


<table align='center' cellspacing='5', cellpadding='5'>
	<tr>
		<th>  Name :  </th>
		<td> <?=$student[0]?> </td>
	</tr>

	<tr>
		<th>  Id No :  </th>
		<td> <?=$student[1]?> </td>
	</tr>

	<tr>
		<th>  My Room :  </th>
		<td> <?=$student[2]?> </td>
	</tr>

	<tr>
		<th> &nbsp </th>
		<td> <a href=""> Change Room </a> </td>
	</tr>

	<tr>
		<th>  My Bill :  </th>
		<td> <?=$bill[0]?> </td>
	</tr>

	<tr>
		<th> &nbsp </th>
		<td> <a href=""> Pay Bill </a> </td>

	<tr>
		<th>  Report :  </th>
		<td> <a href=""> Click To Report </a> </td>
	</tr>
</table>
