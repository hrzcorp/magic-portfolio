@props(['color' => 'black'])
@php
  $colorClass = 'text-' . $color;
@endphp
<a href="#" class="flex gap-2 items-end">
    <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <mask id="mask0_1_530" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="45" height="45">
        <rect width="45" height="45" fill="url(#pattern0_1_530)"/>
        </mask>
        <g mask="url(#mask0_1_530)">
        <rect width="45" height="45" fill="{{ $color }}"/>
        </g>
        <defs>
            <pattern id="pattern0_1_530" patternContentUnits="objectBoundingBox" width="1" height="1">
            <use xlink:href="#image0_1_530" transform="scale(0.00195312)"/>
            </pattern>
            <image id="image0_1_530" width="512" height="512" xlink:href="data:image/png;base64,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"/>
        </defs>
    </svg>
    <h1 class="{{$colorClass}} text-[32px] font-extrabold tracking-[-0.035em] leading-8">
      Simple<span class="font-normal">hire</span>
    </h1>
  </a>