<?php
require_once("../DBconnection/dbcon.php");

if (isset($_POST['Submit'])) {
	$repo = trim($_POST['repo']);
	if ( strlen($repo)>0 )
	{
		$s = mysql_query("SELECT rid FROM student WHERE sid = 1 ");
		$student = mysql_fetch_row($s);
		$rid = $student[0];

		$repo = mysql_real_escape_string($repo);
		mysql_query("INSERT INTO report VALUES('','$repo',0,1,$rid)");	//0->status, 1->sid
	}else{
		echo "Write something";
	}
}

?>


<form method='post' action='Sreport.php'>
	<table cellspacing='5' cellpadding='5'>
		<tr>
			<th>Place Your Report : </th>
			<td> <input type='text' name='repo'> </td>
			<td> <input type='submit' name='Submit' value='Report'> </td>
		</tr>
	</table>
</form>