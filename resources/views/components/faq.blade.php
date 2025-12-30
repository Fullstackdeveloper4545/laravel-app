<section class="relative mt-16 rounded-[32px] bg-[#0b0b0e] px-4 py-12 sm:px-6 md:py-16">
    <div class="faq-grid grid grid-cols-1 gap-10 lg:grid-cols-2">
        <div class="faq-intro">
            <button class="faq-pill">Frequently Asked Questions</button>
            <h2 class="faq-heading text-[28px] leading-[1.2] sm:text-[34px] md:text-[38px] lg:text-[42px]">
                Your questions, answered honestly, clearly, &amp; with a touch of personality.
            </h2>
            <button class="faq-cta">Explore all</button>
        </div>

        <div class="faq-list">
            @php
                $faqs = [
                    'What Industries Can Benefit From Your AI ?',
                    'Is Your Platform Customizable ?',
                    'Do You Provide Training For Using The Software ?',
                    'How Quickly Can I Implement Your AI Solutions?',
                    'Do You Offer Customer Support ?',
                ];
                $answer =
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque volutpat eros nec sapien bibendum, id tincidunt nisi efficitur. Praesent sodales suscipit sapien, nec dictum velit egestas id.';
            @endphp

            @foreach ($faqs as $question)
                <div class="faq-item {{ $loop->last ? 'is-open' : '' }}">
                    <div class="faq-item__header">
                        <p class="faq-item__question">{{ $question }}</p>
                        <span class="faq-item__chevron">⌄</span>
                    </div>
                    <div class="faq-item__body">
                        <p>{{ $answer }}</p>
                        <p class="mt-2">{{ $answer }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
