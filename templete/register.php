<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
    	<link rel="shortcut icon" href="../images/tab-icon/favicon1.ico" type="image/x-icon"/>
    	<link rel="stylesheet" type="text/css" href="reg.css"/>
    	
</head>
<body>
      <div id="wrapper">
	<div id="header">
	      <table width="99%"  border="0">
		<tr valign="top">
		     <td id="logo" width="45%"><a href="../index.php">Hostel Management System</a></td>
		          <td  id="info" align="right">
			<a href="#">
			     <img src="../images/icon/mi.png" width="20">ovi0167@hotmail.com</a>
			      &nbsp;&nbsp;&nbsp;
			     <a href="#"><img src="../images/icon/m.png" width="22">01675600270</a>
			</td>		
		</tr>
		          
	      </table>
	</div>
<section id="middel"><img src="../images/m.png" >
 <table width="100%" border="0">
 	<tr valign="top">
 	<td  valign="top" width="40%">
	<div id="menum">
	<ul>
		<li>
		<a href="../index.php"><input type="button" id="btnm1" value="Home"></a>
		</li>
		<li>
		<a href="#"><input type="button" id="btnm2" value="About Us"></a>
		</li>
		<li>
		<a href="#"><input type="button" id="btnm3" value="Room"></a>
		</li>
		<li>
		<a href="#"><input type="button" id="btnm4" value="Contact Us"></a>
		</li>
		<li>
		<a href="register.php"><input type="button" id="btnm5" value="Registration"></a>
		</li>
		<li>
		<a href="#"><input type="button" id="btnm6" value="RSS"></a>
		</li>
	</ul>
	</div>
</td>
 	<td align="left">
 <?php
$ename=$euname=$epass=$ecpass=$evid=$econ=$Eemail="";
if(isset($_POST["rsb"]))
{
	$name= mysql_real_escape_string(trim($_POST["name"]));
	$uname= mysql_real_escape_string(trim($_POST["uname"]));
	$pass= mysql_real_escape_string(trim(@$_POST["pass"]));
	$cpass=mysql_real_escape_string(trim($_POST["cpass"]));
	$vid= mysql_real_escape_string(trim($_POST["vid"]));
	$con=mysql_real_escape_string(trim($_POST["con"]));
	$email= mysql_real_escape_string(trim($_POST["email"]));
	


      if ($name&&$uname&&$pass&&$cpass&&$vid&&$con&&$email!="") 
	{
	$con=mysql_connect("localhost","root","") or die ("Database not found");
	
	mysql_select_db("hms",$con);
	
	$q = "INSERT INTO student VALUES('$uname','$pass','$name','$vid','$con',$email')";
	//$qry = "insert into contactus(name,email,subject,message) values('$name','$email','$subject','$message')";
	mysql_query($q);
	}

	//Check Full Name
		if ($name=="") 
		{
			$ename="* Full Name req.";
		}

	//Check User Name
		if ($uname=="") 
		{
			$euname="* User Name req.";
		}
		elseif (strlen($vid)<11) 
		{
			$evid="* Id format Invalid";
		}
		
	//Check password

		if ($pass=="") 
		{
			$epass="* password req.";
		}
		elseif (strlen($pass)<6) 
		{
			$epass="* At least 6 charecter";
		}

		if ($pass!=$cpass) 
		{
			$ecpass="* Password does not match";
		}

	//Check Versity ID
		if ($vid=="") 
		{
			$evid="* Versity id req.";
		}
		elseif (strlen($vid)<10) 
		{
			$evid="* Id format Invalid";
		}

	//Check contact
		if ($con=="") 
		{
			$econ="* Contact req.";
		}
		elseif (strlen($con)<11) 
		{
			$evid="* Invalid contact";
		}

	//Check Email

		if ($email=="") 
		{
			$Eemail="* Email req.";
		}
		elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
  			$Eemail = "Invalid email format"; 
		}

}

