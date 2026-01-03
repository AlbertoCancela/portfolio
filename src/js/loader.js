window.addEventListener("load", () => {
  const loader = document.getElementById("retro-loader");
  if (!loader) return;

  loader.style.transition = "opacity 0.4s ease";
  loader.style.opacity = "0";

  setTimeout(() => {
    loader.remove();
  }, 450);
});
