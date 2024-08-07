<!DOCTYPE html>
<html lang="en">
<head>
  <style>body{display: flex;
    
    font-family: sans-serif;
    line-height: 1.5;
    min-height: 100vh;
    background: #000000;
    flex-direction: column;
    margin: 0;
  }</style>
    <title>DC Comics</title>
    <link rel="icon" type="image/png" sizes="32x32" href="logo.jpg">
    <link rel="stylesheet" href="log.css">
</head>
<body style="background-image: url('llo.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">
<br><br>
<div class="main">
  <img src="dc lo.jpeg" alt="" height="100" width="100">
  <h1>DCGRAM</h1>
  <h3>Enter your login credentials</h3>
  <form action="log in.php" method="post" id="Form1" name="form1" onsubmit="return formvalidation()">
      <label for="username">
            Username:
        </label>
      <input type="text"
             id="username"
             name="username"
             placeholder="Enter your Username" required>

      <label for="password">
            Password:
        </label>
      <input type="password"
             id="password"
             name="password"
             placeholder="Enter your Password" required>

      <div class="wrap">
          <button type="submit">
              Login
          </button>
      </div>
  </form>
  <p  style="color:white;">Not registered?
        <a class="cre" href="sign in.php"
         style="color:white;">
          Create an account
      </a>
  </p>
  </div>
</body>
</html>
<?php
$logged=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
include 'server.php';
$name=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM signin WHERE username='$name' AND password='$password'";
$result=mysqli_query($con,$sql);
if($result){
$num=mysqli_num_rows($result);
if($num>0){
$logged=1;
session_start();
$_SESSION['username']=$name;
$_SESSION['password']=$password;
header('location:afterlogin1.php');
}
else{
$invalid=1;
echo '<p style="color: white; text-align: center;">Invalid username or password.</p>';
}
}
}
?>
