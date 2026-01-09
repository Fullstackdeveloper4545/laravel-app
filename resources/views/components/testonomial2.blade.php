<section class="relative overflow-hidden mt-8 px-4 py-12 sm:px-6 md:py-16">
    <div class="pointer-events-none absolute -left-32 top-24 h-[360px] w-[360px] rounded-full bg-[#932b7f] opacity-85 blur-[160px]"></div>
    <div class="pointer-events-none absolute -right-32 bottom-12 h-[360px] w-[360px] rounded-full bg-[#05509e] opacity-85 blur-[160px]"></div>
    <div class="relative mx-auto flex max-w-4xl flex-col items-center text-center gap-4">
        <button class="pill-button"> 
           <span class=  >Testimonials</span>
        </button>
        <h2 class="text-[28px] leading-[1.2] font-medium text-white syne sm:text-[34px] md:text-[42px] lg:text-[52px]">
            Hear What our customer are saying<br />about Sparkle
        </h2>
        <p class="max-w-2xl text-[12px] leading-[1.6] text-white/70 montserrat sm:text-[13px]">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s,
        </p>
    </div>

    @php
        $testimonialsLeft = [
            ['quote' => 'Discover has been a game-changer for our marketing team. We now automate lead follow-ups and data reporting, which used to take hours, in just minutes. I highly recommend it!', 'name' => 'Lisa Tamnia Wilson', 'title' => 'Small Business Owner'],
            ['quote' => 'Automations free up our team to focus on strategy instead of busywork. Support is fast and helpful.', 'name' => 'Carlos D.', 'title' => 'Growth Lead'],
            ['quote' => 'The dashboards give us instant clarity on pipeline health. Setup was quicker than expected.', 'name' => 'Anja Vermeer', 'title' => 'Sales Ops Manager'],
            ['quote' => 'Reliable, smooth, and user-friendly. Our sales cycle is faster and follow-up quality improved.', 'name' => 'Ryan T.', 'title' => 'Agency Owner'],
        ];
        $testimonialsRight = $testimonialsLeft;
    @endphp
        {{-- left --}}
    <div class="relative mx-auto mt-10 grid w-full max-w-[1300px] grid-cols-1 md:h-[550px] md:grid-cols-[1fr_513.3333740234375px_1fr]">
        <div class="testimonial-scroll md:h-full">
            <div class="testimonial-track">
                @foreach ([1, 2] as $loopIndex)
                    <div class="testimonial-stack" aria-hidden="{{ $loopIndex === 2 ? 'true' : 'false' }}">
                        @foreach (array_merge($testimonialsLeft, $testimonialsLeft) as $testimonial)
                            <article class="p-5 card text-white shadow-[0_5px_10px_rgba(0,0,0,0.35)]">
                                <p class="text-[12px] leading-[1.6] montserrat">
                                    {{ $testimonial['quote'] }}
                                </p>
                                <div class="mt-4 flex items-center gap-3">
                                    <img src="{{ asset('Ellipse 205.png') }}" alt="{{ $testimonial['name'] }}" class="h-8 w-8 object-cover" />
                                    <div>
                                        <p class="text-[12px] font-semibold text-white">{{ $testimonial['name'] }}</p>
                                        <p class="text-[10px] text-white/60">{{ $testimonial['title'] }}</p>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
        {{-- center --}}
        <div class="relative flex flex-col items-center justify-between gap-[10px] md:h-[550px]">
            <img src="{{ asset('2148452672 1.png') }}" alt="Customer portrait" class="h-full w-full object-contain" />
            <div class="absolute bottom-[40px] left-[110px] right-[30px] rounded-[12px] w-7/12 bg-white/10 px-4 py-3 text-center text-[11px] text-white/70 montserrat">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s,
            </div>
        </div>
      {{-- right --}}
        <div class="testimonial-scroll md:h-full">
            <div class="testimonial-track">
                @foreach ([1, 2] as $loopIndex)
                    <div class="testimonial-stack" aria-hidden="{{ $loopIndex === 2 ? 'true' : 'false' }}">
                        @foreach (array_merge($testimonialsRight, $testimonialsRight) as $testimonial)
                            <article class="card p-5 text-white/90 shadow-[0_16px_30px_rgba(0,0,0,0.35)]">
                                <p class="text-[12px] leading-[1.6] montserrat">
                                    {{ $testimonial['quote'] }}
                                </p>
                                <div class="mt-4 flex items-center gap-3">
                                    <img src="{{ asset('Ellipse 205.png') }}" alt="{{ $testimonial['name'] }}" class="h-8 w-8 rounded-full object-cover" />
                                    <div>
                                        <p class="text-[12px] font-semibold text-white">{{ $testimonial['name'] }}</p>
                                        <p class="text-[10px] text-white/70">{{ $testimonial['title'] }}</p>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
