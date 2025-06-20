@extends('layouts.app')

@section('title', 'Aheebwa Steven - Software Engineer & IoT Developer')
@section('description', 'Software Engineer specializing in Laravel, Flutter, IoT, and Machine Learning. Building intelligent, connected, and scalable software solutions.')

@section('content')
    <!-- Hero Section -->
    <section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight">
                        Hi, I'm <span class="text-blue-600 dark:text-blue-400">Aheebwa Steven</span>
                    </h1>
                    <p class="text-xl sm:text-2xl text-gray-600 dark:text-gray-300 mt-4">
                        Software Engineer | Laravel & Flutter Dev | IoT & ML Enthusiast
                    </p>
                    <p class="text-lg text-gray-600 dark:text-gray-400 mt-6 max-w-2xl">
                        I build intelligent, connected, and scalable software solutions that bridge the gap between traditional development and emerging technologies.
                    </p>
                    
                    <!-- CTA Buttons -->
                    <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="{{ route('projects.index') }}" class="btn-primary">
                            <i class="fas fa-code mr-2"></i>View Projects
                        </a>
                        <a href="{{ route('contact') }}" class="btn-secondary">
                            <i class="fas fa-envelope mr-2"></i>Get In Touch
                        </a>
                    </div>
                    
                    <!-- Social Links -->
                    <div class="mt-8 flex justify-center lg:justify-start space-x-6">
                        <a href="{{ config('app.github_url') }}" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition-colors">
                            <i class="fab fa-github text-2xl"></i>
                        </a>
                        <a href="{{ config('app.linkedin_url') }}" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition-colors">
                            <i class="fab fa-linkedin text-2xl"></i>
                        </a>
                        <a href="mailto:aheebwasteven@gmail.com" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition-colors">
                            <i class="fas fa-envelope text-2xl"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Right Content - Profile Image -->
                <div class="flex justify-center lg:justify-end">
                    <div class="relative">
                        <div class="w-80 h-80 rounded-full bg-gradient-to-br from-blue-400 to-purple-600 p-1">
                            <div class="w-full h-full rounded-full bg-white dark:bg-gray-800 flex items-center justify-center">
                                <img src="{{ asset('assets/images/profile.jpg') }}" alt="Aheebwa Steven" 
                                     class="w-72 h-72 rounded-full object-cover"
                                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="w-72 h-72 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center text-white text-6xl font-bold" style="display: none;">
                                    AS
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating Tech Icons -->
                        <div class="absolute -top-4 -right-4 bg-white dark:bg-gray-800 rounded-full p-3 shadow-lg">
                            <i class="fab fa-laravel text-red-500 text-2xl"></i>
                        </div>
                        <div class="absolute top-20 -left-8 bg-white dark:bg-gray-800 rounded-full p-3 shadow-lg">
                            <i class="fab fa-flutter text-blue-500 text-2xl"></i>
                        </div>
                        <div class="absolute -bottom-4 left-8 bg-white dark:bg-gray-800 rounded-full p-3 shadow-lg">
                            <i class="fas fa-microchip text-green-500 text-2xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Skills Section -->
    <section class="py-20 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4">Technical Skills</h2>
                <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    A comprehensive toolkit spanning full-stack development, mobile apps, IoT systems, and machine learning
                </p>
            </div>
            
            @if($skills->isNotEmpty())
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($skills as $category => $categorySkills)
                        <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6">
                            <h3 class="text-xl font-semibold mb-4 text-center capitalize">
                                @switch($category)
                                    @case('backend')
                                        <i class="fas fa-server mr-2 text-blue-500"></i>Backend
                                        @break
                                    @case('frontend')
                                        <i class="fas fa-laptop-code mr-2 text-green-500"></i>Frontend
                                        @break
                                    @case('mobile')
                                        <i class="fas fa-mobile-alt mr-2 text-purple-500"></i>Mobile
                                        @break
                                    @case('iot')
                                        <i class="fas fa-microchip mr-2 text-orange-500"></i>IoT & Embedded
                                        @break
                                    @case('devops')
                                        <i class="fas fa-cogs mr-2 text-red-500"></i>DevOps
                                        @break
                                    @case('monitoring')
                                        <i class="fas fa-chart-line mr-2 text-yellow-500"></i>Monitoring
                                        @break
                                    @case('ml')
                                        <i class="fas fa-brain mr-2 text-pink-500"></i>Machine Learning
                                        @break
                                    @default
                                        {{ ucfirst($category) }}
                                @endswitch
                            </h3>
                            
                            <div class="space-y-3">
                                @foreach($categorySkills as $skill)
                                    <div class="flex items-center justify-between">
                                        <span class="font-medium">{{ $skill->name }}</span>
                                        <div class="flex items-center space-x-2">
                                            <div class="w-20 bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="h-2 rounded-full" 
                                                     style="width: {{ $skill->proficiency }}%; background-color: {{ $skill->color ?? '#3B82F6' }}"></div>
                                            </div>
                                            <span class="text-sm text-gray-600 dark:text-gray-400">{{ $skill->proficiency }}%</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
    
    <!-- Featured Projects Section -->
    <section class="py-20 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4">Featured Projects</h2>
                <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Showcasing innovative solutions across web development, mobile apps, IoT systems, and machine learning
                </p>
            </div>
            
            @if($featuredProjects->isNotEmpty())
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($featuredProjects as $project)
                        <div class="bg-white dark:bg-gray-900 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                            <!-- Project Image -->
                            <div class="h-48 bg-gradient-to-br from-blue-500 to-purple-600 relative overflow-hidden">
                                @if($project->image)
                                    <img src="{{ asset('storage/' . $project->image) }}" 
                                         alt="{{ $project->title }}" 
                                         class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-white">
                                        <i class="fas fa-code text-4xl"></i>
                                    </div>
                                @endif
                                
                                <!-- Category Badge -->
                                <div class="absolute top-4 right-4">
                                    <span class="bg-white/90 text-gray-800 px-2 py-1 rounded-full text-xs font-medium">
                                        {{ ucfirst($project->category) }}
                                    </span>
                                </div>
                            </div>
                            
                            <!-- Project Content -->
                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-2">{{ $project->title }}</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-3">
                                    {{ $project->description }}
                                </p>
                                
                                <!-- Tech Stack -->
                                <div class="flex flex-wrap gap-2 mb-4">
                                    @foreach(array_slice($project->tech_stack, 0, 3) as $tech)
                                        <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-2 py-1 rounded text-xs">
                                            {{ $tech }}
                                        </span>
                                    @endforeach
                                    @if(count($project->tech_stack) > 3)
                                        <span class="text-gray-500 text-xs">+{{ count($project->tech_stack) - 3 }} more</span>
                                    @endif
                                </div>
                                
                                <!-- Project Links -->
                                <div class="flex justify-between items-center">
                                    <a href="{{ route('projects.show', $project) }}" 
                                       class="text-blue-600 dark:text-blue-400 hover:underline font-medium">
                                        Learn More →
                                    </a>
                                    
                                    <div class="flex space-x-2">
                                        @if($project->demo_url)
                                            <a href="{{ $project->demo_url }}" target="_blank" 
                                               class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                                <i class="fas fa-external-link-alt"></i>
                                            </a>
                                        @endif
                                        @if($project->github_url)
                                            <a href="{{ $project->github_url }}" target="_blank" 
                                               class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                                <i class="fab fa-github"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <!-- View All Projects -->
                <div class="text-center mt-12">
                    <a href="{{ route('projects.index') }}" class="btn-primary">
                        <i class="fas fa-arrow-right mr-2"></i>View All Projects
                    </a>
                </div>
            @else
                <div class="text-center py-12">
                    <i class="fas fa-code text-4xl text-gray-400 mb-4"></i>
                    <p class="text-gray-600 dark:text-gray-400">Projects will be showcased here soon!</p>
                </div>
            @endif
        </div>
    </section>
    
    <!-- Call to Action Section -->
    <section class="py-20 bg-blue-600 dark:bg-blue-800">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                Ready to Build Something Amazing?
            </h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Let's collaborate on your next project. Whether it's web development, mobile apps, IoT solutions, or ML integration, I'm here to help bring your ideas to life.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                    <i class="fas fa-envelope mr-2"></i>Start a Conversation
                </a>
                <a href="{{ route('cv.download') }}" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors">
                    <i class="fas fa-download mr-2"></i>Download CV
                </a>
            </div>
        </div>
    </section>
@endsection