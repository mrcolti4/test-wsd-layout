const openMenu = () => {
  subMenu.classList.add("_active");
};
const closeMenu = () => {
  subMenu.classList.remove("_active");
};
const toggleMenu = () => {
  subMenu.classList.toggle("_active");
};

function setListenerOnMenu(deviceWidth, menuItems, menuButton) {
  if (deviceWidth > 992) {
    menuItems.forEach((item) => {
      if (item.children.length > 1) {
        item.removeEventListener("mouseenter", openMenu);
        item.removeEventListener("mouseleave", closeMenu);
        item.addEventListener("mouseenter", openMenu);
        item.addEventListener("mouseleave", closeMenu);
      }
    });
  } else {
    menuButton.removeEventListener("click", toggleMenu);
    menuButton.addEventListener("click", toggleMenu);
  }
}

// Script for sticky header
window.addEventListener("scroll", () => {
  const header = document.querySelector("header.header");
  header.classList.toggle("sticky", window.scrollY > 0);
});

// Script for mobile menu
const menuIcon = document.querySelector(".header__icon");
const menuNav = document.querySelector("nav.header__navigation");
menuIcon.addEventListener("click", (e) => {
  document.body.classList.toggle("lock");
  menuNav.classList.toggle("open");
  menuIcon.classList.toggle("_active");
});

// Script for submenu
let deviceWidth = window.innerWidth;
const subMenu = document.querySelector("ul.header__submenu");
const menuItems = document.querySelectorAll("li.menu__item");
const menuButton = document.querySelector("button.menu__button");

setListenerOnMenu(deviceWidth, menuItems, menuButton);

// Listen window resize for change behaviour on mobile and desktop sizes
window.addEventListener("resize", () => {
  deviceWidth = window.innerWidth;
  setListenerOnMenu(deviceWidth, menuItems, menuButton);
});
