<div class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-4">🛒 همه محصولات</h2>
        <p class="text-center text-gray-500 text-lg mb-12">
            محصولات پرطرفدار با بهترین کیفیت و قیمت مناسب را مشاهده کنید
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8" dir="rtl">
            @foreach ($products as $product)
                <div class="bg-white border border-gray-200 shadow-sm rounded-xl overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <!-- Product Image -->
                    <div class="h-52 bg-gray-100 flex items-center justify-center p-4">
                        <img src="{{ $product['image'] }}"
                             alt="{{ $product['name'] }}"
                             class="object-contain h-full transition-transform duration-300 group-hover:scale-105">
                    </div>

                    <!-- Product Info -->
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-semibold text-gray-800 mb-1">{{ $product['name'] }}</h3>
                        <p class="text-teal-600 font-bold text-md mb-4">
                            {{ number_format($product['price'], 2) }} افغانی
                        </p>

                        <button class="w-full bg-teal-600 hover:bg-teal-700 text-white font-medium py-2 rounded-md transition-colors duration-300">
                            افزودن به سبد خرید
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
