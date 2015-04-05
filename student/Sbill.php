<?php
require_once("../DBconnection/dbcon.php");

$b = mysql_query("SELECT amount FROM bill WHERE sid = 1 ");
$bill = mysql_fetch_row($b);

if (isset($_POST['Submit'])) {

	if ( trim($_POST['bill'])>0 & trim($_POST['bill'])<=$bill[0] )
	{
		$bill = $bill[0] - trim($_POST['bill']);
		mysql_query("UPDATE bill SET amount=$bill WHERE sid=1 ");
		echo "<i>Successfully Paid</i> $bill[0] </br>";
	}else{
		echo "Enter Between 1 - $bill[0] </br>";
	}
		
}

$b = mysql_query("SELECT amount FROM bill WHERE sid = 1 ");
$bill = mysql_fetch_row($b);

?>


<form method='post' action='Sbill.php'>
	<table cellspacing='5' cellpadding='5'>
		<tr>
			<th>Your Due Bill :</th>
			<td> <?=$bill[0]?> </td>
			<td> &nbsp </td>
		</tr>

		<tr>
			<th>Pay Your Bill</th>
			<td> <input type='text' name='bill'> </td>
			<td> <input type='submit' name='Submit' value='Pay'> </td>
		</tr>
	</table>
</form>