<style>
    .body {
        background-color: #000;
        color: #fff;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    }

    .story-circle img {
        border: 3px solid #d6249f;
        border-radius: 50%;
        width: 70px;
        height: 70px;
        object-fit: cover;
        cursor: pointer;
        transition: transform 0.2s ease;
    }

    .story-circle img:hover {
        transform: scale(1.05);
    }

    .reel-container {
        background-color: #1c1c1c;
        border-radius: 12px;
        padding: 15px;
        margin-bottom: 20px;
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
    }

    .reel-video {
        width: 100%;
        height: 600px;
        object-fit: cover;
        border-radius: 12px;
        cursor: pointer;
    }

    .profile-img {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        object-fit: cover;
    }

    .action-icons i {
        font-size: 1.8rem;
        margin-right: 20px;
        cursor: pointer;
        transition: transform 0.2s ease, color 0.2s ease;
    }

    .action-icons i:hover {
        transform: scale(1.1);
        color: #d6249f;
    }

    /* Post Overlay Styles */
    .post-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.95);
        z-index: 1000;
        display: none;
        align-items: center;
        justify-content: center;
    }

    .post-wrapper {
        background-color: #1a1a1a;
        border-radius: 12px;
        max-width: 90%;
        max-height: 90%;
        overflow: hidden;
        position: relative;
        display: flex;
    }
      .mute-btn {
      font-size: 15px;
      color: white;
      background: rgba(0, 0, 0, 0.5);
      padding: 10px;
      border-radius: 50%;
      cursor: pointer;
    }

    .post-img {
        flex: 1;
        min-height: 400px;
    }

    .post-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .close-btn {
        position: absolute;
        top: 15px;
        right: 20px;
        font-size: 30px;
        color: #fff;
        cursor: pointer;
        z-index: 10;
        background: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.2s ease;
    }

    .close-btn:hover {
        background: rgba(0, 0, 0, 0.8);
    }

    .comment-section {
        flex: 1;
        padding: 20px;
        max-width: 400px;
        display: flex;
        flex-direction: column;
    }

    .comment-input {
        background-color: #333;
        border: 1px solid #555;
        color: white;
        border-radius: 8px;
        padding: 10px;
    }

    .comment-input:focus {
        background-color: #444;
        border-color: #d6249f;
        color: white;
        box-shadow: 0 0 0 0.2rem rgba(214, 36, 159, 0.25);
    }

    .btn-primary {
        background-color: #d6249f;
        border-color: #d6249f;
        border-radius: 8px;
    }

    .btn-primary:hover {
        background-color: #b91c7f;
        border-color: #b91c7f;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .story-circle img {
            width: 60px;
            height: 60px;
        }

        .profile-img {
            width: 35px;
            height: 35px;
        }

        .reel-video {
            height: 500px;
        }

        .action-icons i {
            font-size: 1.5rem;
            margin-right: 15px;
        }

        .post-wrapper {
            flex-direction: column;
            max-width: 95%;
            max-height: 95%;
        }

        .post-img {
            min-height: 300px;
            max-height: 50vh;
        }

        .comment-section {
            max-width: 100%;
            max-height: 40vh;
            overflow-y: auto;
        }
    }

    @media (max-width: 576px) {
        .story-circle img {
            width: 50px;
            height: 50px;
        }

        .profile-img {
            width: 30px;
            height: 30px;
        }

        .reel-container {
            padding: 10px;
            margin-bottom: 15px;
        }

        .reel-video {
            height: 400px;
        }

        .action-icons i {
            font-size: 1.3rem;
            margin-right: 12px;
        }
    }

    /* Loading placeholder for images */
    .image-placeholder {
        background: linear-gradient(90deg, #333 25%, #444 50%, #333 75%);
        background-size: 200% 100%;
        animation: loading 1.5s infinite;
    }

    @keyframes loading {
        0% {
            background-position: 200% 0;
        }

        100% {
            background-position: -200% 0;
        }
    }
</style>
<div class=".body">
    <!-- Post Overlay -->
    <div class="post-overlay" id="postOverlay">
        <div class="post-wrapper">
            <span class="close-btn" id="closeBtn">&times;</span>
            <div class="post-img">
                <div>
                    <img src="./images.jpeg" alt="" class="image-placeholder" style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center;">
                </div>
            </div>
            <div class="comment-section">
                <div class="mb-3">
                    <div class="d-flex align-items-center mb-2">
                        <img src="./download.png" alt="" class="image-placeholder rounded-circle me-2 object-fit-cover" style="width: 32px; height: 32px;">
                        <strong>startuppakistansp</strong>
                    </div>
                    <p class="mb-0">The Senate has introduced the "Social Media (Age Restriction for Users) Bill 2025," aiming to ban individuals under 16 from creating social media accounts in Pakistan...</p>
                </div>

                <div class="mb-3" style="flex-grow: 1; overflow-y: auto;">
                    <div class="mb-2 d-flex justify-align-content-around align-items-center">
                        <img src="./ima-1.jpg" alt="" class="image-placeholder rounded-circle me-2" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;">
                        <strong>user1:</strong>
                        <p class="m-auto">Great post! 👍</p>
                    </div>
                    <div class="mb-2 d-flex justify-align-content-around align-items-center">
                        <img src="./ima-1.jpg" alt="" class="image-placeholder rounded-circle me-2" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;">
                        <strong>user2:</strong>
                        <p class="m-auto">Great post! 👍</p>
                    </div>
                    <div class="mb-2">
                        <div class="mb-2 d-flex justify-align-content-around align-items-center">
                            <img src="./ima-1.jpg" alt="" class="image-placeholder rounded-circle me-2" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;">
                            <strong>user3:</strong>
                            <p class="m-auto">Thanks you</p>
                        </div>
                    </div>
                </div>

                <div class="mt-auto">
                    <hr style="border-color: #444; margin: 10px 0;">
                    <div class="d-flex gap-2">
                        <input type="text" class="form-control comment-input flex-grow-1" placeholder="Add a comment..." id="commentInput">
                        <button class="btn btn-primary" id="postCommentBtn">Post</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-4">
        <!-- Top Stories -->
        <div class="d-flex gap-3 mb-4 overflow-auto" style="scrollbar-width: none; -ms-overflow-style: none;">
            <div class="story-circle text-center flex-shrink-0">
                <div class="image-placeholder rounded-circle" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                    <img src="./me.jpg" alt="" class="object-fit-cover">
                </div>
            </div>
            <div class="story-circle text-center flex-shrink-0">
                <div class="image-placeholder rounded-circle" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                    <img src="./me.jpg" alt="" class="object-fit-cover">
                </div>
            </div>
            <div class="story-circle text-center flex-shrink-0">
                <div class="image-placeholder rounded-circle" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                    <img src="./ima-1.jpg" alt="" class="object-fit-cover">
                </div>
            </div>
            <div class="story-circle text-center flex-shrink-0">
                <div class="image-placeholder rounded-circle" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                    <img src="./ima-1.jpg" alt="" class="object-fit-cover">
                </div>
            </div>
        </div>
        <!-- Reel Post -->
        <?php
        $con = mysqli_connect('localhost', 'root', '', 'instagram') or die("Connection Failed");

        $sql = "SELECT * from post JOIN user ON post.user_id = user.id ORDER BY(post.id)DESC";
        $result = mysqli_query($con, $sql);

        if ($result) {
            foreach ($result as $key => $value) {
        ?>
                <div class="reel-container">
                    <div class="d-flex align-items-center mb-3">
                        <?php
                        if (empty($value['p_image'])) {
                            echo "
    <img src='./download.png' style='width: 45px; height: 45px;' alt='' class='image-placeholder rounded-circle me-2'>
    <div>
    ";
                        } else {
                            echo "
    <img src='./profile.image/{$value['p_image']}' style='width: 45px; height: 45px;' alt='' class='image-placeholder rounded-circle me-2'>
    <div>
    ";
                        }
                        ?>
                        <strong><?php echo $value['name']; ?></strong>
                        <div class="text-secondary small">1h ago</div>
                    </div>
                </div>

                <!-- Reel Video/Image -->
                <div class="reel-wrapper mb-3 position-relative">
                    <?php
                    $file = $value['image'];
                    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    $videoId = "myVideo$key";
                    $muteId = "muteIcon$key";
                    if (in_array($ext, ['mp4', 'webm', 'ogg'])) {
                        echo "
    <video id='$videoId' src='./post.image/$file' class='reel-video' autoplay loop muted></video>
    <i id='$muteId' class='fas fa-volume-mute mute-btn position-absolute end-0 bottom-0'></i>
    ";
                    } else {
                        echo "
        <img src='./post.image/$file' alt='' class='object-fit-cover image-placeholder reel-video d-flex align-items-center justify-content-center'>
        ";
                    }
                    ?>
                </div>
                <!-- Action Buttons -->
                <div class="action-icons d-flex align-items-center mb-2">
                    <i class="bi bi-heart" id="likeBtn"></i>
                    <i class="bi bi-chat" id="chatBtn"></i>
                    <i class="bi bi-send"></i>
                    <i class="bi bi-bookmark ms-auto"></i>
                </div>

                <div class="mb-2">
                    <strong>1,234 likes</strong>
                </div>

                <div class="mb-1">
                    <strong><?php echo $value['u_name']; ?></strong> Serving the nation with pride and dedication. #PakArmy #Pakistan
                </div>

                <div class="text-secondary small mb-2">
                    View all 89 comments
                </div>
    </div>
<?php
            }
        } else {
            echo "Error: " . mysqli_error($con);
        }
?>

<!-- Another Post -->
</div>
</div>
<script>
    // Get DOM elements
    let chatBtns = document.querySelectorAll('[id^="chatBtn"]');
    let postOverlay = document.getElementById('postOverlay');
    let closeBtn = document.getElementById('closeBtn');
    let commentInput = document.getElementById('commentInput');
    let postCommentBtn = document.getElementById('postCommentBtn');

    
  document.querySelectorAll('.mute-btn').forEach(function(muteIcon) {
    muteIcon.addEventListener("click", function() {
        const index = this.id.replace('muteIcon', '');
        const video = document.getElementById('myVideo' + index);
        if (video) {
            video.muted = !video.muted;
            if (video.muted) {
                this.classList.remove("fa-volume-up");
                this.classList.add("fa-volume-mute");
            } else {
                this.classList.remove("fa-volume-mute");
                this.classList.add("fa-volume-up");
            }
        }
    });
});

    // Add event listeners for chat buttons
    chatBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            postOverlay.style.display = 'flex';
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        });
    });

    // Close overlay function
    function closeOverlay() {
        postOverlay.style.display = 'none';
        document.body.style.overflow = 'auto'; // Restore scrolling
    }

    // Close button event listener
    closeBtn.addEventListener('click', closeOverlay);

    // Close overlay when clicking outside the post wrapper
    postOverlay.addEventListener('click', function(e) {
        if (e.target === postOverlay) {
            closeOverlay();
        }
    });

    // Close overlay with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && postOverlay.style.display === 'flex') {
            closeOverlay();
        }
    });

    // Post comment functionality
    postCommentBtn.addEventListener('click', function() {
        const commentText = commentInput.value.trim();
        if (commentText) {
            // Here you would typically send the comment to a server
            console.log('Posted comment:', commentText);
            commentInput.value = '';

            // Show feedback
            postCommentBtn.textContent = 'Posted!';
            setTimeout(() => {
                postCommentBtn.textContent = 'Post';
            }, 1000);
        }
    });

    // Enter key to post comment
    commentInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            postCommentBtn.click();
        }
    });

    // Like button functionality
    likeBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            if (this.classList.contains('bi-heart')) {
                this.classList.remove('bi-heart');
                this.classList.add('bi-heart-fill');
                this.style.color = '#ff3040';
            } else {
                this.classList.remove('bi-heart-fill');
                this.classList.add('bi-heart');
                this.style.color = '';
            }
        });
    });

    // Add smooth scrolling for stories
    const storiesContainer = document.querySelector('.d-flex.gap-3.mb-4');
    storiesContainer.style.scrollBehavior = 'smooth';

    // Hide scrollbar for stories on webkit browsers
    storiesContainer.style.webkitScrollbarWidth = 'none';
</script>