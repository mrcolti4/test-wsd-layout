// Script for sticky header
window.addEventListener("scroll", () => {
    const header = document.querySelector("header.header");
    header.classList.toggle("sticky", window.scrollY > 0);
})

// Script for mobile menu
const menuIcon = document.querySelector(".header__icon")
const menuNav = document.querySelector("nav.header__navigation");
menuIcon.addEventListener("click", (e) => {
    document.body.classList.toggle("lock")
    menuNav.classList.toggle("open");
    menuIcon.classList.toggle("_active")
})