<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'instagram') or die("Connection Failed");
$profile_img = $_FILES['profile_image']['name'];
$tmp_img = $_FILES['profile_image']['tmp_name'];

$_SESSION['p_image'] = $tep_img ;
move_uploaded_file($tmp_img,"./profile.image/".$profile_img); 
$sql = "UPDATE user set p_image='$profile_img' where id={$_SESSION['id']}";
if (mysqli_query($con, $sql)) {
    header("Location: profile.php?success=1");
    exit();
} else {
    header("Location: profile.php?error=1");
    exit();
}
?>