<x-layouts-app :title="$title">
    <x-navbar :navItems="$navItems" />

    @if (session('success'))
    <div id="flash-message" class="fixed top-4 right-4 bg-green-500 text-white px-4 py-3 rounded shadow-lg transition-opacity duration-300 ease-in-out">
        <p>{{ session('success') }}</p>
    </div>
    @endif

    @if (session('error'))
    <div id="flash-message" class="fixed top-4 right-4 bg-red-500 text-white px-4 py-3 rounded shadow-lg transition-opacity duration-300 ease-in-out">
        <p>{{ session('error') }}</p>
    </div>
    @endif

    <section class="relative bg-[#373BD7] text-white overflow-hidden border-0 rounded-b-3xl lg:rounded-b-[120px]">
        <div class="container px-6 py-12 lg:px-0 lg:pt-6 pb-12 lg:pb-12">
            <div class="flex flex-col items-center gap-12 lg:flex-row">
                <div class="flex-1 justify-items-center">
                    <h1 class="mb-8 text-4xl text-center font-bold tracking-tight xl:leading-[4.5rem] font-satoshi lg:text-5xl xl:text-6xl">
                        Welcome to HRZ Indonesia!
                    </h1>
                    <p class="mb-12 text-lg text-center font-normal xl:leading-8 lg:text-xl max-w-[486px]">
                        Providing comprehensive website and software solutions for your business needs.
                    </p>
                    <a href="#contact-us" id="scroll-link">
                        <x-button-secondary class="flex gap-[10px]">
                            Contact Us and Start Build App!
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.3 17.275C13.1 17.075 13.004 16.8334 13.012 16.55C13.02 16.2667 13.1243 16.025 13.325 15.825L16.15 13H5C4.71667 13 4.479 12.904 4.287 12.712C4.095 12.52 3.99934 12.2827 4 12C4 11.7167 4.096 11.479 4.288 11.287C4.48 11.095 4.71734 10.9994 5 11H16.15L13.3 8.15005C13.1 7.95005 13 7.71238 13 7.43705C13 7.16172 13.1 6.92438 13.3 6.72505C13.5 6.52505 13.7377 6.42505 14.013 6.42505C14.2883 6.42505 14.5257 6.52505 14.725 6.72505L19.3 11.3C19.4 11.4 19.471 11.5084 19.513 11.625C19.555 11.7417 19.5757 11.8667 19.575 12C19.575 12.1334 19.554 12.2584 19.512 12.375C19.47 12.4917 19.3993 12.6 19.3 12.7L14.7 17.3C14.5167 17.4834 14.2877 17.575 14.013 17.575C13.7383 17.575 13.5007 17.475 13.3 17.275Z" fill="#373BD7"/>
                            </svg>                            
                        </x-button-secondary>
                    </a>
                </div>
                <!-- <div class="flex justify-end flex-1">
                    <img src="images/hero-images.png" alt="Interaction Image" class="h-auto">
                </div> -->
            </div>
        </div>
    </section>

    {{-- <x-sponsor/> --}}

    <section class="container px-6 pb-24 mt-6 relative overflow-hidden border-0" id="about">
        <div class="flex flex-col items-center lg:flex-row">
            <div class="max-w-[1200px] pt-14 text-center">
                <h1 class="mb-6 text-4xl font-bold tracking-tight xl:leading-[4.5rem] font-satoshi lg:text-5xl xl:text-6xl">
                    Who are we and what we do
                </h1>
                <p class="text-lg font-normal xl:leading-8 lg:text-xl text-[#737373]">
                    HRZ Indonesia is a leading provider of web and software solutions designed to help businesses thrive in today's digital landscape. Our team of experts specializes in creating custom solutions tailored to meet your unique requirements.
                </p>
            </div>
            <div>
                <div class="lg:absolute top-0 right-0 h-auto z-0">
                    <!-- <img src="images/decor-blue.png" alt="Interaction Image"> -->
                </div>
                <div class="flex justify-center hp:justify-end bottom-2 xl:right-64 lg:z-10 hp:absolute">
                    <!-- <x-chart/> -->
                </div>
            </div>
        </div>
    </section>

    <section id="autoplay_wrapper" class="container relative">
        <div class="slider-workfolio py-10" id="autoplay">
            @foreach ($workfolios as $workfolio )
            <div>
                <a href="{{$workfolio['url']}}" class="max-w-sm h-[430px] mx-4 shadow-lg rounded-lg overflow-hidden block">
                    <img src="{{$workfolio['image']}}" alt="Fullstack Developer" class="w-full h-56 object-cover object-center" />
                    <div class="p-4">
                    <h2 class="text-2xl font-bold text-[#373BD7]">{{$workfolio['title']}}</h2>
                    <p class=" mt-2">{{$workfolio['description']}}</p>
                    <div class="mt-4">
                        @foreach ($workfolio['tag'] as $i => $tag)
                            @if ($i <= 0)
                                <span class="bg-[#373BD7] text-white px-2 py-1 rounded-full text-sm">{{ $tag }}</span>
                            @else
                                <span class="border border-[#373BD7]  px-2 py-1 rounded-full text-sm ml-2">{{ $tag }}</span>
                            @endif
                        @endforeach
                    </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>

    <section class="container flex justify-center bg-[#373BD7] px-6 py-6 md:px-[118px] md:py-[109px] rounded-3xl md:rounded-[120px] my-10 sm:my-24">
        <h1 class="text-3xl font-bold tracking-tight xl:leading-[4.5rem] text-center text-white font-satoshi max-w-[915px] lg:text-6xl">
            {{-- How does the development process look like? --}}
            What you get with HRZ Indonesia solutions?
        </h1>
    </section>
    
    <section class="container px-6 mb-[153px]">
        {{-- <h1 class="mb-[113px] text-3xl font-bold tracking-tight xl:leading-[4.5rem] font-satoshi max-w-screen-md lg:text-6xl">
            What you get with HRZ Indonesia solutions?
        </h1> --}}
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

    <section class="bg-[#F8FAFC] relative z-[2] px-6 pt-[90px] pb-[78px] rounded-3xl md:rounded-[120px]">
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

    <section class="relative -mt-32 bg-[#373BD7] text-white px-6 rounded-b-3xl lg:rounded-b-[120px]" id="contact-us">
        <div class="container flex pt-56 pb-32 flex-col lg:flex-row justify-between items-center">
          <div class="mb-8 max-w-[482px]">
            <h2 class="text-xl font-medium">Contact us</h2>
            <h3 class="text-2xl md:text-5xl font-satoshi font-bold xl:leading-[4rem] pt-6">Ready to take your business to the next level?</h3>
            <p class="my-7 text-sm md:text-base font-medium">
                Contact us today to discuss your project and <br>See how we can help!
            </p>
            <div class="hp:flex items-center justify-between">
              <a href="tel:+6285735868483">
                <p class="flex items-center gap-[14px] text-sm md:text-base">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.2638 16.7644L16.2371 13.1032C16.0467 12.9302 15.7966 12.8379 15.5395 12.8459C15.2824 12.8538 15.0384 12.9614 14.8591 13.1458L12.4886 15.5836C11.9181 15.4747 10.7709 15.1171 9.59015 13.9393C8.40936 12.7575 8.05175 11.6074 7.94576 11.0408L10.3816 8.66932C10.5663 8.49015 10.674 8.24616 10.682 7.98899C10.6899 7.73182 10.5975 7.48164 10.4242 7.29141L6.76398 3.26565C6.59066 3.07482 6.34979 2.95907 6.0925 2.94297C5.83522 2.92688 5.58179 3.01172 5.38605 3.17947L3.23646 5.02296C3.06519 5.19484 2.96297 5.4236 2.94918 5.66585C2.93432 5.9135 2.65101 11.7798 7.19984 16.3305C11.1682 20.2979 16.139 20.5881 17.508 20.5881C17.7081 20.5881 17.8309 20.5822 17.8636 20.5802C18.1058 20.5666 18.3345 20.4639 18.5055 20.2919L20.3481 18.1413C20.5165 17.9462 20.6019 17.693 20.5862 17.4357C20.5705 17.1785 20.4548 16.9376 20.2638 16.7644Z" fill="white"/>
                    </svg>                    
                    +62 857 3586 8483
                </p>
              </a>
              <a href="mailto:info@hrzcorp.com">
                <p class="flex items-center gap-[14px] text-sm md:text-base">
                    <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.6031 0.411743H3.2208C2.46025 0.411743 1.73085 0.7313 1.19306 1.30011C0.655276 1.86893 0.353149 2.64041 0.353149 3.44483V13.5551C0.353149 14.3596 0.655276 15.131 1.19306 15.6998C1.73085 16.2687 2.46025 16.5882 3.2208 16.5882H16.6031C17.3637 16.5882 18.0931 16.2687 18.6309 15.6998C19.1687 15.131 19.4708 14.3596 19.4708 13.5551V3.44483C19.4708 2.64041 19.1687 1.86893 18.6309 1.30011C18.0931 0.7313 17.3637 0.411743 16.6031 0.411743ZM15.9627 2.4338L9.91197 7.23619L3.86124 2.4338H15.9627ZM16.6031 14.5662H3.2208C2.96728 14.5662 2.72415 14.4596 2.54489 14.27C2.36562 14.0804 2.26491 13.8233 2.26491 13.5551V3.69759L9.33844 9.3088C9.5039 9.44006 9.70515 9.51101 9.91197 9.51101C10.1188 9.51101 10.32 9.44006 10.4855 9.3088L17.559 3.69759V13.5551C17.559 13.8233 17.4583 14.0804 17.2791 14.27C17.0998 14.4596 16.8567 14.5662 16.6031 14.5662Z" fill="white"/>
                    </svg>                    
                    info@hrzcorp.com
                </p>
              </a>
            </div>
          </div>
      
          <div class="md:w-[428px] w-full text-black">
            <form action="/send-registration-form" method="POST">
              @csrf
              <div class="mb-5">
                <input id="name" name="name" type="text" placeholder="Your Name" class="w-full p-2 md:p-5 border rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-600" required/>
              </div>
              <div class="mb-5">
                <input id="email" name="email" type="email" placeholder="me@user.com" class="w-full p-2 md:p-5 border rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-600" required/>
              </div>
              <div class="mb-5">
                <select id="title" name="title" placeholder="your title" class="w-full p-2 md:p-5 border rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                    <option disabled selected>Your Title</option>
                    <option>Mr</option>
                    <option>Mrs</option>
                    <option>Ms</option>
                    <option>Dr</option>
                </select>
              </div>
              <div class="mb-5">
                <textarea id="message" name="message" placeholder="Message" class="w-full p-2 md:p-5 border rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-600 h-24" required></textarea>
              </div>
              <button type="submit" class="w-full flex items-center gap-4 justify-center bg-[#3FB7BC] text-white font-bold py-2 md:py-4 px-4 md:px-6 rounded-xl hover:from-teal-500 hover:to-blue-700 transition-all duration-300">
                Send
                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.3 11.275C9.1 11.075 9.004 10.8334 9.012 10.55C9.02 10.2667 9.12434 10.025 9.325 9.82505L12.15 7.00005H1C0.71667 7.00005 0.479004 6.90405 0.287004 6.71205C0.0950036 6.52005 -0.000663206 6.28272 3.4602e-06 6.00005C3.4602e-06 5.71672 0.0960036 5.47905 0.288004 5.28705C0.480004 5.09505 0.717337 4.99938 1 5.00005H12.15L9.3 2.15005C9.1 1.95005 9 1.71238 9 1.43705C9 1.16172 9.1 0.924382 9.3 0.725049C9.5 0.525049 9.73767 0.425049 10.013 0.425049C10.2883 0.425049 10.5257 0.525049 10.725 0.725049L15.3 5.30005C15.4 5.40005 15.471 5.50838 15.513 5.62505C15.555 5.74172 15.5757 5.86672 15.575 6.00005C15.575 6.13338 15.554 6.25838 15.512 6.37505C15.47 6.49172 15.3993 6.60005 15.3 6.70005L10.7 11.3C10.5167 11.4834 10.2877 11.575 10.013 11.575C9.73834 11.575 9.50067 11.475 9.3 11.275Z" fill="white"/>
                </svg>                    
              </button>
            </form>
          </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        // Slider untuk testimonial
        var testimonialSlider = tns({
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

        // Slider untuk workfolio
        var workfolioSlider = tns({
            "container": "#autoplay",
            "items": 3,
            "speed": 300,
            "autoplay": true,
            "autoplayHoverPause": true,
            "autoplayTimeout": 3500,
            "swipeAngle": false,
            autoplayButtonOutput: false,
            controls: false,
            nav: true,
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
    document.addEventListener('DOMContentLoaded', function () {
        const flashMessage = document.getElementById('flash-message');
        if (flashMessage) {
            setTimeout(() => {
                flashMessage.classList.add('opacity-0'); // Fade out
                setTimeout(() => flashMessage.remove(), 300); // Remove from DOM after fade out
            }, 5000); // Show for 3 seconds
        }
    });
    </script>

    <x-footer :footerNavItems="$footerNavItems"/>
</x-layouts-app>
