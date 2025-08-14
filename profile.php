<?php
session_start();
$username = isset($_SESSION['ticket']) ? $_SESSION['ticket'] : 'Username';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $username; ?> • Instagram</title>
  <?php include './bootstrap.php'?>
  <style>
  body {
    background-color: #000;
    color: white;
  }
  .main-content {
    margin-left: 220px;
    padding: 2rem 1rem 1rem 1rem;
    min-height: 100vh;
    transition: margin-left 0.3s;
  }
  .profile-header {
    display: flex;
    align-items: center;
    padding: 2rem 0;
  }
  .profile-pic {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 2rem;
    border: 2px solid #ddd;
  }
  .profile-info {
    flex: 1;
  }
  .profile-info h2 {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
  }
  .profile-stats {
    display: flex;
    gap: 2rem;
    margin-top: 1rem;
  }
  .profile-stats div {
    font-weight: bold;
    font-size: 1rem;
  }
  .profile-bio {
    margin-top: 1rem;
    font-size: 1rem;
    color: #ccc;
  }
  .card img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 10px;
  }
  @media (max-width: 991px) {
    .main-content {
      margin-left: 0;
      padding: 1rem;
    }
    .profile-header {
      flex-direction: column;
      align-items: center;
      padding: 1rem 0;
    }
    .profile-pic {
      margin-right: 0;
      margin-bottom: 1rem;
      width: 100px;
      height: 100px;
    }
    .profile-info {
      width: 100%;
      text-align: center;
    }
    .profile-stats {
      justify-content: center;
      gap: 1.5rem;
    }
  }
  @media (max-width: 575px) {
    .main-content {
      padding: 0.5rem;
    }
    .profile-header {
      padding: 0.5rem 0;
    }
    .profile-pic {
      width: 80px;
      height: 80px;
    }
    .profile-info h2 {
      font-size: 1.1rem;
    }
    .profile-stats {
      gap: 1rem;
      font-size: 0.9rem;
    }
    .card img {
      height: 120px;
    }
  }
  </style>
</head>
<body>
    <!-- Bottom navbar (visible on small screens only) -->
  <div class="d-lg-none d-sm-block h-auto">
    <?php include './bottom_navbar.php'; ?>
  </div>
  <div class="d-none post-section">
    <?php include'./postlay.php'?>
   </div>
  <?php include 'sildbar.php'; ?>
  <div class="main-content">
    <div class="container py-4">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
          <div class="d-flex flex-column flex-md-row align-items-center mb-4">
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'instagram') or die("Connection Failed");
            $user_id = $_SESSION['id'];
            $query = "SELECT p_image FROM user WHERE id = '$user_id'";
            $result = mysqli_query($con, $query);
            $res = mysqli_fetch_assoc($result);
            if (empty($res['p_image'])) {
                echo "<img src='./download.png' alt='Profile Picture' class='profile-pic mb-3 mb-md-0 me-md-4' style='width:120px;height:120px;border-radius:50%;object-fit:cover;border:2px solid #ddd;'>";
            } else {
                echo "<img src='./profile.image/{$res['p_image']}' alt='Profile Picture' class='profile-pic mb-3 mb-md-0 me-md-4' style='width:120px;height:120px;border-radius:50%;object-fit:cover;border:2px solid #ddd;'>";
            }
            ?>
            <div class="flex-grow-1 text-center text-md-start">
              <h2 class="h4 mb-2"><?php echo $username; ?></h2>
              <button class="btn btn-outline-light btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#editProfileModal">Edit Profile</button>
              <div class="d-flex justify-content-center justify-content-md-start gap-4 mb-2">
                <div>Posts <span>0</span></div>
                <div>Followers <span>0</span></div>
                <div>Following <span>0</span></div>
              </div>
              <div class="profile-bio text-muted">
                <p class="mb-0">This is your bio. Edit your profile to add info!</p>
              </div>
            </div>
          </div>
          <!-- Edit Profile Modal -->
          <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <form class="modal-content" action="./update_profile.php" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                  <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="mb-3 text-center">
                    <?php
                    echo"
                    <img src='./profile.image/{$res['p_image']}' alt='Profile Picture' class='rounded-circle mb-2' width='80' height='80' id='previewImg'>
                    ";
                    ?>
                    <input type="file" class="form-control" name="profile_image" accept="image/*" onchange="document.getElementById('previewImg').src = window.URL.createObjectURL(this.files[0])">
                  </div>
                  <div class="mb-3">
                    <label for="editName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="editName" name="name" value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?>" required>
                  </div>
                  <div class="mb-3">
                    <label for="editPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="editPassword" name="password" placeholder="Enter new password">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
          </div>
          <hr class="bg-secondary">
          <div class="row g-3">
            <!-- Example posts grid -->
            <div class="col-4 col-sm-4 col-md-4">
              <div class="card bg-dark border-0">
                <img src="./ima-1.jpg" alt="" class="img-fluid rounded">
              </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4">
              <div class="card bg-dark border-0">
                <img src="./ima-1.jpg" alt="" class="img-fluid rounded">
              </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4">
              <div class="card bg-dark border-0">
                <img src="./ima-1.jpg" alt="" class="img-fluid rounded">
              </div>
            </div>
            <!-- Add more post thumbnails as needed -->
          </div>
        </div>
      </div>
    </div>
  </div>


</html></body>
  <!-- Only the Message Box from message.php -->
  <div class="position-fixed bottom-0 end-0 me-3 mb-3 d-none d-md-block z-1 ">
    <div class="bg-dark border border-secondary rounded-4 p-3 shadow-lg" style="width: 300px;height: 60px;">
      <div class="d-flex justify-content-between align-items-center mb-2">
        <strong>Messages</strong>
        <i class="bi bi-x-lg" role="button"></i>
      </div>
      <div class="text-muted small">
        No new messages
      </div>
    </div>
  </div>
  <script>
     let post = document.querySelector(".post");
    let close = document.querySelector(".close-btn");
let post_section = document.querySelector(".post-section")
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
  </script>
</body>
</html>