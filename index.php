<?php

require_once("templete/layout.php");

pheader("HMS");

?>

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

pfooter();

?>