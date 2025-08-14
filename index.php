<?php
session_start();
if (!isset($_SESSION['ticket'])) {
   header("Location: http://localhost:3000/log-in.php"); 
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include './bootstrap.php'; ?>
  <title>Instagram</title>
  <style>
    body {
      background-color: #000;
      color: white;
    }
    .main-content {
      padding-bottom: 60px;
    }
    #welcomeBar {
    position: fixed;
    top: -15%;
    left: 50%;
    transform: translateX(-50%);
    background: linear-gradient(45deg, #405de6, #5851db, #833ab4, #e1306c);
    color: white;
    padding: 5px;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 100;
    box-shadow: 0 5px 20px rgba(0,0,0,0.3);
    display: flex;
    align-items: center;
    gap: 8px;
    transition: top 0.6s ease;
    z-index: 9999;
}
.post-section {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.4s ease, transform 0.4s ease;
}

.post-section.show {
    opacity: 1;
    transform: translateY(0);
}
#welcomeBar i {
    font-size: 1rem;
}
  </style>
</head>
<body>
<div id="welcomeBar">
    <i class="fas fa-smile"></i> Welcome<strong><?php 
    if (isset($_SESSION['welcome'])) {
      echo "<p class='m-auto text-center'>{$_SESSION['welcome']}</p>";
    }
    else{
      echo "<p class='m-auto text-center'>{$_SESSION['name']}</p>";
    }
    unset($_SESSION['welcome']);
    ?></strong> 🎉
</div>
   <div class="d-none post-section">
    <?php include'./postlay.php'?>
   </div>
  <!-- Sidebar (visible on md and up) -->
  <div class="d-none d-md-block position-fixed start-0 top-0 h-100" style="width: 220px;">
    <?php include './sildbar.php'; ?>
  </div>

  <!-- Bottom navbar (visible on small screens only) -->
  <div class="d-lg-none">
    <?php include './bottom_navbar.php'; ?>
  </div>

  <!-- Main content -->
  <div class="container-fluid main-content ps-md-5">
    <div class="row">
      <!-- Leave empty column on md+ to offset sidebar -->
      <div class="d-none d-md-block col-md-2"></div>
      <!-- Reels center area -->
      <div class="col-12 col-md-10 col-xl-7">
        <?php include './reel.php'; ?>
      </div>

      <!-- Optional right column -->
      <div class="d-none d-xl-block col-xl-3">
         <?php include './message.php'; ?>
      </div>
    </div>
  </div>
  <script>
    let post = document.querySelector(".post");
    let close = document.querySelector(".close-btn");
let post_section = document.querySelector(".post-section");

post.addEventListener("click", function () {
    console.log("salam");
    post_section.classList.remove('d-none');
    setTimeout(() => {
        post_section.classList.add('show');
    }, 10);
});
close.addEventListener("click", function () {
    console.log("w-salam");
    post_section.classList.add('d-none');
    setTimeout(() => {
        post_section.classList.add('show');
    }, 10);
});
document.querySelector(".post2").addEventListener("click", function () {
    console.log("Clicked on post");
    post_section.classList.remove('d-none');
    setTimeout(() => {
        post_section.classList.add('show');
    }, 10);
});
document.addEventListener('DOMContentLoaded', function() {
    let bar = document.getElementById('welcomeBar');
    setTimeout(() => {
        bar.style.top = "5%";
    }, 500);
    setTimeout(() => {
        bar.style.top = "-15%";
    }, 3000);
});
  </script>
</body>
</html>
