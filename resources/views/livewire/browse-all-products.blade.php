<div class="py-20 bg-white" dir="rtl">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- نوار بالا -->
        <div class="flex flex-col sm:flex-row justify-between items-center mb-8">
            <p class="text-gray-700 text-sm">
                نمایش 1 تا 8 از 1123 نتیجه برای <strong>"Discover"</strong>
            </p>
            <div class="flex items-center gap-2 mt-4 sm:mt-0">
                <label for="sort" class="text-sm text-gray-600">مرتب‌سازی بر اساس:</label>
                <select id="sort" class="border border-gray-300 rounded-md text-sm px-2 py-1 focus:outline-none">
                    <option>ویژه</option>
                    <option>جدیدترین</option>
                    <option>ارزان‌ترین</option>
                    <option>گران‌ترین</option>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

            <!-- فیلتر سایدبار -->
            <aside class="col-span-1 space-y-6 hidden md:block">
                <div>
                    <h4 class="font-semibold mb-2 text-gray-700">دسته‌بندی</h4>
                    <ul class="space-y-1 text-sm text-gray-600">
                        <li>الکترونیک</li>
                        <li>پوشاک</li>
                        <li>لوازم خانگی</li>
                        <li>زیبایی و سلامت</li>
                        <li>جواهرات</li>
                        <li>...</li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold mb-2 text-gray-700">قیمت</h4>
                    <div class="flex items-center gap-2">
                        <input type="number" placeholder="کمترین" class="w-1/2 border border-gray-300 rounded px-2 py-1 text-sm">
                        <input type="number" placeholder="بیشترین" class="w-1/2 border border-gray-300 rounded px-2 py-1 text-sm">
                    </div>
                    <button class="mt-2 text-xs text-teal-600 hover:underline">اعمال فیلتر</button>
                </div>

                <div>
                    <h4 class="font-semibold mb-2 text-gray-700">برندها</h4>
                    <label class="block text-sm"><input type="checkbox" class="ml-2">Samsung</label>
                    <label class="block text-sm"><input type="checkbox" class="ml-2">Dell</label>
                    <label class="block text-sm"><input type="checkbox" class="ml-2">Nike</label>
                </div>
            </aside>

            <!-- شبکه محصولات -->
            <section class="col-span-4 md:col-span-3 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- محصول -->
                <div class="bg-white border rounded-lg p-4 shadow hover:shadow-lg transition group">
                    <div class="relative mb-4">
                        <img src="https://via.placeholder.com/300x300?text=Galaxy+A56" alt="Samsung" class="mx-auto h-48 object-contain">
                        <span class="absolute top-2 right-2 bg-red-500 text-white text-xs px-2 py-0.5 rounded">4.53%</span>
                        <span class="absolute top-2 left-2 bg-red-600 text-white text-xs px-2 py-0.5 rounded">ویژه</span>
                    </div>
                    <h3 class="text-gray-800 font-semibold text-sm text-center mb-2">Samsung Galaxy A56 5G</h3>
                    <div class="text-center text-sm">
                        <span class="text-gray-400 line-through ml-1">26,185</span>
                        <span class="text-teal-600 font-bold">25,000 افغانی</span>
                    </div>
                    <div class="mt-3 flex justify-center gap-2">
                        <button class="text-gray-400 hover:text-teal-600"><i class="fa fa-sync-alt"></i></button>
                        <button class="text-gray-400 hover:text-pink-600"><i class="fa fa-heart"></i></button>
                    </div>
                </div>

                <!-- محصول دیگر -->
                <div class="bg-white border rounded-lg p-4 shadow hover:shadow-lg transition group">
                    <div class="relative mb-4">
                        <img src="https://via.placeholder.com/300x300?text=Dell+XPS+13" alt="Dell XPS" class="mx-auto h-48 object-contain">
                        <span class="absolute top-2 left-2 bg-gray-700 text-white text-xs px-2 py-0.5 rounded">Used</span>
                    </div>
                    <h3 class="text-gray-800 font-semibold text-sm text-center mb-2">Dell XPS 13 - 4K Laptop</h3>
                    <div class="text-center text-sm">
                        <span class="text-gray-400 line-through ml-1">37,500</span>
                        <span class="text-teal-600 font-bold">37,000 افغانی</span>
                    </div>
                    <div class="mt-3 flex justify-center gap-2">
                        <button class="text-gray-400 hover:text-teal-600"><i class="fa fa-sync-alt"></i></button>
                        <button class="text-gray-400 hover:text-pink-600"><i class="fa fa-heart"></i></button>
                    </div>
                </div>

                <!-- محصول دیگر -->
                <div class="bg-white border rounded-lg p-4 shadow hover:shadow-lg transition group">
                    <div class="relative mb-4">
                        <img src="https://via.placeholder.com/300x300?text=Sneaker" alt="Sneaker" class="mx-auto h-48 object-contain">
                    </div>
                    <h3 class="text-gray-800 font-semibold text-sm text-center mb-2">Panorama SkyStride 27620</h3>
                    <div class="text-center text-sm">
                        <span class="text-teal-600 font-bold">1,600 افغانی</span>
                    </div>
                    <div class="mt-3 flex justify-center gap-2">
                        <button class="text-gray-400 hover:text-teal-600"><i class="fa fa-sync-alt"></i></button>
                        <button class="text-gray-400 hover:text-pink-600"><i class="fa fa-heart"></i></button>
                    </div>
                </div>

                <!-- می‌توانید محصولات بیشتری به صورت دستی اضافه کنید... -->

            </section>
        </div>
    </div>
</div>
