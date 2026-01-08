<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Angrezzify Practice Center - Interactive speaking practice, pronunciation feedback, and real-world conversation scenarios to build English fluency and confidence.">
    <link rel="icon" href="1.jpg" type="image/jpg">
    <title>Practice Center - Angrezzify | Speak English Confidently</title>
    <link rel="stylesheet" href="../css/main.css">
  
  <script type="module" async src="https://static.rocket.new/rocket-web.js?_cfg=https%3A%2F%2Fangrezzify3167back.builtwithrocket.new&_be=https%3A%2F%2Fapplication.rocket.new&_v=0.1.12"></script>
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
                    <a href="practice_center.php" class="text-primary font-semibold hover:text-secondary transition-colors">Practice</a>
                    <a href="student_dashboard.php" class="text-text-secondary hover:text-primary transition-colors">Dashboard</a>
                </div>

                <div class="hidden md:flex items-center gap-4">
                    <button id="searchBtn" class="p-2 hover:bg-surface rounded-lg transition-colors text-text-secondary" aria-label="Search practice modules">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                    <a href="student_dashboard.php" class="p-2 hover:bg-surface rounded-lg transition-colors text-text-secondary" aria-label="View profile">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </a>
                </div>

                <button id="mobileMenuBtn" class="md:hidden p-2 hover:bg-surface rounded-lg transition-colors text-text-secondary" aria-label="Open menu">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </nav>

        <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-border">
            <div class="px-4 py-4 space-y-3">
                <a href="homepage.php" class="block text-text-secondary hover:text-primary py-2">Home</a>
                <a href="course_catalog.php" class="block text-text-secondary hover:text-primary py-2">Courses</a>
                <a href="practice_center.php" class="block text-primary font-semibold py-2">Practice</a>
                <a href="student_dashboard.php" class="block text-text-secondary hover:text-primary py-2">Dashboard</a>
            </div>
        </div>
    </header>

    <section id="hero" class="relative bg-gradient-to-br from-primary-50 via-white to-accent-50 py-12 lg:py-16 overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" viewBox="0 0 1200 600" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="100" cy="100" r="80" fill="#1e3a8a"/>
                <circle cx="1100" cy="500" r="120" fill="#10b981"/>
                <circle cx="600" cy="300" r="60" fill="#3b82f6"/>
            </svg>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <div class="inline-flex items-center gap-2 bg-accent-100 text-accent-700 px-4 py-2 rounded-full text-sm font-medium mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                    </svg>
                    <span>AI-Powered Practice Tools</span>
                </div>
                
                <h1 class="text-3xl lg:text-5xl font-poppins font-bold text-primary mb-4 leading-tight">
                    Practice & Perfect Your <span class="text-accent">English Speaking</span>
                </h1>
                
                <p class="text-lg text-text-secondary max-w-3xl mx-auto mb-6">
                    Interactive speaking exercises, real-time pronunciation feedback, and conversation practice to build fluency and confidence
                </p>

                <div class="flex flex-wrap justify-center items-center gap-6 text-sm">
                    <div class="flex items-center gap-2 text-text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <span>5,000+ Active Learners</span>
                    </div>
                    <div class="flex items-center gap-2 text-text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                        <span>92% Fluency Improvement</span>
                    </div>
                    <div class="flex items-center gap-2 text-text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>Practice Anytime, Anywhere</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="practice-categories" class="py-12 lg:py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-2xl lg:text-3xl font-poppins font-bold text-primary mb-3">
                    Choose Your Practice Mode
                </h2>
                <p class="text-text-secondary max-w-2xl mx-auto">
                    Select from various practice modules designed to improve different aspects of your English speaking skills
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="card group cursor-pointer hover:shadow-elevated transition-all duration-300" onclick="openPracticeModule('pronunciation')">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-14 h-14 bg-accent-100 rounded-xl flex items-center justify-center group-hover:bg-accent-200 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-accent-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-poppins font-semibold text-primary">Pronunciation Practice</h3>
                            <p class="text-sm text-accent font-medium">AI-Powered Feedback</p>
                        </div>
                    </div>
                    
                    <p class="text-text-secondary mb-4 text-sm">
                        Perfect your pronunciation with AI-powered analysis and visual feedback on every word
                    </p>

                    <div class="flex items-center justify-between pt-4 border-t border-border">
                        <div class="flex items-center gap-2 text-sm text-text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>15-20 min sessions</span>
                        </div>
                        <span class="badge badge-success">Popular</span>
                    </div>
                </div>

                <div class="card group cursor-pointer hover:shadow-elevated transition-all duration-300" onclick="openPracticeModule('conversation')">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-14 h-14 bg-secondary-100 rounded-xl flex items-center justify-center group-hover:bg-secondary-200 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-secondary-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-poppins font-semibold text-primary">Conversation Practice</h3>
                            <p class="text-sm text-secondary font-medium">Real-World Scenarios</p>
                        </div>
                    </div>
                    
                    <p class="text-text-secondary mb-4 text-sm">
                        Practice real conversations with AI partners in various professional and social contexts
                    </p>

                    <div class="flex items-center justify-between pt-4 border-t border-border">
                        <div class="flex items-center gap-2 text-sm text-text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>20-30 min sessions</span>
                        </div>
                        <span class="badge badge-info">Interactive</span>
                    </div>
                </div>

                <div class="card group cursor-pointer hover:shadow-elevated transition-all duration-300" onclick="openPracticeModule('interview')">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center group-hover:bg-primary-200 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-primary-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-poppins font-semibold text-primary">Mock Interviews</h3>
                            <p class="text-sm text-primary font-medium">Job-Ready Practice</p>
                        </div>
                    </div>
                    
                    <p class="text-text-secondary mb-4 text-sm">
                        Prepare for job interviews with realistic mock sessions and detailed performance feedback
                    </p>

                    <div class="flex items-center justify-between pt-4 border-t border-border">
                        <div class="flex items-center gap-2 text-sm text-text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>30-45 min sessions</span>
                        </div>
                        <span class="badge badge-accent">Career Boost</span>
                    </div>
                </div>

                <div class="card group cursor-pointer hover:shadow-elevated transition-all duration-300" onclick="openPracticeModule('peer')">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-14 h-14 bg-accent-100 rounded-xl flex items-center justify-center group-hover:bg-accent-200 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-accent-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-poppins font-semibold text-primary">Peer Practice Rooms</h3>
                            <p class="text-sm text-accent font-medium">Community Learning</p>
                        </div>
                    </div>
                    
                    <p class="text-text-secondary mb-4 text-sm">
                        Join live practice sessions with fellow learners and build confidence together
                    </p>

                    <div class="flex items-center justify-between pt-4 border-t border-border">
                        <div class="flex items-center gap-2 text-sm text-text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            <span>2-6 participants</span>
                        </div>
                        <span class="badge badge-success">Live</span>
                    </div>
                </div>

                <div class="card group cursor-pointer hover:shadow-elevated transition-all duration-300" onclick="openPracticeModule('accent')">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-14 h-14 bg-secondary-100 rounded-xl flex items-center justify-center group-hover:bg-secondary-200 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-secondary-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-poppins font-semibold text-primary">Accent Improvement</h3>
                            <p class="text-sm text-secondary font-medium">Speech Recognition</p>
                        </div>
                    </div>
                    
                    <p class="text-text-secondary mb-4 text-sm">
                        Refine your accent with advanced speech recognition and targeted pronunciation exercises
                    </p>

                    <div class="flex items-center justify-between pt-4 border-t border-border">
                        <div class="flex items-center gap-2 text-sm text-text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>10-15 min sessions</span>
                        </div>
                        <span class="badge badge-info">Advanced</span>
                    </div>
                </div>

                <div class="card group cursor-pointer hover:shadow-elevated transition-all duration-300" onclick="openPracticeModule('roleplay')">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center group-hover:bg-primary-200 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-primary-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-poppins font-semibold text-primary">Role-Play Scenarios</h3>
                            <p class="text-sm text-primary font-medium">Professional Contexts</p>
                        </div>
                    </div>
                    
                    <p class="text-text-secondary mb-4 text-sm">
                        Practice workplace conversations, customer interactions, and professional communication
                    </p>

                    <div class="flex items-center justify-between pt-4 border-t border-border">
                        <div class="flex items-center gap-2 text-sm text-text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>25-35 min sessions</span>
                        </div>
                        <span class="badge badge-accent">Practical</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="practiceSession" class="hidden py-12 lg:py-16 bg-surface">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="card">
                <div class="flex items-center justify-between mb-6 pb-6 border-b border-border">
                    <div class="flex items-center gap-4">
                        <button id="backBtn" class="p-2 hover:bg-surface rounded-lg transition-colors" aria-label="Go back">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                        </button>
                        <div>
                            <h2 id="sessionTitle" class="text-2xl font-poppins font-bold text-primary">Pronunciation Practice</h2>
                            <p class="text-sm text-text-secondary">Session 1 of 10</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="text-right">
                            <p class="text-sm text-text-secondary">Accuracy Score</p>
                            <p class="text-2xl font-bold text-accent">85%</p>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="bg-surface-100 rounded-xl p-8 text-center">
                        <p class="text-sm text-text-secondary mb-2">Practice this word:</p>
                        <h3 class="text-4xl font-poppins font-bold text-primary mb-4">Entrepreneur</h3>
                        <button class="btn-ghost px-6 py-3 rounded-lg flex items-center justify-center mx-auto gap-2" aria-label="Play pronunciation">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                            </svg>
                            Listen to Pronunciation
                        </button>
                    </div>

                    <div class="text-center py-8">
                        <button id="recordBtn" class="w-24 h-24 bg-accent hover:bg-accent-600 rounded-full flex items-center justify-center mx-auto shadow-elevated hover:shadow-hero transition-all duration-300 transform hover:scale-105" aria-label="Start recording">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                            </svg>
                        </button>
                        <p class="text-text-secondary mt-4">Tap to record your pronunciation</p>
                    </div>

                    <div id="feedbackArea" class="hidden">
                        <div class="alert alert-success flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div>
                                <p class="font-semibold">Great pronunciation!</p>
                                <p class="text-sm">Your accuracy: 92%. Keep practicing to maintain consistency.</p>
                            </div>
                        </div>

                        <div class="mt-6 grid md:grid-cols-2 gap-4">
                            <div class="bg-surface-100 rounded-lg p-4">
                                <p class="text-sm text-text-secondary mb-2">Native Speaker</p>
                                <div class="h-20 bg-secondary-200 rounded flex items-center justify-center">
                                    <svg class="w-full h-16" viewBox="0 0 200 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 30 Q 25 10, 50 30 T 100 30 T 150 30 T 200 30" stroke="#3b82f6" stroke-width="2" fill="none"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="bg-surface-100 rounded-lg p-4">
                                <p class="text-sm text-text-secondary mb-2">Your Pronunciation</p>
                                <div class="h-20 bg-accent-200 rounded flex items-center justify-center">
                                    <svg class="w-full h-16" viewBox="0 0 200 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 30 Q 25 12, 50 30 T 100 30 T 150 30 T 200 30" stroke="#10b981" stroke-width="2" fill="none"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 pt-6">
                        <button class="btn btn-outline flex-1 flex items-center justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                            Try Again
                        </button>
                        <button class="btn btn-primary flex-1 flex items-center justify-center gap-2">
                            Next Word
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="progress-tracking" class="py-12 lg:py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-2xl lg:text-3xl font-poppins font-bold text-primary mb-3">
                    Your Practice Progress
                </h2>
                <p class="text-text-secondary max-w-2xl mx-auto">
                    Track your improvement across different practice modules
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                <div class="card text-center">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-accent-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 8.657a8.987 8.987 0 010 10z" />
                        </svg>
                    </div>
                    <p class="text-3xl font-bold text-primary mb-1">12</p>
                    <p class="text-sm text-text-secondary">Day Streak</p>
                </div>

                <div class="card text-center">
                    <div class="w-16 h-16 bg-secondary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-secondary-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p class="text-3xl font-bold text-primary mb-1">45</p>
                    <p class="text-sm text-text-secondary">Practice Hours</p>
                </div>

                <div class="card text-center">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-primary-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                    <p class="text-3xl font-bold text-primary mb-1">88%</p>
                    <p class="text-sm text-text-secondary">Avg Accuracy</p>
                </div>

                <div class="card text-center">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-accent-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                    <p class="text-3xl font-bold text-primary mb-1">8</p>
                    <p class="text-sm text-text-secondary">Achievements</p>
                </div>
            </div>

            <div class="grid lg:grid-cols-2 gap-8">
                <div class="card">
                    <h3 class="text-xl font-poppins font-semibold text-primary mb-6">Speaking Skills Progress</h3>
                    
                    <div class="space-y-5">
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-text-primary">Pronunciation</span>
                                <span class="text-sm font-bold text-accent">85%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 85%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-text-primary">Fluency</span>
                                <span class="text-sm font-bold text-accent">78%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 78%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-text-primary">Vocabulary</span>
                                <span class="text-sm font-bold text-accent">92%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 92%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-text-primary">Grammar</span>
                                <span class="text-sm font-bold text-accent">88%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 88%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-text-primary">Confidence</span>
                                <span class="text-sm font-bold text-accent">80%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <h3 class="text-xl font-poppins font-semibold text-primary mb-6">Recent Achievements</h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 p-3 bg-accent-50 rounded-lg">
                            <div class="w-12 h-12 bg-accent-200 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-accent-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-primary">7-Day Streak Master</p>
                                <p class="text-sm text-text-secondary">Practiced for 7 consecutive days</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 p-3 bg-secondary-50 rounded-lg">
                            <div class="w-12 h-12 bg-secondary-200 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-secondary-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-primary">Pronunciation Perfectionist</p>
                                <p class="text-sm text-text-secondary">Achieved 90%+ accuracy in 10 sessions</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 p-3 bg-primary-50 rounded-lg">
                            <div class="w-12 h-12 bg-primary-200 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-primary-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-primary">Conversation Champion</p>
                                <p class="text-sm text-text-secondary">Completed 20 conversation practices</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 p-3 bg-accent-50 rounded-lg">
                            <div class="w-12 h-12 bg-accent-200 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-accent-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-primary">Quick Learner</p>
                                <p class="text-sm text-text-secondary">Improved accuracy by 15% in one week</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="peer-sessions" class="py-12 lg:py-16 bg-surface">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-poppins font-bold text-primary mb-2">
                        Upcoming Peer Practice Sessions
                    </h2>
                    <p class="text-text-secondary">Join live sessions with fellow learners</p>
                </div>
                <a href="javascript:void(0)" class="btn btn-outline hidden md:inline-flex">
                    View All Sessions
                </a>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="card">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <h3 class="text-lg font-poppins font-semibold text-primary mb-1">Daily Conversation Practice</h3>
                            <p class="text-sm text-text-secondary">Intermediate Level • English & Hindi</p>
                        </div>
                        <span class="badge badge-success">Live Soon</span>
                    </div>

                    <div class="space-y-3 mb-4">
                        <div class="flex items-center gap-3 text-sm text-text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>Today, 6:00 PM - 7:00 PM</span>
                        </div>
                        <div class="flex items-center gap-3 text-sm text-text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span>4/6 participants joined</span>
                        </div>
                        <div class="flex items-center gap-3 text-sm text-text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span>Hosted by Priya Sharma</span>
                        </div>
                    </div>

                    <button class="btn btn-primary w-full flex items-center justify-center gap-2">
                        Join Session
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </button>
                </div>

                <div class="card">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <h3 class="text-lg font-poppins font-semibold text-primary mb-1">Interview Preparation Group</h3>
                            <p class="text-sm text-text-secondary">Advanced Level • Professional English</p>
                        </div>
                        <span class="badge badge-info">Tomorrow</span>
                    </div>

                    <div class="space-y-3 mb-4">
                        <div class="flex items-center gap-3 text-sm text-text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>Tomorrow, 7:30 PM - 8:30 PM</span>
                        </div>
                        <div class="flex items-center gap-3 text-sm text-text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span>2/5 participants joined</span>
                        </div>
                        <div class="flex items-center gap-3 text-sm text-text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span>Hosted by Rahul Kumar</span>
                        </div>
                    </div>

                    <button class="btn btn-outline w-full flex items-center justify-center gap-2">
                        Reserve Spot
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="text-center mt-8 md:hidden">
                <a href="javascript:void(0)" class="btn btn-outline">
                    View All Sessions
                </a>
            </div>
        </div>
    </section>

    <section id="practice-tips" class="py-12 lg:py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-2xl lg:text-3xl font-poppins font-bold text-primary mb-3">
                    Expert Practice Tips
                </h2>
                <p class="text-text-secondary max-w-2xl mx-auto">
                    Maximize your learning with these proven strategies from our expert teachers
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="card">
                    <div class="w-12 h-12 bg-accent-100 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-accent-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-poppins font-semibold text-primary mb-2">Practice Daily</h3>
                    <p class="text-sm text-text-secondary">
                        Even 15 minutes of daily practice is more effective than longer sessions once a week. Consistency builds fluency.
                    </p>
                </div>

                <div class="card">
                    <div class="w-12 h-12 bg-secondary-100 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-secondary-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-poppins font-semibold text-primary mb-2">Listen & Repeat</h3>
                    <p class="text-sm text-text-secondary">
                        Listen to native speakers carefully and repeat after them. Focus on rhythm, intonation, and pronunciation patterns.
                    </p>
                </div>

                <div class="card">
                    <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-primary-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-poppins font-semibold text-primary mb-2">Speak Aloud</h3>
                    <p class="text-sm text-text-secondary">
                        Don't just think in English—speak aloud! Practice conversations with yourself to build confidence and fluency.
                    </p>
                </div>

                <div class="card">
                    <div class="w-12 h-12 bg-accent-100 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-accent-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-poppins font-semibold text-primary mb-2">Record Yourself</h3>
                    <p class="text-sm text-text-secondary">
                        Record your practice sessions and listen back. This helps you identify areas for improvement and track progress.
                    </p>
                </div>

                <div class="card">
                    <div class="w-12 h-12 bg-secondary-100 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-secondary-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-poppins font-semibold text-primary mb-2">Learn in Context</h3>
                    <p class="text-sm text-text-secondary">
                        Practice words and phrases in real-life contexts. This makes learning more meaningful and memorable.
                    </p>
                </div>

                <div class="card">
                    <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-primary-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-poppins font-semibold text-primary mb-2">Embrace Mistakes</h3>
                    <p class="text-sm text-text-secondary">
                        Mistakes are part of learning! Don't be afraid to make errors—they help you improve faster.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="cta" class="py-12 lg:py-16 bg-gradient-to-r from-primary to-primary-800 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl lg:text-4xl font-poppins font-bold mb-4">
                Ready to Practice & Improve?
            </h2>
            <p class="text-lg mb-8 opacity-90">
                Start your practice journey today and speak English with confidence
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="course_catalog.php" class="btn bg-white text-primary hover:bg-surface-100">
                    Explore Courses
                </a>
                <a href="student_dashboard.php" class="btn bg-transparent border-2 border-white text-white hover:bg-white hover:text-primary">
                    View Dashboard
                </a>
            </div>
        </div>
    </section>

    <footer class="bg-primary-900 text-white py-12 no-print">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <img src="1.jpg" alt="Angrezzify Logo" class="h-8 w-auto rounded-lg object-contain">
                        <span class="text-xl font-poppins font-bold">Angrezzify</span>
                    </div>
                    <p class="text-sm opacity-75">
                        Empowering rural India to speak English confidently
                    </p>
                </div>

                <div>
                    <h4 class="font-poppins font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="homepage.php" class="opacity-75 hover:opacity-100 transition-opacity">Home</a></li>
                        <li><a href="course_catalog.php" class="opacity-75 hover:opacity-100 transition-opacity">Courses</a></li>
                        <li><a href="practice_center.php" class="opacity-75 hover:opacity-100 transition-opacity">Practice</a></li>
                        <li><a href="student_dashboard.php" class="opacity-75 hover:opacity-100 transition-opacity">Dashboard</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-poppins font-semibold mb-4">Support</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="javascript:void(0)" class="opacity-75 hover:opacity-100 transition-opacity">Help Center</a></li>
                        <li><a href="javascript:void(0)" class="opacity-75 hover:opacity-100 transition-opacity">Contact Us</a></li>
                        <li><a href="javascript:void(0)" class="opacity-75 hover:opacity-100 transition-opacity">FAQs</a></li>
                        <li><a href="javascript:void(0)" class="opacity-75 hover:opacity-100 transition-opacity">Privacy Policy</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-poppins font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2 text-sm opacity-75">
                        <li>Email: support@angrezzify.com</li>
                        <li>Phone: +91 98765 43210</li>
                        <li>Mon-Sat: 9 AM - 6 PM</li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-primary-700 pt-8 text-center text-sm opacity-75">
                <p>© 2026 Angrezzify. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <nav class="md:hidden fixed bottom-0 left-0 right-0 bg-white border-t border-border shadow-lg z-50 no-print">
        <div class="flex justify-around items-center h-16">
            <a href="homepage.php" class="flex flex-col items-center gap-1 text-text-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="text-xs">Home</span>
            </a>
            <a href="course_catalog.php" class="flex flex-col items-center gap-1 text-text-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
                <span class="text-xs">Courses</span>
            </a>
            <a href="video_learning_interface.php" class="flex flex-col items-center gap-1 text-text-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <span class="text-xs">Classes</span>
            </a>
            <a href="practice_center.php" class="flex flex-col items-center gap-1 text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
                <span class="text-xs font-medium">Practice</span>
            </a>
            <a href="student_dashboard.php" class="flex flex-col items-center gap-1 text-text-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span class="text-xs">Profile</span>
            </a>
        </div>
    </nav>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Search Button
        const searchBtn = document.getElementById('searchBtn');
        searchBtn.addEventListener('click', () => {
            alert('Search functionality coming soon!');
        });

        // Practice Module Selection
        function openPracticeModule(moduleType) {
            const practiceSession = document.getElementById('practiceSession');
            const sessionTitle = document.getElementById('sessionTitle');
            
            const moduleTitles = {
                'pronunciation': 'Pronunciation Practice',
                'conversation': 'Conversation Practice',
                'interview': 'Mock Interview',
                'peer': 'Peer Practice Room',
                'accent': 'Accent Improvement',
                'roleplay': 'Role-Play Scenario'
            };
            
            sessionTitle.textContent = moduleTitles[moduleType] || 'Practice Session';
            
            // Hide categories section
            document.getElementById('practice-categories').classList.add('hidden');
            
            // Show practice session
            practiceSession.classList.remove('hidden');
            
            // Scroll to top
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // Back Button
        const backBtn = document.getElementById('backBtn');
        if (backBtn) {
            backBtn.addEventListener('click', () => {
                document.getElementById('practiceSession').classList.add('hidden');
                document.getElementById('practice-categories').classList.remove('hidden');
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }

        // Recording Button
        const recordBtn = document.getElementById('recordBtn');
        const feedbackArea = document.getElementById('feedbackArea');
        let isRecording = false;

        if (recordBtn) {
            recordBtn.addEventListener('click', () => {
                isRecording = !isRecording;
                
                if (isRecording) {
                    recordBtn.classList.add('animate-pulse');
                    // UPDATED: Using SVG for Stop Icon
                    recordBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z" /></svg>';
                    
                    // Simulate recording for 3 seconds
                    setTimeout(() => {
                        isRecording = false;
                        recordBtn.classList.remove('animate-pulse');
                        // UPDATED: Using SVG for Microphone Icon
                        recordBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" /></svg>';
                        
                        // Show feedback
                        if (feedbackArea) {
                            feedbackArea.classList.remove('hidden');
                        }
                    }, 3000);
                }
            });
        }

        // Animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.card').forEach(card => {
            observer.observe(card);
        });
    </script>
<script id="dhws-dataInjector" src="../public/dhws-data-injector.js"></script>
</body>
</html>