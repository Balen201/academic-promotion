<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">




    @if (Route::has('login'))
    <nav class="-mx-3 flex flex-1 justify-end">
        @auth
            <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Dashboard
            </a>
        @else
            @include('auth.register')
        @endauth
    </nav>
@endif









        </body>
</html>
