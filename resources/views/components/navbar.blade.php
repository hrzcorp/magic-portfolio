<div class="bg-[#373BD7] py-8">
  <div class="container mx-auto flex items-center justify-between">
    <div class="pb-4">
      <x-logo color="white"/>
    </div>

    <nav class="hidden lg:flex gap-16">
      @foreach($navItems as $item)
        <a href="{{ $item['url'] }}" class="text-white text-base font-normal leading-5 hover:text-blue-300">
          {{ $item['name'] }}
        </a>
      @endforeach
    </nav>

    {{-- <x-button-secondary class="hidden lg:inline-block">
      Start Build App
    </x-button-secondary> --}}

    <x-hamburger-menu class="block lg:hidden" />

    <div class="navbar-menu hidden fixed z-50 inset-0 bg-gray-800 bg-opacity-25">
      <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
      <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-[#373BD7] overflow-y-auto">
        <div class="flex items-center justify-between mb-8">
          <div class="pb-4">
            <x-logo color="white"/>
          </div>
          <button class="navbar-close">
            <svg class="h-6 w-6 text-white cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
        <ul>
          @foreach($navItems as $item)
            <li class="mb-1">
              <a href="{{ $item['url'] }}" class="block p-4 text-sm font-semibold text-white hover:bg-blue-50 hover:text-blue-600 rounded">
                {{ $item['name'] }}
              </a>
            </li>
          @endforeach
        </ul>
        <x-button-secondary>
          Start Build App
        </x-button-secondary>
      </nav>
    </div>
  </div>
</div>
