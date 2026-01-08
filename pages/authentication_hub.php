<?php
require_once 'db_connect.php';

$error_msg = "";
$success_msg = "";

// Handle Form Submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // --- REGISTER LOGIC ---
    if (isset($_POST['register'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $mobile = trim($_POST['mobile']);
        $password = $_POST['password'];

        // Check if email already exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);
        
        if ($stmt->rowCount() > 0) {
            $error_msg = "Email already registered. Please login.";
        } else {
            // Hash password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
            // Insert User
            $sql = "INSERT INTO users (full_name, email, mobile, password_hash) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            
            if ($stmt->execute([$name, $email, $mobile, $hashed_password])) {
                $user_id = $conn->lastInsertId();
                
                // Initialize User Stats
                $conn->prepare("INSERT INTO user_stats (user_id) VALUES (?)")->execute([$user_id]);

                // Auto Login after register
                $_SESSION['user_id'] = $user_id;
                $_SESSION['user_name'] = $name;
                header("Location: student_dashboard.php");
                exit();
            } else {
                $error_msg = "Registration failed. Please try again.";
            }
        }
    }

    // --- LOGIN LOGIC ---
    if (isset($_POST['login'])) {
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT id, full_name, password_hash FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password_hash'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['full_name'];
            header("Location: student_dashboard.php");
            exit();
        } else {
            $error_msg = "Invalid email or password.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Angrezzify Authentication">
    <link rel="icon" href="1.jpg" type="image/jpg">
    <title>Login & Register - Angrezzify</title>
    <link rel="stylesheet" href="../css/main.css">
    <style>
        .alert-box {
            padding: 15px; margin-bottom: 20px; border-radius: 8px; font-size: 0.9rem; text-align: center;
        }
        .error { background-color: #fee2e2; color: #b91c1c; border: 1px solid #fecaca; }
        .success { background-color: #d1fae5; color: #047857; border: 1px solid #a7f3d0; }
    </style>
</head>
<body class="bg-surface font-inter">
    
    <header class="bg-white shadow-card sticky top-0 z-50 no-print">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="homepage.php" class="flex items-center gap-2">
                        <img src="1.jpg" alt="Angrezzify Logo" class="h-10 w-auto rounded-lg object-contain">
                        <span class="text-2xl font-poppins font-bold text-primary">Angrezzify</span>
                    </a>
                </div>
                 <div class="hidden md:flex items-center gap-6">
                    <a href="homepage.php" class="text-text-secondary hover:text-primary transition-colors">Home</a>
                    <a href="course_catalog.php" class="text-text-secondary hover:text-primary transition-colors">Courses</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="min-h-screen py-8 lg:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                
                <div class="hidden lg:block animate-fade-in">
                     <h1 class="text-4xl lg:text-5xl font-poppins font-bold text-primary mb-6">
                        Welcome to <span class="text-accent">Angrezzify</span>
                    </h1>
                    <p class="text-lg text-text-secondary mb-8">
                        Join students transforming their English speaking confidence.
                    </p>
                    <img src="https://img.rocket.new/generatedImages/rocket_gen_img_19517e85c-1765124854673.png" alt="Students" class="w-full rounded-2xl shadow-elevated">
                </div>

                <div class="w-full max-w-md mx-auto lg:mx-0">
                    
                    <?php if(!empty($error_msg)): ?>
                        <div class="alert-box error"><?php echo htmlspecialchars($error_msg); ?></div>
                    <?php endif; ?>

                    <div id="loginForm" class="card animate-scale-in">
                        <div class="text-center mb-6">
                            <h2 class="text-3xl font-poppins font-bold text-primary mb-2">Welcome Back!</h2>
                            <p class="text-text-secondary">Login to continue</p>
                        </div>

                        <form method="POST" action="">
                            <input type="hidden" name="login" value="1">
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-text-primary mb-2">Email Address</label>
                                    <input type="email" name="email" class="input w-full p-3 border rounded-lg" placeholder="your.email@example.com" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-text-primary mb-2">Password</label>
                                    <input type="password" name="password" class="input w-full p-3 border rounded-lg" placeholder="Enter password" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-full bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700">Login</button>
                            </div>
                        </form>

                        <div class="mt-6 text-center text-sm text-text-secondary">
                            Don't have an account? 
                            <button type="button" id="showRegisterForm" class="text-secondary hover:text-primary font-semibold transition-colors">Register Now</button>
                        </div>
                    </div>

                    <div id="registerForm" class="card hidden animate-scale-in">
                        <div class="text-center mb-6">
                            <h2 class="text-3xl font-poppins font-bold text-primary mb-2">Create Account</h2>
                            <p class="text-text-secondary">Start learning today</p>
                        </div>

                        <form method="POST" action="">
                            <input type="hidden" name="register" value="1">
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-text-primary mb-2">Full Name</label>
                                    <input type="text" name="name" class="input w-full p-3 border rounded-lg" placeholder="Enter full name" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-text-primary mb-2">Email Address</label>
                                    <input type="email" name="email" class="input w-full p-3 border rounded-lg" placeholder="your.email@example.com" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-text-primary mb-2">Mobile Number</label>
                                    <input type="tel" name="mobile" class="input w-full p-3 border rounded-lg" placeholder="10-digit number" pattern="[0-9]{10}" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-text-primary mb-2">Password</label>
                                    <input type="password" name="password" class="input w-full p-3 border rounded-lg" placeholder="Create password" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-full bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700">Create Account</button>
                            </div>
                        </form>

                        <div class="mt-6 text-center text-sm text-text-secondary">
                            Already have an account? 
                            <button type="button" id="showLoginForm" class="text-secondary hover:text-primary font-semibold transition-colors">Login Here</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <script>
        const loginForm = document.getElementById('loginForm');
        const registerForm = document.getElementById('registerForm');
        
        document.getElementById('showRegisterForm').addEventListener('click', () => {
            loginForm.classList.add('hidden');
            registerForm.classList.remove('hidden');
        });

        document.getElementById('showLoginForm').addEventListener('click', () => {
            registerForm.classList.add('hidden');
            loginForm.classList.remove('hidden');
        });
    </script>
</body>
</html>