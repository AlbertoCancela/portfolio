<section class="h-[93vh] flex">
    <div class="flex flex-col gap-4 justify-start flex-1 p-6">

        <div ondblclick="openWindow('400','500','bg-amber-400 text-stone-800','About Me','aboutMe')"
             class="group flex flex-col w-35 h-35 items-center cursor-pointer">
            <img class="h-[85%] transition duration-150 ease-in-out group-hover:scale-90"
                 src="/assets/images/icons/aboutme.png" alt="">
            <div class="vt323-regular h-[15%] text-center text-lg font-bold text-gray-300">
                About Me
            </div>
        </div>

        <div ondblclick="openWindow('600','400','bg-cyan-600 text-stone-800','Techs','techs')"
             class="group flex flex-col w-35 h-35 items-center cursor-pointer">
            <img class="h-[85%] transition duration-150 ease-in-out group-hover:scale-90"
                 src="/assets/images/icons/techs.png" alt="">
            <div class="h-[15%] text-center text-lg font-bold text-gray-300">
                Techs
            </div>
        </div>

        <div ondblclick="openWindow('700','600','bg-yellow-600 text-stone-800','Projects','projects')"
             class="group flex flex-col w-35 h-35 items-center cursor-pointer">
            <img class="h-[85%] transition duration-150 ease-in-out group-hover:scale-90"
                 src="/assets/images/icons/projects.png" alt="">
            <div class="h-[15%] text-center text-lg font-bold text-gray-300">
                Projects
            </div>
        </div>

        <div ondblclick="openWindow('600','400','bg-pink-700 text-stone-300','Contact','contact')"
             class="group flex flex-col w-35 h-35 items-center cursor-pointer">
            <img class="h-[85%] transition duration-150 ease-in-out group-hover:scale-90"
                 src="/assets/images/icons/contact.png" alt="">
            <div class="h-[15%] text-center text-lg font-bold text-gray-300">
                Contact
            </div>
        </div>

    </div>

    <div class="flex flex-1 justify-end items-end p-6 gap-4">

        <div ondblclick="openWindow('400','250','bg-purple-400 text-stone-800','Music (just recomendations)','music')"
             class="group flex flex-col w-35 h-35 items-center cursor-pointer">
            <img class="h-[85%] transition duration-150 ease-in-out group-hover:scale-90"
                 src="/assets/images/icons/music.png" alt="">
            <div class="h-[15%] text-center text-lg font-bold text-gray-300">
                Music
            </div>
        </div>

        <div ondblclick="openWindow('300','200','bg-orange-200 text-stone-800','System info','system')"
             class="group flex flex-col w-35 h-35 items-center cursor-pointer">
            <img class="h-[85%] transition duration-150 ease-in-out group-hover:scale-90"
                 src="/assets/images/icons/systeminfo.png" alt="">
            <div class="h-[15%] text-center text-lg font-bold text-gray-300">
                System info
            </div>
        </div>

    </div>
</section>

<section class="h-[7vh] bg-stone-300 flex items-center justify-between px-4 font-mono text-sm">
    <div id="status-msg">Hi! I hope you enjoy!</div>
    <div id="datetime" class="text-right"></div>
</section>

<div id="desktop" class="absolute inset-0 pointer-events-none"></div>
