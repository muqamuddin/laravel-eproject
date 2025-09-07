<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name', 'فروشگاه لاراول'))</title>

    <!-- Fonts & Alpine.js -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="bg-gray-50 text-gray-900 font-sans">

    <!-- نوار ناوبری واکنش‌گرا -->
    <header x-data="{ open: false }" class="bg-white shadow-sm sticky top-0 z-50">
        <!-- ...navbar content stays unchanged... -->
        <livewire:component.navbar>
    </header>

    <!-- بنرها -->
    <div class="bg-teal-600 text-white text-center py-3 text-sm">
        ارسال رایگان برای سفارش‌های بالای ۵۰ دلار! 🚚
    </div>
    <div class="bg-yellow-400 text-center py-2 text-sm font-medium text-gray-900">
        ⚡ فروش ویژه: تا ۷۰٪ تخفیف بر روی برخی محصولات به مدت ۲۴ ساعت!
    </div>

    <!-- محتوای صفحه -->
    @yield('content')

    <!-- پاورقی -->
    <livewire:component.footer />

    @livewireScripts
</body>
</html>
