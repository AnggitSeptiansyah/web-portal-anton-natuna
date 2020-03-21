const bar = document.querySelector(".menu-btn");
const mainMenu = document.querySelector(".right-menu");

bar.addEventListener("click", () => {
  mainMenu.classList.toggle("show");
});
