<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lucky Star Coffee Shop - POS System</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #2C1810 0%, #4a2512 50%, #8B4513 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }
        
        /* Floating Coffee Beans Animation */
        .coffee-bean {
            position: absolute;
            width: 60px;
            height: 40px;
            background: rgba(139, 69, 19, 0.15);
            border-radius: 50%;
            animation: float 8s ease-in-out infinite;
        }
        
        .coffee-bean:nth-child(1) { top: 10%; left: 10%; animation-delay: 0s; }
        .coffee-bean:nth-child(2) { top: 20%; right: 15%; animation-delay: 2s; }
        .coffee-bean:nth-child(3) { bottom: 30%; left: 20%; animation-delay: 4s; }
        .coffee-bean:nth-child(4) { bottom: 20%; right: 10%; animation-delay: 1s; }
        .coffee-bean:nth-child(5) { top: 50%; left: 5%; animation-delay: 3s; }
        .coffee-bean:nth-child(6) { top: 70%; right: 25%; animation-delay: 5s; }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(180deg); }
        }
        
        .login-container {
            background: rgba(255, 255, 255, 0.98);
            border-radius: 24px;
            padding: 48px 40px;
            width: 100%;
            max-width: 480px;
            box-shadow: 0 25px 80px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            position: relative;
            z-index: 10;
            margin: 20px;
        }
        
        .logo-section {
            text-align: center;
            margin-bottom: 32px;
        }
        
        .logo-icon {
            width: 72px;
            height: 72px;
            background: linear-gradient(135deg, #8B4513, #D2691E);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 36px;
            box-shadow: 0 8px 24px rgba(139, 69, 19, 0.3);
        }
        
        .logo-title {
            font-family: 'Poppins', sans-serif;
            font-size: 28px;
            font-weight: 700;
            color: #8B4513;
            margin-bottom: 8px;
        }
        
        .logo-subtitle {
            font-size: 14px;
            color: #6F4E37;
            font-weight: 400;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: #2C1810;
            margin-bottom: 8px;
        }
        
        .form-input {
            width: 100%;
            height: 56px;
            border: 2px solid #E8E0D5;
            border-radius: 12px;
            padding: 0 16px;
            font-size: 16px;
            font-family: 'Inter', sans-serif;
            transition: all 0.3s ease;
            background: #FFFFFF;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #8B4513;
            box-shadow: 0 0 0 4px rgba(139, 69, 19, 0.1);
        }
        
        .form-input::placeholder {
            color: #A89B8C;
        }
        
        .password-wrapper {
            position: relative;
        }
        
        .password-toggle {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            padding: 4px;
            color: #6F4E37;
            transition: color 0.3s ease;
        }
        
        .password-toggle:hover {
            color: #8B4513;
        }
        
        .options-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
            font-size: 14px;
        }
        
        .checkbox-wrapper {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
        }
        
        .checkbox-wrapper input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: #8B4513;
            cursor: pointer;
        }
        
        .checkbox-label {
            color: #6F4E37;
            cursor: pointer;
        }
        
        .forgot-link {
            color: #8B4513;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .forgot-link:hover {
            color: #D2691E;
            text-decoration: underline;
        }
        
        .btn-primary {
            width: 100%;
            height: 56px;
            background: linear-gradient(135deg, #8B4513, #D2691E);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-bottom: 20px;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(139, 69, 19, 0.35);
        }
        
        .btn-primary:active {
            transform: translateY(0);
        }
        
        .btn-primary:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none;
        }
        
        .spinner {
            width: 20px;
            height: 20px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-top-color: white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            display: none;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        .message {
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 16px;
            font-size: 14px;
            display: none;
        }
        
        .message-error {
            background: #FEF2F2;
            color: #DC2626;
            border: 1px solid #FECACA;
        }
        
        .message-success {
            background: #F0FDF4;
            color: #16A34A;
            border: 1px solid #BBF7D0;
        }
        
        .signup-link {
            text-align: center;
            font-size: 14px;
            color: #6F4E37;
        }
        
        .signup-link a {
            color: #8B4513;
            font-weight: 600;
            text-decoration: none;
        }
        
        .signup-link a:hover {
            text-decoration: underline;
        }
        
        .demo-box {
            margin-top: 24px;
            padding: 16px;
            background: #F0F9FF;
            border: 1px solid #BAE6FD;
            border-radius: 8px;
            font-size: 13px;
        }
        
        .demo-title {
            font-weight: 600;
            color: #0369A1;
            margin-bottom: 8px;
        }
        
        .demo-text {
            color: #0C4A6E;
            margin: 4px 0;
        }
        
        @media (max-width: 640px) {
            .login-container {
                margin: 16px;
                padding: 32px 24px;
            }
            
            .logo-title {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <!-- Floating Coffee Bean Decorations -->
    <div class="coffee-bean"></div>
    <div class="coffee-bean"></div>
    <div class="coffee-bean"></div>
    <div class="coffee-bean"></div>
    <div class="coffee-bean"></div>
    <div class="coffee-bean"></div>
    
    <div class="login-container">
        <!-- Logo Section -->
        <div class="logo-section">
            <div class="logo-icon">☕</div>
            <h1 class="logo-title">Lucky Star Coffee Shop</h1>
            <p class="logo-subtitle">POS & Inventory Management System</p>
        </div>
        
        <!-- Messages -->
        <div class="message message-error" id="errorMessage">
            Invalid credentials. Please try again.
        </div>
        
        <div class="message message-success" id="successMessage">
            Login successful! Redirecting...
        </div>
        
        <!-- Login Form -->
        <form id="loginForm" onsubmit="handleLogin(event)">
            <!-- Email/Username Field -->
            <div class="form-group">
                <label for="email" class="form-label">Email or Username</label>
                <input
                    type="text"
                    id="email"
                    name="email"
                    class="form-input"
                    placeholder="Enter your email or username"
                    required
                    autocomplete="username"
                >
            </div>
            
            <!-- Password Field -->
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <div class="password-wrapper">
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-input"
                        placeholder="Enter your password"
                        required
                        autocomplete="current-password"
                    >
                    <button type="button" class="password-toggle" onclick="togglePassword()">
                        <svg id="eyeIcon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Options Row -->
            <div class="options-row">
                <label class="checkbox-wrapper">
                    <input type="checkbox" id="remember" name="remember">
                    <span class="checkbox-label">Remember Me</span>
                </label>
                <a href="#" class="forgot-link">Forgot Password?</a>
            </div>
            
            <!-- Submit Button -->
            <button type="submit" class="btn-primary" id="submitBtn">
                <span id="buttonText">Sign In</span>
                <div class="spinner" id="loadingSpinner"></div>
            </button>
            
            <!-- Sign Up Link -->
            <p class="signup-link">
                Don't have an account? <a href="#">Sign Up</a>
            </p>
        </form>
        
        <!-- Demo Credentials -->
        <div class="demo-box">
            <div class="demo-title">Demo Credentials:</div>
            <div class="demo-text">Owner: admin@luckystar.com / admin123</div>
            <div class="demo-text">Cashier: cashier@luckystar.com / cashier123</div>
        </div>
    </div>
    
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = `
                    <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                    <line x1="1" y1="1" x2="23" y2="23"></line>
                `;
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = `
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                `;
            }
        }
        
        function handleLogin(event) {
            event.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const errorMessage = document.getElementById('errorMessage');
            const successMessage = document.getElementById('successMessage');
            const buttonText = document.getElementById('buttonText');
            const loadingSpinner = document.getElementById('loadingSpinner');
            const submitBtn = document.getElementById('submitBtn');
            
            errorMessage.style.display = 'none';
            successMessage.style.display = 'none';
            
            buttonText.textContent = 'Signing In...';
            loadingSpinner.style.display = 'block';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                if ((email === 'admin@luckystar.com' && password === 'admin123') ||
                    (email === 'cashier@luckystar.com' && password === 'cashier123') ||
                    (email === 'demo' && password === 'demo')) {
                    
                    successMessage.style.display = 'block';
                    buttonText.textContent = 'Success!';
                    
                    setTimeout(() => {
                        window.location.href = '/dashboard';
                    }, 1500);
                } else {
                    errorMessage.style.display = 'block';
                    buttonText.textContent = 'Sign In';
                    loadingSpinner.style.display = 'none';
                    submitBtn.disabled = false;
                }
            }, 1500);
        }
        
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('email').focus();
        });
    </script>
</body>
</html>
