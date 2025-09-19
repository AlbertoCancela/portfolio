<section class="h-[93vh] flex">
            <div class="flex flex-col gap-4 justify-start flex-1 p-6">
                <div onclick="openWindow('400', '500', 'bg-amber-400 text-stone-800', 'About Me', 'aboutMe')" 
                    class="flex flex-col w-35 h-35 ">
                    <img class="h-[85%] fit-content hover:scale-90 ease-in-out transition duration-50 hover:cursor-pointer" 
                    src="/assets/images/testPortfolio.jpg" alt="">
                    <div class="h-[15%] text-center text-lg font-bold text-gray-300">About Me</div>
                </div>
                <div onclick="openWindow('600', '400', 'bg-cyan-600 text-stone-800', 'Techs', 'techs')" 
                    class="flex flex-col w-35 h-35">
                    <img class="h-[85%] fit-content hover:scale-90 ease-in-out transition duration-50 hover:cursor-pointer" 
                    src="/assets/images/testPortfolio.jpg" alt="">
                    <div class="h-[15%] text-center text-lg font-bold text-gray-300">Techs</div>
                </div>
                <div onclick="openWindow('600', '600', 'bg-yellow-600 text-stone-800', 'Projects', 'projects')" 
                    class="flex flex-col w-35 h-35 ">
                    <img class="h-[85%] fit-content hover:scale-90 ease-in-out transition duration-50 hover:cursor-pointer" 
                    src="/assets/images/testPortfolio.jpg" alt="">
                    <div class="h-[15%] text-center text-lg font-bold text-gray-300">Projects</div>
                </div>
                <div onclick="openWindow('600', '400', 'bg-pink-700 text-stone-300', 'Contact', 'contact')" 
                    class="flex flex-col w-35 h-35">
                    <img class="h-[85%] fit-content hover:scale-90 ease-in-out transition duration-50 hover:cursor-pointer" 
                    src="/assets/images/testPortfolio.jpg" alt="">
                    <div class="h-[15%] text-center text-lg font-bold text-gray-300">Contact</div>
                </div>
            </div>
            <div class="flex flex-1 justify-end items-end p-6 gap-4">
                <div onclick="openWindow('400', '250', 'bg-purple-400 text-stone-800', 'Music (just recomendations)', 'music')" 
                    class="flex flex-col w-35 h-35 ">
                    <img class="h-[85%] fit-content hover:scale-90 ease-in-out transition duration-50 hover:cursor-pointer" 
                    src="/assets/images/testPortfolio.jpg" alt="">
                    <div class="h-[15%] text-center text-lg font-bold text-gray-300">Music</div>
                </div>
                <div onclick="openWindow('300', '200', 'bg-orange-200 text-stone-800', 'System info', 'system')" 
                    class="flex flex-col w-35 h-35">
                    <img class="h-[85%] fit-content hover:scale-90 ease-in-out transition duration-50 hover:cursor-pointer" 
                    src="/assets/images/testPortfolio.jpg" alt="">
                    <div class="h-[15%] text-center text-lg font-bold text-gray-300">System info</div>
                </div>
            </div>
        </section>
        <section class="h-[7vh] bg-stone-300 flex items-center justify-between px-4 font-mono text-sm">
            <div id="status-msg">Hi! I hope you enjoy!</div>
            <div id="datetime" class="text-right"></div>
        </section>

        <div id="desktop" class="absolute inset-0 pointer-events-none"></div>