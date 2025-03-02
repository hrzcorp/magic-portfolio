<footer class="bg-white pt-5 md:pt-[90px] px-2 md:px-0">
    <div class="container mx-auto">
        <div class="md:flex md:gap-[172px] md:pb-10 pb-2">
            <div class="w-full md:w-[295px]">
                <x-logo/>
                <p class="pt-8 font-normal text-sm">Contact us today to discuss your project and see how we can help!</p>
            </div>
            <div class="flex justify-between md:gap-[100px] pt-[17px]">
                @foreach($footerNavItems as $section => $links)
                    <div>
                        <h3 class="text-base font-semibold mb-6">{{ $section }}</h3>
                        <ul class="font-normal text-sm space-y-2">
                            @foreach($links as $link)
                                <li><a href="{{ $link['url'] }}">{{ $link['name'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="md:flex md:justify-between items-center border-t pt-4 text-sm font-satoshi">
            <div class="flex gap-[50px] justify-between">
                <div class="flex gap-2 items-center">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.7796 11.3999L11.0413 8.91027C10.9119 8.79263 10.7418 8.72988 10.567 8.73529C10.3922 8.74069 10.2263 8.81382 10.1044 8.93923L8.49241 10.597C8.10441 10.5229 7.32438 10.2797 6.52144 9.47879C5.7185 8.67518 5.47533 7.89313 5.40325 7.50783L7.05965 5.89523C7.18522 5.77339 7.25846 5.60748 7.26386 5.4326C7.26927 5.25773 7.20642 5.08761 7.08862 4.95825L4.59964 2.22073C4.48179 2.09097 4.31799 2.01226 4.14304 2.00131C3.96808 1.99037 3.79575 2.04806 3.66265 2.16213L2.20092 3.4157C2.08447 3.53258 2.01496 3.68814 2.00558 3.85287C1.99547 4.02127 1.80282 8.01034 4.89603 11.1049C7.59449 13.8026 10.9747 14 11.9056 14C12.0416 14 12.1252 13.996 12.1474 13.9946C12.3121 13.9854 12.4676 13.9156 12.5839 13.7986L13.8368 12.3362C13.9513 12.2035 14.0094 12.0313 13.9987 11.8564C13.988 11.6815 13.9094 11.5176 13.7796 11.3999Z" fill="black"/>
                    </svg>                        
                    <span class="font-medium text-sm">+62 857 3586 8483</span>
                </div>
                <div class="flex gap-2 items-center">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.05 3H2.95C2.43283 3 1.93684 3.2173 1.57114 3.60409C1.20545 3.99089 1 4.51549 1 5.0625V11.9375C1 12.4845 1.20545 13.0091 1.57114 13.3959C1.93684 13.7827 2.43283 14 2.95 14H12.05C12.5672 14 13.0632 13.7827 13.4289 13.3959C13.7946 13.0091 14 12.4845 14 11.9375V5.0625C14 4.51549 13.7946 3.99089 13.4289 3.60409C13.0632 3.2173 12.5672 3 12.05 3ZM11.6145 4.375L7.5 7.64062L3.3855 4.375H11.6145ZM12.05 12.625H2.95C2.77761 12.625 2.61228 12.5526 2.49038 12.4236C2.36848 12.2947 2.3 12.1198 2.3 11.9375V5.23438L7.11 9.05C7.22251 9.13925 7.35936 9.1875 7.5 9.1875C7.64064 9.1875 7.77749 9.13925 7.89 9.05L12.7 5.23438V11.9375C12.7 12.1198 12.6315 12.2947 12.5096 12.4236C12.3877 12.5526 12.2224 12.625 12.05 12.625Z" fill="black"/>
                    </svg>                        
                    <span class="font-medium text-sm">info@hrzcorp.com</span>
                </div>
            </div>
            <p class="font-normal text-sm text-center">&copy; 2024 HRZ Indonesia. All rights reserved</p>
        </div>
    </div>
</footer>
