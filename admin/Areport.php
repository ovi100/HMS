<?php
require_once("../DBconnection/dbcon.php");

if ( isset($_POST['Submit']) )
{
	$repo_id = trim($_POST['repo_id']);
	if ( $repo_id>0 ) {
		mysql_query("UPDATE report SET status=1 WHERE report_id=$repo_id");
	}else{
		echo "else";
	}

}
?>

<h3>List of Problems : </h3>

<table align='center' cellspacing='5', cellpadding='5'>

	<tr align="center">
		<th> Serial No </th>
		<th> Problem </th>
		<th> Room No </th>
		<th> Reported By </th>
	</tr>

	<?php
	$r = mysql_query("SELECT * FROM report WHERE status=0");
	while($report= mysql_fetch_assoc($r))
	{
		$repo_id = $report['report_id'];
		$sid = $report['sid'];
		echo "<tr align='center'> <td> ".$repo_id." </td>";
		echo "<td> ".$report['problem']. "</td>";
		echo "<td> ".$report['rid']. "</td>";
		$s = mysql_query("SELECT name FROM student WHERE sid=$sid ");
		$student = mysql_fetch_row($s);
		echo "<td> ".$student[0]. "</td> </tr>";
	}
	?>

</table>
</br></br>
<div> <b>Problem Solved</b> </div>
<form method='post' action='Areport.php'>
	<span> Serial No:  </span>
	<input type='text' name='repo_id'>
	<input type='submit' name='Submit' value='Done'>
</form>