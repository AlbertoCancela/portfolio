<div class="flex flex-col w-full h-[90%] font-mono text-[#1f1f1f] min-h-0">

  <!-- Header strip -->
  <div class="border-2 border-[#1f1f1f] bg-[#c78d12] shadow-[3px_3px_0_0_#1f1f1f] px-3 py-2 mb-3">
    <p class="text-sm font-bold tracking-wide">CONTACT</p>
    <p class="text-[11px] opacity-90">Reach me through any channel</p>
  </div>

  <!-- Panel (scrollable if needed) -->
  <div class="border-2 border-[#1f1f1f] bg-[#f3f4f6] shadow-[3px_3px_0_0_#1f1f1f]
              p-3 flex flex-col gap-2 flex-1 min-h-0 overflow-y-auto">

    <!-- GitHub -->
    <a href="https://github.com/AlbertoCancela" target="_blank"
      class="group flex items-center justify-between gap-3 border-2 border-[#1f1f1f]
             bg-[#e9eaec] hover:bg-[#d9dadc] shadow-[2px_2px_0_0_#1f1f1f]
             px-3 py-2 cursor-pointer">
      <div class="flex items-center gap-3 min-w-0">
        <i class="bi bi-github text-lg shrink-0"></i>
        <div class="leading-tight min-w-0">
          <p class="text-xs font-bold">GitHub</p>
          <p class="text-[11px] opacity-80 truncate">github.com/AlbertoCancela</p>
        </div>
      </div>
      <i class="bi bi-box-arrow-up-right text-base opacity-80 group-hover:opacity-100 shrink-0"></i>
    </a>

    <!-- LinkedIn -->
    <a href="https://www.linkedin.com/in/albertocancela" target="_blank"
      class="group flex items-center justify-between gap-3 border-2 border-[#1f1f1f]
             bg-[#e9eaec] hover:bg-[#d9dadc] shadow-[2px_2px_0_0_#1f1f1f]
             px-3 py-2 cursor-pointer">
      <div class="flex items-center gap-3 min-w-0">
        <i class="bi bi-linkedin text-lg shrink-0"></i>
        <div class="leading-tight min-w-0">
          <p class="text-xs font-bold">LinkedIn</p>
          <p class="text-[11px] opacity-80 truncate">linkedin.com/in/albertocancela</p>
        </div>
      </div>
      <i class="bi bi-box-arrow-up-right text-base opacity-80 group-hover:opacity-100 shrink-0"></i>
    </a>

    <!-- Email -->
    <div
      class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 border-2 border-[#1f1f1f]
             bg-[#e9eaec] hover:bg-[#d9dadc] shadow-[2px_2px_0_0_#1f1f1f]
             px-3 py-2">

      <div class="flex items-center gap-3 min-w-0">
        <i class="bi bi-envelope-fill text-lg shrink-0"></i>
        <div class="leading-tight min-w-0">
          <p class="text-xs font-bold">Email</p>
          <p class="text-[11px] opacity-80 select-text break-all">
            albertocancelaa@gmail.com
          </p>
        </div>
      </div>

      <div class="flex sm:flex-row items-stretch sm:items-center gap-2 w-full sm:w-auto">
        <!-- SEND -->
        <a
          href="mailto:albertocancelaa@gmail.com?subject=Hola%20Alberto&body=Hola%20Alberto,%20me%20gustar%C3%ADa%20contactarte%20por..."
          class="px-2 py-2 sm:py-1 text-[11px] border-2 border-[#1f1f1f] bg-[#f3f4f6] hover:bg-[#ffffff]
                 shadow-[2px_2px_0_0_#1f1f1f] flex items-center justify-center gap-1 w-full sm:w-auto"
          title="Send email">
          <i class="bi bi-send-fill"></i>
          SEND
        </a>

        <!-- COPY -->
        <button
          class="px-2 py-2 sm:py-1 text-[11px] border-2 border-[#1f1f1f] bg-[#f3f4f6] hover:bg-[#ffffff]
                 shadow-[2px_2px_0_0_#1f1f1f] w-full sm:w-auto hover:cursor-pointer"
          onclick="navigator.clipboard?.writeText('albertocancelaa@gmail.com')"
          title="Copy email">
          COPY
        </button>
      </div>
    </div>

    <!-- Phone -->
    <div
      class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 border-2 border-[#1f1f1f]
             bg-[#e9eaec] hover:bg-[#d9dadc] shadow-[2px_2px_0_0_#1f1f1f]
             px-3 py-2">

      <div class="flex items-center gap-3 min-w-0">
        <i class="bi bi-telephone-fill text-lg shrink-0"></i>
        <div class="leading-tight min-w-0">
          <p class="text-xs font-bold">Phone</p>
          <p class="text-[11px] opacity-80 select-text break-all">
            +52 744 4010 495
          </p>
        </div>
      </div>

      <div class="flex sm:flex-row items-stretch sm:items-center gap-2 w-full sm:w-auto">
        <!-- SEND (WhatsApp) -->
        <a
          href="https://wa.me/527444010495?text=Hola%20Alberto!%20Vi%20tu%20portfolio%20y%20me%20gustar%C3%ADa%20contactarte."
          target="_blank"
          class="px-2 py-2 sm:py-1 text-[11px] border-2 border-[#1f1f1f] bg-[#f3f4f6] hover:bg-[#ffffff]
                 shadow-[2px_2px_0_0_#1f1f1f] flex items-center justify-center gap-1 w-full sm:w-auto"
          title="Send WhatsApp message">
          <i class="bi bi-send-fill"></i>
          SEND
        </a>

        <!-- COPY -->
        <button
          class="px-2 py-2 sm:py-1 text-[11px] border-2 border-[#1f1f1f] bg-[#f3f4f6] hover:bg-[#ffffff]
                 shadow-[2px_2px_0_0_#1f1f1f] w-full sm:w-auto hover:cursor-pointer"
          onclick="navigator.clipboard?.writeText('+52 744 4010 495')"
          title="Copy phone">
          COPY
        </button>
      </div>
    </div>

  </div>

  <!-- Bottom status bar -->
  <div class="mt-3 border-2 border-[#1f1f1f] bg-[#e9eaec] shadow-[3px_3px_0_0_#1f1f1f] px-3 py-2">
    <p class="text-[11px] opacity-80">
      Tip: click links to open · use COPY to copy email/phone
    </p>
  </div>
</div>
