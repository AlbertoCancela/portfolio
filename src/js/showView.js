function showView(el, showId, hideId, techKey) {
  const parent = el.closest(`#${hideId}`);
  parent.classList.add("hidden");

  const target = document.getElementById(showId);
  target.classList.remove("hidden");

  console.log(showId)
  if (techKey && showId == 'description') {
    renderTechView(target, techKey, hideId, showId);
  }else if(techKey && showId == 'projectDetail'){
    renderProjectView(target, techKey, hideId, showId);
  }
}

const renderTechView = function (target, techKey, hideId, showId) {
  const tech = TECH_DATA[techKey];
  if (!tech) return;

  target.innerHTML = `
    <i onclick="showView(this, '${hideId}', '${showId}')"
       class="bi bi-arrow-bar-left text-2xl font-bold hover:cursor-pointer"></i>

    <section class="max-w-xl font-mono text-gray-900 mt-4">

      <h2 class="text-2xl mb-1">${tech.title}</h2>

      ${tech.experience ? `
        <p class="text-sm text-gray-600 mb-4">
          ${tech.experience}
        </p>
      ` : ""}

      ${tech.summary ? tech.summary.map(line => `
        <p class="text-sm mb-2">${line}</p>
      `).join("") : ""}

      ${tech.bullets ? `
        <div class="border-t border-dashed border-gray-400 my-4"></div>
        <ul class="list-disc list-inside text-sm space-y-1 mb-4">
          ${tech.bullets.map(b => `<li>${b}</li>`).join("")}
        </ul>
      ` : ""}

      ${tech.related ? `
        <p class="text-xs text-gray-600">
          Tecnologías relacionadas:
          <span class="text-gray-800">${tech.related}</span>
        </p>
      ` : ""}

    </section>
  `;
}


