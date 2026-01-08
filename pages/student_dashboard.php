<?php
require_once 'db_connect.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: authentication_hub.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// 1. Fetch User Info & Stats
$stmt = $conn->prepare("
    SELECT u.full_name, u.profile_image, 
           s.day_streak, s.total_points, s.hours_learned, s.lessons_completed_count 
    FROM users u 
    LEFT JOIN user_stats s ON u.id = s.user_id 
    WHERE u.id = ?
");
$stmt->execute([$user_id]);
$user_data = $stmt->fetch(PDO::FETCH_ASSOC);

// Handle default stats if new user
if (!$user_data) {
    // If stats don't exist, generic fallback
    $user_data = ['full_name' => 'Student', 'day_streak' => 0, 'hours_learned' => 0]; 
} elseif (!isset($user_data['day_streak'])) {
    $user_data['day_streak'] = 0;
}

// 2. Fetch Enrolled Courses (FIXED QUERY HERE)
$stmt_courses = $conn->prepare("
    SELECT c.title, c.level, c.thumbnail_url, c.total_lessons, 
           e.lessons_completed, e.is_completed, e.completion_date
    FROM enrollments e
    JOIN courses c ON e.course_id = c.id
    WHERE e.user_id = ?
    ORDER BY e.enrollment_date DESC 
");
// Note: Uppar wali line me 'enrollment_date' use kiya hai taaki error na aaye

$stmt_courses->execute([$user_id]);
$enrolled_courses = $stmt_courses->fetchAll(PDO::FETCH_ASSOC);

// 3. Fetch Achievements
$stmt_ach = $conn->prepare("
    SELECT a.title, a.icon_type 
    FROM user_achievements ua
    JOIN achievements a ON ua.achievement_id = a.id
    WHERE ua.user_id = ?
    LIMIT 4
");
$stmt_ach->execute([$user_id]);
$my_achievements = $stmt_ach->fetchAll(PDO::FETCH_ASSOC);
$achievement_count = count($my_achievements);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Student Dashboard">
    <link rel="icon" href="1.jpg" type="image/jpg">
    <title>Student Dashboard - Angrezzify</title>
    <link rel="stylesheet" href="../css/main.css">
    <script type="module" defer src="https://static.rocket.new/rocket-shot.js?v=0.0.2"></script>
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
                    <a href="practice_center.php" class="text-text-secondary hover:text-primary transition-colors">Practice</a>
                    <a href="student_dashboard.php" class="text-primary font-semibold">Dashboard</a>
                </div>

                <div class="hidden md:flex items-center gap-4">
                    <button id="notificationBtn" class="relative p-2 hover:bg-surface rounded-lg transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                        <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                    </button>
                    <div class="flex items-center gap-3 cursor-pointer hover:bg-surface px-3 py-2 rounded-lg transition-colors">
                        <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold">
                            <?php echo strtoupper(substr($user_data['full_name'] ?? 'U', 0, 1)); ?>
                        </div>
                        <div class="text-left">
                            <p class="text-sm font-semibold text-primary"><?php echo htmlspecialchars($user_data['full_name']); ?></p>
                            <p class="text-xs text-text-secondary">Active Student</p>
                        </div>
                    </div>
                    <a href="authentication_hub.php" class="text-sm text-red-500 font-medium">Logout</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 pb-24 md:pb-8">
        
        <section id="welcome" class="mb-8">
            <div class="bg-gradient-to-r from-primary to-primary-800 rounded-2xl p-6 md:p-8 text-white relative overflow-hidden">
                <div class="relative z-10">
                    <div class="flex items-center gap-2 mb-3">
                         <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11" />
                        </svg>
                        <h1 class="text-2xl md:text-3xl font-poppins font-bold">Welcome back, <?php echo htmlspecialchars(explode(" ", $user_data['full_name'])[0]); ?>!</h1>
                    </div>
                    <p class="text-lg mb-4 opacity-90">Aap kar sakte hain! Keep up the great work! 🎯</p>
                    <div class="flex flex-wrap gap-4 text-sm">
                        <div class="flex items-center gap-2">
                             <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.298-2.296a1 1 0 00-1.648-1.052c-.865.98-1.467 2.387-1.423 3.693.045 1.343.596 2.627 1.537 3.568C6.902 14.905 9.172 16 12 16s5.098-1.095 6.678-2.675c.94-.94 1.492-2.225 1.537-3.568.044-1.306-.558-2.713-1.423-3.693a1 1 0 00-1.648 1.052c.1.762.03 1.616-.298 2.296a2.64 2.64 0 01-.945 1.067 31.365 31.365 0 00-.614-3.58c-.225-.966-.505-1.93-.839-2.734-.167-.403-.356-.785-.57-1.116-.208-.322-.477-.65-.822-.88z" clip-rule="evenodd" />
                            </svg>
                            <span class="font-semibold"><?php echo $user_data['day_streak'] ?? 0; ?> Day Streak</span>
                        </div>
                        <div class="flex items-center gap-2">
                             <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                            </svg>
                            <span class="font-semibold"><?php echo $user_data['hours_learned'] ?? 0; ?> Hours Learned</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="grid lg:grid-cols-3 gap-8">
            
            <div class="lg:col-span-2 space-y-8">
                <section id="continue-learning">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-2xl font-poppins font-bold text-primary">Your Courses</h2>
                        <a href="course_catalog.php" class="text-secondary text-sm font-medium hover:text-primary transition-colors">Browse More</a>
                    </div>

                    <div class="space-y-4">
                        <?php if (count($enrolled_courses) > 0): ?>
                            <?php foreach ($enrolled_courses as $course): 
                                $percent = ($course['total_lessons'] > 0) ? ($course['lessons_completed'] / $course['total_lessons']) * 100 : 0;
                                $percent = round($percent);
                            ?>
                            <div class="card hover:shadow-elevated transition-all duration-300 border border-gray-100 p-4 rounded-xl bg-white shadow-sm">
                                <div class="flex flex-col md:flex-row gap-4">
                                    <div class="relative rounded-lg overflow-hidden w-full md:w-48 h-32 flex-shrink-0">
                                        <img src="<?php echo !empty($course['thumbnail_url']) ? $course['thumbnail_url'] : 'https://via.placeholder.com/300x200?text=Course'; ?>" 
                                             alt="Course" class="w-full h-full object-cover"
                                             onerror="this.src='https://via.placeholder.com/300x200?text=Angrezzify';">
                                        <div class="absolute top-2 right-2">
                                            <?php if($course['is_completed']): ?>
                                                <span class="bg-green-500 text-white text-xs px-2 py-1 rounded-full">Completed</span>
                                            <?php else: ?>
                                                <span class="bg-blue-500 text-white text-xs px-2 py-1 rounded-full">In Progress</span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="flex-1">
                                        <div class="flex items-start justify-between mb-2">
                                            <div>
                                                <h3 class="text-lg font-poppins font-semibold text-primary mb-1"><?php echo htmlspecialchars($course['title']); ?></h3>
                                                <p class="text-sm text-text-secondary"><?php echo htmlspecialchars($course['level']); ?></p>
                                            </div>
                                            <button class="px-4 py-2 text-sm border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition" onclick="window.location.href='video_learning_interface.php'">
                                                <?php echo $course['is_completed'] ? 'Review' : 'Resume'; ?>
                                            </button>
                                        </div>

                                        <div class="mb-3">
                                            <div class="flex items-center justify-between text-sm mb-1">
                                                <span class="text-text-secondary">Lesson <?php echo $course['lessons_completed']; ?> of <?php echo $course['total_lessons']; ?></span>
                                                <span class="font-semibold text-accent"><?php echo $percent; ?>% Complete</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: <?php echo $percent; ?>%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="card p-8 text-center bg-white rounded-xl border border-gray-100 shadow-sm">
                                <div class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-primary mb-2">No Courses Yet</h3>
                                <p class="text-gray-500 mb-4">You haven't enrolled in any courses yet. Start your journey today!</p>
                                <a href="course_catalog.php" class="inline-block bg-primary text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Explore Courses</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </section>
            </div>

            <div class="space-y-8">
                <section id="achievements">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-poppins font-bold text-primary">Achievements</h2>
                    </div>

                    <div class="card bg-white p-6 rounded-xl border border-gray-100 shadow-sm">
                        <div class="grid grid-cols-3 gap-4 mb-4">
                            <?php if ($achievement_count > 0): ?>
                                <?php foreach ($my_achievements as $ach): ?>
                                <div class="text-center">
                                    <div class="w-14 h-14 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                        </svg>
                                    </div>
                                    <p class="text-xs font-medium text-text-secondary"><?php echo htmlspecialchars($ach['title']); ?></p>
                                </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="col-span-3 text-center py-4">
                                    <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                        </svg>
                                    </div>
                                    <p class="text-sm text-gray-500">No achievements unlocked yet.<br>Complete lessons to earn badges!</p>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="pt-4 border-t border-gray-100 text-center">
                            <p class="text-sm text-text-secondary">
                                <span class="font-semibold text-primary"><?php echo $achievement_count; ?></span> achievements unlocked
                            </p>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </main>
</body>
</html>