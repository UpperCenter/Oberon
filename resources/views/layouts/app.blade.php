<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		
		<!-- Primary Meta Tags -->
		<title>Oberon - The Blazing Fast Cyber Range</title>
		<meta name="title" content="Oberon - The Blazing Fast Cyber Range">
		<meta name="description" content="Welcome to the online portal for the Oberon Cyber Range.">

		<!-- Open Graph / Facebook -->
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://cyber.lol/">
		<meta property="og:title" content="Oberon - The Blazing Fast Cyber Range">
		<meta property="og:description" content="Welcome to the online portal for the Oberon Cyber Range.">
		<meta property="og:image" content="asset('images/meta.webp');">

		<!-- Twitter -->
		<meta property="twitter:card" content="summary_large_image">
		<meta property="twitter:url" content="https://cyber.lol/">
		<meta property="twitter:title" content="Oberon - The Blazing Fast Cyber Range">
		<meta property="twitter:description" content="Welcome to the online portal for the Oberon Cyber Range.">
		<meta property="twitter:image" content="asset('images/meta.webp');">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
