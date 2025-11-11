@extends('layouts.app')

@section('content')

<!-- Hero Section Carousel -->
<section id="hero-carousel"
    class="relative bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 text-white overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0"
            style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;">
        </div>
    </div>

    <!-- Slides -->
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16 overflow-hidden">
        <div class="relative h-[500px] lg:h-[450px]">
            <!-- Slide 1 -->
            <div
                class="hero-slide absolute inset-0 flex flex-col lg:flex-row items-center justify-between gap-8 transition-opacity duration-700 opacity-100">
                <div class="text-center lg:text-left">
                    <div class="inline-block mb-3">
                        <span class="px-4 py-1.5 bg-white/20 backdrop-blur-sm rounded-full text-xs font-semibold">
                            🏆 Trusted by 5000+ Professionals
                        </span>
                    </div>
                    <h1 class="text-3xl lg:text-4xl font-bold leading-tight mb-4">
                        We Expedite <span class="text-yellow-300">Digital Transformation</span> with Agile
                    </h1>
                    <p class="text-base text-blue-100 mb-6 leading-relaxed">
                        Partner with industry-leading agile experts to accelerate your career and transform your
                        organization through world-class training and certification programs.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-3 justify-center lg:justify-start">
                        <a href="/trainings"
                            class="inline-flex items-center justify-center px-4 py-2 rounded-md bg-white text-blue-600 hover:bg-gray-100 w-full sm:w-auto shadow-xl">
                            Explore Training Programs →
                        </a>
                        <a href="/assessment"
                            class="inline-flex items-center justify-center px-4 py-2 rounded-md border-2 border-white text-white hover:bg-white/10 w-full sm:w-auto">
                            Find Your Path
                        </a>
                    </div>
                </div>
                <div class="hidden lg:block relative">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=800&h=600&fit=crop"
                        alt="Digital Transformation" class="rounded-2xl shadow-2xl" />
                    <div class="absolute -bottom-4 -left-4 bg-white text-gray-900 rounded-xl shadow-2xl p-4">
                        <div class="text-2xl font-bold text-blue-600">95%</div>
                        <div class="text-xs text-gray-600">Success Rate</div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div
                class="hero-slide absolute inset-0 flex flex-col lg:flex-row items-center justify-between gap-8 transition-opacity duration-700 opacity-0">
                <div class="text-center lg:text-left">
                    <div class="inline-block mb-3">
                        <span class="px-4 py-1.5 bg-white/20 backdrop-blur-sm rounded-full text-xs font-semibold">
                            🎯 New Cohort Starting Soon
                        </span>
                    </div>
                    <h1 class="text-3xl lg:text-4xl font-bold leading-tight mb-4">
                        Product Management <span class="text-yellow-300">Professional Program</span> Cohorts 2025
                    </h1>
                    <p class="text-base text-blue-100 mb-6 leading-relaxed">
                        Join our comprehensive Product Management certification program. Learn from industry experts
                        through live cohorts, real-world case studies, and hands-on projects.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-3 justify-center lg:justify-start">
                        <a href="/trainings"
                            class="inline-flex items-center justify-center px-4 py-2 rounded-md bg-white text-blue-600 hover:bg-gray-100 w-full sm:w-auto shadow-xl">
                            View Cohort Schedule →
                        </a>
                        <a href="#"
                            class="inline-flex items-center justify-center px-4 py-2 rounded-md border-2 border-white text-white hover:bg-white/10 w-full sm:w-auto">
                            Download Brochure
                        </a>
                    </div>
                </div>
                <div class="hidden lg:block relative">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800&h=600&fit=crop"
                        alt="Product Management" class="rounded-2xl shadow-2xl" />
                    <div class="absolute -bottom-4 -left-4 bg-white text-gray-900 rounded-xl shadow-2xl p-4">
                        <div class="text-2xl font-bold text-blue-600">12 Weeks</div>
                        <div class="text-xs text-gray-600">Program Duration</div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div
                class="hero-slide absolute inset-0 flex flex-col lg:flex-row items-center justify-between gap-8 transition-opacity duration-700 opacity-0">
                <div class="text-center lg:text-left">
                    <div class="inline-block mb-3">
                        <span class="px-4 py-1.5 bg-white/20 backdrop-blur-sm rounded-full text-xs font-semibold">
                            🤖 AI-Powered Learning
                        </span>
                    </div>
                    <h1 class="text-3xl lg:text-4xl font-bold leading-tight mb-4">
                        AI-Enabled Agile <span class="text-yellow-300">Certification Programs</span> Future of Agile
                    </h1>
                    <p class="text-base text-blue-100 mb-6 leading-relaxed">
                        Master AI-enhanced Scrum Master and Product Owner practices. Learn how AI tools revolutionize
                        sprint planning, backlog management, and team collaboration.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-3 justify-center lg:justify-start">
                        <a href="/trainings"
                            class="inline-flex items-center justify-center px-4 py-2 rounded-md bg-white text-blue-600 hover:bg-gray-100 w-full sm:w-auto shadow-xl">
                            Explore AI Courses →
                        </a>
                        <a href="/about"
                            class="inline-flex items-center justify-center px-4 py-2 rounded-md border-2 border-white text-white hover:bg-white/10 w-full sm:w-auto">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="hidden lg:block relative">
                    <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=800&h=600&fit=crop"
                        alt="AI Agile" class="rounded-2xl shadow-2xl" />
                    <div class="absolute -bottom-4 -left-4 bg-white text-gray-900 rounded-xl shadow-2xl p-4">
                        <div class="text-2xl font-bold text-blue-600">AI Tools</div>
                        <div class="text-xs text-gray-600">Integrated</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <button id="hero-prev"
        class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/20 backdrop-blur-sm rounded-full p-3 hover:bg-white/30 transition z-10">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
    </button>

    <button id="hero-next"
        class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/20 backdrop-blur-sm rounded-full p-3 hover:bg-white/30 transition z-10">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button>

    <!-- Indicators -->
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2 z-10">
        <button class="hero-dot bg-white w-8 h-2 rounded-full"></button>
        <button class="hero-dot bg-white/40 w-2 h-2 rounded-full hover:bg-white/60"></button>
        <button class="hero-dot bg-white/40 w-2 h-2 rounded-full hover:bg-white/60"></button>
    </div>
