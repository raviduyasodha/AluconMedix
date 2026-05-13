<nav class="sticky top-0 w-full bg-white backdrop-blur-md z-[1000] border-b border-gray-200 py-4">
    <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
        <a href="{{ route('home') }}" class="text-2xl font-extrabold text-brand-blue flex items-center gap-2">
            <img src="{{ asset('images/LOGO.jpg') }}" alt="Alucon Medix Logo" class="w-32 sm:w-40 md:w-48 lg:w-56 xl:w-64 h-auto" >
        </a>
        <ul class="hidden lg:flex gap-8 items-center font-medium">
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-brand-blue-mid border-b-2 border-brand-neon pb-1' : 'hover:text-brand-blue-mid transition-colors' }}">Home</a></li>
            <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-brand-blue-mid border-b-2 border-brand-neon pb-1' : 'hover:text-brand-blue-mid transition-colors' }}">About</a></li>
            <li><a href="{{ route('history') }}" class="{{ request()->routeIs('history') ? 'text-brand-blue-mid border-b-2 border-brand-neon pb-1' : 'hover:text-brand-blue-mid transition-colors' }}">History</a></li>
            <li><a href="{{ route('products') }}" class="{{ request()->routeIs('products*') ? 'text-brand-blue-mid border-b-2 border-brand-neon pb-1' : 'hover:text-brand-blue-mid transition-colors' }}">Products</a></li>
            <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-brand-blue-mid border-b-2 border-brand-neon pb-1' : 'hover:text-brand-blue-mid transition-colors' }}">Contact</a></li>
            <li><a href="{{ route('contact') }}" class="bg-brand-blue text-white px-6 py-2.5 rounded-full font-semibold hover:bg-brand-blue-mid hover:-translate-y-0.5 transition-all shadow-md">Get a Quote</a></li>
        </ul>
        <button id="mobile-menu-button" class="lg:hidden text-brand-blue p-2 focus:outline-none" aria-label="Toggle Menu">
            <i data-lucide="menu" class="w-8 h-8" id="menu-icon"></i>
            <i data-lucide="x" class="w-8 h-8 hidden" id="close-icon"></i>
        </button>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-100 absolute right-0 top-full shadow-2xl z-[999] w-[85%] sm:w-[75%] md:w-[70%]">
        <div class="flex flex-col p-8 space-y-6">
            <a href="{{ route('home') }}" class="text-xl font-bold text-brand-blue {{ request()->routeIs('home') ? 'text-brand-blue-mid' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="text-xl font-bold text-brand-blue {{ request()->routeIs('about') ? 'text-brand-blue-mid' : '' }}">About</a>
            <a href="{{ route('history') }}" class="text-xl font-bold text-brand-blue {{ request()->routeIs('history') ? 'text-brand-blue-mid' : '' }}">History</a>
            <a href="{{ route('products') }}" class="text-xl font-bold text-brand-blue {{ request()->routeIs('products*') ? 'text-brand-blue-mid' : '' }}">Products</a>
            <a href="{{ route('contact') }}" class="text-xl font-bold text-brand-blue {{ request()->routeIs('contact') ? 'text-brand-blue-mid' : '' }}">Contact</a>
            <hr class="border-gray-100">
            <a href="{{ route('contact') }}" class="bg-brand-blue text-white px-8 py-4 rounded-2xl font-extrabold text-center shadow-lg transform active:scale-95 transition-all">
                Get a Quote
            </a>
        </div>
    </div>
</nav>

<script>
    (function() {
        const initMenu = () => {
            const btn = document.getElementById('mobile-menu-button');
            const menu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');

            if (!btn || !menu) return;

            btn.onclick = () => {
                const isHidden = menu.classList.contains('hidden');
                if (isHidden) {
                    menu.classList.remove('hidden');
                    menuIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                } else {
                    menu.classList.add('hidden');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            };

            window.addEventListener('resize', () => {
                if (window.innerWidth >= 1024) {
                    menu.classList.add('hidden');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });
        };

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initMenu);
        } else {
            initMenu();
        }
    })();
</script>
