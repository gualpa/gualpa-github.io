/* barra de navegacion */
const navToggle = document.querySelector(".mi-nav-toggle");
const navMenu = document.querySelector(".mi-nav-menu");

navToggle.addEventListener("click", () => {
  navMenu.classList.toggle("mi-nav-menu_visible");

  if (navMenu.classList.contains("mi-nav-menu_visible")) {
    navToggle.setAttribute("aria-label", "Cerrar menú");
  } else {
    navToggle.setAttribute("aria-label", "Abrir menú");
  }
});

const menuLinks = document.querySelectorAll(".mi-nav-menu a[href^=\"#\"]");
menuLinks.forEach(menuLink => {
  menuLink.addEventListener("click",function(){
    navMenu.classList.remove("mi-nav-menu_visible");
  })
})