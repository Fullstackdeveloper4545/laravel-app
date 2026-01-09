<header class="site-header relative z-[1100] flex flex-wrap items-center justify-between gap-4 px-4 md:px-8 lg:px-[30px]">
    <div class="order-1 flex items-center gap-3">
        <a href="{{ route('home') }}" aria-label="Go to home">
            <img src="{{ asset('Frame.svg') }}" alt="Sparkle Cloud" class="h-auto w-full max-w-full object-contain sm:max-w-[200px] md:max-w-[161px]">
        </a>
    </div>

    <nav class="hidden md:flex md:absolute md:left-1/2 md:transform md:-translate-x-1/2">
        <div class="nav-pill">
            <div class="product-dropdown">
                <button type="button" class="inline-flex items-center gap-1.5 transition-colors duration-200">
                    <span>Products</span>
                    <svg class="h-3 w-3 text-[#8a8f9b]" viewBox="0 0 12 12" fill="none" aria-hidden="true">
                        <path d="M3 4.5L6 7.5L9 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="dropdown-menu">
                    <a href="#">Website &amp; webshop</a>
                    <a href="#">AI Agents</a>
                    <a href="{{ route('crm') }}">CRM and more</a>
                    <a href="#">Sparkle Suite</a>
                    <a href="#">AI Automation</a>
                </div>
            </div>
            <a href="{{ route('prices') }}">Prices</a>
            <a href="#">Custom</a>
            <a href="#">Branches</a>
            <a href="#">Cases</a>
            <a href="{{ route('contact') }}">Contact</a> 
        </div>
    </nav>

    <!-- Mobile nav: checkbox toggle + button + menu -->
    <!-- Input must be sibling of .mobile-nav for CSS-only toggle -->
    <input id="nav-toggle" type="checkbox" class="hidden" />
    <div class="order-2 ml-auto flex items-center justify-center md:hidden">
        <label for="nav-toggle" class="inline-flex items-center justify-center h-10 w-10 rounded-[10px] bg-[#1a1b20] text-[#d4d6dc]">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 6h18M3 12h18M3 18h18" />
            </svg>
        </label>
    </div>

    <!-- mobile menu panel (hidden by default, shown when #nav-toggle checked) -->
    <div class="mobile-nav md:hidden fixed left-0 right-0 top-[64px] bg-[#0b0b0e] text-[#d2d5dd] p-4 shadow-lg" aria-hidden="true">
        <div class="flex w-full flex-col gap-2 items-center text-center">
            <div class="w-full">
                <a href="#" class="px-4 py-2 inline-flex items-center gap-2 text-[#d2d5dd]" data-mobile-products-toggle aria-expanded="false">
                    <span>Products</span>
                    <svg class="h-3.5 w-3.5 text-[#8a8f9b]" viewBox="0 0 12 12" fill="none" aria-hidden="true">
                        <path d="M3 4.5L6 7.5L9 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <div class="hidden flex-col gap-1 pt-1 text-sm text-[#d2d5dd]" data-mobile-products-submenu>
                    <a href="#" class="px-4 py-1 text-left font-[500] text-[16px] leading-[100%] tracking-[-0.32px] align-middle" style="font-family: 'Montserrat', sans-serif;">Website &amp; webshop</a>
                    <a href="#" class="px-4 py-1 text-left font-[500] text-[16px] leading-[100%] tracking-[-0.32px] align-middle" style="font-family: 'Montserrat', sans-serif;">AI Agents</a>
                    <a href="{{ route('crm') }}" class="px-4 py-1 text-left font-[500] text-[16px] leading-[100%] tracking-[-0.32px] align-middle" style="font-family: 'Montserrat', sans-serif;">CRM and more</a>
                    <a href="#" class="px-4 py-1 text-left font-[500] text-[16px] leading-[100%] tracking-[-0.32px] align-middle" style="font-family: 'Montserrat', sans-serif;">Sparkle Suite</a>
                    <a href="#" class="px-4 py-1 text-left font-[500] text-[16px] leading-[100%] tracking-[-0.32px] align-middle" style="font-family: 'Montserrat', sans-serif;">AI Automation</a>
                </div>
            </div>
            <a href="{{ route('prices') }}" class="px-4 py-2">Prices</a>
            <a href="#" class="px-4 py-2">Custom</a>
            <a href="#" class="px-4 py-2">Branches</a>
            <a href="#" class="px-4 py-2">Cases</a>
            <a href="{{ route('contact') }}" class="px-4 py-2">Contact</a>
        </div>
    </div>

    <div class="order-3 flex w-full flex-wrap items-center justify-center gap-3 md:w-auto md:justify-end">
        <button class="h-10 w-full max-w-full rounded-[30px] bg-white px-4  text-[14px] font-semibold text-[#0b0b0e] shadow-[0_12px_20px_rgba(0,0,0,0.35)] sm:w-auto sm:max-w-[160px]">
            Let's Meet
        </button>
        <a href="{{ route('sign-in') }}" class="btn">
  Sign in
  <svg class="svg">
    <rect class="path"></rect>
  </svg>
</a>
    </div>
</header>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toggle = document.querySelector('[data-mobile-products-toggle]');
        const submenu = document.querySelector('[data-mobile-products-submenu]');
        if (toggle && submenu) {
            toggle.addEventListener('click', (e) => {
                e.preventDefault();
                const isOpen = !submenu.classList.contains('hidden');
                submenu.classList.toggle('hidden', isOpen);
                toggle.setAttribute('aria-expanded', (!isOpen).toString());
                const icon = toggle.querySelector('svg');
                if (icon) {
                    icon.style.transform = isOpen ? 'rotate(0deg)' : 'rotate(180deg)';
                }
            }, { passive: false });
        }
    });
</script>
@endpush



