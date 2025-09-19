function showView(el, showId, hideId, techKey) {
  const parent = el.closest(`#${hideId}`);
  parent.classList.add("hidden");

  const target = document.getElementById(showId);
  target.classList.remove("hidden");

  if (techKey && TECH_DATA[techKey]) {
    target.innerHTML = `
      <i onclick="showView(this, 'techSection', 'description')" 
         class="bi bi-arrow-bar-left text-2xl font-bold hover:cursor-pointer"></i>
      <h2 class="text-xl font-bold">${TECH_DATA[techKey].title}</h2>
      <p class="mt-2 text-gray-700">${TECH_DATA[techKey].description}</p>
    `;
  }
}
