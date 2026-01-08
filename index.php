<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="1.jpg" type="image/jpg">
    <title>Angrezzify - Learn English Effectively</title>
    <link rel="stylesheet" href="css/main.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }
        
        .redirect-container {
            text-align: center;
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 90%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .logo-container {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        /* UPDATED: Style for the 1.jpg logo */
        .logo-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .logo-text {
            font-size: 2rem;
            font-weight: bold;
            color: #667eea;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }
        
        .loading-text {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 30px;
        }
        
        .spinner {
            width: 50px;
            height: 50px;
            border: 4px solid #f3f3f3;
            border-top: 4px solid #667eea;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 0 auto 20px;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .redirect-info {
            font-size: 0.9rem;
            color: #777;
            font-style: italic;
        }
        
        .manual-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 20px;
            padding: 12px 24px;
            background: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        
        .manual-link:hover {
            background: #5a6fd8;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
    </style>
  
  <script type="module" async src="https://static.rocket.new/rocket-web.js?_cfg=https%3A%2F%2Fangrezzify3167back.builtwithrocket.new&_be=https%3A%2F%2Fapplication.rocket.new&_v=0.1.12"></script>
  <script type="module" defer src="https://static.rocket.new/rocket-shot.js?v=0.0.2"></script>
  </head>
<body>
    <div class="redirect-container">
        <div class="logo-container">
            <img src="1.jpg" alt="Angrezzify Logo" class="logo-img">
            <div class="logo-text">Angrezzify</div>
        </div>

        <div class="loading-text">Welcome! Redirecting you to the homepage...</div>
        <div class="spinner"></div>
        <div class="redirect-info">Please wait while we prepare your learning experience</div>
        
        <a href="pages/homepage.php" class="manual-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M15 3h6v6"></path>
                <path d="M10 14 21 3"></path>
                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
            </svg>
            Continue to Homepage
        </a>
    </div>

    <script>
        // Auto-redirect to homepage after 3 seconds
        setTimeout(function() {
            window.location.href = 'pages/homepage.php';
        }, 3000);
        
        // Fallback redirect on page load
        window.addEventListener('load', function() {
            setTimeout(function() {
                if (window.location.pathname.endsWith('index.php') || window.location.pathname === '/') {
                    window.location.href = 'pages/homepage.php';
                }
            }, 3500);
        });
    </script>
<script id="dhws-dataInjector" src="/public/dhws-data-injector.js"></script>
</body>
</html>