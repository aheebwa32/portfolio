@extends('layouts.app')

@section('title', 'About - Aheebwa Steven')
@section('description', 'Learn more about Aheebwa Steven, a passionate Software Engineer specializing in Laravel, Flutter, IoT, and Machine Learning with expertise in building scalable solutions.')

@section('content')
    <!-- Hero Section -->
    <section class="py-20 bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div>
                    <h1 class="text-4xl sm:text-5xl font-bold mb-6">About Me</h1>
                    <p class="text-lg text-gray-600 dark:text-gray-400 mb-6">
                        I'm a passionate Software Engineer with a Bachelor's degree in Software Engineering, 
                        specializing in building intelligent, connected, and scalable software solutions that 
                        bridge traditional development with emerging technologies.
                    </p>
                    <p class="text-lg text-gray-600 dark:text-gray-400 mb-6">
                        My expertise spans across full-stack web development with Laravel and React, mobile 
                        development with Flutter and Jetpack Compose, IoT systems using microcontrollers and 
                        LoRa networks, and machine learning applications for real-world problem solving.
                    </p>
                    <p class="text-lg text-gray-600 dark:text-gray-400 mb-8">
                        I believe in the power of technology to transform lives and am constantly exploring 
                        new ways to integrate different technologies to create innovative solutions.
                    </p>
                    
                    <!-- Download CV Button -->
                    <a href="{{ route('cv.download') }}" class="btn-primary">
                        <i class="fas fa-download mr-2"></i>Download My CV
                    </a>
                </div>
                
                <!-- Right Content - Stats -->
                <div class="grid grid-cols-2 gap-6">
                    <div class="text-center p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                        <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-2">{{ $stats['projects'] }}+</div>
                        <div class="text-gray-600 dark:text-gray-400">Projects Completed</div>
                    </div>
                    <div class="text-center p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                        <div class="text-3xl font-bold text-green-600 dark:text-green-400 mb-2">{{ $stats['experience'] }}</div>
                        <div class="text-gray-600 dark:text-gray-400">Years Experience</div>
                    </div>
                    <div class="text-center p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                        <div class="text-3xl font-bold text-purple-600 dark:text-purple-400 mb-2">{{ $stats['technologies'] }}+</div>
                        <div class="text-gray-600 dark:text-gray-400">Technologies</div>
                    </div>
                    <div class="text-center p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                        <div class="text-3xl font-bold text-red-600 dark:text-red-400 mb-2">{{ $stats['skills'] }}+</div>
                        <div class="text-gray-600 dark:text-gray-400">Core Skills</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Education & Experience -->
    <section class="py-20 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Education -->
                <div>
                    <h2 class="text-3xl font-bold mb-8">Education</h2>
                    <div class="space-y-6">
                        <div class="border-l-4 border-blue-500 pl-6">
                            <h3 class="text-xl font-semibold">Bachelor of Software Engineering</h3>
                            <p class="text-gray-600 dark:text-gray-400">Makerere University</p>
                            <p class="text-gray-500 dark:text-gray-500">2020 - 2024</p>
                            <p class="mt-2 text-gray-600 dark:text-gray-400">
                                Specialized in software development, database systems, and emerging technologies 
                                with focus on practical application and industry-relevant skills.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Key Projects & Achievements -->
                <div>
                    <h2 class="text-3xl font-bold mb-8">Key Achievements</h2>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-8 h-8 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center">
                                <i class="fas fa-trophy text-blue-600 dark:text-blue-400"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">BeeSight - AI-Powered Bee Monitoring</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    Developed a comprehensive IoT and ML solution for bee hive monitoring 
                                    and foraging prediction using computer vision and weather data.
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-8 h-8 bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center">
                                <i class="fas fa-microchip text-green-600 dark:text-green-400"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Smart IoT Systems</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    Built multiple IoT solutions using ATmega128, LoRa networks, and 
                                    real-time monitoring systems with advanced data visualization.
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-8 h-8 bg-purple-100 dark:bg-purple-900 rounded-full flex items-center justify-center">
                                <i class="fas fa-code text-purple-600 dark:text-purple-400"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Full-Stack Development</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    Proficient in Laravel ecosystem, React, Flutter, and modern DevOps,Next.js,Node.js,Jetpack Compose,Wordpress Theme Development ,
                                    practices with CI/CD implementation and cloud deployment.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- What I Do -->
    <section class="py-20 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4">What I Do</h2>
                <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Combining technical expertise with innovative thinking to deliver comprehensive solutions
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Web Development -->
                <div class="bg-white dark:bg-gray-900 p-8 rounded-lg shadow-lg text-center">
                    <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-globe text-2xl text-blue-600 dark:text-blue-400"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Web Development</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Full-stack web applications using Laravel, React, and modern technologies. 
                        Focus on scalable, maintainable, and user-friendly solutions.
                    </p>
                    <ul class="text-sm text-gray-500 dark:text-gray-500 space-y-1">
                        <li>Laravel & PHP Backend</li>
                        <li>React & Next.js Frontend</li>
                        <li>RESTful APIs & SPA</li>
                        <li>Database Design & Optimization</li>
                    </ul>
                </div>
                
                <!-- Mobile Development -->
                <div class="bg-white dark:bg-gray-900 p-8 rounded-lg shadow-lg text-center">
                    <div class="w-16 h-16 bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-mobile-alt text-2xl text-green-600 dark:text-green-400"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Mobile Development</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Cross-platform mobile applications using Flutter and native Android development 
                        with Jetpack Compose for modern, responsive user experiences.
                    </p>
                    <ul class="text-sm text-gray-500 dark:text-gray-500 space-y-1">
                        <li>Flutter Cross-platform</li>
                        <li>Jetpack Compose</li>
                        <li>Firebase Integration</li>
                        <li>State Management</li>
                    </ul>
                </div>
                
                <!-- IoT & Embedded -->
                <div class="bg-white dark:bg-gray-900 p-8 rounded-lg shadow-lg text-center">
                    <div class="w-16 h-16 bg-orange-100 dark:bg-orange-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-microchip text-2xl text-orange-600 dark:text-orange-400"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">IoT & Embedded Systems</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Smart IoT solutions using microcontrollers, sensors, and wireless communication 
                        protocols for real-world monitoring and automation systems.
                    </p>
                    <ul class="text-sm text-gray-500 dark:text-gray-500 space-y-1">
                        <li>ATmega128 Programming</li>
                        <li>LoRa Networks</li>
                        <li>Sensor Integration</li>
                        <li>Real-time Monitoring</li>
                    </ul>
                </div>
                
                <!-- Machine Learning -->
                <div class="bg-white dark:bg-gray-900 p-8 rounded-lg shadow-lg text-center">
                    <div class="w-16 h-16 bg-purple-100 dark:bg-purple-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-brain text-2xl text-purple-600 dark:text-purple-400"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Machine Learning</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        AI-powered solutions using computer vision, data analysis, and predictive modeling 
                        to solve complex real-world problems.
                    </p>
                    <ul class="text-sm text-gray-500 dark:text-gray-500 space-y-1">
                        <li>Computer Vision</li>
                        <li>Python & OpenCV</li>
                        <li>Data Processing</li>
                        <li>Predictive Models</li>
                    </ul>
                </div>
                
                <!-- DevOps -->
                <div class="bg-white dark:bg-gray-900 p-8 rounded-lg shadow-lg text-center">
                    <div class="w-16 h-16 bg-red-100 dark:bg-red-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-cogs text-2xl text-red-600 dark:text-red-400"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">DevOps & Cloud</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Modern deployment pipelines, monitoring solutions, and cloud infrastructure 
                        management for reliable and scalable applications.
                    </p>
                    <ul class="text-sm text-gray-500 dark:text-gray-500 space-y-1">
                        <li>CI/CD Pipelines</li>
                        <li>Azure & Cloud Platforms</li>
                        <li>Monitoring & Logging</li>
                        <li>Infrastructure as Code</li>
                    </ul>
                </div>
                
                <!-- Consulting -->
                <div class="bg-white dark:bg-gray-900 p-8 rounded-lg shadow-lg text-center">
                    <div class="w-16 h-16 bg-yellow-100 dark:bg-yellow-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-lightbulb text-2xl text-yellow-600 dark:text-yellow-400"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Technology Consulting</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Strategic technology advice, architecture design, and solution planning 
                        to help businesses leverage technology effectively.
                    </p>
                    <ul class="text-sm text-gray-500 dark:text-gray-500 space-y-1">
                        <li>Technology Strategy</li>
                        <li>Solution Architecture</li>
                        <li>Code Review & Optimization</li>
                        <li>Team Mentoring</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Mission & Values -->
    <section class="py-20 bg-white dark:bg-gray-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold mb-8">My Mission</h2>
            <p class="text-xl text-gray-600 dark:text-gray-400 leading-relaxed mb-12">
                "To bridge the gap between traditional software development and emerging technologies, 
                creating intelligent, connected solutions that solve real-world problems and improve lives. 
                I believe that the future lies in the seamless integration of web, mobile, IoT, and AI technologies."
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">
                <div class="text-center">
                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-rocket text-blue-600 dark:text-blue-400"></i>
                    </div>
                    <h3 class="font-semibold mb-2">Innovation</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">
                        Constantly exploring new technologies and methodologies to create cutting-edge solutions
                    </p>
                </div>
                
                <div class="text-center">
                    <div class="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-green-600 dark:text-green-400"></i>
                    </div>
                    <h3 class="font-semibold mb-2">Collaboration</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">
                        Working closely with teams and clients to understand needs and deliver optimal solutions
                    </p>
                </div>
                
                <div class="text-center">
                    <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-star text-purple-600 dark:text-purple-400"></i>
                    </div>
                    <h3 class="font-semibold mb-2">Excellence</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">
                        Committed to delivering high-quality, maintainable code and robust solutions
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection