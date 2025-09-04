<div class="max-w-7xl mx-auto px-4" dir="rtl">
    <h3 class="text-3xl font-bold mb-10 text-center text-gray-800">🔥 پرفروش‌ترین محصولات</h3>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
        @for ($i = 1; $i <= 4; $i++)
            <div class="bg-white shadow rounded-lg p-4 text-center">
                <div class="h-40 bg-gray-200 rounded mb-4 flex items-center justify-center">
                    <span class="text-gray-400">تصویر {{ $i }}</span>
                </div>
                <h4 class="text-lg font-semibold">نام محصول {{ $i }}</h4>
                <p class="text-gray-500 mb-2">$ {{ 29.99 + $i }}</p>
                <button class="bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700 transition">
                    افزودن به سبد خرید
                </button>
            </div>
        @endfor
    </div>
</div>
