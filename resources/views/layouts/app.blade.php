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
 <!-- بخش معرفی -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">بهترین و جدیدترین محصولات را خریداری کنید</h2>
            <p class="text-lg text-gray-600 mb-8">مجموعه‌ای از محصولات منتخب مخصوص شما.</p>
            <a href="{{ route('products.index') }}"
                class="inline-block bg-teal-600 text-white px-6 py-3 rounded-md font-semibold hover:bg-teal-700 transition" wire:navigate>
                مشاهده همه محصولات
            </a>
        </div>
    </section>

    <!-- محتوای صفحه -->
    @yield('content')

    <!-- پاورقی -->
    <livewire:component.footer />


    @livewireScripts
</body>
</html>
