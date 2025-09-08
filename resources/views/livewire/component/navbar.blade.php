 <header x-data="{ open: false }" class="bg-white shadow-sm sticky top-0 z-50">
     <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
         <!-- لوگو -->

         <h1 class="text-2xl font-bold text-teal-600">
             <a href="{{ route('home') }}" wire:navigate>
                 نام فروشگاه
             </a>
         </h1>


         <!-- ناوبری دسکتاپ -->
         <nav class="hidden md:flex space-x-6 text-sm font-medium text-gray-700">
             <a href="{{ route('products.index') }}" class="hover:text-teal-600 ml-4" wire:navigate>همه محصولات</a>
             <a href="{{ route('category.index') }}" class="hover:text-teal-600">دسته‌بندی‌ها</a>
             <a href="{{ route('brand.index') }}" class="hover:text-teal-600">برندها</a>
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
         <a href="{{ route('products.index') }}" class="block text-sm font-medium text-gray-700 hover:text-teal-600">همه
             محصولات</a>
         <a href="{{ route('category.index') }}"
             class="block text-sm font-medium text-gray-700 hover:text-teal-600">دسته‌بندی‌ها</a>
         <a href="{{ route('brand.index') }}" class="block text-sm font-medium text-gray-700 hover:text-teal-600">برندها</a>
         <a href="#" class="block text-sm font-medium text-gray-700 hover:text-teal-600">فروش ویژه</a>
         <a href="#" class="block text-sm font-medium text-gray-700 hover:text-teal-600">کشف روزانه</a>
     </div>
 </header>
