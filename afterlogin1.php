<?php
session_start();
if(!isset($_SESSION['username']))
{
  header("location= login.php");
}
$name=$_SESSION['username'];
include 'server.php';
$result=mysqli_query($con,"SELECT username,email,mobno FROM signin WHERE username='$name'");
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
       $name=$row['username'];
       $email=$row['email'];
       $number=$row['mobno'];
}}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dcgram</title>
    <link rel="icon" type="image/png" sizes="32x32" href="dc lo.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" >
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
  </head>
  <body>
<section>
<div  id="menu">
    <nav>
        <br>
        <button class="btn btn-large">
            <a href="#" id="name">
                <img src="instagram-logo.png" width="150px" alt="">
            </a>
        </button><br>
        <button class="btn btn-large ">
            <a href="#"><h5><b><i class="bi bi-house"></i></b></h5>Home</a>
        </button><br>
        <button class="btn btn-large">
            <a href="#"><h5><b><i class="bi bi-search"></i></b></h5>Search</a>
        </button><br>
        <button class="btn btn-large">
            <a href="#"><h5><b><i class="bi bi-compass"></i></b></h5>Explore</a>
        </button><br>
        <button class="btn btn-large">
            <a href="#"><h5><b><i class="bi bi-music-note"></i></b></h5>Reels</a>
        </button><br>
        <button class="btn btn-large">
            <a href="#"><h5><b><i class="bi bi-messenger"></i></b></h4>Messages</a>
        </button><br>
        <button class="btn btn-large">
            <a href="#"><h5><b><i class="bi bi-heart"></i></b></h5>Notifications</a>
        </button><br>
        <button class="btn btn-large">
            <a href="#"><h5><b><i class="bi bi-plus-square"></i></b></h5>Create</a>
        </button><br>
        <button class="btn btn-large">
            <a href="#"><h5><b><i class="bi bi-person-circle"></i></b></h5><?php echo $_SESSION['username']; ?></a>
              </button><br>
        <button class="btn btn-large">
            <a href="#"><h5><b><i class="bi bi-envelope"></i></b></h5><?php echo $email; ?></a>
              </button>
        <button class="btn btn-large">
            <a href="index.html"><h5><b><i class="bi bi-box-arrow-left"></i></b></h5>Logout</a>
        </button>
    </nav>
</div>
<div  id="homepage">
    <div class="story">
<div class="stories"><img src="a1.jpg" alt=""><figcaption>_Batman_</figcaption></div>
<div class="stories"><img src="a2.jpg" alt=""><figcaption>_Superman_</figcaption></div>
<div class="stories"><img src="a3.jpg" alt=""><figcaption>Wonder_Woman&nbsp;</figcaption></div>
<div class="stories"><img src="a4.jpg" alt=""><figcaption>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_Flash_</figcaption></div>
<div class="stories"><img src="a5.jpg" alt=""><figcaption>&nbsp;&nbsp;_Aquaman_</figcaption></div>
<div class="stories"><img src="a6.jpg" alt=""><figcaption>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_Joker_</figcaption></div>
<div class="stories"><img src="a7.jpg" alt=""><figcaption>Harley_Quinn</figcaption></div>
<div class="stories"><img src="logo.jpg" alt=""><figcaption>_dc_comics_</figcaption></div>
</div>
    <br>
<div class="postheader"><img src="a1.jpg" alt=""><h6>_Batman_</h6><i class="bi bi-three-dots"></i></div>
<div class="post">
    <video src="bvs.mp4" alt="" controls="false" loop></video>
</div><br>
<div class="comment"><h4><i class="bi bi-heart"></i><i class="bi bi-chat"></i><i class="bi bi-bookmark-fill"></i></h4>
</div>
<div class="like"><h6>14.1M likes and followed by dcomics </h6><p><pre>
"Fear the night. Unleash the Batman."
.
.
.
#Batman #batman #Bat_man #bat_Man #Batman v Superman 
#DC #batman_DC #DC universe #dc batman #DC Batman #sigma
#DC #Gothamcity #Bruce Wayne #Dark Knight</pre>
<h6 class="unbold">View all 6M comments<br></h6>
<h6 class="bold">joker</h6>
<h6 class="unbold">why so serious?<br>
<h6 class="bold">gordon</h6>
<h6 class="unbold">we need you batman<br>
Add a comment...</h6></p></div>


<div class="postheader"><img src="a2.jpg" alt=""><h6>_Superman_<i class="bi bi-three-dots"></i></h6></div> 
<div class="post">
<img src="b2.jpg" alt="">
</div><br>
<div class="comment"><h4><i class="bi bi-heart-fill"></i><i class="bi bi-chat"></i><i class="bi bi-bookmark"></i></h4></div>
<div class="like"><h6>11.5M likes and followed by dcomics</h6><p><pre>
"Truth , Justice and American way."
.
.
.
#Superman #superman #Super_man #super_man #Batman v Superman
#DC  #superman_DC #DC universe #dc superman #DC Superman 
#Symbol of Hope #superman #Superman</pre>
<h6 class="unbold">View all 4.7M comments<br></h6>
<h6 class="bold">batman</h6>
<h6 class="unbold">Men are brave!<br>Add a comment...</h6></p></div>


