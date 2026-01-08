<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore affordable English learning courses at Angrezzify. From beginner to advanced levels, find the perfect course with bilingual support and flexible payment options.">
    <link rel="icon" href="1.jpg" type="image/jpg">
    <title>Course Catalog - Angrezzify | Find Your Perfect English Learning Path</title>
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
                    <a href="course_catalog.php" class="text-primary font-semibold hover:text-secondary transition-colors">Courses</a>
                    <a href="practice_center.php" class="text-text-secondary hover:text-primary transition-colors">Practice</a>
                    <a href="student_dashboard.php" class="text-text-secondary hover:text-primary transition-colors">Dashboard</a>
                </div>

                <div class="hidden md:flex items-center gap-4">
                    <button id="searchBtn" class="p-2 hover:bg-surface rounded-lg transition-colors text-text-secondary" aria-label="Search courses">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                    <a href="authentication_hub.php" class="btn btn-primary">Login</a>
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
                <a href="course_catalog.php" class="block text-primary font-semibold py-2">Courses</a>
                <a href="practice_center.php" class="block text-text-secondary hover:text-primary py-2">Practice</a>
                <a href="student_dashboard.php" class="block text-text-secondary hover:text-primary py-2">Dashboard</a>
                <a href="authentication_hub.php" class="btn btn-primary w-full mt-4">Login</a>
            </div>
        </div>
    </header>

    <section class="bg-gradient-to-br from-primary-50 via-white to-accent-50 py-12 lg:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h1 class="text-4xl lg:text-5xl font-poppins font-bold text-primary mb-4">
                    Explore Our Courses
                </h1>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">
                    Choose from expertly designed learning paths with bilingual support and flexible payment options
                </p>
            </div>

            <div class="max-w-2xl mx-auto">
                <div class="relative">
                    <input 
                        type="text" 
                        id="courseSearch" 
                        placeholder="Search courses by name, level, or topic..." 
                        class="input pl-12 pr-4"
                        aria-label="Search courses"
                    >
                    <div class="absolute left-4 top-1/2 transform -translate-y-1/2 text-text-tertiary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 lg:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-8">
                
                <aside class="lg:w-64 flex-shrink-0">
                    <div class="card sticky top-20">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-poppins font-semibold text-primary">Filters</h3>
                            <button id="resetFilters" class="text-sm text-secondary hover:text-primary transition-colors flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                </svg>
                                Reset
                            </button>
                        </div>

                        <div class="mb-6">
                            <h4 class="font-semibold text-text-primary mb-3 text-sm">Skill Level</h4>
                            <div class="space-y-2">
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="filter-checkbox" data-filter="level" value="beginner" checked>
                                    <span class="text-sm text-text-secondary">Beginner</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="filter-checkbox" data-filter="level" value="intermediate" checked>
                                    <span class="text-sm text-text-secondary">Intermediate</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="filter-checkbox" data-filter="level" value="advanced" checked>
                                    <span class="text-sm text-text-secondary">Advanced</span>
                                </label>
                            </div>
                        </div>

                        <div class="mb-6">
                            <h4 class="font-semibold text-text-primary mb-3 text-sm">Duration</h4>
                            <div class="space-y-2">
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="filter-checkbox" data-filter="duration" value="short" checked>
                                    <span class="text-sm text-text-secondary">1-2 months</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="filter-checkbox" data-filter="duration" value="medium" checked>
                                    <span class="text-sm text-text-secondary">3-4 months</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="filter-checkbox" data-filter="duration" value="long" checked>
                                    <span class="text-sm text-text-secondary">5+ months</span>
                                </label>
                            </div>
                        </div>

                        <div class="mb-6">
                            <h4 class="font-semibold text-text-primary mb-3 text-sm">Price Range</h4>
                            <div class="space-y-2">
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="filter-checkbox" data-filter="price" value="budget" checked>
                                    <span class="text-sm text-text-secondary">Under ₹3,000</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="filter-checkbox" data-filter="price" value="mid" checked>
                                    <span class="text-sm text-text-secondary">₹3,000 - ₹5,000</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="filter-checkbox" data-filter="price" value="premium" checked>
                                    <span class="text-sm text-text-secondary">Above ₹5,000</span>
                                </label>
                            </div>
                        </div>

                        <div class="mb-6">
                            <h4 class="font-semibold text-text-primary mb-3 text-sm">Learning Goals</h4>
                            <div class="space-y-2">
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="filter-checkbox" data-filter="goal" value="speaking" checked>
                                    <span class="text-sm text-text-secondary">Speaking Fluency</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="filter-checkbox" data-filter="goal" value="grammar" checked>
                                    <span class="text-sm text-text-secondary">Grammar Mastery</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="filter-checkbox" data-filter="goal" value="interview" checked>
                                    <span class="text-sm text-text-secondary">Interview Prep</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="filter-checkbox" data-filter="goal" value="business" checked>
                                    <span class="text-sm text-text-secondary">Business English</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </aside>

                <div class="flex-1">
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
                        <div class="flex items-center gap-2">
                            <span class="text-sm text-text-secondary">Sort by:</span>
                            <select id="sortSelect" class="input py-2 text-sm">
                                <option value="popular">Most Popular</option>
                                <option value="newest">Newest First</option>
                                <option value="price-low">Price: Low to High</option>
                                <option value="price-high">Price: High to Low</option>
                                <option value="rating">Highest Rated</option>
                            </select>
                        </div>
                        <div class="flex items-center gap-2">
                            <button id="compareBtn" class="btn-ghost px-4 py-2 text-sm flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                </svg>
                                Compare (0)
                            </button>
                        </div>
                    </div>

                    <div id="courseGrid" class="grid md:grid-cols-2 gap-6">
                        
                        <div class="card hover:shadow-elevated transition-all duration-300 group course-card" data-level="beginner" data-duration="medium" data-price="budget" data-goal="speaking,grammar">
                            <div class="relative rounded-lg overflow-hidden mb-4 h-48">
                                <img src="https://img.rocket.new/generatedImages/rocket_gen_img_180f5464b-1767846961337.png" alt="Beginner student learning English basics with friendly teacher in comfortable classroom setting" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                                <div class="absolute top-3 right-3">
                                    <span class="badge badge-success">Bestseller</span>
                                </div>
                                <div class="absolute top-3 left-3">
                                    <input type="checkbox" class="compare-checkbox w-5 h-5 cursor-pointer" data-course="foundation" aria-label="Add to comparison">
                                </div>
                            </div>
                            
                            <div class="mb-3 flex items-center justify-between">
                                <span class="text-sm text-accent font-medium">Beginner Level</span>
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <span class="text-sm font-semibold text-text-primary">4.8</span>
                                    <span class="text-sm text-text-tertiary">(2,450)</span>
                                </div>
                            </div>
                            
                            <h3 class="text-xl font-poppins font-semibold text-primary mb-2">
                                English Foundation Course
                            </h3>
                            
                            <p class="text-text-secondary mb-4 text-sm leading-relaxed">
                                शुरुआत से English सीखें Hindi explanations के साथ। Grammar, vocabulary, और basic conversation skills।
                            </p>

                            <div class="mb-4 space-y-2">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm text-text-secondary">Basic conversation confidence</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm text-text-secondary">Essential grammar foundation</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm text-text-secondary">1000+ common words vocabulary</span>
                                </div>
                            </div>

                            <div class="flex items-center gap-4 mb-4 text-sm text-text-secondary">
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>3 months</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>60 lessons</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                    <span>3,200 students</span>
                                </div>
                            </div>

                            <div class="flex items-center justify-between pt-4 border-t border-border">
                                <div>
                                    <span class="text-2xl font-bold text-primary">₹2,999</span>
                                    <span class="text-sm text-text-tertiary line-through ml-2">₹5,999</span>
                                    <div class="text-xs text-accent mt-1">EMI from ₹500/month</div>
                                </div>
                                <div class="flex gap-2">
                                    <button class="btn-ghost px-3 py-2 rounded-lg text-sm preview-btn" data-course="foundation">
                                        Preview
                                    </button>
                                    <a href="video_learning_interface.php" class="btn btn-primary px-4 py-2 text-sm">
                                        Enroll Now
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card hover:shadow-elevated transition-all duration-300 group course-card" data-level="intermediate" data-duration="medium" data-price="mid" data-goal="speaking">
                            <div class="relative rounded-lg overflow-hidden mb-4 h-48">
                                <img src="https://img.rocket.new/generatedImages/rocket_gen_img_16059b7ed-1767846958898.png" alt="Confident intermediate student practicing spoken English with native-like fluency" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                                <div class="absolute top-3 right-3">
                                    <span class="badge badge-info">Popular</span>
                                </div>
                                <div class="absolute top-3 left-3">
                                    <input type="checkbox" class="compare-checkbox w-5 h-5 cursor-pointer" data-course="spoken" aria-label="Add to comparison">
                                </div>
                            </div>
                            
                            <div class="mb-3 flex items-center justify-between">
                                <span class="text-sm text-secondary font-medium">Intermediate Level</span>
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <span class="text-sm font-semibold text-text-primary">4.9</span>
                                    <span class="text-sm text-text-tertiary">(1,890)</span>
                                </div>
                            </div>
                            
                            <h3 class="text-xl font-poppins font-semibold text-primary mb-2">
                                Spoken English Mastery
                            </h3>
                            
                            <p class="text-text-secondary mb-4 text-sm leading-relaxed">
                                Daily conversations में confidence बढ़ाएं। Real-world scenarios और professional communication skills।
                            </p>

                            <div class="mb-4 space-y-2">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm text-text-secondary">Fluent daily conversations</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm text-text-secondary">Professional communication</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm text-text-secondary">Accent improvement techniques</span>
                                </div>
                            </div>

                            <div class="flex items-center gap-4 mb-4 text-sm text-text-secondary">
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>4 months</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>80 lessons</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                    <span>2,800 students</span>
                                </div>
                            </div>

                            <div class="flex items-center justify-between pt-4 border-t border-border">
                                <div>
                                    <span class="text-2xl font-bold text-primary">₹3,999</span>
                                    <span class="text-sm text-text-tertiary line-through ml-2">₹7,999</span>
                                    <div class="text-xs text-accent mt-1">EMI from ₹667/month</div>
                                </div>
                                <div class="flex gap-2">
                                    <button class="btn-ghost px-3 py-2 rounded-lg text-sm preview-btn" data-course="spoken">
                                        Preview
                                    </button>
                                    <a href="video_learning_interface.php" class="btn btn-primary px-4 py-2 text-sm">
                                        Enroll Now
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card hover:shadow-elevated transition-all duration-300 group course-card" data-level="advanced" data-duration="short" data-price="premium" data-goal="interview">
                            <div class="relative rounded-lg overflow-hidden mb-4 h-48">
                                <img src="https://img.rocket.new/generatedImages/rocket_gen_img_19e566a4e-1767846954812.png" alt="Professional candidate confidently answering interview questions in English" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                                <div class="absolute top-3 right-3">
                                    <span class="badge badge-accent">New</span>
                                </div>
                                <div class="absolute top-3 left-3">
                                    <input type="checkbox" class="compare-checkbox w-5 h-5 cursor-pointer" data-course="interview" aria-label="Add to comparison">
                                </div>
                            </div>
                            
                            <div class="mb-3 flex items-center justify-between">
                                <span class="text-sm text-primary font-medium">Advanced Level</span>
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <span class="text-sm font-semibold text-text-primary">4.7</span>
                                    <span class="text-sm text-text-tertiary">(1,120)</span>
                                </div>
                            </div>
                            
                            <h3 class="text-xl font-poppins font-semibold text-primary mb-2">
                                Interview Preparation Pro
                            </h3>
                            
                            <p class="text-text-secondary mb-4 text-sm leading-relaxed">
                                Job interviews के लिए professional English। Mock interviews और industry-specific vocabulary।
                            </p>

                            <div class="mb-4 space-y-2">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm text-text-secondary">Interview confidence mastery</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm text-text-secondary">Professional vocabulary</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm text-text-secondary">Mock interview practice</span>
                                </div>
                            </div>

                            <div class="flex items-center gap-4 mb-4 text-sm text-text-secondary">
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>2 months</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>40 lessons</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                    <span>1,500 students</span>
                                </div>
                            </div>

                            <div class="flex items-center justify-between pt-4 border-t border-border">
                                <div>
                                    <span class="text-2xl font-bold text-primary">₹4,999</span>
                                    <span class="text-sm text-text-tertiary line-through ml-2">₹9,999</span>
                                    <div class="text-xs text-accent mt-1">EMI from ₹833/month</div>
                                </div>
                                <div class="flex gap-2">
                                    <button class="btn-ghost px-3 py-2 rounded-lg text-sm preview-btn" data-course="interview">
                                        Preview
                                    </button>
                                    <a href="video_learning_interface.php" class="btn btn-primary px-4 py-2 text-sm">
                                        Enroll Now
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card hover:shadow-elevated transition-all duration-300 group course-card" data-level="intermediate" data-duration="medium" data-price="budget" data-goal="grammar">
                            <div class="relative rounded-lg overflow-hidden mb-4 h-48">
                                <img src="https://img.rocket.new/generatedImages/rocket_gen_img_11585cb60-1767846954371.png" alt="Student mastering English grammar rules with clear explanations and practice exercises" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                                <div class="absolute top-3 left-3">
                                    <input type="checkbox" class="compare-checkbox w-5 h-5 cursor-pointer" data-course="grammar" aria-label="Add to comparison">
                                </div>
                            </div>
                            
                            <div class="mb-3 flex items-center justify-between">
                                <span class="text-sm text-secondary font-medium">Intermediate Level</span>
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <span class="text-sm font-semibold text-text-primary">4.6</span>
                                    <span class="text-sm text-text-tertiary">(980)</span>
                                </div>
                            </div>
                            
                            <h3 class="text-xl font-poppins font-semibold text-primary mb-2">
                                Complete Grammar Mastery
                            </h3>
                            
                            <p class="text-text-secondary mb-4 text-sm leading-relaxed">
                                Grammar की मजबूत foundation बनाएं। Tenses, sentence structure, और error correction।
                            </p>

                            <div class="mb-4 space-y-2">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm text-text-secondary">All tenses mastery</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm text-text-secondary">Sentence structure clarity</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm text-text-secondary">Common error correction</span>
                                </div>
                            </div>

                            <div class="flex items-center gap-4 mb-4 text-sm text-text-secondary">
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>3 months</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>50 lessons</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                    <span>1,800 students</span>
                                </div>
                            </div>

                            <div class="flex items-center justify-between pt-4 border-t border-border">
                                <div>
                                    <span class="text-2xl font-bold text-primary">₹2,499</span>
                                    <span class="text-sm text-text-tertiary line-through ml-2">₹4,999</span>
                                    <div class="text-xs text-accent mt-1">EMI from ₹417/month</div>
                                </div>
                                <div class="flex gap-2">
                                    <button class="btn-ghost px-3 py-2 rounded-lg text-sm preview-btn" data-course="grammar">
                                        Preview
                                    </button>
                                    <a href="video_learning_interface.php" class="btn btn-primary px-4 py-2 text-sm">
                                        Enroll Now
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card hover:shadow-elevated transition-all duration-300 group course-card" data-level="advanced" data-duration="medium" data-price="premium" data-goal="business">
                            <div class="relative rounded-lg overflow-hidden mb-4 h-48">
                                <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1d27e535f-1766485681114.png" alt="Business professional using English in corporate meetings and presentations" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                                <div class="absolute top-3 right-3">
                                    <span class="badge badge-info">Premium</span>
                                </div>
                                <div class="absolute top-3 left-3">
                                    <input type="checkbox" class="compare-checkbox w-5 h-5 cursor-pointer" data-course="business" aria-label="Add to comparison">
                                </div>
                            </div>
                            
                            <div class="mb-3 flex items-center justify-between">
                                <span class="text-sm text-primary font-medium">Advanced Level</span>
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <span class="text-sm font-semibold text-text-primary">4.8</span>
                                    <span class="text-sm text-text-tertiary">(750)</span>
                                </div>
                            </div>
                            
                            <h3 class="text-xl font-poppins font-semibold text-primary mb-2">
                                Business English Excellence
                            </h3>
                            
                            <p class="text-text-secondary mb-4 text-sm leading-relaxed">
                                Corporate world के लिए professional English। Presentations, emails, और business meetings।
                            </p>

                            <div class="mb-4 space-y-2">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm text-text-secondary">Business presentation skills</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm text-text-secondary">Professional email writing</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm text-text-secondary">Meeting communication</span>
                                </div>
                            </div>

                            <div class="flex items-center gap-4 mb-4 text-sm text-text-secondary">
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>4 months</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>70 lessons</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                    <span>1,200 students</span>
                                </div>
                            </div>

                            <div class="flex items-center justify-between pt-4 border-t border-border">
                                <div>
                                    <span class="text-2xl font-bold text-primary">₹5,999</span>
                                    <span class="text-sm text-text-tertiary line-through ml-2">₹11,999</span>
                                    <div class="text-xs text-accent mt-1">EMI from ₹1,000/month</div>
                                </div>
                                <div class="flex gap-2">
                                    <button class="btn-ghost px-3 py-2 rounded-lg text-sm preview-btn" data-course="business">
                                        Preview
                                    </button>
                                    <a href="video_learning_interface.php" class="btn btn-primary px-4 py-2 text-sm">
                                        Enroll Now
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card hover:shadow-elevated transition-all duration-300 group course-card" data-level="beginner" data-duration="short" data-price="budget" data-goal="speaking,grammar">
                            <div class="relative rounded-lg overflow-hidden mb-4 h-48">
                                <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1d345c57b-1767846946478.png" alt="Student learning new English vocabulary words with visual aids and memory techniques" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                                <div class="absolute top-3 left-3">
                                    <input type="checkbox" class="compare-checkbox w-5 h-5 cursor-pointer" data-course="vocabulary" aria-label="Add to comparison">
                                </div>
                            </div>
                            
                            <div class="mb-3 flex items-center justify-between">
                                <span class="text-sm text-accent font-medium">Beginner Level</span>
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <span class="text-sm font-semibold text-text-primary">4.5</span>
                                    <span class="text-sm text-text-tertiary">(650)</span>
                                </div>
                            </div>
                            
                            <h3 class="text-xl font-poppins font-semibold text-primary mb-2">
                                Vocabulary Builder Pro
                            </h3>
                            
                            <p class="text-text-secondary mb-4 text-sm leading-relaxed">
                                Daily use के 3000+ words सीखें। Memory techniques और practical usage examples।
                            </p>

                            <div class="mb-4 space-y-2">
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm text-text-secondary">3000+ essential words</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm text-text-secondary">Memory techniques</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm text-text-secondary">Contextual usage practice</span>
                                </div>
                            </div>

                            <div class="flex items-center gap-4 mb-4 text-sm text-text-secondary">
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>2 months</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>30 lessons</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                    <span>900 students</span>
                                </div>
                            </div>

                            <div class="flex items-center justify-between pt-4 border-t border-border">
                                <div>
                                    <span class="text-2xl font-bold text-primary">₹1,999</span>
                                    <span class="text-sm text-text-tertiary line-through ml-2">₹3,999</span>
                                    <div class="text-xs text-accent mt-1">EMI from ₹333/month</div>
                                </div>
                                <div class="flex gap-2">
                                    <button class="btn-ghost px-3 py-2 rounded-lg text-sm preview-btn" data-course="vocabulary">
                                        Preview
                                    </button>
                                    <a href="video_learning_interface.php" class="btn btn-primary px-4 py-2 text-sm">
                                        Enroll Now
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div id="noResults" class="hidden text-center py-12">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mx-auto mb-4 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <h3 class="text-xl font-poppins font-semibold text-text-primary mb-2">No courses found</h3>
                        <p class="text-text-secondary mb-4">Try adjusting your filters or search terms</p>
                        <button id="clearAllFilters" class="btn btn-outline">Clear All Filters</button>
                    </div>

                    <div class="text-center mt-12">
                        <button id="loadMoreBtn" class="btn btn-outline flex items-center justify-center gap-2 mx-auto">
                            Load More Courses
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-poppins font-bold text-primary mb-4">
                    Why Choose Angrezzify?
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-accent-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-poppins font-semibold text-primary mb-2">7-Day Money-Back</h3>
                    <p class="text-text-secondary text-sm">Not satisfied? Get full refund within 7 days</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-secondary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-secondary-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-poppins font-semibold text-primary mb-2">Live Doubt Clearing</h3>
                    <p class="text-text-secondary text-sm">Connect with teachers anytime for help</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-primary-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-poppins font-semibold text-primary mb-2">Certified Courses</h3>
                    <p class="text-text-secondary text-sm">Get recognized certificates on completion</p>
                </div>
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
                        <li><a href="course_catalog.php" class="opacity-75 hover:opacity-100 transition-opacity">Courses</a></li>
                        <li><a href="practice_center.php" class="opacity-75 hover:opacity-100 transition-opacity">Practice</a></li>
                        <li><a href="student_dashboard.php" class="opacity-75 hover:opacity-100 transition-opacity">Dashboard</a></li>
                        <li><a href="authentication_hub.php" class="opacity-75 hover:opacity-100 transition-opacity">Login</a></li>
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
            <a href="course_catalog.php" class="flex flex-col items-center gap-1 text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
                <span class="text-xs font-medium">Courses</span>
            </a>
            <a href="video_learning_interface.php" class="flex flex-col items-center gap-1 text-text-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <span class="text-xs">Classes</span>
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

    <div id="previewModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-2xl font-poppins font-bold text-primary">Course Preview</h3>
                    <button id="closeModal" class="p-2 hover:bg-surface rounded-lg transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                
                <div id="previewContent" class="space-y-4">
                    </div>

                <div class="mt-6 flex gap-4">
                    <a href="video_learning_interface.php" class="btn btn-primary flex-1">Start Free Trial</a>
                    <button id="closeModalBtn" class="btn btn-outline flex-1">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Filter Functionality
        const filterCheckboxes = document.querySelectorAll('.filter-checkbox');
        const courseCards = document.querySelectorAll('.course-card');
        const noResults = document.getElementById('noResults');
        const courseGrid = document.getElementById('courseGrid');
        const resetFilters = document.getElementById('resetFilters');
        const clearAllFilters = document.getElementById('clearAllFilters');

        function applyFilters() {
            const activeFilters = {
                level: [],
                duration: [],
                price: [],
                goal: []
            };

            filterCheckboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    const filterType = checkbox.dataset.filter;
                    activeFilters[filterType].push(checkbox.value);
                }
            });

            let visibleCount = 0;

            courseCards.forEach(card => {
                const cardLevel = card.dataset.level;
                const cardDuration = card.dataset.duration;
                const cardPrice = card.dataset.price;
                const cardGoals = card.dataset.goal.split(',');

                const levelMatch = activeFilters.level.length === 0 || activeFilters.level.includes(cardLevel);
                const durationMatch = activeFilters.duration.length === 0 || activeFilters.duration.includes(cardDuration);
                const priceMatch = activeFilters.price.length === 0 || activeFilters.price.includes(cardPrice);
                const goalMatch = activeFilters.goal.length === 0 || activeFilters.goal.some(goal => cardGoals.includes(goal));

                if (levelMatch && durationMatch && priceMatch && goalMatch) {
                    card.classList.remove('hidden');
                    visibleCount++;
                } else {
                    card.classList.add('hidden');
                }
            });

            if (visibleCount === 0) {
                noResults.classList.remove('hidden');
                courseGrid.classList.add('hidden');
            } else {
                noResults.classList.add('hidden');
                courseGrid.classList.remove('hidden');
            }
        }

        filterCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', applyFilters);
        });

        resetFilters.addEventListener('click', () => {
            filterCheckboxes.forEach(checkbox => {
                checkbox.checked = true;
            });
            applyFilters();
        });

        clearAllFilters.addEventListener('click', () => {
            filterCheckboxes.forEach(checkbox => {
                checkbox.checked = true;
            });
            applyFilters();
        });

        // Search Functionality
        const courseSearch = document.getElementById('courseSearch');
        courseSearch.addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase();
            
            courseCards.forEach(card => {
                const title = card.querySelector('h3').textContent.toLowerCase();
                const description = card.querySelector('p').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || description.includes(searchTerm)) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });

            const visibleCards = Array.from(courseCards).filter(card => !card.classList.contains('hidden'));
            if (visibleCards.length === 0) {
                noResults.classList.remove('hidden');
                courseGrid.classList.add('hidden');
            } else {
                noResults.classList.add('hidden');
                courseGrid.classList.remove('hidden');
            }
        });

        // Sort Functionality
        const sortSelect = document.getElementById('sortSelect');
        sortSelect.addEventListener('change', (e) => {
            const sortValue = e.target.value;
            const cardsArray = Array.from(courseCards);
            
            cardsArray.sort((a, b) => {
                switch(sortValue) {
                    case 'price-low':
                        return parseInt(a.querySelector('.text-2xl').textContent.replace(/[^0-9]/g, '')) - 
                               parseInt(b.querySelector('.text-2xl').textContent.replace(/[^0-9]/g, ''));
                    case 'price-high':
                        return parseInt(b.querySelector('.text-2xl').textContent.replace(/[^0-9]/g, '')) - 
                               parseInt(a.querySelector('.text-2xl').textContent.replace(/[^0-9]/g, ''));
                    case 'rating':
                        return parseFloat(b.querySelector('.font-semibold').textContent) - 
                               parseFloat(a.querySelector('.font-semibold').textContent);
                    default:
                        return 0;
                }
            });

            cardsArray.forEach(card => courseGrid.appendChild(card));
        });

        // Compare Functionality
        const compareCheckboxes = document.querySelectorAll('.compare-checkbox');
        const compareBtn = document.getElementById('compareBtn');
        let selectedCourses = [];

        compareCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', (e) => {
                const courseId = e.target.dataset.course;
                
                if (e.target.checked) {
                    if (selectedCourses.length < 3) {
                        selectedCourses.push(courseId);
                    } else {
                        e.target.checked = false;
                        alert('You can compare maximum 3 courses at a time');
                    }
                } else {
                    selectedCourses = selectedCourses.filter(id => id !== courseId);
                }

                compareBtn.textContent = `Compare (${selectedCourses.length})`;
            });
        });

        compareBtn.addEventListener('click', () => {
            if (selectedCourses.length < 2) {
                alert('Please select at least 2 courses to compare');
            } else {
                alert(`Comparing courses: ${selectedCourses.join(', ')}\n\nComparison feature coming soon!`);
            }
        });

        // Preview Modal
        const previewBtns = document.querySelectorAll('.preview-btn');
        const previewModal = document.getElementById('previewModal');
        const closeModal = document.getElementById('closeModal');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const previewContent = document.getElementById('previewContent');

        const coursePreviewData = {
            foundation: {
                title: 'English Foundation Course',
                description: 'Complete beginner course with Hindi explanations',
                lessons: ['Introduction to English', 'Basic Grammar Rules', 'Common Phrases', 'Daily Conversations'],
                duration: '3 months',
                level: 'Beginner'
            },
            spoken: {
                title: 'Spoken English Mastery',
                description: 'Build confidence in daily conversations',
                lessons: ['Pronunciation Basics', 'Conversation Practice', 'Real-world Scenarios', 'Accent Training'],
                duration: '4 months',
                level: 'Intermediate'
            },
            interview: {
                title: 'Interview Preparation Pro',
                description: 'Master professional English for interviews',
                lessons: ['Interview Basics', 'Common Questions', 'Mock Interviews', 'Body Language'],
                duration: '2 months',
                level: 'Advanced'
            },
            grammar: {
                title: 'Complete Grammar Mastery',
                description: 'Strong foundation in English grammar',
                lessons: ['Tenses Overview', 'Sentence Structure', 'Parts of Speech', 'Error Correction'],
                duration: '3 months',
                level: 'Intermediate'
            },
            business: {
                title: 'Business English Excellence',
                description: 'Professional English for corporate world',
                lessons: ['Business Vocabulary', 'Email Writing', 'Presentations', 'Meeting Skills'],
                duration: '4 months',
                level: 'Advanced'
            },
            vocabulary: {
                title: 'Vocabulary Builder Pro',
                description: 'Learn 3000+ essential words',
                lessons: ['Daily Words', 'Memory Techniques', 'Contextual Usage', 'Practice Exercises'],
                duration: '2 months',
                level: 'Beginner'
            }
        };

        previewBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                const courseId = e.target.dataset.course;
                const courseData = coursePreviewData[courseId];

                // UPDATED: Using SVG string for play button instead of external image
                const playIconSVG = `<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" /></svg>`;

                previewContent.innerHTML = `
                    <div class="mb-4">
                        <h4 class="text-xl font-poppins font-semibold text-primary mb-2">${courseData.title}</h4>
                        <p class="text-text-secondary">${courseData.description}</p>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div class="card-surface">
                            <div class="text-sm text-text-secondary mb-1">Duration</div>
                            <div class="font-semibold text-primary">${courseData.duration}</div>
                        </div>
                        <div class="card-surface">
                            <div class="text-sm text-text-secondary mb-1">Level</div>
                            <div class="font-semibold text-primary">${courseData.level}</div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-poppins font-semibold text-primary mb-3">Sample Lessons</h5>
                        <ul class="space-y-2">
                            ${courseData.lessons.map(lesson => `
                                <li class="flex items-center gap-2">
                                    ${playIconSVG}
                                    <span class="text-text-secondary">${lesson}</span>
                                </li>
                            `).join('')}
                        </ul>
                    </div>
                `;

                previewModal.classList.remove('hidden');
            });
        });

        closeModal.addEventListener('click', () => {
            previewModal.classList.add('hidden');
        });

        closeModalBtn.addEventListener('click', () => {
            previewModal.classList.add('hidden');
        });

        previewModal.addEventListener('click', (e) => {
            if (e.target === previewModal) {
                previewModal.classList.add('hidden');
            }
        });

        // Load More Functionality
        const loadMoreBtn = document.getElementById('loadMoreBtn');
        loadMoreBtn.addEventListener('click', () => {
            alert('Loading more courses...\n\nThis feature will load additional courses from the database.');
        });

        // Search Button
        const searchBtn = document.getElementById('searchBtn');
        searchBtn.addEventListener('click', () => {
            courseSearch.focus();
        });
    </script>
<script id="dhws-dataInjector" src="../public/dhws-data-injector.js"></script>
</body>
</html>