<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Angrezzify Video Learning Interface - Immersive English learning experience with interactive video lessons, practice tools, and progress tracking">
    <link rel="icon" href="1.jpg" type="image/jpg">
    <title>Video Learning Interface - Angrezzify</title>
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
                    <a href="practice_center.php" class="text-text-secondary hover:text-primary transition-colors">Practice</a>
                    <a href="student_dashboard.php" class="text-text-secondary hover:text-primary transition-colors">Dashboard</a>
                </div>

                <div class="hidden md:flex items-center gap-4">
                    <button id="notesToggleBtn" class="p-2 hover:bg-surface rounded-lg transition-colors" aria-label="Toggle notes panel">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </button>
                    <a href="student_dashboard.php" class="p-2 hover:bg-surface rounded-lg transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </a>
                </div>

                <button id="mobileMenuBtn" class="md:hidden p-2 hover:bg-surface rounded-lg transition-colors" aria-label="Open menu">
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
                <a href="practice_center.php" class="block text-text-secondary hover:text-primary py-2">Practice</a>
                <a href="student_dashboard.php" class="block text-text-secondary hover:text-primary py-2">Dashboard</a>
                <button id="mobileNotesBtn" class="w-full text-left text-text-secondary hover:text-primary py-2">Toggle Notes</button>
            </div>
        </div>
    </header>

    <section class="bg-white border-b border-border no-print">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex items-center gap-2 text-sm">
                <a href="homepage.php" class="text-text-secondary hover:text-primary transition-colors">Home</a>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-text-tertiary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <a href="course_catalog.php" class="text-text-secondary hover:text-primary transition-colors">Courses</a>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-text-tertiary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <a href="javascript:void(0)" class="text-text-secondary hover:text-primary transition-colors">English Foundation Course</a>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-text-tertiary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <span class="text-primary font-medium">Lesson 1: Introduction to English</span>
            </div>
        </div>
    </section>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="grid lg:grid-cols-12 gap-6">
            
            <div class="lg:col-span-8 space-y-6">
                
                <div class="card p-0 overflow-hidden">
                    <div class="relative bg-black aspect-video">
                        <video id="mainVideoPlayer" class="w-full h-full" poster="https://images.pexels.com/photos/5212317/pexels-photo-5212317.jpeg?auto=compress&cs=tinysrgb&w=1200" preload="metadata">
                            <source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">
                            <track kind="captions" src="" srclang="en" label="English" default>
                            <track kind="captions" src="" srclang="hi" label="Hindi">
                            Your browser does not support the video tag.
                        </video>
                        
                        <div id="videoControls" class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/90 to-transparent p-4 opacity-0 hover:opacity-100 transition-opacity duration-300">
                            <div class="mb-4">
                                <div class="relative h-1 bg-white/30 rounded-full cursor-pointer" id="progressBar">
                                    <div id="progressFill" class="absolute h-full bg-accent rounded-full" style="width: 0%"></div>
                                    <div id="progressHandle" class="absolute w-3 h-3 bg-white rounded-full -top-1 shadow-lg" style="left: 0%"></div>
                                </div>
                                <div class="flex justify-between text-xs text-white mt-1">
                                    <span id="currentTime">0:00</span>
                                    <span id="duration">0:00</span>
                                </div>
                            </div>
                            
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <button id="playPauseBtn" class="text-white hover:text-accent transition-colors" aria-label="Play/Pause video">
                                        <div id="playIcon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                        <div id="pauseIcon" class="hidden">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                    </button>
                                    
                                    <button id="rewindBtn" class="text-white hover:text-accent transition-colors" aria-label="Rewind 10 seconds">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0019 16V8a1 1 0 00-1.6-.8l-5.333 4zM4.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0011 16V8a1 1 0 00-1.6-.8l-5.334 4z" />
                                        </svg>
                                    </button>
                                    
                                    <button id="forwardBtn" class="text-white hover:text-accent transition-colors" aria-label="Forward 10 seconds">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.933 12.8a1 1 0 000-1.6L6.6 7.2A1 1 0 005 8v8a1 1 0 001.6.8l5.333-4zM19.933 12.8a1 1 0 000-1.6l-5.333-4A1 1 0 0013 8v8a1 1 0 001.6.8l5.333-4z" />
                                        </svg>
                                    </button>
                                    
                                    <div class="flex items-center gap-2">
                                        <button id="volumeBtn" class="text-white hover:text-accent transition-colors" aria-label="Mute/Unmute">
                                            <svg id="volumeIcon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                                            </svg>
                                        </button>
                                        <input type="range" id="volumeSlider" min="0" max="100" value="100" class="w-20 h-1 bg-white/30 rounded-full appearance-none cursor-pointer">
                                    </div>
                                </div>
                                
                                <div class="flex items-center gap-3">
                                    <div class="relative">
                                        <button id="speedBtn" class="text-white text-sm hover:text-accent transition-colors px-2 py-1 bg-white/20 rounded" aria-label="Playback speed">
                                            <span id="speedText">1x</span>
                                        </button>
                                        <div id="speedMenu" class="hidden absolute bottom-full right-0 mb-2 bg-white rounded-lg shadow-elevated p-2 min-w-[100px]">
                                            <button class="speed-option block w-full text-left px-3 py-2 text-sm hover:bg-surface rounded" data-speed="0.5">0.5x</button>
                                            <button class="speed-option block w-full text-left px-3 py-2 text-sm hover:bg-surface rounded" data-speed="0.75">0.75x</button>
                                            <button class="speed-option block w-full text-left px-3 py-2 text-sm hover:bg-surface rounded bg-accent-100" data-speed="1">1x</button>
                                            <button class="speed-option block w-full text-left px-3 py-2 text-sm hover:bg-surface rounded" data-speed="1.25">1.25x</button>
                                            <button class="speed-option block w-full text-left px-3 py-2 text-sm hover:bg-surface rounded" data-speed="1.5">1.5x</button>
                                            <button class="speed-option block w-full text-left px-3 py-2 text-sm hover:bg-surface rounded" data-speed="2">2x</button>
                                        </div>
                                    </div>
                                    
                                    <button id="captionsBtn" class="text-white hover:text-accent transition-colors" aria-label="Toggle captions">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                        </svg>
                                    </button>
                                    
                                    <button id="pipBtn" class="text-white hover:text-accent transition-colors" aria-label="Picture-in-picture mode">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                    </button>
                                    
                                    <button id="fullscreenBtn" class="text-white hover:text-accent transition-colors" aria-label="Toggle fullscreen">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div id="loadingIndicator" class="hidden absolute inset-0 flex items-center justify-center bg-black/50">
                            <div class="animate-spin rounded-full h-12 w-12 border-4 border-white border-t-transparent"></div>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <div class="flex items-start justify-between gap-4 mb-4">
                            <div class="flex-1">
                                <h1 class="text-2xl font-poppins font-bold text-primary mb-2">
                                    Lesson 1: Introduction to English - Basics of Greetings
                                </h1>
                                <p class="text-text-secondary">
                                    Learn how to introduce yourself and greet others in English with confidence. This lesson covers basic greetings, introductions, and common phrases used in daily conversations.
                                </p>
                            </div>
                            <button id="bookmarkBtn" class="p-2 hover:bg-surface rounded-lg transition-colors" aria-label="Bookmark this lesson">
                                <svg id="bookmarkIcon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                </svg>
                            </button>
                        </div>
                        
                        <div class="flex flex-wrap items-center gap-6 text-sm text-text-secondary">
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>15 minutes</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                <span>2,450 students</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                                <span>Beginner</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                                </svg>
                                <span>Hindi + English</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="flex flex-wrap items-center justify-between gap-4">
                        <div class="flex items-center gap-3">
                            <button class="btn btn-primary flex items-center justify-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Mark as Complete
                            </button>
                            <button class="btn btn-outline flex items-center justify-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                                </svg>
                                Practice Speaking
                            </button>
                        </div>
                        <div class="flex items-center gap-2">
                            <button class="btn-ghost px-4 py-2 rounded-lg" aria-label="Share lesson">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                                </svg>
                            </button>
                            <button class="btn-ghost px-4 py-2 rounded-lg" aria-label="Download lesson">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="border-b border-border mb-6">
                        <div class="flex gap-6">
                            <button class="tab-btn active pb-4 px-2 font-medium text-primary border-b-2 border-primary" data-tab="overview">
                                Overview
                            </button>
                            <button class="tab-btn pb-4 px-2 font-medium text-text-secondary hover:text-primary transition-colors" data-tab="resources">
                                Resources
                            </button>
                            <button class="tab-btn pb-4 px-2 font-medium text-text-secondary hover:text-primary transition-colors" data-tab="discussion">
                                Discussion
                            </button>
                        </div>
                    </div>

                    <div id="overview-tab" class="tab-content">
                        <h3 class="text-xl font-poppins font-semibold text-primary mb-4">What You'll Learn</h3>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-text-secondary">Basic greetings in English (Hello, Hi, Good morning, etc.)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-text-secondary">How to introduce yourself confidently</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-text-secondary">Common phrases for daily conversations</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-text-secondary">Pronunciation tips for clear communication</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-500 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-text-secondary">Cultural context for English greetings</span>
                            </li>
                        </ul>

                        <h3 class="text-xl font-poppins font-semibold text-primary mb-4">Key Vocabulary</h3>
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div class="bg-surface p-4 rounded-lg">
                                <p class="font-semibold text-primary mb-1">Hello / Hi</p>
                                <p class="text-sm text-text-secondary">नमस्ते / हाय - Basic greeting</p>
                            </div>
                            <div class="bg-surface p-4 rounded-lg">
                                <p class="font-semibold text-primary mb-1">Good morning</p>
                                <p class="text-sm text-text-secondary">सुप्रभात - Morning greeting</p>
                            </div>
                            <div class="bg-surface p-4 rounded-lg">
                                <p class="font-semibold text-primary mb-1">My name is...</p>
                                <p class="text-sm text-text-secondary">मेरा नाम है... - Introduction</p>
                            </div>
                            <div class="bg-surface p-4 rounded-lg">
                                <p class="font-semibold text-primary mb-1">Nice to meet you</p>
                                <p class="text-sm text-text-secondary">आपसे मिलकर खुशी हुई - Polite response</p>
                            </div>
                        </div>
                    </div>

                    <div id="resources-tab" class="tab-content hidden">
                        <h3 class="text-xl font-poppins font-semibold text-primary mb-4">Downloadable Resources</h3>
                        <div class="space-y-3">
                            <a href="javascript:void(0)" class="flex items-center justify-between p-4 bg-surface rounded-lg hover:bg-surface-100 transition-colors">
                                <div class="flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                    </svg>
                                    <div>
                                        <p class="font-medium text-primary">Lesson 1 - Study Notes</p>
                                        <p class="text-sm text-text-secondary">PDF • 2.5 MB</p>
                                    </div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                            </a>
                            <a href="javascript:void(0)" class="flex items-center justify-between p-4 bg-surface rounded-lg hover:bg-surface-100 transition-colors">
                                <div class="flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    <div>
                                        <p class="font-medium text-primary">Practice Worksheet</p>
                                        <p class="text-sm text-text-secondary">PDF • 1.8 MB</p>
                                    </div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                            </a>
                            <a href="javascript:void(0)" class="flex items-center justify-between p-4 bg-surface rounded-lg hover:bg-surface-100 transition-colors">
                                <div class="flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                                    </svg>
                                    <div>
                                        <p class="font-medium text-primary">Pronunciation Audio Guide</p>
                                        <p class="text-sm text-text-secondary">MP3 • 5.2 MB</p>
                                    </div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div id="discussion-tab" class="tab-content hidden">
                        <h3 class="text-xl font-poppins font-semibold text-primary mb-4">Discussion Forum</h3>
                        
                        <div class="mb-6">
                            <textarea class="input resize-none" rows="3" placeholder="Share your thoughts or ask a question..."></textarea>
                            <button class="btn btn-primary mt-3">Post Comment</button>
                        </div>

                        <div class="space-y-4">
                            <div class="border-b border-border pb-4">
                                <div class="flex items-start gap-3">
                                    <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1d08af847-1763295353729.png" alt="Profile picture of Rahul Kumar" class="w-10 h-10 rounded-full object-cover" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                                    <div class="flex-1">
                                        <div class="flex items-center gap-2 mb-1">
                                            <p class="font-semibold text-primary">Rahul Kumar</p>
                                            <span class="text-xs text-text-tertiary">2 hours ago</span>
                                        </div>
                                        <p class="text-text-secondary text-sm mb-2">
                                            Bahut achha lesson hai! Hindi explanation se samajhna aasan ho gaya. Thank you teacher!
                                        </p>
                                        <div class="flex items-center gap-4 text-sm">
                                            <button class="text-text-secondary hover:text-accent transition-colors flex items-center gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                                </svg>
                                                <span>12</span>
                                            </button>
                                            <button class="text-text-secondary hover:text-primary transition-colors">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="border-b border-border pb-4">
                                <div class="flex items-start gap-3">
                                    <img src="https://img.rocket.new/generatedImages/rocket_gen_img_10458bf2c-1763293523905.png" alt="Profile picture of Priya Sharma" class="w-10 h-10 rounded-full object-cover" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                                    <div class="flex-1">
                                        <div class="flex items-center gap-2 mb-1">
                                            <p class="font-semibold text-primary">Priya Sharma</p>
                                            <span class="text-xs text-text-tertiary">5 hours ago</span>
                                        </div>
                                        <p class="text-text-secondary text-sm mb-2">
                                            Can someone explain the difference between "Hi" and "Hello"? When should we use which one?
                                        </p>
                                        <div class="flex items-center gap-4 text-sm">
                                            <button class="text-text-secondary hover:text-accent transition-colors flex items-center gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                                </svg>
                                                <span>8</span>
                                            </button>
                                            <button class="text-text-secondary hover:text-primary transition-colors">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between gap-4">
                    <button class="btn btn-outline flex items-center gap-2" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Previous Lesson
                    </button>
                    <button class="btn btn-primary flex items-center gap-2">
                        Next Lesson
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="lg:col-span-4 space-y-6">
                
                <div class="card">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-poppins font-semibold text-primary">Course Progress</h3>
                        <span class="text-sm text-accent font-semibold">5%</span>
                    </div>
                    <div class="progress-bar mb-2">
                        <div class="progress-fill" style="width: 5%"></div>
                    </div>
                    <p class="text-sm text-text-secondary">1 of 20 lessons completed</p>
                </div>

                <div class="card">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-poppins font-semibold text-primary">Course Playlist</h3>
                        <button class="text-sm text-secondary hover:text-primary transition-colors">View All</button>
                    </div>
                    
                    <div class="space-y-2 max-h-96 overflow-y-auto">
                        <div class="bg-accent-50 border-l-4 border-accent p-3 rounded-lg">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-accent rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="font-medium text-primary text-sm mb-1">Lesson 1: Introduction to English</p>
                                    <div class="flex items-center gap-2 text-xs text-text-secondary">
                                        <span>15 min</span>
                                        <span>•</span>
                                        <span>Beginner</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="w-full text-left p-3 rounded-lg hover:bg-surface transition-colors">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-surface-200 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-sm font-semibold text-text-secondary">2</span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="font-medium text-primary text-sm mb-1">Lesson 2: Basic Conversations</p>
                                    <div class="flex items-center gap-2 text-xs text-text-secondary">
                                        <span>18 min</span>
                                        <span>•</span>
                                        <span>Beginner</span>
                                    </div>
                                </div>
                            </div>
                        </button>

                        <button class="w-full text-left p-3 rounded-lg hover:bg-surface transition-colors">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-surface-200 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-sm font-semibold text-text-secondary">3</span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="font-medium text-primary text-sm mb-1">Lesson 3: Numbers and Time</p>
                                    <div class="flex items-center gap-2 text-xs text-text-secondary">
                                        <span>20 min</span>
                                        <span>•</span>
                                        <span>Beginner</span>
                                    </div>
                                </div>
                            </div>
                        </button>

                        <button class="w-full text-left p-3 rounded-lg hover:bg-surface transition-colors">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-surface-200 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-sm font-semibold text-text-secondary">4</span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="font-medium text-primary text-sm mb-1">Lesson 4: Family and Friends</p>
                                    <div class="flex items-center gap-2 text-xs text-text-secondary">
                                        <span>22 min</span>
                                        <span>•</span>
                                        <span>Beginner</span>
                                    </div>
                                </div>
                            </div>
                        </button>

                        <button class="w-full text-left p-3 rounded-lg hover:bg-surface transition-colors">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-surface-200 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-sm font-semibold text-text-secondary">5</span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="font-medium text-primary text-sm mb-1">Lesson 5: Daily Routines</p>
                                    <div class="flex items-center gap-2 text-xs text-text-secondary">
                                        <span>25 min</span>
                                        <span>•</span>
                                        <span>Beginner</span>
                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>

                <div id="notesPanel" class="card">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-poppins font-semibold text-primary">My Notes</h3>
                        <button id="addNoteBtn" class="text-sm text-secondary hover:text-primary transition-colors flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            Add Note
                        </button>
                    </div>

                    <div id="noteInput" class="hidden mb-4">
                        <textarea class="input resize-none mb-2" rows="3" placeholder="Write your note here..."></textarea>
                        <div class="flex items-center gap-2">
                            <button class="btn btn-primary text-sm px-4 py-2">Save Note</button>
                            <button id="cancelNoteBtn" class="btn-ghost text-sm px-4 py-2">Cancel</button>
                        </div>
                    </div>

                    <div class="space-y-3 max-h-64 overflow-y-auto">
                        <div class="bg-surface p-3 rounded-lg">
                            <div class="flex items-start justify-between gap-2 mb-2">
                                <span class="text-xs text-accent font-medium">2:45</span>
                                <button class="text-text-tertiary hover:text-error transition-colors" aria-label="Delete note">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                            <p class="text-sm text-text-secondary">
                                "Hello" formal hai, "Hi" casual. Office mein "Hello" use karna better hai.
                            </p>
                        </div>

                        <div class="bg-surface p-3 rounded-lg">
                            <div class="flex items-start justify-between gap-2 mb-2">
                                <span class="text-xs text-accent font-medium">5:12</span>
                                <button class="text-text-tertiary hover:text-error transition-colors" aria-label="Delete note">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                            <p class="text-sm text-text-secondary">
                                "My name is..." ke baad apna naam bolna hai. Practice: "My name is Rahul."
                            </p>
                        </div>

                        <div class="bg-surface p-3 rounded-lg">
                            <div class="flex items-start justify-between gap-2 mb-2">
                                <span class="text-xs text-accent font-medium">8:30</span>
                                <button class="text-text-tertiary hover:text-error transition-colors" aria-label="Delete note">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                            <p class="text-sm text-text-secondary">
                                Pronunciation tip: "Nice to meet you" - "meet" ko "mee-t" bolna hai, "mit" nahi.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <h3 class="font-poppins font-semibold text-primary mb-4">Related Lessons</h3>
                    <div class="space-y-3">
                        <a href="javascript:void(0)" class="block p-3 bg-surface rounded-lg hover:bg-surface-100 transition-colors">
                            <p class="font-medium text-primary text-sm mb-1">Pronunciation Practice: Greetings</p>
                            <p class="text-xs text-text-secondary">Practice module • 10 min</p>
                        </a>
                        <a href="javascript:void(0)" class="block p-3 bg-surface rounded-lg hover:bg-surface-100 transition-colors">
                            <p class="font-medium text-primary text-sm mb-1">Common Mistakes in Introductions</p>
                            <p class="text-xs text-text-secondary">Bonus lesson • 8 min</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

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
            <a href="video_learning_interface.php" class="flex flex-col items-center gap-1 text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <span class="text-xs font-medium">Classes</span>
            </a>
            <a href="practice_center.php" class="flex flex-col items-center gap-1 text-text-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
                <span class="text-xs">Practice</span>
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

        // Video Player Controls
        const video = document.getElementById('mainVideoPlayer');
        const videoControls = document.getElementById('videoControls');
        const playPauseBtn = document.getElementById('playPauseBtn');
        const playIcon = document.getElementById('playIcon');
        const pauseIcon = document.getElementById('pauseIcon');
        const rewindBtn = document.getElementById('rewindBtn');
        const forwardBtn = document.getElementById('forwardBtn');
        const progressBar = document.getElementById('progressBar');
        const progressFill = document.getElementById('progressFill');
        const progressHandle = document.getElementById('progressHandle');
        const currentTimeDisplay = document.getElementById('currentTime');
        const durationDisplay = document.getElementById('duration');
        const volumeBtn = document.getElementById('volumeBtn');
        const volumeIcon = document.getElementById('volumeIcon');
        const volumeSlider = document.getElementById('volumeSlider');
        const speedBtn = document.getElementById('speedBtn');
        const speedText = document.getElementById('speedText');
        const speedMenu = document.getElementById('speedMenu');
        const captionsBtn = document.getElementById('captionsBtn');
        const pipBtn = document.getElementById('pipBtn');
        const fullscreenBtn = document.getElementById('fullscreenBtn');
        const loadingIndicator = document.getElementById('loadingIndicator');

        // Play/Pause
        playPauseBtn.addEventListener('click', () => {
            if (video.paused) {
                video.play();
                playIcon.classList.add('hidden');
                pauseIcon.classList.remove('hidden');
            } else {
                video.pause();
                playIcon.classList.remove('hidden');
                pauseIcon.classList.add('hidden');
            }
        });

        // Rewind 10 seconds
        rewindBtn.addEventListener('click', () => {
            video.currentTime = Math.max(0, video.currentTime - 10);
        });

        // Forward 10 seconds
        forwardBtn.addEventListener('click', () => {
            video.currentTime = Math.min(video.duration, video.currentTime + 10);
        });

        // Progress Bar
        video.addEventListener('timeupdate', () => {
            const progress = (video.currentTime / video.duration) * 100;
            progressFill.style.width = `${progress}%`;
            progressHandle.style.left = `${progress}%`;
            currentTimeDisplay.textContent = formatTime(video.currentTime);
        });

        video.addEventListener('loadedmetadata', () => {
            durationDisplay.textContent = formatTime(video.duration);
        });

        progressBar.addEventListener('click', (e) => {
            const rect = progressBar.getBoundingClientRect();
            const pos = (e.clientX - rect.left) / rect.width;
            video.currentTime = pos * video.duration;
        });

        // Volume Control
        volumeBtn.addEventListener('click', () => {
            video.muted = !video.muted;
            updateVolumeIcon();
        });

        volumeSlider.addEventListener('input', (e) => {
            video.volume = e.target.value / 100;
            video.muted = false;
            updateVolumeIcon();
        });

        function updateVolumeIcon() {
            // Logic to change SVG icon based on volume level could be added here if multiple SVGs were available
            // For now, it stays as the default speaker icon
        }

        // Playback Speed
        speedBtn.addEventListener('click', () => {
            speedMenu.classList.toggle('hidden');
        });

        document.querySelectorAll('.speed-option').forEach(option => {
            option.addEventListener('click', () => {
                const speed = parseFloat(option.dataset.speed);
                video.playbackRate = speed;
                speedText.textContent = `${speed}x`;
                speedMenu.classList.add('hidden');
                
                // Update active state
                document.querySelectorAll('.speed-option').forEach(opt => {
                    opt.classList.remove('bg-accent-100');
                });
                option.classList.add('bg-accent-100');
            });
        });

        // Captions Toggle
        captionsBtn.addEventListener('click', () => {
            const tracks = video.textTracks;
            if (tracks.length > 0) {
                tracks[0].mode = tracks[0].mode === 'showing' ? 'hidden' : 'showing';
            }
        });

        // Picture-in-Picture
        pipBtn.addEventListener('click', async () => {
            try {
                if (document.pictureInPictureElement) {
                    await document.exitPictureInPicture();
                } else {
                    await video.requestPictureInPicture();
                }
            } catch (error) {
                console.error('PiP error:', error);
            }
        });

        // Fullscreen
        fullscreenBtn.addEventListener('click', () => {
            if (!document.fullscreenElement) {
                video.parentElement.requestFullscreen();
            } else {
                document.exitFullscreen();
            }
        });

        // Loading Indicator
        video.addEventListener('waiting', () => {
            loadingIndicator.classList.remove('hidden');
        });

        video.addEventListener('canplay', () => {
            loadingIndicator.classList.add('hidden');
        });

        // Format Time Helper
        function formatTime(seconds) {
            const mins = Math.floor(seconds / 60);
            const secs = Math.floor(seconds % 60);
            return `${mins}:${secs.toString().padStart(2, '0')}`;
        }

        // Tab Switching
        const tabBtns = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const tabName = btn.dataset.tab;
                
                // Update active tab button
                tabBtns.forEach(b => {
                    b.classList.remove('active', 'text-primary', 'border-primary');
                    b.classList.add('text-text-secondary');
                });
                btn.classList.add('active', 'text-primary', 'border-primary');
                btn.classList.remove('text-text-secondary');
                
                // Show active tab content
                tabContents.forEach(content => {
                    content.classList.add('hidden');
                });
                document.getElementById(`${tabName}-tab`).classList.remove('hidden');
            });
        });

        // Notes Panel Toggle
        const notesToggleBtn = document.getElementById('notesToggleBtn');
        const mobileNotesBtn = document.getElementById('mobileNotesBtn');
        const notesPanel = document.getElementById('notesPanel');
        const addNoteBtn = document.getElementById('addNoteBtn');
        const noteInput = document.getElementById('noteInput');
        const cancelNoteBtn = document.getElementById('cancelNoteBtn');

        notesToggleBtn.addEventListener('click', () => {
            notesPanel.classList.toggle('hidden');
        });

        mobileNotesBtn.addEventListener('click', () => {
            notesPanel.classList.toggle('hidden');
            mobileMenu.classList.add('hidden');
        });

        addNoteBtn.addEventListener('click', () => {
            noteInput.classList.remove('hidden');
        });

        cancelNoteBtn.addEventListener('click', () => {
            noteInput.classList.add('hidden');
        });

        // Bookmark Toggle
        const bookmarkBtn = document.getElementById('bookmarkBtn');
        const bookmarkIcon = document.getElementById('bookmarkIcon');
        let isBookmarked = false;

        bookmarkBtn.addEventListener('click', () => {
            isBookmarked = !isBookmarked;
            if (isBookmarked) {
                // Change to filled bookmark icon
                bookmarkIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" fill="#1e3a8a" />';
            } else {
                // Revert to outline
                bookmarkIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />';
            }
        });

        // Keyboard Shortcuts
        document.addEventListener('keydown', (e) => {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA') return;
            
            switch(e.key) {
                case ' ':
                    e.preventDefault();
                    playPauseBtn.click();
                    break;
                case 'ArrowLeft':
                    e.preventDefault();
                    rewindBtn.click();
                    break;
                case 'ArrowRight':
                    e.preventDefault();
                    forwardBtn.click();
                    break;
                case 'f':
                    e.preventDefault();
                    fullscreenBtn.click();
                    break;
                case 'm':
                    e.preventDefault();
                    volumeBtn.click();
                    break;
            }
        });

        // Auto-hide controls
        let controlsTimeout;
        const videoContainer = video.parentElement;

        videoContainer.addEventListener('mousemove', () => {
            videoControls.style.opacity = '1';
            clearTimeout(controlsTimeout);
            controlsTimeout = setTimeout(() => {
                if (!video.paused) {
                    videoControls.style.opacity = '0';
                }
            }, 3000);
        });

        videoContainer.addEventListener('mouseleave', () => {
            if (!video.paused) {
                videoControls.style.opacity = '0';
            }
        });

        // Close speed menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!speedBtn.contains(e.target) && !speedMenu.contains(e.target)) {
                speedMenu.classList.add('hidden');
            }
        });

        // Save progress to localStorage
        video.addEventListener('timeupdate', () => {
            localStorage.setItem('videoProgress', video.currentTime);
        });

        // Load saved progress
        window.addEventListener('load', () => {
            const savedProgress = localStorage.getItem('videoProgress');
            if (savedProgress) {
                video.currentTime = parseFloat(savedProgress);
            }
        });
    </script>
<script id="dhws-dataInjector" src="../public/dhws-data-injector.js"></script>
</body>
</html>