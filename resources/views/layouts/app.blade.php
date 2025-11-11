<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Larawire' }}</title>

    {{-- Header Scripts --}}
    @include('includes.headerscripts')
</head>
<body class="bg-gray-50 text-gray-900">

    {{-- Header --}}
    @include('includes.header')

    {{-- Main Content --}}
    <main class="">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('includes.footer')

    {{-- Footer Scripts --}}
    @include('includes.footerscripts')
</body>
</html>
