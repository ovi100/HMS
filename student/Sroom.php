<?php
require_once("../DBconnection/dbcon.php");

function changeRoom()
{
	/*$rid = mysql_real_escape_string( trim($_POST['rid']) );
	$temp = mysql_query("SELECT bed,sid1 FROM room WHERE rid = $rid ");
	$bed1 = mysql_fetch_row($temp);
	if ($bed1[0]>0) {
		$bed2 = $bed1[0] - 1;	//decreasing 1 from bed
		if ($bed1[1]>0) {		//checking that is this bed taken or not by sid1 & sid2
			mysql_query("UPDATE room SET bed= $bed2,sid2=1 WHERE rid=$rid ");
		}else{
			mysql_query("UPDATE room SET bed= $bed2 ,sid1=1 WHERE rid=$rid ");
		}

		$s = mysql_query("SELECT sid,rid FROM student WHERE sid = 1 ");
		$student = mysql_fetch_row($s);
		$sid=$student[0];
		$rid2 = $student[1];
		$temp = mysql_query("SELECT bed,sid1 FROM room WHERE rid = $rid2 ");
		$bed1 = mysql_fetch_row($temp);
		$bed2 = $bed1[0] + 1;	//increasing 1 from bed
		if ($bed1[1]==$sid) {		//checking that is this bed taken or not by sid1 & sid2
			mysql_query("UPDATE room SET bed= $bed2,sid1='' WHERE rid=$rid2 ");
		}else{
			mysql_query("UPDATE room SET bed= $bed2 ,sid2='' WHERE rid=$rid2 ");
		}

		mysql_query("UPDATE student SET rid=$rid WHERE sid=$sid ");
	}else {
		echo "Room is booked</br>";
	}*/
	echo "In function</br>";
}

if (isset($_POST['Submit'])) {

	if ( trim($_POST['rid'])>0 )
	{
		$s = mysql_query("SELECT rid FROM student WHERE sid = 1 ");
		$student = mysql_fetch_row($s);
		if ( trim($_POST['rid'])!=$student[0] )
		{
			changeRoom();
		}else{
			echo "You can't choose existing room</br>";
		}
	}else{
		echo "Choice from listed room ID</br>";
	}
		
}

$s = mysql_query("SELECT rid FROM student WHERE sid = 1 ");
$student = mysql_fetch_row($s);
?>

<span> Present Room : </span>
<span> <?=$student[0]?> </span>

<table align='center' cellspacing='5', cellpadding='5'>
	<tr>
		<th align='right'> Room ID </th>
		<th> Bed Avaiable </th>
	</tr>

		<?php
		$r = mysql_query("SELECT * FROM room WHERE bed>0 AND rid!=$student[0]");
		while($room= mysql_fetch_assoc($r))
		{
			echo "<tr> <td align='center'> ".$room['rid']." </td>";
			echo "<td align='center'> ".$room['bed']. "</td> </tr>";
		}
		?>
</table>

<div> <b>Take an new room </b> 	</div>
<span> Enter a room ID : </span>
<form method='post' action='Sroom.php'>
	<input type='text' name='rid'> <input type='submit' name='Submit' value='Change'> </input>
</form>