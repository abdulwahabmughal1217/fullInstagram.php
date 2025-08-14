<?php
session_start();
if (isset($_SESSION['ticket'])) {
  header("Location: http://localhost:3000/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include'./bootstrap.php'?>
    <title>Instagram Login</title>
    <style>
        body {
            background: linear-gradient(45deg, #0a0a0a, #1a1a1a, #0f0f0f);
            min-height: 100vh;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            overflow: hidden;
            position: relative;
        }
        
        .bg-animation {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }

        .floating-element {
            position: absolute;
            opacity: 0.1;
            animation: float 20s infinite linear;
        }

        @keyframes float {
            0% { transform: translateY(100vh) rotate(0deg); }
            100% { transform: translateY(-100vh) rotate(360deg); }
        }

        .instagram-logo {
            font-family: 'Brush Script MT', cursive;
            font-size: 3.5rem;
            color: white;
            text-align: center;
            margin-bottom: 3rem;
            font-weight: 400;
            letter-spacing: -2px;
        }

        .main-container {
            position: relative;
            z-index: 10;
        }

        .phone-mockup {
            position: relative;
            max-width: 350px;
        }

        .phone-frame {
            background: linear-gradient(145deg, #2a2a2a, #1a1a1a);
            border-radius: 25px;
            padding: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.6);
            border: 1px solid #333;
        }
        .story-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 15px;
        }

        .story-overlay {
            position: absolute;
            top: 10px;
            left: 10px;
            right: 10px;
            bottom: 10px;
            background: rgba(0,0,0,0.3);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 0.8rem;
        }

        .reaction-icons {
            position: absolute;
            top: -10px;
            right: -10px;
            display: flex;
            gap: 5px;
        }

        .reaction-icon {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            animation: bounce 2s infinite;
        }

        .heart { background: #ff3040; }
        .fire { background: #ff6b35; }
        .star { background: #ffd23f; }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }

        .login-form {
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 25px 50px rgba(0,0,0,0.5);
            max-width: 400px;
            margin: 0 auto;
        }

        .form-control {
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 12px;
            padding: 15px 20px;
            color: white;
            font-size: 14px;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            background: rgba(255,255,255,0.15);
            border-color: #4dabf7;
            box-shadow: 0 0 20px rgba(77,171,247,0.3);
            color: white;
        }

        .form-control::placeholder {
            color: rgba(255,255,255,0.6);
        }

        .btn-login {
            background: linear-gradient(45deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d);
            border: none;
            border-radius: 12px;
            padding: 15px;
            color: white;
            font-weight: 600;
            font-size: 16px;
            width: 100%;
            margin: 20px 0;
            transition: transform 0.2s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(64,93,230,0.4);
        }

        .btn-login::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .btn-login:hover::before {
            left: 100%;
        }

        .divider {
            color: rgba(255,255,255,0.6);
            text-align: center;
            margin: 25px 0;
            position: relative;
        }

        .divider::before,
        .divider::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 45%;
            height: 1px;
            background: rgba(255,255,255,0.2);
        }

        .divider::before { left: 0; }
        .divider::after { right: 0; }

        .btn-facebook {
            background: #1877f2;
            border: none;
            border-radius: 12px;
            padding: 12px;
            color: white;
            width: 100%;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .btn-facebook:hover {
            background: #166fe5;
            transform: translateY(-1px);
        }

        .link-text {
            color: #4dabf7;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .link-text:hover {
            color: #74c0fc;
        }

        .signup-text {
            color: rgba(255,255,255,0.8);
            text-align: center;
            margin-top: 30px;
        }

        @media (max-width: 768px) {
            .phone-mockup { display: none; }
            .instagram-logo { font-size: 2.5rem; margin-bottom: 2rem; }
            .login-form { margin: 1rem; padding: 2rem; }
        }
    </style>
</head>
<body>
    <div class="bg-animation">
        <div class="floating-element" style="left: 10%; animation-delay: 0s;">
            <i class="fab fa-instagram" style="font-size: 3rem; color: #e1306c;"></i>
        </div>
        <div class="floating-element" style="left: 80%; animation-delay: 5s;">
            <i class="fas fa-heart" style="font-size: 2rem; color: #ff3040;"></i>
        </div>
        <div class="floating-element" style="left: 60%; animation-delay: 10s;">
            <i class="fas fa-camera" style="font-size: 2.5rem; color: #4dabf7;"></i>
        </div>
        <div class="floating-element" style="left: 30%; animation-delay: 15s;">
            <i class="fas fa-share" style="font-size: 2rem; color: #51cf66;"></i>
        </div>
    </div>

    <div class="container-fluid main-container">
        <div class="row min-vh-100 align-items-center">
            <div class="col-lg-6 d-none d-lg-flex justify-content-center">
                <div class="phone-mockup w-75">
                    <div class="phone-frame w-100">
                        <div class="story-preview">
                            <img src="./inlog.jpg " class="object-fit-cover w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="instagram-logo">Instagram</div>
                
                <div class="login-form">
                    <form action="./userlog-in.php" method="post">
                        <input name="email" type="text" class="form-control" placeholder="Phone number, username or email address">
                        <input name="pass" type="password" class="form-control" placeholder="Password">
                        <button type="submit" class="btn btn-login">Log in</button>
                    </form>
                   <?php
if (isset($_SESSION['invaild'])) {
    echo "<p class='text-danger'>{$_SESSION['invaild']}</p>";
    unset($_SESSION['invaild']);
}
?>
                    <div class="divider">OR</div>
                    
                    <button class="btn btn-facebook">
                        <i class="fab fa-facebook-f me-2"></i>
                        Log in with Facebook
                    </button>
                    
                    <div class="text-center">
                        <a href="#" class="link-text">Forgotten your password?</a>
                    </div>
                </div>
                
                <div class="signup-text">
                    Don't have an account? <a href="./sing-up.php" class="link-text">Sign up</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>