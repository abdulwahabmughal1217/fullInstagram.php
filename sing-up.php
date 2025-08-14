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
    <title>Instagram Sign-up</title>
    
    <style>
        body {
            background: #000;
            min-height: 100vh;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .main-container {
            width: 100%;
            max-width: 350px;
        }

        .instagram-logo {
            font-family: 'Brush Script MT', cursive;
            font-size: 3rem;
            color: white;
            text-align: center;
            margin-bottom: 1rem;
            font-weight: 400;
            letter-spacing: -2px;
        }

        .signup-subtitle {
            color: #8e8e8e;
            text-align: center;
            font-size: 17px;
            font-weight: 600;
            margin-bottom: 1.5rem;
            line-height: 20px;
        }

        .signup-form {
            background: #000;
            border: 1px solid #262626;
            border-radius: 1px;
            padding: 40px 40px 20px;
            margin-bottom: 10px;
        }

        .btn-facebook {
            background: #1877f2;
            border: none;
            border-radius: 8px;
            padding: 12px;
            color: white;
            width: 100%;
            margin-bottom: 20px;
            font-weight: 600;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: background-color 0.2s ease;
        }

        .btn-facebook:hover {
            background: #166fe5;
            color: white;
        }

        .divider {
            color: #8e8e8e;
            text-align: center;
            margin: 18px 0;
            position: relative;
            font-size: 13px;
            font-weight: 600;
        }

        .divider::before,
        .divider::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 40%;
            height: 1px;
            background: #262626;
        }

        .divider::before { left: 0; }
        .divider::after { right: 0; }

        .form-control {
            background: #fafafa;
            border: 1px solid #dbdbdb;
            border-radius: 3px;
            padding: 9px 8px 7px;
            color: #262626;
            font-size: 12px;
            margin-bottom: 6px;
            transition: border-color 0.2s ease;
        }

        .form-control:focus {
            background: #fafafa;
            border-color: #a8a8a8;
            box-shadow: none;
            color: #262626;
        }

        .form-control::placeholder {
            color: #8e8e8e;
            font-size: 12px;
        }

        .contact-info {
            color: #8e8e8e;
            font-size: 12px;
            text-align: center;
            margin: 15px 0;
            line-height: 16px;
        }

        .contact-info a {
            color: #00376b;
            text-decoration: none;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }

        .terms-text {
            color: #8e8e8e;
            font-size: 12px;
            text-align: center;
            margin: 15px 0 20px;
            line-height: 16px;
        }

        .terms-text a {
            color: #00376b;
            text-decoration: none;
        }

        .terms-text a:hover {
            text-decoration: underline;
        }

        .btn-signup {
            background: #0095f6;
            border: none;
            border-radius: 8px;
            padding: 8px 16px;
            color: white;
            font-weight: 600;
            font-size: 14px;
            width: 100%;
            margin: 10px 0;
            transition: background-color 0.2s ease;
        }

        .btn-signup {
            background:  #1877f2 !important;
            color: white;
        }

        .login-container {
            background: #000;
            border: 1px solid #262626;
            border-radius: 1px;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }

        .login-text {
            color: white;
            font-size: 14px;
        }

        .login-link {
            color: #0095f6;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link:hover {
            text-decoration: underline;
            color: #0095f6;
        }

        .app-download {
            text-align: center;
            margin-top: 20px;
        }

        .app-download p {
            color: white;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .app-buttons {
            display: flex;
            gap: 8px;
            justify-content: center;
        }

        .app-button {
            height: 40px;
            border-radius: 5px;
            transition: opacity 0.2s ease;
        }

        .app-button:hover {
            opacity: 0.8;
        }

        @media (max-width: 450px) {
            .signup-form {
                padding: 40px 20px 20px;
                border: none;
                background: transparent;
            }
            
            .login-container {
                border: none;
                background: transparent;
                padding: 20px 0;
            }
            
            .main-container {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="signup-form">
            <div class="instagram-logo">Instagram</div>
            
            <div class="signup-subtitle">
                Sign up to see photos and videos<br>
                from your friends.
            </div>
            <button class="btn btn-facebook">
                <i class="fab fa-facebook-f"></i>
                Log in with Facebook
            </button>
            
            <div class="divider">OR</div>
            
            <form id="signupForm" action="./user_sing.php" method="post">
                <input type="text" name="email" class="form-control" placeholder="Mobile number or email address" required>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                <input type="text" name="u_name" class="form-control" placeholder="Username" required>
                
                <div class="contact-info">
                    People who use our service may have uploaded<br>
                    your contact information to Instagram. <a href="#">Learn more</a>
                </div>
                
                <div class="terms-text">
                    By signing up, you agree to our <a href="#">Terms</a>, <a href="#">Privacy Policy</a> and <a href="#">Cookies Policy</a>.
                </div>
                
                <button type="submit" class=" btn btn-signup">Sign Up</button>
            </form>
        </div>
        
        <div class="login-container">
            <span class="login-text">Have an account? </span>
            <a href="./log-in.php" class="login-link">Log in</a>
        </div>
        
        <div class="app-download">
            <p>Get the app.</p>
            <div class="app-buttons">
                <img src="https://static.cdninstagram.com/rsrc.php/v3/yz/r/c5Rp7Ym-Klz.png" alt="Download on Google Play" class="app-button">
                <img src="https://static.cdninstagram.com/rsrc.php/v3/yu/r/EHY6QnZYdNX.png" alt="Get it from Microsoft" class="app-button">
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('signupForm');
            const inputs = document.querySelectorAll('.form-control');
            
            function checkFormValidity() {
                let isValid = true;
                inputs.forEach(input => {
                    if (!input.value.trim()) {
                        isValid = false;
                    }
                });
                signupBtn.disabled = !isValid;
            }
            
            inputs.forEach(input => {
                input.addEventListener('input', checkFormValidity);
            });
            
            // Initial check
            checkFormValidity();
            
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Sign up functionality would be implemented here!');
            });
        });
        
        function switchToLogin() {
            // This would normally navigate to login page
            // For demo purposes, we'll show an alert
            if (confirm('Switch to login page?')) {
                // Here you would redirect to login page
                // window.location.href = 'login.html';
                alert('Would redirect to login page');
            }
        }
    </script>
</body>
</html>