<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Weather</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- tailwindcss -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased">
        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0"> -->
            <!-- <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg"> -->
                @yield('content')
            <!-- </div> -->
        <!-- </div> -->
    </body>
</html>
