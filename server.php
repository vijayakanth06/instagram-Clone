<?php

$HOSTNAME='sql201.infinityfree.com';
$USERNAME='if0_37049318';
$PASSWORD='mErgT0wDQUn';
$DATABASE='if0_37049318_instagram';
$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if($con){
    echo "";
}
else{
    die(mysqli_error($con));
}
?>