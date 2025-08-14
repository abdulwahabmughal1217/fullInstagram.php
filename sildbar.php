<style>
.sidebar {
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      width: 220px;
      background-color: #000;
      padding-top: 20px;
      border-right: 1px solid #333;
    }
    .sidebar .nav-link {
      color: white;
      font-size: 1.1rem;
      padding: 12px 15px;
      display: flex;
      align-items: center;
      transition: 0.3s;
    }
    .sidebar .nav-link:hover {
      background-color: #1a1a1a;
      border-radius: 10px;
    }
    .sidebar .nav-link i {
      font-size: 1.3rem;
      margin-right: 12px;
    }
     .dropdown-menu {
            background-color: #2d2d2d;
            border: 1px solid #404040;
            border-radius: 8px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            min-width: 250px;
            padding: 8px 0;
        }

        .dropdown-item {
            color: #ffffff;
            padding: 12px 16px;
            font-size: 15px;
            border: none;
            background: none;
            transition: background-color 0.2s ease;
        }

        .dropdown-item:hover {
            background-color: #404040;
            color: #ffffff;
        }

        .dropdown-item:focus {
            background-color: #404040;
            color: #ffffff;
        }

        .dropdown-item i {
            margin-right: 12px;
            width: 20px;
            font-size: 16px;
        }

        .dropdown-divider {
            border-color: #404040;
            margin: 8px 0;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            padding: 8px 16px;
            display: inline-block;
        }

        .nav-link:hover {
            color: #ccc;
        }
  </style>
<!-- Sidebar (visible only on lg and up) -->
<div class="sidebar d-none d-lg-block">
  <h4 class="text-white px-3 mb-4">Instagram</h4>
  <ul class="nav flex-column">
    <li class="nav-item">
      <a href="./index.php" class="nav-link fw-bold">
        <i class="bi bi-house-door-fill"></i> Home
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="bi bi-search"></i> Search
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="bi bi-compass"></i> Explore
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="bi bi-film"></i> Reels
      </a>
    </li>
    <li class="nav-item position-relative">
      <!-- <span class="badge badge-custom">9+</span> -->
      <a href="#" class="nav-link">
        <i class="bi bi-chat-dots"></i> Messages
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="bi bi-heart"></i> Notifications
      </a>
    </li>
    <li class="nav-item post">
      <a href="#" class="nav-link">
        <i class="bi bi-plus-square"></i> Create
      </a>
    </li>
    <li class="nav-item">
      <a href="./profile.php" class="nav-link">
        <img src="./me.jpg" class="rounded-circle me-2" width="25" height="25" alt="Profile" />
        Profile
      </a>
    </li>
    <li class="nav-item mt-3">
      <div class="demo-container">
        <div class="demo-nav">
            <!-- Your existing nav structure with the dropdown -->
            <div class="dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-list"></i> More
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <button class="dropdown-item" type="button">
                            <i class="bi bi-gear"></i>
                            Settings
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item" type="button">
                            <i class="bi bi-activity"></i>
                            Your Activity
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item" type="button">
                            <i class="bi bi-bookmark"></i>
                            Saved
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item" type="button">
                            <i class="bi bi-moon"></i>
                            Switch appearance
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item" type="button">
                            <i class="bi bi-exclamation-triangle"></i>
                            Report a problem
                        </button>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <button class="dropdown-item" type="button">
                            <i class="bi bi-chat-dots"></i>
                            Threads
                        </button>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <button class="dropdown-item" type="button">
                            <i class="bi bi-arrow-left-right"></i>
                            Switch accounts
                        </button>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <button class="dropdown-item" type="button" onclick="window.location.href='./log-out.php'">
                          <i class="bi bi-box-arrow-right"></i>
                           Log out</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </li>
  </ul>
</div>