</section>

<!-- Upcoming This Week -->
<section class="py-12 bg-gradient-to-br from-orange-50 to-red-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <div class="inline-flex items-center gap-2 mb-3">
                <span class="px-3 py-1 bg-red-600 text-white text-xs font-bold rounded-full animate-pulse">🔥 STARTING
                    THIS WEEK</span>
            </div>
            <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-2">Limited Seats Available - Book Now!</h2>
            <p class="text-base text-gray-600">Don't miss out on these upcoming training sessions</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            @foreach ([['title' => 'PSM I - Scrum Master', 'category' => 'Agile', 'date' => 'Fri, Nov 15', 'location' => 'Online', 'img' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&h=400&fit=crop', 'price' => 499, 'seats' => 3], ['title' => 'Product Owner Essentials', 'category' => 'Product', 'date' => 'Sat, Nov 16', 'location' => 'Bengaluru', 'img' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop', 'price' => 549, 'seats' => 11], ['title' => 'Kanban Foundations', 'category' => 'Lean', 'date' => 'Sun, Nov 17', 'location' => 'Online', 'img' => 'https://images.unsplash.com/photo-1487014679447-9f8336841d58?w=600&h=400&fit=crop', 'price' => 399, 'seats' => 6], ['title' => 'SAFe POPM', 'category' => 'SAFe', 'date' => 'Mon, Nov 18', 'location' => 'Mumbai', 'img' => 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=600&h=400&fit=crop', 'price' => 699, 'seats' => 2]] as $s)
                <div
                    class="relative border-2 border-orange-200 rounded-xl overflow-hidden bg-white hover:shadow-2xl transition">
                    @if ($s['seats'] < 5)
                        <div
                            class="absolute top-3 right-3 z-10 bg-red-600 text-white px-2 py-1 rounded-full text-xs font-bold">
                            ⚡ Filling Fast</div>
                    @endif
                    <div class="h-32 overflow-hidden relative">
                        <img src="{{ $s['img'] }}" alt="{{ $s['title'] }}" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <span
                            class="absolute bottom-2 left-2 bg-white text-gray-900 text-xs px-2 py-0.5 rounded">{{ $s['category'] }}</span>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-gray-900 text-sm line-clamp-2 mb-3">{{ $s['title'] }}</h3>
                        <div class="space-y-2 mb-4 text-xs text-gray-600">
                            <div class="flex items-center"><span class="mr-2 text-orange-600">📅</span><span
                                    class="font-semibold text-orange-700">{{ $s['date'] }}</span></div>
                            <div class="flex items-center"><span
                                    class="mr-2 text-orange-600">📍</span><span>{{ $s['location'] }}</span></div>
                        </div>
                        <div class="mb-3 p-2 bg-yellow-50 rounded-lg border border-yellow-200">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="text-xs text-gray-500 line-through">
                                        ${{ number_format($s['price'] * 1.3, 0) }}</div>
                                    <div class="text-lg font-bold text-orange-600">${{ $s['price'] }}</div>
                                </div>
                                <div class="text-right">
                                    <div class="text-xs font-semibold text-green-600">Save
                                        ${{ number_format($s['price'] * 0.3, 0) }}</div>
                                    <div class="text-xs text-gray-600">Early Bird</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between pt-2 border-t border-gray-200">
                            <span
                                class="text-xs font-bold {{ $s['seats'] < 5 ? 'text-red-600' : 'text-green-600' }}">👥
                                {{ $s['seats'] }} left</span>
                            <a href="/training/1"
                                class="inline-flex items-center justify-center h-7 px-3 rounded text-white bg-orange-600 hover:bg-orange-700 text-xs">Book
                                Now →</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center">
            <a href="/trainings"
                class="inline-flex items-center justify-center px-5 py-2 rounded-lg border-2 border-orange-600 text-orange-600 hover:bg-orange-50">
                View All Upcoming Trainings <span class="ml-2">→</span>
            </a>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-2">Your Journey to Professional Excellence</h2>
            <p class="text-base text-gray-600 max-w-2xl mx-auto">Start your transformation journey in three simple
                steps</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6 mb-8">
            <!-- Card 1 -->
            <div class="relative overflow-hidden border-2 rounded-2xl hover:border-blue-600 transition shadow-sm">
                <div
                    class="absolute top-0 right-0 w-16 h-16 bg-blue-50 rounded-bl-full flex items-start justify-end p-3">
                    <span class="text-xl font-bold text-blue-600">1</span>
                </div>
                <div class="p-5">
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-blue-100 rounded-xl mb-4">👥</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Discover Your Path</h3>
                    <p class="text-sm text-gray-600 mb-4">Take our quick assessment to identify the perfect training
                        program for your career goals.</p>
                    <a href="/assessment"
                        class="inline-flex items-center justify-center w-full px-3 py-2 rounded border text-sm">Take
                        Assessment <span class="ml-2">→</span></a>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="relative overflow-hidden border-2 rounded-2xl hover:border-blue-600 transition shadow-sm">
                <div
                    class="absolute top-0 right-0 w-16 h-16 bg-green-50 rounded-bl-full flex items-start justify-end p-3">
                    <span class="text-xl font-bold text-green-600">2</span>
                </div>
                <div class="p-5">
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-green-100 rounded-xl mb-4">🏅
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Get Expert Training</h3>
                    <p class="text-sm text-gray-600 mb-4">Learn from certified trainers through interactive sessions
                        and hands-on exercises.</p>
                    <a href="/trainings"
                        class="inline-flex items-center justify-center w-full px-3 py-2 rounded border text-sm">View
                        Trainings <span class="ml-2">→</span></a>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="relative overflow-hidden border-2 rounded-2xl hover:border-blue-600 transition shadow-sm">
                <div
                    class="absolute top-0 right-0 w-16 h-16 bg-purple-50 rounded-bl-full flex items-start justify-end p-3">
                    <span class="text-xl font-bold text-purple-600">3</span>
                </div>
                <div class="p-5">
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-purple-100 rounded-xl mb-4">📈
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Transform & Grow</h3>
                    <p class="text-sm text-gray-600 mb-4">Apply your new skills, earn certifications, and access
                        ongoing resources.</p>
                    <a href="/register"
                        class="inline-flex items-center justify-center w-full px-3 py-2 rounded border text-sm">Get
                        Started <span class="ml-2">→</span></a>
                </div>
            </div>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 p-8 bg-gradient-to-r from-blue-50 to-purple-50 rounded-2xl">
            <div class="text-center">
                <div class="text-4xl font-bold text-blue-600 mb-2">5000+</div>
                <div class="text-sm font-medium text-gray-600">Professionals Trained</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-green-600 mb-2">95%</div>
                <div class="text-sm font-medium text-gray-600">Satisfaction Rate</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-purple-600 mb-2">50+</div>
                <div class="text-sm font-medium text-gray-600">Training Programs</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-orange-600 mb-2">15+</div>
                <div class="text-sm font-medium text-gray-600">Years of Excellence</div>
            </div>
        </div>
    </div>
</section>

<!-- Popular Training Courses (6 sample cards) -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Our Popular Training Programs</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Choose from our most sought-after certification programs
                designed for professionals at every level</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach (range(1, 6) as $i)
                <div class="rounded-2xl overflow-hidden bg-white border hover:shadow-lg transition">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://picsum.photos/seed/course{{ $i }}/800/480"
                            alt="Course {{ $i }}" class="w-full h-full object-cover">
                        <div class="absolute top-4 right-4">
                            <span
                                class="bg-white px-3 py-1 rounded-full text-xs font-semibold text-gray-900">Intermediate</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="mb-2">
                            <span class="text-xs font-semibold text-blue-600 uppercase tracking-wide">Agile</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3">Course Title {{ $i }}</h3>
                        <p class="text-sm text-gray-600 mb-4 line-clamp-2">Short description of the course content and
                            outcomes. Practical, hands-on learning.</p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-gray-500">⏱ 2 Days</span>
                            <span class="text-lg font-bold text-gray-900">$499</span>
                        </div>
                        <a href="/training/{{ $i }}"
                            class="inline-flex items-center justify-center w-full px-4 py-2 rounded bg-blue-600 hover:bg-blue-700 text-white">View
                            Details</a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="/trainings" class="inline-flex items-center justify-center px-5 py-2 rounded-lg border">View All
                Trainings <span class="ml-2">→</span></a>
        </div>
    </div>
</section>

<!-- Trainers -->
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-2">Our Expert Trainers</h2>
            <p class="text-base text-gray-600">Learn from industry-leading certified professionals</p>
        </div>

        <div class="grid md:grid-cols-3 lg:grid-cols-6 gap-6">
            @foreach (range(1, 6) as $i)
                <div class="text-center border rounded-2xl bg-white hover:shadow-lg transition">
                    <div class="p-4">
                        <div class="mb-3">
                            <img src="https://i.pravatar.cc/150?img={{ $i + 10 }}"
                                alt="Trainer {{ $i }}"
                                class="w-24 h-24 rounded-full mx-auto object-cover border-4 border-blue-100" />
                        </div>
                        <h3 class="font-bold text-sm text-gray-900 mb-1">Trainer Name {{ $i }}</h3>
                        <p class="text-xs text-gray-600 mb-1">Agile Coach</p>
                        <p class="text-xs text-blue-600 font-semibold">CST, SPC</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Companies (marquee-style without JS: duplicated row for effect) -->
<section class="py-8 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-6">
            <h2 class="text-xl font-bold text-gray-900 mb-2">Trusted by Leading Organizations</h2>
        </div>

        <div class="overflow-hidden">
            <div class="flex gap-12 justify-center flex-wrap">
                @foreach (['Google', 'Microsoft', 'Amazon', 'Uber', 'Netflix', 'Adobe'] as $name)
                    <div class="w-40 h-20 flex items-center justify-center grayscale hover:grayscale-0 transition">
                        <img src="https://dummyimage.com/160x80/ffffff/000000&text={{ urlencode($name) }}"
                            alt="{{ $name }}" class="max-w-full max-h-full object-contain" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Testimonials (3 static) -->
<section class="py-12 bg-gradient-to-br from-blue-50 to-purple-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-2">What Participants Say About Us</h2>
            <p class="text-base text-gray-600">Hear from our successful graduates</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @foreach ([['name' => 'Aarav Shah', 'role' => 'Product Manager', 'img' => 'https://i.pravatar.cc/100?img=21', 'text' => 'Fantastic content and trainers. Highly recommended!', 'rating' => 5], ['name' => 'Priya Nair', 'role' => 'Scrum Master', 'img' => 'https://i.pravatar.cc/100?img=32', 'text' => 'The exercises felt real and practical.', 'rating' => 5], ['name' => 'Rahul Mehta', 'role' => 'Engineering Lead', 'img' => 'https://i.pravatar.cc/100?img=14', 'text' => 'Great pacing and lots of insights.', 'rating' => 4]] as $t)
                <div class="p-6 bg-white border rounded-2xl shadow hover:shadow-xl transition">
                    <div class="flex items-center mb-4">
                        <img src="{{ $t['img'] }}" alt="{{ $t['name'] }}"
                            class="w-12 h-12 rounded-full mr-3" />
                        <div>
                            <h4 class="font-semibold text-gray-900 text-sm">{{ $t['name'] }}</h4>
                            <p class="text-xs text-gray-500">{{ $t['role'] }}</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600 mb-3">"{{ $t['text'] }}"</p>
                    <div class="text-yellow-400 text-sm">
                        {{ str_repeat('⭐', $t['rating']) }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA -->
<section class="relative py-20 bg-gradient-to-r from-blue-600 via-blue-700 to-purple-700 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-12 border border-white/20">
            <div class="text-center">
                <h2 class="text-3xl lg:text-5xl font-bold text-white mb-6">Ready to Transform Your Career?</h2>
                <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
                    Join thousands of professionals who have advanced their careers with our world-class training
                    programs. Not sure where to start? Let us help you find your perfect path.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/assessment"
                        class="inline-flex items-center justify-center px-5 py-3 rounded-lg bg-white text-blue-600 hover:bg-gray-100 shadow-xl">
                        Find Your Training Path <span class="ml-2">→</span>
                    </a>
                    <a href="/schedule-call"
                        class="inline-flex items-center justify-center px-5 py-3 rounded-lg border-2 border-white text-white hover:bg-white/10">
                        Schedule a Consultation
                    </a>
                </div>

                <div class="mt-12 pt-8 border-t border-white/20">
                    <p class="text-blue-100 mb-4">Have questions? Our training advisors are here to help.</p>
                    <div class="flex flex-wrap gap-6 justify-center text-sm text-white">
                        <a href="mailto:info@agilemania.com" class="hover:text-blue-200">✉️ info@agilemania.com</a>
                        <a href="tel:+1234567890" class="hover:text-blue-200">📞 +1 (234) 567-890</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const slides = document.querySelectorAll("#hero-carousel .hero-slide");
        const dots = document.querySelectorAll("#hero-carousel .hero-dot");
        const nextBtn = document.getElementById("hero-next");
        const prevBtn = document.getElementById("hero-prev");

        let currentSlide = 0;
        let autoSlide = setInterval(nextSlide, 4000);

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.opacity = i === index ? "1" : "0";
                slide.style.zIndex = i === index ? "1" : "0";
                dots[i].classList.toggle("bg-white", i === index);
                dots[i].classList.toggle("bg-white/40", i !== index);
                dots[i].classList.toggle("w-8", i === index);
                dots[i].classList.toggle("w-2", i !== index);
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlideFn() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        nextBtn.addEventListener("click", () => {
            clearInterval(autoSlide);
            nextSlide();
            autoSlide = setInterval(nextSlide, 4000);
        });

        prevBtn.addEventListener("click", () => {
            clearInterval(autoSlide);
            prevSlideFn();
            autoSlide = setInterval(nextSlide, 4000);
        });

        dots.forEach((dot, index) => {
            dot.addEventListener("click", () => {
                clearInterval(autoSlide);
                currentSlide = index;
                showSlide(currentSlide);
                autoSlide = setInterval(nextSlide, 4000);
            });
        });

        showSlide(currentSlide);
    });
</script>
