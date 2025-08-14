<div class="d-flex align-items-center justify-content-between py-4" style="max-width: 350px;">
  <!-- Profile -->
  <div class="d-flex align-items-center">
    <?php
            $con = mysqli_connect('localhost', 'root', '', 'instagram') or die("Connection Failed");
            $user_id = $_SESSION['id'];
            $query = "SELECT p_image FROM user WHERE id = '$user_id'";
            $result = mysqli_query($con, $query);
            $res = mysqli_fetch_assoc($result);
                echo "
                <img src='./profile.image/{$res['p_image']}' 
         alt='Profile' 
         class='rounded-circle me-2' 
         style='width: 50px; height: 50px; object-fit: cover;'>
                ";
            ?>
    <div>
      <strong class="d-block" style="font-size: 1rem;">
        <?php
        echo $_SESSION['ticket']
        ?>
      </strong>
      <small class="text-light">
        <?php
        echo $_SESSION['name']
        ?>
      </small>
    </div>
  </div>

  <!-- Switch -->
  <a href="#" class="text-primary fw-bold " style="font-size: 0.9375rem;">Switch</a>
</div>

<!-- Suggested -->
<div class="d-flex justify-content-between align-items-center px-2 mt-2" style="max-width: 350px;">
  <small class="text-light">Suggested for you</small>
  <a href="#" class="text-white fw-bold" style="font-size: 0.75rem;">See All</a>
</div>

  
<!-- Message Box (fixed on bottom-right, only visible on md and up) -->
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