<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'فروشگاه لاراول') }}</title>

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
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <!-- لوگو -->
            <h1 class="text-2xl font-bold text-teal-600">{{ config('app.name', 'شاپ‌ایز') }}</h1>

            <!-- ناوبری دسکتاپ -->
            <nav class="hidden md:flex space-x-6 text-sm font-medium text-gray-700">
                <a href="#" class="hover:text-teal-600 ml-4">همه محصولات</a>
                <a href="#" class="hover:text-teal-600">دسته‌بندی‌ها</a>
                <a href="#" class="hover:text-teal-600">برندها</a>
                <a href="#" class="hover:text-teal-600">فروش ویژه</a>
                <a href="#" class="hover:text-teal-600">کشف روزانه</a>
            </nav>

            <!-- دکمه منوی موبایل -->
            <button @click="open = !open" class="md:hidden focus:outline-none text-gray-700 hover:text-teal-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                    <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- منوی موبایل -->
        <div x-show="open" class="md:hidden bg-white border-t border-gray-200 px-4 pb-4 space-y-2">
            <a href="#" class="block text-sm font-medium text-gray-700 hover:text-teal-600">همه محصولات</a>
            <a href="#" class="block text-sm font-medium text-gray-700 hover:text-teal-600">دسته‌بندی‌ها</a>
            <a href="#" class="block text-sm font-medium text-gray-700 hover:text-teal-600">برندها</a>
            <a href="#" class="block text-sm font-medium text-gray-700 hover:text-teal-600">فروش ویژه</a>
            <a href="#" class="block text-sm font-medium text-gray-700 hover:text-teal-600">کشف روزانه</a>
        </div>
    </header>

    <!-- بنر اطلاع‌رسانی ۱ -->
    <div class="bg-teal-600 text-white text-center py-3 text-sm">
        ارسال رایگان برای سفارش‌های بالای ۵۰ دلار! 🚚
    </div>

    <!-- بنر اطلاع‌رسانی ۲ -->
    <div class="bg-yellow-400 text-center py-2 text-sm font-medium text-gray-900">
        ⚡ فروش ویژه: تا ۷۰٪ تخفیف بر روی برخی محصولات به مدت ۲۴ ساعت!
    </div>

    <!-- بخش معرفی -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">بهترین و جدیدترین محصولات را خریداری کنید</h2>
            <p class="text-lg text-gray-600 mb-8">مجموعه‌ای از محصولات منتخب مخصوص شما.</p>
            <a href="#"
                class="inline-block bg-teal-600 text-white px-6 py-3 rounded-md font-semibold hover:bg-teal-700 transition">
                مشاهده همه محصولات
            </a>
        </div>
    </section>

    <!-- بخش پرفروش‌ترین محصولات -->
    <section class="py-16 bg-gray-100">
        <livewire:component.top-selling-product />
    </section>

    <!-- بخش ویژگی‌ها -->
    <section class="bg-white py-20">
        <livewire:component.feature-section />
    </section>

    <!-- بخش کارت‌های محصولات -->
    <section class="py-20 bg-gray-100">
        <livewire:component.product-card />
    </section>

    <!-- کشف روزانه -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold mb-8">🧭 کشف روزانه</h3>
            <p class="text-gray-600 mb-6">هر روز سر بزنید و محصولات جدید منتخب تیم ما را ببینید.</p>
            <livewire:daily-discouver />
        </div>
    </section>

    <!-- پاورقی -->
    <livewire:component.footer />

    @livewireScripts
</body>
</html>
