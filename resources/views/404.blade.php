<x-layouts.app title="Page Not Found">
    <section class="py-20 text-center">
        <h1 class="text-6xl font-bold text-blue-700 mb-4">404</h1>
        <p class="text-gray-600 mb-6">Sorry, the page you’re looking for doesn’t exist.</p>
        <a href="{{ route('home') }}" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
            Go Home
        </a>
    </section>
</x-layouts.app>
