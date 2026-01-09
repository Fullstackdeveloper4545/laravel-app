<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sparkle Cloud | Sign Up</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap" rel="stylesheet">

        <script src="https://unpkg.com/three@0.160.0/build/three.min.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/auth-three.js'])
    </head>
    <body class="min-h-screen overflow-x-hidden bg-[#0b0b0e] text-white antialiased">
        <div class="relative min-h-screen overflow-hidden">
            <div id="three-container" class="absolute inset-0 z-0"></div>

            <div class="relative z-20 flex min-h-screen flex-col items-center justify-center px-4 py-14 -mt-[40px]">
                <div class="mb-7 flex items-center gap-4">
                    <span class="logo-mark auth-logo"></span>
                    <div class="text-left leading-tight">
                        <div class="text-[14px] font-semibold uppercase tracking-[0.28em] text-white">Sparkle</div>
                        <div class="text-[12px] font-medium uppercase tracking-[0.32em] text-white/70">Cloud</div>
                    </div>
                </div>

                <div class="auth-card auth-card--hero auth-float w-full max-w-[520px] rounded-[20px] px-9 py-9 text-center">
                    <h1 class="auth-title">Sign up</h1>
                    <p class="auth-subtitle">Welcome! Please enter your details</p>

                    <form class="auth-form-text mt-7 space-y-4 text-left">
                        <label class="auth-input auth-input--hero flex items-center gap-4 rounded-[12px] px-5 py-[14px]">
                            <svg class="h-[22px] w-[22px] text-white/85" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M12 12.25a3.5 3.5 0 1 0-3.5-3.5 3.5 3.5 0 0 0 3.5 3.5Z" stroke="currentColor" stroke-width="1.4"/>
                                <path d="M4.75 19.25a7.25 7.25 0 0 1 14.5 0" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
                            </svg>
                            <input type="text" name="name" placeholder="Name" class="auth-field auth-text w-full bg-transparent text-[15px] text-white placeholder:text-white/50 focus:outline-none" spellcheck="false" autocapitalize="off" autocorrect="off" autocomplete="off" />
                        </label>

                        <label class="auth-input auth-input--hero flex items-center gap-4 rounded-[12px] px-5 py-[14px]">
                            <svg class="h-[22px] w-[22px] text-white/85" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M4 7.5h16v9H4z" stroke="currentColor" stroke-width="1.4" stroke-linejoin="round"/>
                                <path d="M4 7.5l8 6 8-6" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <input type="email" name="email" placeholder="Email" class="auth-field auth-text w-full bg-transparent text-[15px] text-white placeholder:text-white/50 focus:outline-none" spellcheck="false" autocapitalize="off" autocorrect="off" autocomplete="off" />
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

                                                <a href="#" class="btn-svg w-full py-2 ">
Sign Up 
  <svg class="border-svg" style="width: 100%; height: 100%;" viewBox="0 0 100 40" preserveAspectRatio="none">
    <rect
      class="border-path"
      x="1"
      y="1"
      width="98"
      height="38"
      rx="20"
      ry="20"
      pathLength="1"
    />
  </svg>
</a>
      
                    </form>

                    <p class="mt-5 text-[11px] text-white/60">
                        By clicking Sign Up you confirm that you have read and agree to our <span class="text-white/70">Terms</span> and <span class="text-white/70">Privacy Policy</span>.
                    </p>
                </div>

                <p class="mt-6 text-center text-[12px] text-white/70">
                    Already have an account? <a href="{{ route('sign-in') }}" class="font-semibold text-[#AA0473]">Sign In</a>
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

