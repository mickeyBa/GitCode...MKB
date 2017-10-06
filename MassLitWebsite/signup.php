<?php
require("connect.php");
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



<div class="signupbox">
  <form action="signup.php" method="post">
<fieldset class ="signup" name="signupbox" >
  <legend>Sign Up</legend>
<table class="sign-up">
  <tr >
    <td><label>Name:</label></td>
<td><input class ="name" name = "name" type ="text" value="" placeholder="Type your name" required/></td>
</tr>
  <tr >
    <td><label>Email:</label></td>
<td><input class ="email" name = "email" type ="text" value=""  placeholder="Type your email" required/></td>
</tr>
<tr >
  <td><label>Phone No.:</label></td>
<td><input class ="phone" name = "phone" type ="text" value=""  placeholder="Type your phone number" required/></td>
</tr>
  <tr >
    <td><label>Password:</label></td>
<td><input class ="password" name = "password" type ="password" value=""  placeholder="Type your password" required/></td>
<td><input class ="password" name = "cpassword" type ="password" value=""  placeholder="Confirm password" required/></td>

</tr>

<!-- <tr>
  <td></td>
<td><input class ="password" name = "cpassword" type ="password" value=""  placeholder="Confirm password" required/></td>
</tr> -->

<tr >
<td></td>
<td><input class ="button1" type="submit" name="sign-up" value="Sign Up"/></td>
</tr>
</table>
  </fieldset>
</form>
<?php
if (isset($_POST['sign-up']))
{
  $name=$_POST['name'];
$email = $_POST['email'];
  $phone=$_POST['phone'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if($password == $cpassword){
$query="SELECT * FROM users WHERE email ='$email'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)> 0){

  echo '<script type="text/javascript"> alert("Email user already exist... Try again");</script>';
}else{

  $query ="INSERT INTO users (name, email, phone, password) VALUES ('$name','$email','$phone','$password')";

$result = mysqli_query($conn,$query);

if ($result){
  echo '<script type="text/javascript"> alert("User Registered...Go to Login Page to Login"); </script>';


}else{
  echo '<script type="text/javascript"> alert("Error!!!"); </script>';


}
}
}else{
  echo '<script type="text/javascript"> alert("Passwords do not match!!!"); </script>';

}

}

?>
</div>
</div>


<div class ="footer">
<p class="footerText">Designed for Mass literacy by cdsTeam All Rights Reserved ® 2017 </p>

</div>
</body>
</html>
