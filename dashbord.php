<?php
session_start();


$name = $_SESSION['username'];
echo "Hello" .$name;

//$name = $_COOKIE['username'];
//echo "Hello" .$name;
?>