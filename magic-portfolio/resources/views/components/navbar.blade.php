<div class="bg-[#373BD7] py-[30px]">
    <div class="container mx-auto flex items-center justify-between">
      <div class="flex gap-[11px] items-end pb-4">
        <x-logo />
        <h1 class="text-white text-[32px] leading-8 tracking-[-0.035em] font-extrabold">Simple<span class="text-white text-[32px] leading-8 tracking-[-0.035em] font-normal">hire</span></h1>
      </div>
      <nav class="flex gap-[60px]">
        @foreach($navItems as $item)
            <a href="{{ $item['url'] }}" class="text-white font-normal text-base leading-5 hover:text-blue-300">
                {{ $item['name'] }}
            </a>
        @endforeach
    </nav>
      <x-button-secondary>
        Start Free Trial
      </x-button-secondary>
    </div>
</div>