<x-layouts-app :title="$title">
    <x-navbar :navItems="$navItems" />

    <section class="relative bg-[#373BD7] text-white overflow-hidden border-0 rounded-b-3xl lg:rounded-b-[120px]">
        <div class="container px-6 py-12 lg:px-0 lg:pt-24 pb-36 lg:pb-[302px]">
            <div class="flex flex-col items-center gap-12 lg:flex-row">
                <div class="flex-1">
                    <h1 class="mb-8 text-4xl font-bold tracking-tight xl:leading-[4.5rem] font-satoshi lg:text-5xl xl:text-6xl">
                        We will handle the recruitment process for you
                    </h1>
                    <p class="mb-12 text-lg font-normal xl:leading-8 lg:text-xl max-w-[486px]">
                        We make the hiring process more effective and more efficient.
                    </p>
                    <x-button-secondary class="flex gap-[10px]">
                        Contact Us and Start Recruitment
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.3 17.275C13.1 17.075 13.004 16.8334 13.012 16.55C13.02 16.2667 13.1243 16.025 13.325 15.825L16.15 13H5C4.71667 13 4.479 12.904 4.287 12.712C4.095 12.52 3.99934 12.2827 4 12C4 11.7167 4.096 11.479 4.288 11.287C4.48 11.095 4.71734 10.9994 5 11H16.15L13.3 8.15005C13.1 7.95005 13 7.71238 13 7.43705C13 7.16172 13.1 6.92438 13.3 6.72505C13.5 6.52505 13.7377 6.42505 14.013 6.42505C14.2883 6.42505 14.5257 6.52505 14.725 6.72505L19.3 11.3C19.4 11.4 19.471 11.5084 19.513 11.625C19.555 11.7417 19.5757 11.8667 19.575 12C19.575 12.1334 19.554 12.2584 19.512 12.375C19.47 12.4917 19.3993 12.6 19.3 12.7L14.7 17.3C14.5167 17.4834 14.2877 17.575 14.013 17.575C13.7383 17.575 13.5007 17.475 13.3 17.275Z" fill="#373BD7"/>
                        </svg>                            
                    </x-button-secondary>
                </div>
                <div class="flex justify-end flex-1">
                    <img src="images/hero-images.png" alt="Interaction Image" class="h-auto">
                </div>
            </div>
        </div>
    </section>


    <x-sponsor/>

    <section class="container px-6 pb-24 relative overflow-hidden border-0">
        <div class="flex flex-col items-center lg:gap-[104px] gap-12 lg:flex-row">
            <div class="max-w-[483px] pt-14">
                <h1 class="mb-6 text-4xl font-bold tracking-tight xl:leading-[4.5rem] font-satoshi lg:text-5xl xl:text-6xl">
                    Who are we and what we do
                </h1>
                <p class="text-lg font-normal xl:leading-8 lg:text-xl text-[#737373]">
                    We understand recruiting is a difficult and time-consuming process. Our service offers integrated solutions that combine the power of video, tools, workflows, analytics, and feedback collaboration to optimize the hiring process.
                </p>
            </div>
            <div>
                <div class="lg:absolute top-0 right-0 h-auto z-0">
                    <img src="images/decor-blue.png" alt="Interaction Image">
                </div>
                <div class="flex justify-center hp:justify-end bottom-2 xl:right-64 lg:z-10 hp:absolute">
                    <x-chart/>
                </div>
            </div>
        </div>
    </section>
    
    <section class="container flex justify-center bg-[#373BD7] px-6 py-6 md:px-[118px] md:py-[109px] rounded-3xl md:rounded-[120px] my-5 sm:my-24">
        <h1 class="text-3xl font-bold tracking-tight xl:leading-[4.5rem] text-center text-white font-satoshi max-w-[915px] lg:text-6xl">
            How does the recruitment process look like?
        </h1>
    </section>
    
    <section class="container px-6 mb-[153px]">
        <h1 class="mb-[113px] text-3xl font-bold tracking-tight xl:leading-[4.5rem] font-satoshi max-w-screen-md lg:text-6xl">
            What you get with Allhire recruitment process?
        </h1>
        <div class="grid lg:grid-cols-2 gap-y-11">
            @foreach ($benefits as $benefit)
                <div class="{{ $loop->index % 2 == 0 ? 'mr-auto' : 'ml-auto' }}">
                    <x-card-benefit 
                        :logo="$benefit['logo']"
                        :text="$benefit['text']"
                    />
                </div>
            @endforeach
        </div>
    </section>

    <section class="bg-[#F8FAFC] px-6 pt-[90px] pb-[78px] rounded-[120px]">
        <div class="container relative">
            <h1 class="font-satoshi font-bold text-center max-w-2xl mx-auto text-3xl tracking-tight xl:leading-[4.5rem] lg:text-6xl">What our client think about us?</h1>
            <div class="slider-testimonial my-16">
                @foreach($testimonials as $testimonial)
                <div>
                    <x-card-testimony class="slide"
                        :name="$testimonial['name']"
                        :username="$testimonial['username']"
                        :profileImage="$testimonial['profileImage']"
                        :message="$testimonial['message']"
                        :timestamp="$testimonial['timestamp']"
                    />
                </div>
                @endforeach
            </div>

            <div class="absolute -top-[90px] right-24">
                <svg width="680" height="680" viewBox="0 0 680 680" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.226198 679.453C89.4235 679.453 177.747 661.884 260.155 627.75C342.562 593.615 417.44 543.584 480.512 480.512C543.584 417.44 593.615 342.562 627.749 260.155C661.884 177.747 679.452 89.4236 679.452 0.226318L467.635 0.226309C467.635 61.6072 455.545 122.387 432.055 179.096C408.566 235.804 374.137 287.331 330.734 330.734C287.331 374.137 235.804 408.566 179.096 432.055C122.387 455.545 61.6071 467.635 0.226207 467.635L0.226198 679.453Z" fill="url(#paint0_linear_1_756)"/>
                    <defs>
                    <linearGradient id="paint0_linear_1_756" x1="596.726" y1="0.226296" x2="126.175" y2="490.529" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#373BD7" stop-opacity="0.13"/>
                    <stop offset="1" stop-color="white" stop-opacity="0"/>
                    </linearGradient>
                    </defs>
                </svg>                  
            </div>

            <div class="absolute -top-[90px] right-[308px]">
                <svg width="680" height="680" viewBox="0 0 680 680" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.226198 679.453C89.4235 679.453 177.747 661.884 260.155 627.75C342.562 593.615 417.44 543.584 480.512 480.512C543.584 417.44 593.615 342.562 627.749 260.155C661.884 177.747 679.452 89.4236 679.452 0.226318L467.635 0.226309C467.635 61.6072 455.545 122.387 432.055 179.096C408.566 235.804 374.137 287.331 330.734 330.734C287.331 374.137 235.804 408.566 179.096 432.055C122.387 455.545 61.6071 467.635 0.226207 467.635L0.226198 679.453Z" fill="url(#paint0_linear_1_755)"/>
                    <defs>
                    <linearGradient id="paint0_linear_1_755" x1="596.726" y1="0.226296" x2="126.175" y2="490.529" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#373BD7" stop-opacity="0.13"/>
                    <stop offset="1" stop-color="white" stop-opacity="0"/>
                    </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var slider = tns({
                container: '.slider-testimonial',
                items: 3,
                speed: 300,
                autoplay: true,
                autoplayHoverPause: true,
                autoplayTimeout: 3500,
                swipeAngle: false,
                autoplayButtonOutput: false,
                controls: false,
                responsive: {
                    0: {
                        items: 1,
                    },
                    640: {
                        items: 2,
                    },
                    1024: {
                        items: 3,
                    }
                }
            });
        });
    </script>

    <x-footer :footerNavItems="$footerNavItems"/>
</x-layouts-app>
