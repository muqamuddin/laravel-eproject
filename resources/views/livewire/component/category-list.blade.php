<section class="py-20 bg-gray-100" dir="rtl">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">⭐ Categories</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach($categories as $category)
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <div class="h-48 bg-gray-200 flex items-center justify-center">
                        <img src="{{ asset($category['image']) }}" 
                             alt="{{ $category['name'] }}" 
                             class="h-full object-contain">
                    </div>
                    <div class="p-4 text-right">
                        <h3 class="text-lg font-semibold mb-1">{{ $category['name'] }}</h3>
                        <a href="/category/{{ $category['id'] }}"
                           class="block text-teal-600 hover:text-teal-700 font-semibold transition">
                            مشاهده محصولات
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
