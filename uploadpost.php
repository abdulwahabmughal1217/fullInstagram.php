<?php
session_start();

if (!isset($_SESSION['id'])) {
    die("Error: You must be logged in to post.");
}   

$caption = $_POST['caption'];
$imgname = $_FILES['image']['name'];
$imgtem = $_FILES['image']['tmp_name'];
$u_id = $_SESSION['id'];

move_uploaded_file($imgtem, './post.image/' . $imgname);

$con = mysqli_connect('localhost', 'root', '', 'instagram') or die("Connection Failed");

$insert = "INSERT INTO post (image, caption, user_id) VALUES ('$imgname', '$caption', '$u_id')";
mysqli_query($con, $insert) or die(mysqli_error($con));

$_SESSION['post_img'] = $imgtem ;

header("Location: http://localhost:3000/index.php");
exit;

?>
