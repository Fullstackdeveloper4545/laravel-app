<section class="relative mt-[40px] overflow-hidden pb-16 pt-0">

  <!-- THREE.JS BACKGROUND -->
  <div id="three-container" class="relative w-screen h-screen z-0">
    <!-- Three.js canvas will be injected here -->
  </div>
 
<div id="floor-gradient"></div> 

  <!-- HERO TEXT WRAPPER -->
  <div class="pointer-events-none absolute inset-0 flex justify-center mt-[170px] z-30">

    <!-- 🔮 BLUR PANEL -->
  <div
  class="absolute h-[280px] w-8/12
         bg-[#050505]
         backdrop-blur-[190px]
         shadow-[10px_10px_220px_rgba(0,0,0,0.6))]">
</div>


    <!-- 🌟 TEXT CONTENT -->
    <div class="relative z-40 flex flex-col items-center text-center py-4">
      <p class="text-[22px] font-normal leading-[1.1] text-[#b6bac4] montserrat">
        All you need is...
      </p>

      <h1 class="mt-4 text-[110px] font-medium capitalize leading-[1.1] text-white syne">
        Sparkle Cloud
      </h1>

  <a href="#" class="btn">
  Our Modules
  <svg class="svg">
    <rect class="path"></rect>
  </svg>
</a>
    </div
    >
  </div>

  <!-- DASHBOARD IMAGE -->
  <div class="relative flex justify-center mt-[-240px] z-10">
    <img
      src="{{ asset('img.png') }}"
      alt="Sparkle Cloud dashboard"
      class="w-[3020px] max-w-none rounded-[24px]"
    />
  </div>
  {{-- <img src="{{ asset('Gradient.png') }}" alt="" class="hero-floor-gradient pointer-events-none z-10" /> --}}

</section>



