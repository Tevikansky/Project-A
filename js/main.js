const navbar = document.querySelector(".navbar");
window.addEventListener("scroll", () => {
  if (this.scrollY > 1) {
    console.log('Покрутили вниз')
    navbar.classList.add("navbar-light")
  } else {
    console.log('Мы наверху')
    navbar.classList.remove("navbar-light")
  }
})