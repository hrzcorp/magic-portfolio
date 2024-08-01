<button {{ $attributes->merge(['type' => 'button', 'class' => 'bg-white text-blue-600 px-6 py-3 rounded-[4px] hover:bg-[#e7e7e7]' ])}}>
    {{$slot}}
</button>