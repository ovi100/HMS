<?php
require_once("../DBconnection/dbcon.php");

if ( isset($_POST['update_submit']) ) 
{

	if ( strlen( trim($_POST['pass']) )>0 ) 
	{
		$val = mysql_real_escape_string( trim($_POST["pass"]) );
		mysql_query("UPDATE student SET password='$val' WHERE sid=1 ");
		//echo "UPDATE student SET password='$val' WHERE sid=1 </br>";
	}

	if ( strlen( trim($_POST['contact']) )>0  )
	{
		$val = mysql_real_escape_string( trim($_POST["contact"]) );
		mysql_query("UPDATE student SET contact='$val' WHERE sid=1 ");
		//echo "UPDATE student SET contact=$val WHERE sid=1 </br>";
	}

	if ( strlen( trim($_POST['email']) )>0  ) 
	{
		$val = mysql_real_escape_string( trim($_POST["email"]) );
		mysql_query("UPDATE student SET email='$val' WHERE sid=1 ");
		//echo "UPDATE student SET email='$val' WHERE sid=1 </br>";
	}

	if ( strlen($_FILES["pic"]["name"])>0 ) 
	{
		$t=time();
		move_uploaded_file( $_FILES["pic"]["tmp_name"], "../images/User_pic/$t.jpg");
		$val = "../images/User_pic/".$t.".jpg";
		mysql_query("UPDATE student SET pic='$val' WHERE sid=1 ");
		//echo "UPDATE student SET pic='$val' WHERE sid=1 </br>";
	}

}
$p = mysql_query("SELECT * FROM student WHERE sid = 1 ");
$profile = mysql_fetch_row($p);

?>

<form method='post' action='Sprofile.php' enctype='multipart/form-data'>
	<table align='center' cellspacing='5', cellpadding='5'>
		<tr align="left">
			<th>  Name :  </th>
			<td> <?=$profile[3]?> </td>
		</tr>

		<tr align="left">
			<th>  Id :  </th>
			<td> <?=$profile[4]?> </td>
		</tr>

		<tr align="left">
			<th>  Username :  </th>
			<td> <?=$profile[1]?> </td>
		</tr>

		<tr align="left">
			<th> password </th>
			<td> <?=$profile[2]?> </td>
			<?php
				if (isset($_POST['Submit'])) {
					echo "<td> <input type='password' name='pass'/> </td>";
				}
			?>
		</tr>

		<tr align="left">
			<th>  Contact no :  </th>
			<td> <?=$profile[5]?> </td>
			<?php
				if (isset($_POST['Submit'])) {
					echo "<td> <input type='text' name='contact'/> </td>";
				}
			?>
		</tr>

		<tr align="left">
			<th> email </th>
			<td> <?=$profile[6]?> </td>
			<?php
				if (isset($_POST['Submit'])) {
					echo "<td> <input type='text' name='email'/> </td>";
				}
			?>
		</tr>

		<tr align="left">
			<th>  Pic :  </th>
			<td> <img src="<?=$profile[7]?>" height="42" width="42"></img>	 </td>
			<?php
				if (isset($_POST['Submit'])) {
					echo "<td> <input type='file' name='pic'> </td>";
				}
			?>			
		</tr>

		<tr align="left">
			<th> </th>
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
