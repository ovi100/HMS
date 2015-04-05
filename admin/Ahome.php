<?php
require_once("../DBconnection/dbcon.php");

if ( isset($_POST['update_submit']) ) 
{

	if ( strlen( trim($_POST['pass']) )>0 ) 
	{
		$val = mysql_real_escape_string( trim($_POST["pass"]) );
		mysql_query("UPDATE admin SET password='$val' WHERE aid=1 ");
		//echo "UPDATE student SET password='$val' WHERE sid=1 </br>";
	}

	if ( strlen( trim($_POST['email']) )>0  ) 
	{
		$val = mysql_real_escape_string( trim($_POST["email"]) );
		mysql_query("UPDATE admin SET email='$val' WHERE aid=1 ");
		//echo "UPDATE student SET email='$val' WHERE sid=1 </br>";
	}

}

$a = mysql_query("SELECT * FROM admin WHERE aid = 1 ");
$admin = mysql_fetch_row($a);

?>

<form method='post' action='Ahome.php'>
<table align='center' cellspacing='5', cellpadding='5'>
	<tr align="left">
		<th> Name : </th>
		<td> <?=$admin[3]?> </td>
	</tr>

	<tr align="left">
		<th> Username : </th>
		<td> <?=$admin[1]?> </td>
	</tr>

	<tr align="left">
		<th> Password : </th>
		<td> <?=$admin[2]?> </td>
		<?php
			if (isset($_POST['Submit'])) {
				echo "<td> <input type='password' name='pass'/> </td>";
			}
		?>
	</tr>

	<tr align="left">
		<th> Email : </th>
		<td> <?=$admin[4]?> </td>
		<?php
			if (isset($_POST['Submit'])) {
				echo "<td> <input type='text' name='email'/> </td>";
			}
		?>
	</tr>

	<tr align="left">
		<th> </th>
		<td></td>
		<td>
			<?php
				if (isset($_POST['Submit'])) {
					echo "<input type='submit' name='update_submit' value='Submit'/>";
				}else {
					echo "<input type='submit' name='Submit' value='Update Profile'/>";
				}
			?>
		</td>
	</tr>

</table>
</form>
