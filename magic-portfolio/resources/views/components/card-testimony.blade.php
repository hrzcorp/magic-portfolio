@props(['profileImage', 'name','username', 'message', 'timestamp' ])
<div class="max-w-80 max-h-[332px] p-6 mx-auto bg-white bg-opacity-50 shadow-lg rounded-2xl overflow-hidden border">
    <div class="flex items-center">
        <img class="w-12 h-12 object-cover bg-black rounded-full" src="{{ $profileImage }}" alt="{{ $name }}">
        <div class="mx-3">
            <h3 class="text-xl font-bold text-[#27326F] font-satoshi">{{ $name }}</h3>
            <p class="text-[#27326F] text-sm font-outfit">{{ $username }}</p>
        </div>
    </div>
    <div class="">
        <p class="text-[#333333] font-normal text-sm max-w-[273px] my-5">{{ $message }}</p>
        <span class="text-[#828282] text-xs font-outfit">{{ $timestamp }}</span>
    </div>
</div>
