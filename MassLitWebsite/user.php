<?php
require("connect.php");
session_start();
?>
<html>
<head>
<title> NYSC YOUTH CORPS MEMBERS (MASS LITERACY)</title>
<link rel ="stylesheet" href="mass.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class ="header">

  <a href="mass.html"><img class="images" src="C:\xampp\htdocs\MassLit\image\NYSClogo.png" width="120px" height="133px" /></a>

  <h1>Welcome!!! Mass Litracy</h1>
  <h2>We are here educate all... </h2>

  <div class="nav">
  <ul class="list-group">
  <li class="list-item"><a class="aLink" href="mass.html">Home</a></li>
  <li class="list-item"><a class="aLink" href="gallery.html">Gallery</a></li>
  <li class="list-item"><a class="aLink" href="about.html">About</a></li>
  <li class="list-item"><a class="aLink" href="contacts.html">Contacts</a></li>
  </ul>

  <ul class="list-group">
  <li class="list-item"><a class="aLink" href="signin.php">Sign-In</a></li>
  <li class="list-item"><a class="aLink" href="signup.php">Register</a></li>
  </ul>

  </div>
</div>

<div class="bodyMain">
<h1 class="black">Body</h1>



<div class="signinbox">
  <form action="" method="post">
    <fieldset class ="signin" name="signinbox" >
      <legend>Log Out</legend>
    <table class="sign-in">

<tr >
  <td></td>
<td><input class ="button" type="submit" name="button" value="Log Out" /></td>
</tr>
</table>
  </fieldset>
</form>
</div>
<?php
if(isset($_POST['button']))
{
session_destroy();
$_SESSION['email']=$email;
header('location:signin.php');
}
?>
</div>


<div class ="footer">
<p class="footerText">Designed for Mass literacy by cdsTeam All Rights Reserved ® 2017 </p>

</div>
</body>
</html>
