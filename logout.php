<?php
session_start(); 
    $uname='';
    if(isset($_SESSION['uname']))
    $uname=$_SESSION['uname'];
session_destroy(); 
header('location:index.php');
?>