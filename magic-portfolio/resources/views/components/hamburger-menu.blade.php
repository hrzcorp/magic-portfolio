<button  {{ $attributes->merge(['class' => 'navbar-burger flex items-center text-white p-3']) }}>
    <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <title>Mobile menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
    </svg>
</button>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // open
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');
        const navLinks = document.querySelectorAll('.navbar-menu a');
    
        if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
                burger[i].addEventListener('click', function() {
                    toggleHiddenForMenus(menu);
                });
            }
        }
    
        // close
        const close = document.querySelectorAll('.navbar-close');
        const backdrop = document.querySelectorAll('.navbar-backdrop');
    
        if (close.length) {
            for (var i = 0; i < close.length; i++) {
                close[i].addEventListener('click', function() {
                    toggleHiddenForMenus(menu);
                });
            }
        }
    
        if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
                backdrop[i].addEventListener('click', function() {
                    toggleHiddenForMenus(menu);
                });
            }
        }

        // Close navbar when a link is clicked
        if (navLinks.length) {
            for (let i = 0; i < navLinks.length; i++) {
                navLinks[i].addEventListener('click', function (e) {
                    // Close the navbar
                    toggleHiddenForMenus(menu);
                });
            }
        }
    });
    function toggleHiddenForMenus(menu)
    {
        for (var j = 0; j < menu.length; j++) {
            menu[j].classList.toggle('hidden');
        }
    }
</script>
