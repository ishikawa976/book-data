<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>蔵書データベース</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
   
        
    <body class="min-h-screen bg-gray-100"> 
        <div class="bg-white mx-20 my-20 flex justify-center items-center flex-col gap-10">
            <div>
                <h1 class="text-2xl mt-10">蔵書データベース</h1>
            </div>
            <div class="text-base">
                <p>このサイトは、管理者のみしか使用できないようになっています。ほかの方のご使用は控えさせていただきます。
            </div>
            <div class="py-10">
                <a
                    href="{{ route('login') }}"
                    class="text-blue-600 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    ログインはここから
                </a>
            </div>
        </div>
    </body>
</html>

