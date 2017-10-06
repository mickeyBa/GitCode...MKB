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
  <legend>Sign In</legend>
<table class="sign-in">
  <tr class ="email">
    <td><label>Email:</label></td>
<td><input class ="email" name = "email" type ="text" value="" placeholder="type your email" required /></td>
</tr>

  <tr class ="password">
    <td><label>Password:</label></td>
<td><input class ="password" name = "password" type ="password" value="" placeholder="type your password" required/></td>
</tr>

<tr >
  <td></td>
<td><input class ="button1" type="submit" name="button" value="Sign In" /></td>
</tr>
</table>
  </fieldset>
</form>
</div>
<?php
if(isset($_POST['button']))
{
$email = $_POST['email'];
$password = $_POST['password'];
$query ="SELECT * FROM users WHERE email ='$email' AND password='$password'";
$result=mysqli_query($conn, $query);

if (mysqli_num_rows($result)>0){
 //  valid
//  echo '<script type="text/javascript"> alert("Login Successful")</script>';

$_SESSION['email']=$email;
header('location:user.php');

}else{
  echo '<script type="text/javascript"> alert("Invalid Login")</script>';
}


}
?>
</div>


<div class ="footer">
<p class="footerText">Designed for Mass literacy by cdsTeam All Rights Reserved ® 2017 </p>

</div>
</body>
</html>
