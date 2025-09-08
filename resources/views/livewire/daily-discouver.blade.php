   <section class="py-16">
       <div class="max-w-7xl mx-auto px-4 text-center">
           <h3 class="text-3xl font-bold mb-8">🧭 کشف روزانه</h3>
           <p class="text-gray-600 mb-6">هر روز سر بزنید و محصولات جدید منتخب تیم ما را ببینید.</p>

           <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6" dir="rtl">
               @foreach ($products as $product)
                   <div class="bg-white shadow rounded-lg overflow-hidden">
                       <div class="h-48 bg-gray-200 flex items-center justify-center">
                           <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="h-full object-contain">
                       </div>
                       <div class="p-4 text-right">
                           <h3 class="text-lg font-semibold mb-1">{{ $product['name'] }}</h3>
                           <p class="text-gray-500 mb-2">{{ $product['category'] }}</p>
                           <p class="text-teal-600 font-bold text-lg mb-4">{{ number_format($product['price'], 2) }}
                               افغانی</p>
                           <button class="w-full bg-teal-600 hover:bg-teal-700 text-white py-2 rounded-md transition">
                               افزودن به سبد خرید
                           </button>
                       </div>
                   </div>
               @endforeach
           </div>
       </div>
   </section>
