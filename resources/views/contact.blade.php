{{-- resources/views/contact.blade.php --}}
@extends('layouts.app')

@section('title', 'Contact - Aheebwa Steven')
@section('description', 'Get in touch with Aheebwa Steven for software development projects, consulting, or collaboration opportunities.')

@section('content')
    <!-- Hero Section -->
    <section class="py-20 bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold mb-6">Let's Work Together</h1>
            <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Ready to bring your ideas to life? Whether it's web development, mobile apps, IoT solutions, 
                or machine learning projects, I'm here to help turn your vision into reality.
            </p>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section class="py-20 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div>
                    <h2 class="text-3xl font-bold mb-8">Send me a message</h2>
                    
                    @if(session('success'))
                        <div class="bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg p-4 mb-6">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span class="text-green-700 dark:text-green-300">{{ session('success') }}</span>
                            </div>
                        </div>
                    @endif
                    
                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                Full Name *
                            </label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                   class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100">
                            @error('name')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                Email Address *
                            </label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                   class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100">
                            @error('email')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <!-- Subject -->
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                Subject *
                            </label>
                            <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required
                                   class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100">
                            @error('subject')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                Message *
                            </label>
                            <textarea id="message" name="message" rows="6" required
                                      class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100"
                                      placeholder="Tell me about your project, timeline, budget, and any specific requirements...">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" class="btn-primary w-full">
                            <i class="fas fa-paper-plane mr-2"></i>Send Message
                        </button>
                    </form>
                </div>
                
                <!-- Contact Information -->
                <div>
                    <h2 class="text-3xl font-bold mb-8">Get in touch</h2>
                    
                    <div class="space-y-8">
                        <!-- Contact Info -->
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-envelope text-blue-600 dark:text-blue-400 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-lg mb-1">Email</h3>
                                    <p class="text-gray-600 dark:text-gray-400">aheebwasteven@gmail.com</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-500 mt-1">I typically respond within 24 hours</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-map-marker-alt text-green-600 dark:text-green-400 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-lg mb-1">Location</h3>
                                    <p class="text-gray-600 dark:text-gray-400">Kampala, Uganda</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-500 mt-1">Available for remote work worldwide</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-clock text-purple-600 dark:text-purple-400 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-lg mb-1">Availability</h3>
                                    <p class="text-gray-600 dark:text-gray-400">Monday - Friday</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-500 mt-1">9:00 AM - 6:00 PM (EAT)</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Social Links -->
                        <div>
                            <h3 class="font-semibold text-lg mb-4">Connect with me</h3>
                            <div class="flex space-x-4">
                                <a href="{{ config('app.github_url') }}" target="_blank" 
                                   class="w-12 h-12 bg-gray-100 dark:bg-gray-800 rounded-lg flex items-center justify-center text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                                    <i class="fab fa-github text-xl"></i>
                                </a>
                                <a href="{{ config('app.linkedin_url') }}" target="_blank" 
                                   class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-800 transition-colors">
                                    <i class="fab fa-linkedin text-xl"></i>
                                </a>
                                <a href="mailto:aheebwasteven@gmail.com" 
                                   class="w-12 h-12 bg-red-100 dark:bg-red-900 rounded-lg flex items-center justify-center text-red-600 dark:text-red-400 hover:text-red-700 dark:hover:text-red-300 hover:bg-red-200 dark:hover:bg-red-800 transition-colors">
                                    <i class="fas fa-envelope text-xl"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- What to expect -->
                        <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6">
                            <h3 class="font-semibold text-lg mb-4">What to expect</h3>
                            <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                <li class="flex items-start space-x-2">
                                    <i class="fas fa-check text-green-500 mt-0.5"></i>
                                    <span>Quick response within 24 hours</span>
                                </li>
                                <li class="flex items-start space-x-2">
                                    <i class="fas fa-check text-green-500 mt-0.5"></i>
                                    <span>Free initial consultation call</span>
                                </li>
                                <li class="flex items-start space-x-2">
                                    <i class="fas fa-check text-green-500 mt-0.5"></i>
                                    <span>Detailed project proposal and timeline</span>
                                </li>
                                <li class="flex items-start space-x-2">
                                    <i class="fas fa-check text-green-500 mt-0.5"></i>
                                    <span>Transparent communication throughout</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Frequently Asked Questions</h2>
                <p class="text-gray-600 dark:text-gray-400">
                    Common questions about working together
                </p>
            </div>
            
            <div class="space-y-6">
                <div class="bg-white dark:bg-gray-900 rounded-lg p-6">
                    <h3 class="font-semibold text-lg mb-2">What types of projects do you work on?</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        I specialize in web applications using Laravel and React, mobile apps with Flutter, 
                        IoT systems with microcontrollers and sensors, and machine learning solutions. 
                        I also offer DevOps services and technology consulting.
                    </p>
                </div>
                
                <div class="bg-white dark:bg-gray-900 rounded-lg p-6">
                    <h3 class="font-semibold text-lg mb-2">How do you handle project timelines?</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        I provide detailed project timelines with milestones and regular updates. 
                        Most web projects take 2-8 weeks, mobile apps 4-12 weeks, and IoT solutions 
                        6-16 weeks, depending on complexity and requirements.
                    </p>
                </div>
                
                <div class="bg-white dark:bg-gray-900 rounded-lg p-6">
                    <h3 class="font-semibold text-lg mb-2">Do you work with international clients?</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Yes! I work with clients worldwide and am comfortable with remote collaboration. 
                        I use modern communication tools and project management platforms to ensure 
                        seamless collaboration across time zones.
                    </p>
                </div>
                
                <div class="bg-white dark:bg-gray-900 rounded-lg p-6">
                    <h3 class="font-semibold text-lg mb-2">What's your development process?</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        I follow agile methodologies with regular sprints, code reviews, and testing. 
                        The process includes requirements analysis, design mockups, development, 
                        testing, deployment, and ongoing support.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection