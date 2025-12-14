function showView(el, showId, hideId, techKey) {
  const parent = el.closest(`#${hideId}`);
  parent.classList.add("hidden");

  const target = document.getElementById(showId);
  target.classList.remove("hidden");

  if (techKey) {
    renderTechView(target, techKey, hideId, showId);
  }
}

function renderTechView(target, techKey, hideId, showId) {
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
