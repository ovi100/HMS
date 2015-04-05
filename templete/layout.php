<?php
error_reporting(E_ALL);
session_start();
function pheader($title)
{
?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
    	<link rel="shortcut icon" href="images/tab-icon/favicon1.ico" type="image/x-icon"/>
    	<link rel="stylesheet" type="text/css" href="style.css"/>
<style type="text/css">
	#unimg 
            {
			background-color: #363B41;
			border-radius: 4px 0px 0px 4px;
		}
	#uname
            {
		  height: 40px;
		  width: 250px;
		  background-color: #3B4148;
		  border-style: none;
		  border-radius: 0px 4px 4px 0px;
	    }
	#pass 
          {
		height: 40px;
		width: 250px;
		font-weight: 20px;
		background-color: #3B4148;
		border-radius: 0px 4px 4px 0px;
		border-style: none;
	    }
	#lsb
          {
			height: 40px;
			width: 292px;
  			border-radius: 4px;
  			font-family: Courier New;
 			color: #ffffff;
                    cursor: pointer;
 			font-size: 20px; 
 			background: #3B4148;
  			border-style: none;
  			text-decoration: none;
		}

	#lsb:hover 
            {
  			background: #005B55;
 			text-decoration: none;
		}
	#su
          {
		height: 40px;
		line-height: 40px;
		color: #D44179;
	    }
	#su a
            {
		   color: #fff;
		   text-decoration: none;
		}
	#su a:hover
          {
		color: #0a60f5;
			
	   }
	#frm
            {
		   padding: 0px 5px 5px 0;
                margin: -5px ;
		}
	</style>
</head>
<body>
      <div id="wrapper">
	<div id="header">
	      <table width="99%"  border="0">
		<tr valign="top">
		     <td id="logo" width="45%"><a href="index.php">Hostel Management System</a></td>
		          <td  id="info" align="right">
			<a href="#">
			     <img src="images/icon/mi.png" width="20">ovi0167@hotmail.com</a>
			      &nbsp;&nbsp;&nbsp;
			     <a href="#"><img src="images/icon/m.png" width="22">01675600270</a>
			</td>
				
		</tr>

	      </table>
	</div>
<section id="middel"><img src="images/m.png" >
<table width="100%" border="0">
    <tr >

    <td valign="top" width="23%">
      <div id="menum">
        <ul>
        <li>
    <a href="index.php"><input type="button" id="btnm1" value="Home"></a>
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
    <a href="templete/register.php"><input type="button" id="btnm5" value="Registration"></a>
    </li>
    <li>
    <a href="#"><input type="button" id="btnm6" value="RSS"></a>
    </li>
  </ul>
  </div>
</td>

<td>
    <head>
    <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
    <!-- End of head section HTML codes -->
    
</head>
<body>
    
    <!-- Insert to your webpage where you want to display the slider -->
    <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:720px;margin:0px auto 48px;">
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
            <ul class="amazingslider-slides" style="display:none;">
                <li><img src="images/One Bed Room.jpg" alt="One Bed Room" />
                </li>
                <li><img src="images/Out Side Window.jpg" alt="Out Side Window" />
                </li>
                <li><img src="images/Big Hero 6.jpg" alt="Big Hero 6" />
                </li>
                <li><img src="images/Minions 2015.jpg" alt="Minions 2015" />
                </li>
            </ul>
        </div>
    </div>
    <!-- End of body section HTML codes -->
    
</body>
</td>

<td valign="top" align="right" width="2%">
    <form action="student.php" method="post" id="frm">
    <table width="20%" border="0">
        <tr bgcolor="black">
      <td id="unimg" width="10" valign="top"> 
      <img src="images/social/un.png" width="40" height="35">
      </td>
      <td valign="top"id="uname"> 
      <input type="text" id="uname" name="uname" placeholder="User Name">
      </td>
       </tr>
        <td id="unimg" width="10" valign="top"> 
      <img src="images/social/pass.png" width="40" height="35">
      </td>
      <td valign="top"id="pass"> 
      <input type="text" id="pass" name="pass" placeholder="****************">
      </td>
      <tr>
    <td colspan="2"><input type="submit" id="lsb" name="lsb" value="Login"></td>
    </tr>
    <tr>
    <td colspan="2" bgcolor="#3B4148">
    <p id="su">&nbsp;&nbsp;&nbsp;Not a member?
    <a href="templete/register.php">Sign up now&nbsp;<img src="images/icon/aro.png" width="18" height="10"></a>
    </p>
    </td>
    </tr>
  </table>
</form>
</td>
</tr>
</table>
	
</body>
</html>
</section>
<?php
}
function pfooter()
{
?>
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
    	  		<li id="fb"><a href="#"><img src="images/social/fba.png" width="25"></a></li>
    	  		<li id="tw"><a href="#"><img src="images/social/twa.png" width="25"></a></li>
    	  		<li id="in"><a href="#"><img src="images/social/ina.png" width="25"></a></li>
    	  		<li id="ut"><a href="#"><img src="images/social/uta.png" width="25"></a></li>
    	  	  </ul>
    	  	 </center>
    	  	</td>
    	  </tr>
    	 
    	  <tr>
    	  
    	  	<td id="rss" colspan="5"><a href=""><img src="images/social/rss.png" height="35"></a></td>
    	  </tr>
    	  <tr>

    	  	<td id="f-text" valign="bottom"  align="center" colspan="5" height="40">&copy CBoys'12 ,2015 | All Right Reserve</td>
    	 
    	  </tr>
    	</table>
    </div>
</div>
</body>
</html>
<?php	
}