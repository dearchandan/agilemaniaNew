<div x-data="{
    activeSlide: 0,
    total: {{ count($slides) }},
    init() {
        if (this.total === 0) return;
        setInterval(() => this.next(), 6000);
    },
    next() { this.activeSlide = (this.activeSlide + 1) % this.total },
    prev() { this.activeSlide = (this.activeSlide - 1 + this.total) % this.total }
}" class="relative w-full"> {{-- full width wrapper, positioned relative so arrows are inside it --}}

    <!-- Full-width banner area (keeps height for arrows) -->
    <div class="relative w-full" style="min-height: 500px;">
        <!-- Centered content container -->
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16 overflow-hidden h-full">
            <div class="relative h-[500px] lg:h-[450px]">

                @foreach ($slides as $index => $slide)
                    <div
    x-show="activeSlide === {{ $index }}"
    x-transition.opacity.duration.700ms
    class="hero-slide absolute inset-0 flex flex-col lg:flex-row items-center lg:items-center justify-between gap-10 lg:gap-16"
>

    <!-- LEFT CONTENT -->
    <div class="flex-1 text-left">

        {{-- Title Tag --}}
        @if($slide->title_tag)
            <div class="inline-block mb-4">
                <span class="px-4 py-1.5 bg-white/20 backdrop-blur-md rounded-full text-xs font-semibold flex items-center gap-1">
                    <span>🏆</span>
                    {{ $slide->title_tag }}
                </span>
            </div>
        @endif

        {{-- Title --}}
        <h1 class="text-3xl lg:text-5xl font-bold leading-tight mb-4">
            {!! $slide->title !!}
        </h1>

        {{-- Description --}}
        <p class="text-base lg:text-lg text-blue-100 mb-6 leading-relaxed max-w-xl">
            {!! $slide->description !!}
        </p>

        {{-- CTA Buttons --}}
        <div class="flex flex-col sm:flex-row gap-3 mb-6">
            @if($slide->primary_cta_title)
                <a href="{{ $slide->primary_cta_link ?? '#' }}"
                   class="inline-flex items-center justify-center px-5 py-3 rounded-md bg-white text-blue-600 font-semibold hover:bg-gray-100 shadow-lg">
                    {{ $slide->primary_cta_title }} →
                </a>
            @endif

            @if($slide->secondary_cta_title)
                <a href="{{ $slide->secondary_cta_link ?? '#' }}"
                   class="inline-flex items-center justify-center px-5 py-3 rounded-md border border-white text-white font-semibold hover:bg-white/10">
                    {{ $slide->secondary_cta_title }}
                </a>
            @endif
        </div>

        {{-- Partner Labels --}}
        <div class="flex items-center gap-8 text-xs text-blue-100 font-medium">

            <span class="flex items-center gap-1">
                <span>🔗</span> SAFe Silver Partner
            </span>

            <span class="flex items-center gap-1">
                <span>🏅</span> Scrum.org Certified
            </span>

            <span class="flex items-center gap-1">
                <span>⭐</span> ICAgile Partner
            </span>

        </div>

    </div>

    <!-- RIGHT IMAGE -->
    <div class="hidden lg:flex flex-1 relative justify-end">

        <img src="{{ $slide->image_url }}"
             class="rounded-2xl shadow-2xl max-w-md lg:max-w-lg"
             alt="Banner">

    </div>

</div>
                @endforeach

            </div>
        </div>
    </div>

    {{-- ARROWS: absolute inside the full-width wrapper so they stay within banner area --}}
    <button @click="prev()" aria-label="Previous slide"
        class="absolute left-4 top-1/2 -translate-y-1/2
               bg-white/30 backdrop-blur-md rounded-full p-3 hover:bg-white/40
               transition z-[9999] shadow-xl border border-white/30">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
    </button>

    <button @click="next()" aria-label="Next slide"
        class="absolute right-4 top-1/2 -translate-y-1/2
               bg-white/30 backdrop-blur-md rounded-full p-3 hover:bg-white/40
               transition z-[9999] shadow-xl border border-white/30">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button>

    {{-- DOTS: center aligned and positioned near bottom of banner area --}}
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2 z-20">
        @foreach ($slides as $index => $s)
            <button @click="activeSlide = {{ $index }}" class="transition-all h-2 rounded-full"
                :class="activeSlide === {{ $index }} ? 'bg-white w-8' : 'bg-white/40 w-2'">
            </button>
        @endforeach
    </div>
</div>
