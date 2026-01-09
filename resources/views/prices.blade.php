<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sparkle Cloud | Prices</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen overflow-x-hidden bg-[#0b0b0e] text-white antialiased">
        <div class="pricing-page w-full pt-6">
            <x-header />

            <section class="pricing-hero">
                <div class="pricing-orb pricing-orb--purple"></div>
                <div class="pricing-orb pricing-orb--blue"></div>

                <div class="pricing-hero__content">
                    <h1 class="pricing-hero__title">Pricing Plans</h1>
                    <p class="pricing-hero__subtitle">
                        No confusing subscriptions, no hidden costs, and even as your organization grows, the costs will not increase.
                        Get started for free with our 14-day trial!
                    </p>
                    <div class="pricing-toggle">
                        <button class="pricing-toggle__btn pricing-toggle__btn--active">Monthly</button>
                        <button class="pricing-toggle__btn">Annual</button>
                    </div>
                </div>

                <div class="pricing-cards">
                    <article class="pricing-card">
                        <h3>Website &amp; Webshop</h3>
                        <p class="pricing-card__desc">Lorem ipsum is simply dummy text of the printing.</p>
                        <div class="pricing-card__price">
                            <span class="pricing-card__amount">EUR 39</span>
                            <span class="pricing-card__period">/ per month</span>
                        </div>
                        <p class="pricing-card__note"  style= "margin-bottom:20px;">billed annually at EUR 409</p>
    <a href="#"
   class="btn"
   style="padding:10px 55px; margin-top:20px;">
  Start Free Trail
  <svg class="svg">
    <rect class="path"></rect>
  </svg>
</a>
       
                        <ul class="pricing-card__list">
                            <li>Up to 100 conversations/month</li>
                            <li>Basic members</li>
                            <li>Basic analytics</li>
                            <li>Email support</li>
                            <li>Standard integrations</li>
                        </ul>
                    </article>

                    <article class="pricing-card">
                        <h3>AI Agents</h3>
                        <p class="pricing-card__desc">Lorem ipsum is simply dummy text of the printing.</p>
                        <div class="pricing-card__price">
                            <span class="pricing-card__amount">EUR 169</span>
                            <span class="pricing-card__period">/ per month</span>
                        </div>
                        <p class="pricing-card__note"  style=" margin-bottom:20px;">billed annually at EUR 1899</p>
        <a href="#"
   class="btn"
   style="padding:10px 55px; margin-top:20px;">
  Start Free Trail
  <svg class="svg">
    <rect class="path"></rect>
  </svg>
</a>
        <ul class="pricing-card__list">
                            <li>Up to 1000 conversations/month</li>
                            <li>Team members</li>
                            <li>Basic analytics</li>
                            <li>Email support</li>
                            <li>Standard integrations</li>
                        </ul>
                    </article>

                    <article class="pricing-card">
                        <h3>CRM+</h3>
                        <p class="pricing-card__desc">Lorem ipsum is simply dummy text of the printing.</p>
                        <div class="pricing-card__price">
                            <span class="pricing-card__amount">EUR 199</span>
                            <span class="pricing-card__period">/ per month</span>
                        </div>
                        <p class="pricing-card__note"  style= "margin-bottom:20px;">billed annually at EUR 2199</p>
        <a href="#"
   class="btn"
   style="padding:10px 55px; margin-top:20px;">
  Start Free Trail
  <svg class="svg">
    <rect class="path"></rect>
  </svg>
</a>
      
                        <ul class="pricing-card__list">
                            <li>Up to 2000 conversations/month</li>
                            <li>Team members</li>
                            <li>Basic analytics</li>
                            <li>Email support</li>
                            <li>Standard integrations</li>
                        </ul>
                    </article>

                    <article class="pricing-card pricing-card--highlight">
                        <h3>Sparkle Complete</h3>
                        <p class="pricing-card__desc">Lorem ipsum is simply dummy text of the printing.</p>
                        <div class="pricing-card__price">
                            <span class="pricing-card__amount">EUR 369</span>
                            <span class="pricing-card__period">/ per month</span>
                        </div>
                        <p class="pricing-card__note"  style=" margin-bottom:20px;">billed annually at EUR 3999</p>
  <a href="#"
   class="btn"
   style="padding:10px 55px;">
  Start Free Trail
  <svg class="svg">
    <rect class="path"></rect>
  </svg>
</a>
      
       
                        <ul class="pricing-card__list">
                            <li>Up to 10k conversations/month</li>
                            <li>Team members</li>
                            <li>Basic analytics</li>
                            <li>Email support</li>
                            <li>Standard integrations</li>
                        </ul>
                    </article>
                </div>
            </section>

            <section class="compare">
                <div class="compare-orb compare-orb--left"></div>
                <div class="compare-orb compare-orb--right"></div>
                <div class="compare-header">
                    <h2>Compare Plans</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>

                <div class="compare-table">
                    <div class="compare-row compare-row--head">
                        <span>Feature</span>
                        <span>Website &amp; Webshop</span>
                        <span>AI Agents</span>
                        <span>CRM+</span>
                        <span class="compare-highlight">Sparkle Complete</span>
                    </div>
                    <div class="compare-row">
                        <span>Users</span>
                        <span>?</span>
                        <span>?</span>
                        <span>?</span>
                        <span class="compare-highlight">?</span>
                    </div>
                    <div class="compare-row">
                        <span>Storage</span>
                        <span>?</span>
                        <span>?</span>
                        <span>?</span>
                        <span class="compare-highlight">?</span>
                    </div>
                    <div class="compare-row">
                        <span>Credits (Cross Platform)</span>
                        <span>?</span>
                        <span>?</span>
                        <span>?</span>
                        <span class="compare-highlight">?</span>
                    </div>
                    <div class="compare-row">
                        <span>No. Products</span>
                        <span>?</span>
                        <span>?</span>
                        <span>?</span>
                        <span class="compare-highlight">?</span>
                    </div>
                    <div class="compare-row">
                        <span>No Chats</span>
                        <span>?</span>
                        <span>?</span>
                        <span>?</span>
                        <span class="compare-highlight">?</span>
                    </div>
                    <div class="compare-row">
                        <span>No Widgets</span>
                        <span>?</span>
                        <span>?</span>
                        <span>?</span>
                        <span class="compare-highlight">?</span>
                    </div>
                    <div class="compare-row">
                        <span>AI Model</span>
                        <span>?</span>
                        <span>?</span>
                        <span>?</span>
                        <span class="compare-highlight">?</span>
                    </div>
                    <div class="compare-row">
                        <span>AI Agents</span>
                        <span>?</span>
                        <span>?</span>
                        <span>?</span>
                        <span class="compare-highlight">?</span>
                    </div>
                    <div class="compare-row">
                        <span>Multi site/webshop</span>
                        <span>?</span>
                        <span>?</span>
                        <span>?</span>
                        <span class="compare-highlight">?</span>
                    </div>
                    <div class="compare-row">
                        <span>AI Tools (Chat/Text/Images/Prompts)</span>
                        <span>?</span>
                        <span>?</span>
                        <span>?</span>
                        <span class="compare-highlight">?</span>
                    </div>
                    <div class="compare-row">
                        <span>Modules</span>
                        <span>?</span>
                        <span>?</span>
                        <span>?</span>
                        <span class="compare-highlight">?</span>
                    </div>
                    <div class="compare-row">
                        <span>Social Channels</span>
                        <span>?</span>
                        <span>?</span>
                        <span>?</span>
                        <span class="compare-highlight">?</span>
                    </div>
                    <div class="compare-row">
                        <span>Development</span>
                        <span>?</span>
                        <span>?</span>
                        <span>?</span>
                        <span class="compare-highlight">?</span>
                    </div>
                    <div class="compare-row">
                        <span>Design</span>
                        <span>?</span>
                        <span>?</span>
                        <span>?</span>
                        <span class="compare-highlight">?</span>
                    </div>
                    <div class="compare-row compare-row--cta">
                        <span><button class="pill-button">Schedule a call</button></span>
                        <span><button  class="pill-button" >Schedule a call</button></span>
                        <span><button  class="pill-button" >Schedule a call</button></span>
                        <span><button  class="pill-button">Schedule a call</button></span>
                        <span class="compare-highlight"><button class="pill-button ">Schedule a call</button></span>
                    </div>
                </div>
            </section>

            <section class="pricing-help">
                <h3>Need help with plan selection?</h3>
                <div class="pricing-help__cta">
                    <button class="pill-btn pricing-help__btn  ">Our Quick Guide will help you choose the Right Plan For your needs</button>
                    <button class="pricing-help__btn pricing-help__btn--primary pill-btn">Help Me Choose The Right Plan</button>
                </div>
            </section>

          <x-faq />

        <x-container-single />

            <x-footer />
        </div>
    </body>
</html>