?>
		<div id="signup">
			
			<h3>&nbsp;&nbsp;Please Fill Up The Information Below</h3><hr>
			<form action="#" method="post"enctype="multipart/form-data">
			      <table width="100%" border="0">
			      	<tr>
			      	<td>Your Full Name<br>
					<input type="text" id="name" name="name" placeholder="Your Name"/>
					<b id="b"><?=$ename ?></b>
				</td>
				</tr>
				<tr>
			      	<td><br>User Name<br>
					<input type="text" id="uname" name="uname" placeholder="User Name"/>
					<b id="b"><?=$euname ?></b>
				</td>
				</tr>
				<tr>
			      	<td><br>Password<br>
					<input type="text" id="pass" name="pas" placeholder="*********"/>
					<b id="b"><?=$epass ?></b>
				</td>
				</tr>
				<tr>
			      	<td><br>Confirm Password<br>
					<input type="text" id="cpass" name="cpass" placeholder="*********"/>
					<b id="b"><?=$ecpass ?></b>
				</td>
				</tr>
				<tr>
			      	<td><br>Versity ID<br>
					<input type="text" id="vid" name="vid" placeholder="Your Versity ID"/>
					<b id="b"><?=$evid ?></b>
				</td>
				</tr>
				<tr>
			      	<td><br>Contact<br>
					<input type="text" id="con" name="con" placeholder="01XXXXXXXX"/>
					<b id="b"><?=$econ ?></b>
				</td>
				</tr>
				<tr>
			      	<td><br>E-mail<br>
				<input type="text" id="email" name="email" placeholder="example@example.com"/>
				<b id="b"><?=$Eemail ?></b>
				</td>
				</tr>
				<tr>
			      	<td><br>Picture:<input type="file" id="pic" name="pic" /></td>
				</tr>
				<tr>
			      	<td><br>
			      	<input type="checkbox" id="trms" name="trms" />&nbsp;I accept the terms and condition
			      	</td>
			      	<tr>
				<td><a href="../index.php">Have an account?</a></td>
				</tr>
			      	<tr>
				<td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" id="rsb" name="rsb" /></td>
				</tr>
		

			      </table>
			</form>

		</div>
 	</td>
 	</tr>
 </table>

</section>

    <div id="footer">
    	<table width="100%" border="0" >
    	  <tr>
    	  	<td valign="top" width="30%"><center>Our Aim</center></td>
    	  	<td valign="top" width="30%" colspan="3">
    	  	<center>
    	  	Subscribe Us<br><br>
    	  	<p>You can subscribe with Email</p><br>
    	  	<input type="text"  id="sinp" placeholder="example@example.com" />
    	  	<input type="button" id="btn" value="subscribe">
    	  	</center>
    	  	</td>
    	  	<td id="fsocial" valign="top" width="40%" colspan="3">
    	  		<center>Like Us <br>
    	  	   <ul>
    	  		<li><a href="#"><img src="../images/social/fba.png" width="25"></a></li>
    	  		<li><a href="#"><img src="../images/social/twa.png" width="25"></a></li>
    	  		<li><a href="#"><img src="../images/social/ina.png" width="25"></a></li>
    	  		<li><a href="#"><img src="../images/social/uta.png" width="25"></a></li>
    	  	  </ul>
    	  	 </center>
    	  	</td>
    	  </tr>
    	 
    	  <tr>
    	  
    	  	<td id="rss" colspan="5"><a href=""><img src="../images/social/rssa.png" height="30"></a></td>
    	  </tr>
    	  <tr>

    	  	<td id="f-text" valign="bottom"  align="center" colspan="5" height="30" width="70%">
    	  	&copy CBoys'12 ,2015 | All Right Reserve
    	  	</td>
    	  	<td valign="bottom" colspan="5" height="20" width="10">
    	  	<a href="#top"><img src="../images/top.png" width="30" height="30"></a>
    	  	</div>
    	  	</td>
    	 
    	  </tr>
    	</table>
    </div>
</div>
</body>
</html>