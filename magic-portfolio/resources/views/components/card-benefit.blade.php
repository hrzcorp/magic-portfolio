@props(['logo', 'text'])

<div style="box-shadow: 10px 10px 40px 0px rgba(34, 46, 111, 0.1);" class="max-w-[532px] px-8 py-9 flex items-center justify-between p-4 bg-white rounded-xl border border-[#E1EDED]">
    <div class="flex items-center">
        <div class="w-[52px] h-[52px]">
            <img src="{{ $logo }}" alt="">
        </div>
        <p class="font-satoshi text-lg font-bold ml-6 max-w-80">{{ $text }}</p>
    </div>
    <button class="hover:text-gray-500">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
    </button>
</div>
