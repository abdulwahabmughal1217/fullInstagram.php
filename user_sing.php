<?php
session_start();
$n = $_POST['name'];
$p = $_POST['password'];
$e = $_POST['email'];
$u = $_POST['u_name'];

$con = mysqli_connect('localhost', 'root', '', 'instagram') or die("Connection Failed");

$insert = "INSERT INTO user (name, email, u_name, password) VALUES ('$n', '$e', '$u', '$p')";


$res = mysqli_query($con, $insert) or die(mysqli_error($con));

$_SESSION['ticket'] = $u;
$_SESSION['name'] = $n;
$_SESSION['id'] = mysqli_insert_id($con);

header("Location: http://localhost:3000/index.php"); 
?>
