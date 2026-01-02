// registro de ventanas abiertas por componente
window.openWindows = {};

window.openWindow = async function (width, height, color, title, component) {
  const desktop = document.getElementById("desktop");

  if (window.openWindows[component]) {
    window.openWindows[component].style.zIndex = Date.now();
    return;
  }

  const win = document.createElement("div");
  win.className =
  "absolute bg-gray-200 border-2 border-stone-800 shadow-lg rounded-sm pointer-events-auto flex flex-col";
  win.dataset.component = component;

  const isMobile = window.innerWidth < 768;
  if (isMobile) {
    win.style.width = "90vw";
    win.style.height = "80vh";
    win.style.left = "5vw";
    win.style.top = "10vh";
  } else {
    win.style.width = width + "px";
    win.style.height = height + "px";
    const centerX = (window.innerWidth - width) / 2;
    const centerY = (window.innerHeight - height) / 2;
    win.style.left = centerX + "px";
    win.style.top = centerY + "px";
  }

  // Header
  const header = document.createElement("div");
  header.className = `${color} font-bold p-2 cursor-move flex justify-between items-center text-sm`;
  header.innerHTML = `
    <span>${title}</span>
    <button class="px-2 hover:bg-red-500">X</button>
  `;
  win.appendChild(header);

  // Contenido
  const content = document.createElement("div");
  content.className = "p-4 text-gray-800 overflow-auto flex-1 min-h-0";
  win.appendChild(content);

  try {
    const res = await fetch(`/src/components/${component}.php`);
    if (!res.ok) throw new Error("No se pudo cargar el componente");
    content.innerHTML = await res.text();

    desktop.appendChild(win);

    // registrar ventana abierta
    window.openWindows[component] = win;

    // init por componente
    if (component === "techs" && window.renderTechSections) {
      window.renderTechSections(win);
    }
  } catch (e) {
    content.innerHTML = `<p class="text-red-500">Error cargando ${component}</p>`;
  }

  // cerrar ventana
  header.querySelector("button").onclick = () => {
    delete window.openWindows[component];
    win.remove();
  };

  // Drag & drop (desktop)
  if (!isMobile) {
    let offsetX, offsetY, isDown = false;
    header.addEventListener("mousedown", (e) => {
      isDown = true;
      offsetX = e.clientX - win.offsetLeft;
      offsetY = e.clientY - win.offsetTop;
      win.style.zIndex = Date.now();
    });
    document.addEventListener("mouseup", () => (isDown = false));
    document.addEventListener("mousemove", (e) => {
      if (isDown) {
        win.style.left = e.clientX - offsetX + "px";
        win.style.top = e.clientY - offsetY + "px";
      }
    });
  }
};
