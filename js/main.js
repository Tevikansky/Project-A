const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
const mMenuToggle = document.querySelector(".mobile-menu");
const menu = document.querySelector(".mobile-menu-main");
window.addEventListener("scroll", () => {
  if (this.scrollY > 1) {
    navbar.classList.add("navbar-light");
    logo.href.baseVal = "img/sprite.svg#logo-dark";
  } else {
    console.log('Мы наверху')
    navbar.classList.remove("navbar-light");
    logo.href.baseVal = "img/sprite.svg#logo";
  }
});
mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.toggle("is-open");
})