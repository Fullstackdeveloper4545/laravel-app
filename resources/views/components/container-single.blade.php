<section class="container-hero px-4 sm:px-6 lg:px-0">

    <div class="container-hero__orb container-hero__orb--left ml-0 md:ml-[110px]">
        <img src="{{ asset('Container.png') }}" alt="" class="h-auto w-full object-contain" />
    </div>

    <div class="container-hero__orb container-hero__orb--right mr-0 md:mr-[110px]">
        <img src="{{ asset('round.png') }}" alt="" class="h-auto w-full object-contain" />
    </div>

    <div class="container-hero__content">
        <p class="container-hero__eyebrow">Ready to grow?</p>
        <h2 class="container-hero__title text-[28px] sm:text-[34px] md:text-[40px] lg:text-[46px]">Let's look further together!</h2>
        <p class="container-hero__subtitle">
            Create freely on canvas, including in pixels, with a responsive editor that optimizes<br />designs for every screen size.
        </p>
        <div class="container-hero__actions flex flex-col items-center justify-center gap-3 sm:flex-row sm:items-center sm:justify-center">
            <button class="container-hero__btn container-hero__btn--primary">Let's Meet</button>
            <button class="container-hero__btn container-hero__btn--ghost">Sign In</button>
        </div>
    </div>

    <div class="container-hero__mockup">
        <img src="{{ asset('mockup.png') }}" alt="Product mockup" class="h-auto w-full object-contain" />
    </div>
</section>
