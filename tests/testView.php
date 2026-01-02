<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alberto Cancela</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/png" href="../assets/images/icons/aboutme.png">
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
</head>
<style>
    .font-times {
        font-family: "Times New Roman", Times, serif;
    }
    .blink {
        animation: blink 0.6s steps(2, start) infinite;
    }

    @keyframes blink {
        to { visibility: hidden; }
    }

    .animate-progress {
        width: 0%;
        animation: progress 1.6s ease-out forwards;
    }

    @keyframes progress {
        from { width: 0%; }
        to { width: 100%; }
    }

    /* Pixel feel */
    #retro-loader * {
        image-rendering: pixelated;
        font-smooth: never;
        -webkit-font-smoothing: none;
    }
    body {
    font-family: "VT323", monospace !important;
    font-weight: 700; /* fuerza bold */
    background: #e5e7eb;
}
</style>

<body class="p-10">
<section class="w-full h-full font-mono text-[#1f1f1f]">

  <!-- Top mini bar: back + title + github -->
  <div class="flex items-center justify-between mb-3">
    <div class="flex items-center gap-3">
      
      <!-- Back button -->
      <i onclick="showView(this, 'HIDE_ID', 'SHOW_ID')"
        class="bi bi-arrow-bar-left text-2xl font-bold hover:cursor-pointer"></i>

      <div class="flex flex-col leading-tight">
        <h2 class="text-lg font-bold">Nombre del Proyecto</h2>
        <p class="text-xs text-[#4b5563]">Para: Cliente / Empresa</p>
      </div>
    </div>

    <!-- Github -->
    <a href="https://github.com/tu-user/tu-repo" target="_blank"
      class="flex items-center gap-2 px-3 py-1 border-2 border-[#1f1f1f] bg-[#e9eaec] hover:bg-[#d9dadc] transition">
      <i class="bi bi-github text-lg"></i>
      <span class="text-xs font-bold">GitHub</span>
    </a>
  </div>

  <!-- Main grid -->
  <div class="grid grid-cols-12 gap-4 h-[calc(100%-52px)]">

    <!-- LEFT: Images -->
    <div class="col-span-7 flex flex-col">

      <!-- Main image -->
      <div class="flex-1 border-2 border-[#1f1f1f] bg-[#f3f4f6] overflow-hidden relative shadow-[3px_3px_0_0_#1f1f1f]">
        <img
          src="https://via.placeholder.com/900x600.png?text=Project+Screenshot"
          class="w-full h-full object-cover"
          alt="Project screenshot"
        />
        
        <span class="absolute bottom-2 left-2 text-[10px] px-2 py-1 border-2 border-[#1f1f1f] bg-[#e9eaec]">
          screenshot_01.png
        </span>
      </div>

      <!-- Thumbnails -->
      <div class="mt-3 grid grid-cols-4 gap-2">
        <button class="h-14 border-2 border-[#1f1f1f] bg-[#f3f4f6] hover:bg-[#e9eaec] overflow-hidden shadow-[2px_2px_0_0_#1f1f1f]">
          <img src="https://via.placeholder.com/200x120.png?text=1" class="w-full h-full object-cover" />
        </button>
        <button class="h-14 border-2 border-[#1f1f1f] bg-[#f3f4f6] hover:bg-[#e9eaec] overflow-hidden shadow-[2px_2px_0_0_#1f1f1f]">
          <img src="https://via.placeholder.com/200x120.png?text=2" class="w-full h-full object-cover" />
        </button>
        <button class="h-14 border-2 border-[#1f1f1f] bg-[#f3f4f6] hover:bg-[#e9eaec] overflow-hidden shadow-[2px_2px_0_0_#1f1f1f]">
          <img src="https://via.placeholder.com/200x120.png?text=3" class="w-full h-full object-cover" />
        </button>
        <button class="h-14 border-2 border-[#1f1f1f] bg-[#f3f4f6] hover:bg-[#e9eaec] overflow-hidden shadow-[2px_2px_0_0_#1f1f1f]">
          <img src="https://via.placeholder.com/200x120.png?text=4" class="w-full h-full object-cover" />
        </button>
      </div>
    </div>

    <!-- RIGHT: Info -->
    <div class="col-span-5 flex flex-col gap-3">

      <!-- Description card -->
      <div class="border-2 border-[#1f1f1f] bg-[#f3f4f6] p-3 shadow-[3px_3px_0_0_#1f1f1f]">
        <p class="text-xs font-bold mb-1">Descripción</p>
        <p class="text-sm text-[#2a2a2a] leading-relaxed">
          Explica qué hace el proyecto, qué problema resuelve y tu rol en él.
        </p>
      </div>

      <!-- Techs card -->
      <div class="border-2 border-[#1f1f1f] bg-[#f3f4f6] p-3 flex-1 shadow-[3px_3px_0_0_#1f1f1f]">
        <p class="text-xs font-bold mb-2">Tech Stack</p>

        <div class="flex flex-wrap gap-2">
          <span class="text-[11px] px-2 py-1 border-2 border-[#1f1f1f] bg-[#e9eaec] shadow-[2px_2px_0_0_#1f1f1f]">
            PHP
          </span>
          <span class="text-[11px] px-2 py-1 border-2 border-[#1f1f1f] bg-[#e9eaec] shadow-[2px_2px_0_0_#1f1f1f]">
            MySQL
          </span>
          <span class="text-[11px] px-2 py-1 border-2 border-[#1f1f1f] bg-[#e9eaec] shadow-[2px_2px_0_0_#1f1f1f]">
            JavaScript
          </span>
          <span class="text-[11px] px-2 py-1 border-2 border-[#1f1f1f] bg-[#e9eaec] shadow-[2px_2px_0_0_#1f1f1f]">
            Tailwind
          </span>
        </div>

        <!-- Related / extra -->
        <div class="mt-4 border-t border-dashed border-[#9ca3af] pt-3">
          <p class="text-[11px] text-[#4b5563]">
            Tecnologías relacionadas:
            <span class="text-[#1f1f1f] font-semibold">MySQL · Oracle · JWT · Postman</span>
          </p>
        </div>
      </div>

      <!-- Footer -->
      <div class="flex items-center justify-between text-xs text-[#4b5563]">
        <!-- <span>Estado: <b class="text-[#1f1f1f]">DEPLOYED</b></span>
        <a href="#" class="underline hover:opacity-70">
          Ver demo
          <i class="bi bi-box-arrow-up-right"></i>
        </a> -->
      </div>
    </div>
  </div>

</section>


    <main class="flex flex-col w-full min-h-screen">
        <?php include_once "src/components/mainscreen.php"?>
    </main>
    <script src="/src/js/windows.js"></script>
    <script src="/src/js/overWriteWords.js"></script>
    <script src="/src/js/techData.js"></script>
    <script src="/src/js/showView.js"></script>
    <script src="/src/js/currentDT.js"></script>
    <script src="/src/js/generateTechData.js" defer></script>
</body>
</html>