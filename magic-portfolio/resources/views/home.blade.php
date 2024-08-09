<x-layouts-app :title="$title">
    <x-navbar :navItems="$navItems" />
    

    {{-- <div class="container px-4 py-10">
        @foreach($testimonials as $testimonial)
            <x-card-testimony
                :name="$testimonial['name']"
                :username="$testimonial['username']"
                :profileImage="$testimonial['profileImage']"
                :message="$testimonial['message']"
                :timestamp="$testimonial['timestamp']"
            />
        @endforeach
    </div> --}}

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
    
    <section class="container mb-[153px]">
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

    <x-footer :footerNavItems="$footerNavItems"/>
</x-layouts-app>