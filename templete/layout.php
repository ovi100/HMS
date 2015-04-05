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
?>