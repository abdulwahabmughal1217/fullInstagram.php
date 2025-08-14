<?php
session_start();
$email = $_POST['email'];
$pass = $_POST['pass'];
$con = mysqli_connect('localhost', 'root', '', 'instagram') or die("Connection Failed");

$login = "SELECT * FROM user WHERE (email = '$email' OR u_name = '$email') AND password = '$pass'";

$res = mysqli_query($con, $login) or die(mysqli_error($con));
if (mysqli_num_rows($res)> 0) {
    foreach ($res as $key => $item) {
        $_SESSION['ticket'] = $item['u_name'];
        $_SESSION['tickets'] = $item['eamil'];
        $_SESSION['name'] = $item['name'];
        $_SESSION['id'] = $item['id'];
        $_SESSION['welcome'] = 'back, '.$item['name'];
        header("Location: http://localhost:3000/index.php"); 
    }
}else{
    $_SESSION['invaild'] = "Sorry, your password is incorrect. Please check your password again.";
    header("Location: http://localhost:3000/log-in.php"); 
}
?>