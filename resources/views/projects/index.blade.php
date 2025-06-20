{{-- resources/views/projects/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Projects - Aheebwa Steven')
@section('description', 'Explore my portfolio of web development, mobile apps, IoT systems, and machine learning projects built with Laravel, Flutter, and cutting-edge technologies.')

@section('content')
    <!-- Hero Section -->
    <section class="py-20 bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold mb-6">My Projects</h1>
            <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                A showcase of innovative solutions spanning web development, mobile apps, IoT systems, 
                and machine learning applications
            </p>
        </div>
    </section>
    
    <!-- Filter Section -->
    <section class="py-8 bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('projects.index') }}" 
                   class="filter-btn {{ !request('category') || request('category') === 'all' ? 'active' : '' }}">
                    All Projects
                </a>
                @foreach($categories as $category)
                    <a href="{{ route('projects.index', ['category' => $category['key']]) }}" 
                       class="filter-btn {{ request('category') === $category['key'] ? 'active' : '' }}">
                        {{ $category['label'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    
    <!-- Projects Grid -->
    <section class="py-20 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($projects->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($projects as $project)
                        <div class="bg-white dark:bg-gray-900 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow group">
                            <!-- Project Image -->
                            <div class="h-48 bg-gradient-to-br from-blue-500 to-purple-600 relative overflow-hidden">
                                @if($project->image)
                                    <img src="{{ asset('storage/' . $project->image) }}" 
                                         alt="{{ $project->title }}" 
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-white">
                                        @switch($project->category)
                                            @case('web')
                                                <i class="fas fa-globe text-4xl"></i>
                                                @break
                                            @case('mobile')
                                                <i class="fas fa-mobile-alt text-4xl"></i>
                                                @break
                                            @case('iot')
                                                <i class="fas fa-microchip text-4xl"></i>
                                                @break
                                            @case('ml')
                                                <i class="fas fa-brain text-4xl"></i>
                                                @break
                                            @case('devops')
                                                <i class="fas fa-cogs text-4xl"></i>
                                                @break
                                            @default
                                                <i class="fas fa-code text-4xl"></i>
                                        @endswitch
                                    </div>
                                @endif
                                
                                <!-- Category Badge -->
                                <div class="absolute top-4 right-4">
                                    <span class="bg-white/90 text-gray-800 px-3 py-1 rounded-full text-sm font-medium">
                                        {{ ucfirst($project->category) }}
                                    </span>
                                </div>
                                
                                <!-- Featured Badge -->
                                @if($project->featured)
                                    <div class="absolute top-4 left-4">
                                        <span class="bg-yellow-400 text-yellow-900 px-2 py-1 rounded-full text-xs font-medium">
                                            <i class="fas fa-star mr-1"></i>Featured
                                        </span>
                                    </div>
                                @endif
                            </div>
                            
                            <!-- Project Content -->
                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                    {{ $project->title }}
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-3">
                                    {{ $project->description }}
                                </p>
                                
                                <!-- Tech Stack -->
                                <div class="flex flex-wrap gap-2 mb-4">
                                    @foreach(array_slice($project->tech_stack, 0, 4) as $tech)
                                        <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-2 py-1 rounded text-xs">
                                            {{ $tech }}
                                        </span>
                                    @endforeach
                                    @if(count($project->tech_stack) > 4)
                                        <span class="text-gray-500 text-xs flex items-center">
                                            +{{ count($project->tech_stack) - 4 }} more
                                        </span>
                                    @endif
                                </div>
                                
                                <!-- Project Links -->
                                <div class="flex justify-between items-center">
                                    <a href="{{ route('projects.show', $project) }}" 
                                       class="text-blue-600 dark:text-blue-400 hover:underline font-medium">
                                        Learn More →
                                    </a>
                                    
                                    <div class="flex space-x-3">
                                        @if($project->demo_url)
                                            <a href="{{ $project->demo_url }}" target="_blank" 
                                               class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition-colors"
                                               title="Live Demo">
                                                <i class="fas fa-external-link-alt"></i>
                                            </a>
                                        @endif
                                        @if($project->github_url)
                                            <a href="{{ $project->github_url }}" target="_blank" 
                                               class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition-colors"
                                               title="Source Code">
                                                <i class="fab fa-github"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <!-- Pagination -->
                @if($projects->hasPages())
                    <div class="mt-12 flex justify-center">
                        {{ $projects->appends(request()->query())->links() }}
                    </div>
                @endif
            @else
                <div class="text-center py-20">
                    <i class="fas fa-search text-4xl text-gray-400 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-600 dark:text-gray-400 mb-2">No Projects Found</h3>
                    <p class="text-gray-500 dark:text-gray-500">
                        @if(request('category'))
                            No projects found in the "{{ ucfirst(request('category')) }}" category.
                        @else
                            Projects will be showcased here soon!
                        @endif
                    </p>
                    @if(request('category'))
                        <a href="{{ route('projects.index') }}" class="btn-primary mt-4">
                            View All Projects
                        </a>
                    @endif
                </div>
            @endif
        </div>
    </section>
@endsection