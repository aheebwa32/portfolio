{{-- resources/views/projects/show.blade.php --}}
@extends('layouts.app')

@section('title', $project->title . ' - Aheebwa Steven')
@section('description', $project->description)

@section('content')
    <!-- Hero Section -->
    <section class="py-20 bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div>
                    <!-- Breadcrumb -->
                    <nav class="mb-6">
                        <ol class="flex items-center space-x-2 text-sm text-gray-600 dark:text-gray-400">
                            <li><a href="{{ route('home') }}" class="hover:text-blue-600 dark:hover:text-blue-400">Home</a></li>
                            <li><i class="fas fa-chevron-right text-xs"></i></li>
                            <li><a href="{{ route('projects.index') }}" class="hover:text-blue-600 dark:hover:text-blue-400">Projects</a></li>
                            <li><i class="fas fa-chevron-right text-xs"></i></li>
                            <li>{{ $project->title }}</li>
                        </ol>
                    </nav>
                    
                    <!-- Category & Featured Badge -->
                    <div class="flex items-center space-x-3 mb-4">
                        <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-3 py-1 rounded-full text-sm font-medium">
                            {{ ucfirst($project->category) }}
                        </span>
                        @if($project->featured)
                            <span class="bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 px-3 py-1 rounded-full text-sm font-medium">
                                <i class="fas fa-star mr-1"></i>Featured
                            </span>
                        @endif
                    </div>
                    
                    <h1 class="text-4xl sm:text-5xl font-bold mb-6">{{ $project->title }}</h1>
                    <p class="text-lg text-gray-600 dark:text-gray-400 mb-8">
                        {{ $project->description }}
                    </p>
                    
                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        @if($project->demo_url)
                            <a href="{{ $project->demo_url }}" target="_blank" class="btn-primary">
                                <i class="fas fa-external-link-alt mr-2"></i>Live Demo
                            </a>
                        @endif
                        @if($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank" class="btn-secondary">
                                <i class="fab fa-github mr-2"></i>Source Code
                            </a>
                        @endif
                    </div>
                </div>
                
                <!-- Right Content - Project Image -->
                <div>
                    <div class="relative rounded-lg overflow-hidden shadow-xl">
                        @if($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" 
                                 alt="{{ $project->title }}" 
                                 class="w-full h-96 object-cover">
                        @else
                            <div class="w-full h-96 bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center text-white">
                                @switch($project->category)
                                    @case('web')
                                        <i class="fas fa-globe text-6xl"></i>
                                        @break
                                    @case('mobile')
                                        <i class="fas fa-mobile-alt text-6xl"></i>
                                        @break
                                    @case('iot')
                                        <i class="fas fa-microchip text-6xl"></i>
                                        @break
                                    @case('ml')
                                        <i class="fas fa-brain text-6xl"></i>
                                        @break
                                    @case('devops')
                                        <i class="fas fa-cogs text-6xl"></i>
                                        @break
                                    @default
                                        <i class="fas fa-code text-6xl"></i>
                                @endswitch
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Project Details -->
    <section class="py-20 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <!-- Features Section -->
                    @if($project->features && count($project->features) > 0)
                        <div class="mb-12">
                            <h2 class="text-3xl font-bold mb-6">Key Features</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                @foreach($project->features as $feature)
                                    <div class="flex items-start space-x-3 p-4 bg-gray-50 dark:bg-gray-800 rounded-lg">
                                        <div class="flex-shrink-0 w-6 h-6 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center mt-0.5">
                                            <i class="fas fa-check text-blue-600 dark:text-blue-400 text-sm"></i>
                                        </div>
                                        <span class="text-gray-700 dark:text-gray-300">{{ $feature }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    
                    <!-- Technical Implementation -->
                    <div class="mb-12">
                        <h2 class="text-3xl font-bold mb-6">Technical Implementation</h2>
                        <div class="prose dark:prose-invert max-w-none">
                            <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                                This project demonstrates my expertise in {{ implode(', ', array_slice($project->tech_stack, 0, 3)) }}
                                @if(count($project->tech_stack) > 3)
                                    and other cutting-edge technologies
                                @endif
                                . The implementation follows modern development practices including clean architecture, 
                                responsive design, and scalable solutions.
                            </p>
                            
                            @switch($project->category)
                                @case('web')
                                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed mt-4">
                                        The web application leverages modern frameworks and follows RESTful API principles, 
                                        ensuring optimal performance, security, and maintainability. Features include responsive 
                                        design, real-time updates, and comprehensive user management.
                                    </p>
                                    @break
                                @case('mobile')
                                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed mt-4">
                                        The mobile application provides a seamless cross-platform experience with native performance. 
                                        Implemented using modern state management patterns and optimized for both iOS and Android platforms.
                                    </p>
                                    @break
                                @case('iot')
                                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed mt-4">
                                        This IoT solution integrates hardware sensors with cloud-based data processing, 
                                        providing real-time monitoring and analytics. The system includes wireless communication, 
                                        data visualization, and automated alerting mechanisms.
                                    </p>
                                    @break
                                @case('ml')
                                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed mt-4">
                                        The machine learning component uses advanced algorithms for data analysis and prediction. 
                                        Includes data preprocessing, model training, and deployment pipelines for real-world application.
                                    </p>
                                    @break
                            @endswitch
                        </div>
                    </div>
                </div>
                
                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <!-- Tech Stack -->
                    <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6 mb-8">
                        <h3 class="text-xl font-semibold mb-4">Technology Stack</h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach($project->tech_stack as $tech)
                                <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-3 py-1 rounded-full text-sm">
                                    {{ $tech }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Project Links -->
                    <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6 mb-8">
                        <h3 class="text-xl font-semibold mb-4">Project Links</h3>
                        <div class="space-y-3">
                            @if($project->demo_url)
                                <a href="{{ $project->demo_url }}" target="_blank" 
                                   class="flex items-center space-x-3 text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                                    <i class="fas fa-external-link-alt"></i>
                                    <span>Live Demo</span>
                                </a>
                            @endif
                            @if($project->github_url)
                                <a href="{{ $project->github_url }}" target="_blank" 
                                   class="flex items-center space-x-3 text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                                    <i class="fab fa-github"></i>
                                    <span>Source Code</span>
                                </a>
                            @endif
                        </div>
                    </div>
                    
                    <!-- Contact CTA -->
                    <div class="bg-blue-50 dark:bg-blue-900/20 rounded-lg p-6">
                        <h3 class="text-xl font-semibold mb-2">Interested in this project?</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm">
                            Let's discuss how I can help you build something similar for your needs.
                        </p>
                        <a href="{{ route('contact') }}" class="btn-primary w-full text-center">
                            <i class="fas fa-envelope mr-2"></i>Get In Touch
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Related Projects -->
    @if($relatedProjects->count() > 0)
        <section class="py-20 bg-gray-50 dark:bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold mb-4">Related Projects</h2>
                    <p class="text-gray-600 dark:text-gray-400">
                        Other projects in the {{ ucfirst($project->category) }} category
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach($relatedProjects as $relatedProject)
                        <div class="bg-white dark:bg-gray-900 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                            <!-- Project Image -->
                            <div class="h-48 bg-gradient-to-br from-blue-500 to-purple-600 relative overflow-hidden">
                                @if($relatedProject->image)
                                    <img src="{{ asset('storage/' . $relatedProject->image) }}" 
                                         alt="{{ $relatedProject->title }}" 
                                         class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-white">
                                        <i class="fas fa-code text-4xl"></i>
                                    </div>
                                @endif
                            </div>
                            
                            <!-- Project Content -->
                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-2">{{ $relatedProject->title }}</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-3">
                                    {{ $relatedProject->description }}
                                </p>
                                
                                <a href="{{ route('projects.show', $relatedProject) }}" 
                                   class="text-blue-600 dark:text-blue-400 hover:underline font-medium">
                                    Learn More →
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection