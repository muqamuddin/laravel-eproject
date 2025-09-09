<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', ' نام فروشگاه ')</title>

    <style>
        html {
            scrollbar-color: #0D9488 #f1f1f1;
            scrollbar-width: thin;
            scroll-behavior: smooth;
        }

        ::selection {
            background: #0D9488;
            color: white;
        }

        .back-to-top.actives {
            opacity: 1;
            visibility: visible;
        }
    </style>
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="bg-gray-50 text-gray-900 font-sans">

    <!-- نوار ناوبری واکنش‌گرا -->
    <!-- ...navbar content stays unchanged... -->
    <livewire:component.navbar />

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
                class="inline-block bg-teal-600 text-white px-6 py-3 rounded-md font-semibold hover:bg-teal-700 transition"
                wire:navigate>
                مشاهده همه محصولات
            </a>
        </div>
    </section>

    <!-- محتوای صفحه -->
    @yield('content')

    <!-- پاورقی -->
    <livewire:component.footer />


    @livewireScripts
    <script>
        function initBackToTop() {
            var backToTopButton = document.getElementById('back-to-top');
            if (!backToTopButton) return;

            window.removeEventListener('scroll', handleScroll);
            backToTopButton.removeEventListener('click', handleClick);

            function handleScroll() {
                backToTopButton.classList.toggle('actives', window.pageYOffset > 200);
            }

            function handleClick(e) {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }

            window.addEventListener('scroll', handleScroll);
            backToTopButton.addEventListener('click', handleClick);
        }

        document.addEventListener('DOMContentLoaded', initBackToTop);
        document.addEventListener('livewire:navigated', initBackToTop);
    </script>

    <!-- Floating Buttons Container -->
    <div class="fixed bottom-5 right-5 z-[1000] flex gap-2">
        <!-- WhatsApp Button -->
        <a href="https://wa.me/93776578603" class="w-11 h-11" target="_blank" title="Chat with us on WhatsApp">
            <img src="https://img.icons8.com/color/48/000000/whatsapp.png" alt="WhatsApp Chat" class="w-full h-full">
        </a>

        <!-- Back to Top Button -->
        <a href="#" id="back-to-top"
            class=" back-to-top w-8 h-8 bg-teal-600 text-white rounded-full flex items-center justify-center opacity-0 invisible transition-all duration-00 hover:bg-teal-500">
            <i class="fa fa-arrow-up text-xs"></i>
        </a>
    </div>

</body>

</html>
