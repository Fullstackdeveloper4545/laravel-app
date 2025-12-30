@php
    $templates = [
        ['title' => 'Template 1'],
        ['title' => 'Template 2'],
        ['title' => 'Template 3'],
        ['title' => 'Template 4'],
        ['title' => 'Template 5'],
    ];

    $testimonials = [
        ['quote' => 'From the moment we joined Dotstech, everything just worked. No downtime, lightning speed, and the support team actually cares.', 'name' => 'Carlos D.', 'title' => 'Startup Co-Founder'],
        ['quote' => 'Incredible experience! Dotstech didn’t just improve our website—they gave us peace of mind. Super reliable and always responsive.', 'name' => 'Ryan T.', 'title' => 'Digital Agency Owner'],
        ['quote' => 'Dotstech completely transformed our website performance. Uptime has been flawless, and support is always quick and helpful.', 'name' => 'Lena M.', 'title' => 'E-commerce Founder'],
        ['quote' => 'Switching to Dotstech was the best decision for our business. Our site loads faster, and we’ve seen a noticeable increase.', 'name' => 'James R.', 'title' => 'SaaS Product Manager'],
    ];
@endphp

<section class="relative overflow-hidden rounded-[32px] bg-[#0c0c0f] px-4 pt-[49px] pb-[40px] mt-0 mb-10 sm:px-6 md:py-16">
    <div class="pointer-events-none absolute inset-0 flex justify-center opacity-70 pl-4 sm:pl-12 lg:pl-[200px]">
        <img src="{{ asset('Ellipse 202.png') }}" alt="" class="h-auto w-full max-w-full object-cover lg:max-w-[1200px]">
    </div>

    <div class="relative mx-auto flex max-w-6xl flex-col items-center text-center gap-6">
        <button class="rounded-full border border-white/10 bg-white/5 px-5 py-2 text-xs font-semibold uppercase tracking-[0.2em] text-white/70">
            Testimonial
        </button>
        <h2 class="text-[28px] leading-[1.2] font-medium text-white [font-family:'Syne',sans-serif] sm:text-[34px] md:text-[42px] lg:text-[56px]">
            What Customers Say About Dotstech:<br />
            Real Feedback from the People Who Trust Us to Power
        </h2>
    </div>

    <div class="relative mt-10 testimonial-marquee">
        <div class="testimonial-marquee__track">
            @foreach (array_merge($testimonials, $testimonials) as $testimonial)
                <article class="testimonial-card">
                    <p class="text-[18px] leading-[1.6] text-white/85 [font-family:'Montserrat',sans-serif]">
                        “{{ $testimonial['quote'] }}”
                    </p>
                    <div class="mt-8">
                        <p class="text-sm font-semibold text-white">{{ $testimonial['name'] }}</p>
                        <p class="mt-1 text-xs text-white/60">{{ $testimonial['title'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>

    <div class="relative mx-auto mt-16 flex max-w-6xl flex-col items-center text-center gap-4">
        <button class="rounded-full border border-white/10 bg-white/5 px-5 py-2 text-xs font-semibold uppercase tracking-[0.2em] text-white/70">
            Template Building
        </button>
        <h3 class="text-[28px] leading-[1.2] font-medium text-white [font-family:'Syne',sans-serif] sm:text-[34px] md:text-[42px] lg:text-[52px]">
            Over 3M Sites <span class="text-white/70">Running</span>
        </h3>
    </div>

    <div class="relative mt-12 flex justify-center">
        <div class="w-full max-w-full px-4 sm:px-8 lg:px-[160px] xl:max-w-[1920px]">
            <div class="template-card w-full">
                <div class="template-card__image">
                    <img src="{{ asset('raw.png') }}" alt="Template preview" class="h-auto w-full object-cover" />
                </div>
            </div>
        </div>
    </div>
</section>
