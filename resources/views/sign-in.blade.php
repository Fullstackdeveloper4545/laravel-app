<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sparkle Cloud | Sign In</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap" rel="stylesheet">

        <script src="https://unpkg.com/three@0.160.0/build/three.min.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/auth-three.js'])
    </head>
    <body class="min-h-screen overflow-x-hidden bg-[#0b0b0e] text-white antialiased">
        <div class="relative min-h-screen overflow-hidden">
            <div id="three-container" class="absolute inset-0 z-0"></div>

            <div class="relative z-20 flex h-screen flex-col items-center justify-center px-4 py-14 -mt-[40px]">
                <div class="mb-7 flex items-center gap-4">
                    <span class="logo-mark auth-logo"></span>
                    <div class="text-left leading-tight">
                        <div class="text-[14px] font-semibold uppercase tracking-[0.28em] text-white">Sparkle</div>
                        <div class="text-[12px] font-medium uppercase tracking-[0.32em] text-white/70">Cloud</div>
                    </div>
                </div>

                <div class="auth-card auth-card--hero auth-float w-full max-w-[520px] rounded-[20px] px-9 py-9 text-center">
                    <h1 class="auth-title">Login</h1>
                    <p class="auth-subtitle">Welcome back! Please enter your details</p>

                    <form class="auth-form-text mt-7 space-y-4 text-left">
                        <label class="auth-input auth-input--hero flex items-center gap-4 rounded-[12px] px-5 py-[14px]">
                            <svg class="h-[22px] w-[22px] text-white/85" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M12 12.25a3.5 3.5 0 1 0-3.5-3.5 3.5 3.5 0 0 0 3.5 3.5Z" stroke="currentColor" stroke-width="1.4"/>
                                <path d="M4.75 19.25a7.25 7.25 0 0 1 14.5 0" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
                            </svg>
                            <input type="text" name="email" placeholder="Username & Email" class="auth-field auth-text w-full bg-transparent text-[15px] text-white placeholder:text-white/50 focus:outline-none" spellcheck="false" autocapitalize="off" autocorrect="off" autocomplete="off" />
                        </label>

                        <label class="auth-input auth-input--hero flex items-center gap-4 rounded-[12px] px-5 py-[14px]">
                            <button type="button" id="password-toggle" class="password-toggle" aria-label="Toggle password visibility">
                                <svg class="h-[22px] w-[22px]" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M2.5 12s3.5-6 9.5-6 9.5 6 9.5 6-3.5 6-9.5 6-9.5-6-9.5-6Z" stroke="currentColor" stroke-width="1.5"/>
                                    <circle cx="12" cy="12" r="2.8" stroke="currentColor" stroke-width="1.5"/>
                                </svg>
                            </button>
                            <input id="password-field" type="password" name="password" placeholder="Password" class="auth-field auth-text w-full bg-transparent text-[15px] text-white placeholder:text-white/45 focus:outline-none" spellcheck="false" autocapitalize="off" autocorrect="off" autocomplete="off" />
                        </label>

                        <div class="flex items-center justify-between text-[13px] text-white/80" style="margin-bottom:23px;">
                            <label class="flex items-center gap-3">
                                <input type="checkbox" class="auth-checkbox h-[18px] w-[18px] rounded-[4px] border-white/40 bg-transparent text-white focus:ring-0 focus:ring-offset-0" />
                                <span class="font-medium">Remember me</span>
                            </label>
                            <a href="#" class="font-medium text-white/80 transition hover:text-white">Forgot Password</a>
                        </div>

              <a href="#" class="btn w-full"  style="padding:14px 200px;">
 Sign in
  <svg class="svg">
    <rect class="path"></rect>
  </svg>
</a>              </form>

                </div>
                <p class="mt-6 text-center text-[12px] text-white/70">
                    Didn't have an account? <a href="{{ route('sign-up') }}" class="font-semibold text-[#AA0473]">Sign Up</a>
                </p>
            </div>
        </div>
        <script>
    document.addEventListener('DOMContentLoaded', () => {
        const field = document.getElementById('password-field');
        const toggle = document.getElementById('password-toggle');
        if (!field || !toggle) return;
        toggle.addEventListener('click', () => {
            const isHidden = field.type === 'password';
            field.type = isHidden ? 'text' : 'password';
            toggle.classList.toggle('is-active', isHidden);
        });
    });
        </script>
    </body>
</html>



