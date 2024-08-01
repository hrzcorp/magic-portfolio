<x-layouts-app :title="$title">
    <x-navbar :navItems="$navItems" />
    <div class="container mx-auto py-40 grid grid-cols-2 gap-7">
        @foreach ($benefits as $benefit)
            <x-card-benefit 
                :logo="$benefit['logo']"
                :text="$benefit['text']"
            />
        @endforeach
    </div>

    <div class="container mx-auto px-4 py-10">
        @foreach($testimonials as $testimonial)
            <x-card-testimony
                :name="$testimonial['name']"
                :username="$testimonial['username']"
                :profileImage="$testimonial['profileImage']"
                :message="$testimonial['message']"
                :timestamp="$testimonial['timestamp']"
            />
        @endforeach
    </div>

    <x-footer :footerNavItems="$footerNavItems"/>
</x-layouts-app>