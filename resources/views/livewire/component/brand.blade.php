<div class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-4">🔥 برندهای پیشنهادی</h2>
        <p class="text-center text-gray-500 text-lg mb-12">
            برندهای معتبر با کیفیت عالی را بشناسید
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8" dir="rtl">
            @foreach ($brands as $brand)
                <div class="bg-white border border-gray-200 shadow-sm rounded-xl overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <!-- Brand Image -->
                    <div class="h-40 bg-gray-50 flex items-center justify-center p-6">
                        <img src="{{ $brand['image'] }}"
                             alt="{{ $brand['name'] }}"
                             class="object-contain h-full w-full transition-transform duration-300 group-hover:scale-105">
                    </div>

                    <!-- Brand Info -->
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-semibold text-gray-800 mb-1">{{ $brand['name'] }}</h3>
                        <p class="text-gray-500 text-sm mb-4">{{ $brand['description'] }}</p>

                        <a href="#"
                           class="inline-block bg-teal-600 hover:bg-teal-700 text-white font-medium px-4 py-2 rounded-md transition duration-300">
                            مشاهده محصولات
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
