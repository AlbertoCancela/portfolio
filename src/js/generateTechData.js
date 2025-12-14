const techData = [
  {
    section: "Backend & DataBases",
    items: [
      { id: "php", name: "PHP", icon: "php.png" },
      { id: "mysql", name: "MySQL", icon: "mysql.png" },
      { id: "oracle", name: "Oracle", icon: "oracle.png" },
    ]
  },
    {
        section: "Frontend & Styles",
        items: [
        { id: "js", name: "JavaScript", icon: "js.png" },
        { id: "tailwind", name: "Tailwind", icon: "tailwind.png" },
        { id: "bootstrap", name: "Bootstrap", icon: "bootstrap.png" },
        { id: "jquery", name: "jQuery", icon: "jquery.png" },
    ]
    },
    {
        section: "Certifications",
        items: [
        { id: "gcmlm", name: "ML Models", icon: "googleBadge1.png" },
        { id: "gcifbg", name: "Insights", icon: "googleBadge2.png" },
        ]
    },
  {
    section: "Others",
    items: [
      { id: "git", name: "Git", icon: "gitgithub.png" },
      { id: "design", name: "Design", icon: "designvariety.png" },
      { id: "linux", name: "Linux", icon: "linux.png" },
      { id: "docker", name: "Docker", icon: "docker.png" },
    ]
  }
];

window.renderTechSections = function () {
  const techSection = document.getElementById("techSection");
  if (!techSection) {
    console.warn("techSection no existe todavía");
    return;
  }

  techSection.innerHTML = "";

  techData.forEach(group => {
    const section = document.createElement("div");
    section.className = "flex flex-col flex-1";

    section.innerHTML = `
      <h2 class="text-stone-800 text-xl font-bold">${group.section}</h2>
      <div class="flex flex-wrap gap-2 ">
        ${group.items.map(item => `
          <div
            class="tech-item group text-center"
            onclick="showView(this, 'description', 'techSection', '${item.id}')"
          >
            <img
              loading="lazy"
              class="w-22 h-22 group-hover:scale-90 group-hover:cursor-pointer transition duration-100 ease-in-out"
              src="/assets/images/icons/${item.icon}"
              alt="${item.name}"
            >
            <p class="underline">${item.name}</p>
          </div>
        `).join("")}
      </div>
    `;

    techSection.appendChild(section);
  });
};
