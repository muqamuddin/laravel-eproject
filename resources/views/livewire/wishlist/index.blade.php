<div>
   
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-4">❤️ لیست علاقه‌مندی‌ها</h2>
        <p class="text-center text-gray-500 text-lg mb-12">محصولاتی که ذخیره کرده‌اید</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8" dir="rtl">
            <!-- Card 1 -->
            <div class="bg-white border border-gray-200 shadow-sm rounded-xl overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <!-- Image -->
                <div class="h-40 bg-gray-50 flex items-center justify-center p-4">
                    <img src="https://via.placeholder.com/300x200" alt="Apple Watch"
                         class="object-contain h-full w-full">
                </div>

                <!-- Info -->
                <div class="p-4 text-center">
                    <h3 class="text-lg font-semibold text-gray-800 mb-1">ساعت هوشمند Apple Watch</h3>
                    <p class="text-gray-500 text-sm mb-2">نسل ۷ | رنگ: مشکی</p>
                    <p class="text-[#0D9488] font-bold text-base mb-4">۶٬۰۰۰٬۰۰۰ تومان</p>

                    <a href="{{ route('cart.index') }}"
                       class="inline-block bg-[#0D9488] hover:bg-teal-700 text-white font-medium px-4 py-2 rounded-md transition duration-300" wire:navigate>
                        افزودن به سبد خرید
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white border border-gray-200 shadow-sm rounded-xl overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <!-- Image -->
                <div class="h-40 bg-gray-50 flex items-center justify-center p-4">
                    <img src="https://via.placeholder.com/300x200" alt="Logitech Keyboard"
                         class="object-contain h-full w-full">
                </div>

                <!-- Info -->
                <div class="p-4 text-center">
                    <h3 class="text-lg font-semibold text-gray-800 mb-1">کیبورد مکانیکی Logitech</h3>
                    <p class="text-gray-500 text-sm mb-2">با نور RGB</p>
                    <p class="text-[#0D9488] font-bold text-base mb-4">۲٬۳۰۰٬۰۰۰ تومان</p>

                    <a href="{{ route('cart.index') }}" 
                       class="inline-block bg-[#0D9488] hover:bg-teal-700 text-white font-medium px-4 py-2 rounded-md transition duration-300" wire:navigate>
                        افزودن به سبد خرید
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


</div>
