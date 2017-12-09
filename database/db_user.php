<?php

 include('db_connect.php');

$username=$_POST['username'];
$password =$_POST['password'];
$button = $_POST['button'];
$s_status=2;
$l_status=2;
if($button=='Sign Up!'){
	$f_name=$_POST['first_name'];
	$l_name=$_POST['last_name'];
	$email =$_POST['email'];
	$q="insert into users(f_name,l_name,username,email,password) values('$f_name','$l_name','$username','$email','$password')";
	$s_status=mysqli_query($con,$q);
}
if($button=='Login'){
	$q="select * from users where username='$username' and password='$password'";
	$user = mysqli_query($con,$q);
	$l_status = mysqli_num_rows($user);
}
?>

<!Doctype html>
<html>

 <head>
  <title></title>
 </head>

 <body>
  <header>
	<h1>ASW</h1>
   </header>
  
  <p>
   <?php 
    if($s_status==1)
		header('location:../index.php');
	else if($s_status==0)
		header('location:../signup_form.php');
	
   ?>
   
  </p>
  <p>
   <?php 
    if($l_status==1)
		header('location:../home.php');
	else if($l_status==0)
		header('location:../login_form.php');
   ?>
  </p>
 </body>
</html>