const renderProjectView = function (target, projectKey, hideId, showId) {
  const project = PROJECT_DATA?.[projectKey];
  if (!project) return;

  // Normaliza campos (por si vienen como string o array)
  const title = project.name ?? project.title ?? "Proyecto";
  const forWho = project.forWho ?? project.client ?? project.madeFor ?? "";
  const repo = project.repo ?? project.github ?? "";
  const techs = Array.isArray(project.techs) ? project.techs : (project.techs ? [project.techs] : []);
  const images = Array.isArray(project.images) ? project.images : (project.images ? [project.images] : []);

  // Descripción más amplia: permite array (párrafos) o string (un párrafo)
  const descArr = Array.isArray(project.description)
    ? project.description
    : (project.description ? [project.description] : []);

  // Imagen principal por defecto
  const mainImg = images[0] ?? "";
  const mainLabel = project.imageLabel ?? (mainImg ? mainImg.split("/").pop() : "screenshot.png");

  // ID único para poder cambiar la imagen principal sin re-render completo
  const uid = `pv_${projectKey}_${Math.random().toString(16).slice(2)}`;

target.innerHTML = `
<section class="w-full h-full font-mono text-[#1f1f1f] flex flex-col min-h-0">

  <!-- Header -->
  <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-3 shrink-0">
    <div class="flex items-start sm:items-center gap-3">
      <i onclick="showView(this, '${hideId}', '${showId}')"
        class="bi bi-arrow-bar-left text-2xl font-bold hover:cursor-pointer"></i>

      <div class="flex flex-col leading-tight">
        <h2 class="text-base sm:text-lg font-bold">${title}</h2>
        ${forWho ? `<p class="text-xs text-[#4b5563]">To: ${forWho}</p>` : ""}
      </div>
    </div>

    ${(repo || project.demo) ? `
      <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-2">
        ${project.demo ? `
          <a href="${project.demo}" target="_blank"
            class="flex items-center justify-center gap-2 px-3 py-2 sm:py-1 border-2 border-[#1f1f1f]
                   bg-[#e9eaec] hover:bg-[#d9dadc] transition w-full sm:w-auto"
            title="${project.demoType === "page" ? "Go to page" : "Go to demo"}">
            <i class="bi bi-box-arrow-up-right text-lg"></i>
            <span class="text-xs font-bold">
              ${project.demoType === "page" ? "Go to page" : "Go to demo"}
            </span>
          </a>
        ` : ""}

        ${repo ? `
          <a href="${repo}" target="_blank"
            class="flex items-center justify-center gap-2 px-3 py-2 sm:py-1 border-2 border-[#1f1f1f]
                   bg-[#e9eaec] hover:bg-[#d9dadc] transition w-full sm:w-auto"
            title="GitHub repository">
            <i class="bi bi-github text-lg"></i>
            <span class="text-xs font-bold">GitHub</span>
          </a>
        ` : ""}
      </div>
    ` : ""}
  </div>

  <!-- Scrollable body -->
  <div class="flex-1 min-h-0 overflow-y-auto pr-1">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-4">

      <!-- LEFT: Images -->
      <div class="lg:col-span-7 flex flex-col">
        <div class="border-2 border-[#1f1f1f] bg-[#f3f4f6] overflow-hidden relative
                    shadow-[3px_3px_0_0_#1f1f1f] h-[220px] sm:h-[280px] lg:h-[360px]">
          ${
            mainImg
              ? `<img id="${uid}_main" src="${mainImg}" class="w-full h-full object-cover" alt="Project screenshot" />`
              : `<div class="w-full h-full flex items-center justify-center text-sm text-[#4b5563]">
                   No images available
                 </div>`
          }

          <span id="${uid}_label"
            class="absolute bottom-2 left-2 text-[10px] px-2 py-1 border-2 border-[#1f1f1f] bg-[#e9eaec]">
            ${mainLabel}
          </span>
        </div>

        ${images.length > 1 ? `
          <div class="mt-3 grid grid-cols-4 gap-2">
            ${images.slice(0, 4).map((src, idx) => `
              <button type="button"
                data-pv="${uid}"
                data-src="${src}"
                class="h-14 border-2 border-[#1f1f1f] bg-[#f3f4f6] hover:bg-[#e9eaec]
                       overflow-hidden shadow-[2px_2px_0_0_#1f1f1f] hover:cursor-pointer"
                title="View image ${idx + 1}">
                <img src="${src}" class="w-full h-full object-cover" alt="thumb ${idx + 1}" />
              </button>
            `).join("")}
          </div>
        ` : ""}
      </div>

      <!-- RIGHT: Description -->
      <div class="lg:col-span-5">
        <div class="border-2 border-[#1f1f1f] bg-[#f3f4f6] p-3
                    shadow-[3px_3px_0_0_#1f1f1f]">
          <p class="text-xs font-bold mb-2">Description</p>

          ${descArr.length ? descArr.map(p => `
            <p class="text-sm text-[#2a2a2a] leading-relaxed mb-2 last:mb-0">
              ${p}
            </p>
          `).join("") : `
            <p class="text-sm text-[#2a2a2a] leading-relaxed">
              (Add a description in PROJECT_DATA to show it here)
            </p>
          `}
        </div>
      </div>

    </div>
  </div>

  <!-- Tech stack (fixed bottom) -->
  <div class="mt-4 shrink-0 border-2 border-[#1f1f1f] bg-[#f3f4f6] p-3
              shadow-[3px_3px_0_0_#1f1f1f]">
    <p class="text-xs font-bold mb-2">Tech Stack</p>

    ${techs.length ? `
      <div class="flex flex-wrap gap-2">
        ${techs.map(t => `
          <span class="text-[11px] px-2 py-1 border-2 border-[#1f1f1f] bg-[#e9eaec]
                       shadow-[2px_2px_0_0_#1f1f1f]">
            ${t}
          </span>
        `).join("")}
      </div>
    ` : `<p class="text-sm text-[#4b5563]">No tech stack available.</p>`}
  </div>

</section>
`;


  // ✅ Hook: click en thumbs para cambiar imagen principal
  // (lo dejamos aquí para que no dependas de IDs globales)
  const buttons = target.querySelectorAll(`button[data-pv="${uid}"]`);
  const main = target.querySelector(`#${uid}_main`);
  const label = target.querySelector(`#${uid}_label`);

  buttons.forEach(btn => {
    btn.addEventListener("click", () => {
      const src = btn.getAttribute("data-src");
      if (!src || !main) return;

      main.setAttribute("src", src);
      if (label) label.textContent = src.split("/").pop();
    });
  });
};
