 <style>
    .bottom-nav {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: #000;
      border-top: 1px solid #333;
      z-index: 1030;
    }
    .bottom-nav .nav-link {
      color: white;
      font-size: 1.5rem;
      padding: 0.8rem 0;
      position: relative;
    }
    .badge-custom {
      background-color: red;
      font-size: 0.65rem;
      padding: 2px 6px;
      border-radius: 20px;
      position: absolute;
      top: 5px;
      right: 18px;
    }
    .profile-img {
      width: 25px;
      height: 25px;
      border-radius: 50%;
    }
  </style>
  <nav class="bottom-nav d-block d-lg-none">
  <div class="container-fluid">
    <div class="row text-center">
      <div class="col">
        <a href="#" class="nav-link"><i class="bi bi-house-door"></i></a>
      </div>
      <div class="col">
        <a href="#" class="nav-link"><i class="bi bi-compass"></i></a>
      </div>
      <div class="col">
        <a href="#" class="nav-link"><i class="bi bi-film"></i></a>
      </div>
      <div class="col post2">
        <a href="#" class="nav-link"><i class="bi bi-plus-square"></i></a>
      </div>
      <div class="col position-relative">
        <a href="#" class="nav-link">
          <i class="bi bi-chat-dots"></i>
          <span class="badge badge-custom">9+</span>
        </a>
      </div>
      <div class="col">
        <a href="#" class="nav-link">
          <img src="./me.jpg" alt="Profile" class="profile-img">
        </a>
      </div>
    </div>
  </div>
</nav>