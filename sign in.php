<!DOCTYPE html>
<html lang="en">
<head>
  <style>
  body{display: flex;
    align-items: center;
    justify-content: center;
    font-family: sans-serif;
    line-height: 1.5;
    min-height: 100vh;
    background: #000000;
    flex-direction: column;
    margin: 0;
  }</style>
    <title>DC Comics</title>
    <link rel="icon" type="image/png" sizes="32x32" href="logo.jpg">
    <link rel="stylesheet" href="sig.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
   <script>
  function formvalidation(){
    let x=document.forms["form2"]["username"].value;
    let y=document.forms["form2"]["email"].value;
    let z=document.forms["form2"]["password"].value;
    let n=document.forms["form2"]["mobno"].value;
    if(x==""){
      alert("Name must be filled out");
      return false;
    }
    if(y=="")
    {
      alert("E-Mail must be filled out");
      return false;
    }
    if(z=="")
    {
      alert("password must be filled out");
      return false;
    }
    if(n=="")
    {
      alert("Mobile number must be filled out");
      return false;
    }
    
  function newfunction(){
    document.getElementByTd('Form2').reset();
  }
  }
  </script>      
  </head>
<body style="background-image: url('sig.jpg');
 background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;"></body>
   <div class="main">
    <img src="dclo.jpeg" alt="" height="100" width="100">
    <h1>DCGRAM</h1>
    <h3>Enter your credentials</h3>
    <form action="sign in.php" method="post" id="Form2" name="form2" onsubmit="return formvalidation()">
        <label for="first">
              Username:
          </label>
        <input type="text"
               id="username"
               name="username"
               placeholder="Enter your username" required>
          <label for="email">
                Email:
            </label>
          <input type="email"
                 id="email"
                 name="email"
                 placeholder="Enter your email" required>
          <label for="password">
                  Password:
              </label>
            <input type="password"
                   id="password"
                   name="password"
                   placeholder="Enter your password" required>
          <label for="email">
                Mobile Number:
            </label>
            <input type="tel" maxlength="10" minlength="10" 
               id="mobno"
               name="mobno"
               placeholder="Enter your Mobile Number" required><br>
        <div class="wrap">
            <button type="submit">
                Sign in
            </button>
        </div>
    </form>
</body>
</html>
<?php 
$registered=0;
$userexsists=0;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'server.php';
    $name=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $mobno=$_POST['mobno'];
    $sql="SELECT * FROM mlb30 WHERE username='$name'";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        $num=mysqli_num_rows($result);
    }
    if($num>0)
    {
        $userexsists=1;
        echo '<p style="color: black;align:center;">username already exist.</p>';
    }
    else{
        $sql="INSERT INTO mlb30 (username,email,password,mobno) VALUES ('$name','$email','$password','$mobno')";
        $result=mysqli_query($con,$sql);
        if($result)
        {
           $registered=1;
           session_start();
$_SESSION['username']=$name;
$_SESSION['email']=$email;
$_SESSION['mobno']=$mobno;
header('location:aftersignin.php');
        }
        else{
            die(mysqli_error($con));
        }
    
    }
}
?>