<div class="postheader"><img src="a3.jpg" alt=""><h6>Wonder_Woman<i class="bi bi-three-dots"></i></h6></div> 
<div class="post">
<img src="b3.jpg" alt="">
</div><br>
<div class="comment"><h4><i class="bi bi-heart"></i><i class="bi bi-chat"></i><i class="bi bi-bookmark"></i></h4></div>
<div class="like"><h6>8.3M likes and followed by dcomics</h6><p><pre>
"So long as life remains, there is always hope... 
and so long as there is hope, there can be victory!"
#Wonder Woman #Wonder_Woman_1984 #WW84 #wonder_woman 
#Gal Gadot </pre>
<h6 class="unbold">View all 5M comments<br>Add a comment...</h6></p></div>


<div class="postheader"><img src="a4.jpg" alt=""><h6>_Flash_<i class="bi bi-three-dots"></i></h6></div> 
<div class="post">
<img src="b4.webp" alt="">
</div><br>
<div class="comment"><h4><i class="bi bi-heart-fill"></i><i class="bi bi-chat"></i><i class="bi bi-bookmark-fill"></i></h4></div>
<div class="like"><h6>2.3M likes and followed by dcomics</h6><p><pre>"Empower the extraordinary within."
#Flash #flash #flash_DC #DC #dc_flash </pre>
    <h6 class="unbold">View all 70K comments<br>Add a comment...</h6></p></div>


<div class="postheader"><img src="a5.jpg" alt=""><h6>_Aquaman_<i class="bi bi-three-dots"></i></h6></div> 
<div class="post">
<img src="b5.jpg" alt="">
</div><br>
<div class="comment"><h4><i class="bi bi-heart"></i><i class="bi bi-chat"></i><i class="bi bi-bookmark-fill"></i></h4></div>
<div class="like"><h6>3.8M likes and followed by dcomics</h6><p><pre>
    "Protector of the deep, ruler of the seas."
    #Born to be Ruler.....#Aquaman DC #Aquaman </pre>
    <h6 class="unbold">View all 1.2M comments<br>Add a comment...</h6></p></div>


<div class="postheader"><img src="a6.jpg" alt=""><h6>_Joker_<i class="bi bi-three-dots"></i></h6></div> 
<div class="post">
<img src="b6.jpg" alt="">
</div><br>
<div class="comment"><h4><i class="bi bi-heart-fill"></i><i class="bi bi-chat"></i><i class="bi bi-bookmark"></i></h4></div>
<div class="like"><h6>12.1M likes and followed by dcomics</h6><p><pre>
    "To kill Batman."
 #JOKER #JOKER V BATMAN #Batman The Dark Knight #Joker dark 
 knight  #Heath ledger
</pre>
    <h6 class="unbold">View all 8M comments<br>Add a comment...</h6></p></div>


<div class="postheader"><img src="a7.jpg" alt=""><h6>Harley_Quinn<i class="bi bi-three-dots"></i></h6></div> 
<div class="post">
    <img src="b7.jpg" alt="">
</div><br>
<div class="comment"><h4><i class="bi bi-heart"></i><i class="bi bi-chat"></i><i class="bi bi-bookmark-fill"></i></h4></div>
<div class="like"><h6>7M likes and followed by dcomics</h6><p><pre>
    "Crazy meets chaos in the heart of mayhem."
    #harley quinn #Harley Quinn </pre>
    <h6 class="unbold">View all 3M comments<br>Add a comment...</h6></p></div>


<div class="postheader"><img src="logo.jpg" alt=""><h6>_dc_comics_<i class="bi bi-three-dots"></i></h6></div> 
<div class="post">
<video src="jokvid.mp4" alt="" type="video/mp4" controls="false"  loop></video>
</div><br>
<div class="comment"><h4><i class="bi bi-heart-fill"></i><i class="bi bi-chat"></i><i class="bi bi-bookmark"></i></h4></div>
<div class="like"><h6>30M likes and followed by Batman,Superman,Wonder...</h6><p><pre>#Joker #joker #Why so serious? #The Dark knight  </pre>
    <h6 class="unbold">View all 11.4M comments<br>Add a comment...</h6></p></div>


</div>
            
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  </body>
</html>
<?php
session_start();
if(isset($_SESSION['username'])){
    echo "Username: " . $_SESSION['username'] . "<br>";
}
if(isset($_SESSION['email'])){
    echo "Email: " . $_SESSION['email'] . "<br>";
}
if(isset($_SESSION['mobno'])){
    echo "Number: " . $_SESSION['mobno'];
}
?>