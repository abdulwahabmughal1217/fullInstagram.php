<style>
  .btn-off {
    background: #1877f2;
    border: none;
    border-radius: 12px;
    padding: 12px;
    color: white;
    width: 100%;
    margin-bottom: 20px;
    transition: all 0.3s ease;
  }
  .btn-off:hover {
    background: #166fe5;
    transform: translateY(-1px);
  }
  /* Ensure equal height when image is shown */
  .post-content {
    display: flex;
    gap: 10px;
    height: 500px; /* fixed height for both sections */
  }
  .post-left, .post-right {
    flex: 1;
    border-radius: 10px;
    overflow: hidden;
  }
</style>
<div class="post-lay container-fluid min-vh-100 d-flex flex-column flex-lg-row align-items-center justify-content-center" style="background-color: rgba(0, 0, 0, 0.7);">
  <button type="button" class="close-btn position-absolute border-0" aria-label="Close" style="top: 20px; right: 10px;">
    <i class="bi bi-x-lg"></i>
  </button>

<form action="./uploadpost.php" method="post" enctype="multipart/form-data">
  <div class="d-flex flex-column flex-lg-row h-75     ">
    <!-- Left: Image Upload -->
    <div class="post-left bg-dark d-flex flex-column align-items-center justify-content-center">
      <div class="text-center p-2 border-bottom border-secondary d-flex align-items-center justify-content-between w-100" style="background-color: black;">
        <i class="bi bi-arrow-left l-arrow d-none" style="cursor: pointer;"></i>
        <span class="crop m-auto">Create new post</span>
        <span class="d-none next" style="cursor: pointer;">Next</span>
        <button type="submit" class="d-none share" style="background-color: rgba(0, 0, 0, 0.7); color: white; border: none">Share</button>
      </div>

      <img src="" class="object-fit-cover w-100 h-100 d-none image" alt="">
      <video class="object-fit-cover w-100 h-100 d-none video" controls></video>

      <div class="p-body p-4 text-center d-flex flex-column align-items-center justify-content-between">
        <div>
          <img src="https://cdn-icons-png.flaticon.com/512/685/685655.png" style="width: 4rem; opacity: 0.8;">
        </div>
        <p class="mt-3">Drag photos and videos here</p>
        
        <!-- Just the input and label, no nested form -->
        <input type="file" class="d-none input" name="image" id="image">
        <label for="image" class="btn btn-off">Select from device</label>
      </div>
    </div>

    <!-- Right: Caption & Location -->
    <div class="post-right p-3 d-none" style="background-color: #1c1c1c; color: white;">
      <div class="d-flex align-items-center mb-3">
        <img src="./download.png" class="rounded-circle me-2" alt="Profile" width="40" height="40">
        <span class="fw-bold"><?php echo $_SESSION['ticket'] ?></span>
      </div>

      <textarea name="caption" id="caption" class="form-control bg-dark text-white border-0 mb-2"
        placeholder="Write a caption..." style="resize: none; height: 150px;"></textarea>

      <div class="d-flex justify-content-between align-items-center small text-secondary mb-2">
        <i class="bi bi-emoji-smile"></i>
        <span id="charCount">0/1000</span>
      </div>

      <div style="cursor: pointer;" id="addLocation" 
        class="d-flex justify-content-between align-items-center border-top border-secondary pt-2"
        onclick="window.open('https://www.google.com/maps','_blank')">
        <span>Add Location</span>
        <i class="bi bi-geo-alt"></i>
      </div>
    </div>
  </div>
</form>


</div>

<script>
   let textarea = document.getElementById("caption");
  let charCount = document.getElementById("charCount");
  let maxChars =1000;

  textarea.addEventListener("input", function() {
    let length = textarea.value.length;
    charCount.textContent = {length}/{maxChars};
  });

let image = document.querySelector(".image");
let video = document.querySelector(".video");
let fileInput = document.querySelector("input");

fileInput.addEventListener("input", function (e) {
    let file = e.target.files[0];
    if (!file) return;

    let fileType = file.type;

    // For images
    if (fileType.startsWith("image")) {
        image.src = URL.createObjectURL(file);
        image.classList.remove("d-none");
        video.classList.add("d-none");
        video.pause();
        video.src = "";
    }
    // For videos
    else if (fileType.startsWith("video")) {
        video.src = URL.createObjectURL(file);
        video.classList.remove("d-none");
        image.classList.add("d-none");
        video.muted = true;
        video.loop = true;
        video.controls = true;
        video.play();
    }

    // Common UI changes for both
    document.querySelector(".p-body").classList.add("d-none");
    document.querySelector(".post-right").classList.remove("d-none");
    document.querySelector(".l-arrow").classList.remove("d-none");
    document.querySelector(".next").classList.remove("d-none");
    document.querySelector(".next").innerHTML = 'Next';
    document.querySelector(".crop").innerHTML = 'Crop';
});
document.querySelector(".l-arrow").addEventListener("click", function () {
    image.classList.add("d-none");
    video.classList.add("d-none");
    document.querySelector(".p-body").classList.remove("d-none");
    document.querySelector(".post-right").classList.add("d-none");
    document.querySelector(".l-arrow").classList.add("d-none");
    document.querySelector(".next").classList.add("d-none");
    document.querySelector(".crop").innerHTML = 'Create new post';
    image.src = '';
    video.pause();
    video.src = '';
});
  document.querySelector(".next").addEventListener("click" , function(){
    document.querySelector(".post-right").classList.add("d-none");
    document.querySelector(".crop").innerHTML = 'Create new post'
    document.querySelector(".share").classList.remove("d-none")
    document.querySelector(".next").classList.add("d-none")
    document.querySelector(".l-arrow").classList.remove("d-none");
  })
</script>