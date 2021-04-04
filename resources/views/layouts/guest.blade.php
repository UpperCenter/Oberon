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
		<meta property="og:url" content="https://metatags.io/">
		<meta property="og:title" content="Oberon - The Blazing Fast Cyber Range">
		<meta property="og:description" content="Welcome to the online portal for the Oberon Cyber Range.">
		<meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

		<!-- Twitter -->
		<meta property="twitter:card" content="summary_large_image">
		<meta property="twitter:url" content="https://metatags.io/">
		<meta property="twitter:title" content="Oberon - The Blazing Fast Cyber Range">
		<meta property="twitter:description" content="Welcome to the online portal for the Oberon Cyber Range.">
		<meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
