<div>
    <a href="{{ route('cart.index') }}" class="relative text-gray-700 hover:text-[#0D9488]" wire:navigate>
    <i class="fa fa-shopping-cart text-xl"></i>
    <span class="absolute -top-2 -right-2 bg-[#0D9488] text-white text-xs w-5 h-5 flex items-center justify-center rounded-full">
        {{ $count }}
    </span>
</a>
</div>
