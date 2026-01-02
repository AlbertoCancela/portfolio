<!-- Desktop area -->
<section class="h-[93vh] md:h-[93vh] flex flex-col md:flex-row">

  <!-- ICON GRID (mobile) / LEFT COLUMN (desktop) -->
  <div
    class="p-4 md:p-6
           grid grid-cols-2 sm:grid-cols-3 gap-4 place-items-center
           md:flex md:flex-col md:gap-4 md:justify-start md:flex-1 md:place-items-stretch">

    <!-- About -->
    <div ondblclick="openWindow('400','500','bg-amber-400 text-stone-800','About Me','aboutMe')"
         class="group flex flex-col items-center cursor-pointer
                w-24 h-24 sm:w-28 sm:h-28 md:w-35 md:h-35">
      <img class="h-[75%] md:h-[85%] transition duration-150 ease-in-out group-hover:scale-90"
           src="/assets/images/icons/aboutme.png" alt="">
      <div class="vt323-regular h-[25%] md:h-[15%] text-center text-base md:text-lg font-bold text-gray-300">
        About Me
      </div>
    </div>

    <!-- Techs -->
    <div ondblclick="openWindow('600','400','bg-cyan-600 text-stone-800','Techs','techs')"
         class="group flex flex-col items-center cursor-pointer
                w-24 h-24 sm:w-28 sm:h-28 md:w-35 md:h-35">
      <img class="h-[75%] md:h-[85%] transition duration-150 ease-in-out group-hover:scale-90"
           src="/assets/images/icons/techs.png" alt="">
      <div class="h-[25%] md:h-[15%] text-center text-base md:text-lg font-bold text-gray-300">
        Techs
      </div>
    </div>

    <!-- Projects -->
    <div ondblclick="openWindow('700','550','bg-yellow-600 text-stone-800','Projects','projects')"
         class="group flex flex-col items-center cursor-pointer
                w-24 h-24 sm:w-28 sm:h-28 md:w-35 md:h-35">
      <img class="h-[75%] md:h-[85%] transition duration-150 ease-in-out group-hover:scale-90"
           src="/assets/images/icons/projects.png" alt="">
      <div class="h-[25%] md:h-[15%] text-center text-base md:text-lg font-bold text-gray-300">
        Projects
      </div>
    </div>

    <!-- Contact -->
    <div ondblclick="openWindow('500','530','bg-pink-700 text-stone-300','Contact','contact')"
         class="group flex flex-col items-center cursor-pointer
                w-24 h-24 sm:w-28 sm:h-28 md:w-35 md:h-35">
      <img class="h-[75%] md:h-[85%] transition duration-150 ease-in-out group-hover:scale-90"
           src="/assets/images/icons/contact.png" alt="">
      <div class="h-[25%] md:h-[15%] text-center text-base md:text-lg font-bold text-gray-300">
        Contact
      </div>
    </div>

  </div>

  <!-- RIGHT BOTTOM (only on desktop) -->
  <div class="hidden md:flex md:flex-1 md:justify-end md:items-end md:p-6 md:gap-4">

    <!-- Music -->
    <div ondblclick="openWindow('500','650','bg-purple-400 text-stone-800','Music (just recomendations)','music')"
         class="group flex flex-col w-35 h-35 items-center cursor-pointer">
      <img class="h-[85%] transition duration-150 ease-in-out group-hover:scale-90"
           src="/assets/images/icons/music.png" alt="">
      <div class="h-[15%] text-center text-lg font-bold text-gray-300">
        Music
      </div>
    </div>

    <!-- System -->
    <div ondblclick="openWindow('600','600','bg-orange-200 text-stone-800','System info','system')"
         class="group flex flex-col w-35 h-35 items-center cursor-pointer">
      <img class="h-[85%] transition duration-150 ease-in-out group-hover:scale-90"
           src="/assets/images/icons/systeminfo.png" alt="">
      <div class="h-[15%] text-center text-lg font-bold text-gray-300">
        System info
      </div>
    </div>

  </div>

  <!-- EXTRA ICONS (mobile only) -->
  <div class="md:hidden px-4 pb-4 grid grid-cols-2 sm:grid-cols-3 gap-4 place-items-center">

    <!-- Music -->
    <div ondblclick="openWindow('600','900','bg-purple-400 text-stone-800','Music (just recomendations)','music')"
         class="group flex flex-col items-center cursor-pointer w-24 h-24 sm:w-28 sm:h-28">
      <img class="h-[75%] transition duration-150 ease-in-out group-hover:scale-90"
           src="/assets/images/icons/music.png" alt="">
      <div class="h-[25%] text-center text-base font-bold text-gray-300">
        Music
      </div>
    </div>

    <!-- System -->
    <div ondblclick="openWindow('300','200','bg-orange-200 text-stone-800','System info','system')"
         class="group flex flex-col items-center cursor-pointer w-24 h-24 sm:w-28 sm:h-28">
      <img class="h-[75%] transition duration-150 ease-in-out group-hover:scale-90"
           src="/assets/images/icons/systeminfo.png" alt="">
      <div class="h-[25%] text-center text-base font-bold text-gray-300">
        System info
      </div>
    </div>

  </div>

</section>

<!-- Taskbar -->
<section class="h-[7vh] bg-stone-300 flex items-center justify-between px-3 sm:px-4 font-mono text-xs sm:text-sm">
  <div id="status-msg" class="truncate max-w-[60%] sm:max-w-none">Hi! I hope you enjoy!</div>
  <div id="datetime" class="text-right whitespace-nowrap"></div>
</section>

<!-- Windows container -->
<div id="desktop" class="absolute inset-0 pointer-events-none"></div>
