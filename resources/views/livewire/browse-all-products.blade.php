<div class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">🛒 همه محصولات</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8" dir="rtl">
            @foreach ($products as $product)
                <div class="bg-gray-50 shadow-md rounded-lg overflow-hidden hover:shadow-lg transition">
                    <div class="h-48 bg-white flex items-center justify-center">
                        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="object-contain h-full">
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-semibold mb-2">{{ $product['name'] }}</h3>
                        <p class="text-teal-600 font-bold text-lg mb-4">
                            {{ number_format($product['price'], 2) }} افغانی
                        </p>
                        <button class="w-full bg-teal-600 hover:bg-teal-700 text-white py-2 rounded transition">
                            افزودن به سبد خرید
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
