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
(() => {
  const subMenu = document.querySelector("ul.header__submenu");
  const menuItems = document.querySelectorAll("li.menu__item");
  const menuButton = document.querySelector("button.menu__button");
  let buttonListItem;

  const openMenu = () => {
    subMenu.classList.add("_active");
  };
  const closeMenu = () => {
    subMenu.classList.remove("_active");
  };
  const toggleMenu = () => {
    subMenu.classList.toggle("_active");
  };

  // If window width more than 992 open menu on hover, else on click
  if (window.innerWidth > 992) {
    menuItems.forEach((item) => {
      if (item.children.length > 1) {
        buttonListItem = item;
        item.addEventListener("mouseenter", openMenu);
        item.addEventListener("mouseleave", closeMenu);
      }
    });
  } else {
    menuButton.removeEventListener("click", toggleMenu);
    menuButton.addEventListener("click", toggleMenu);
  }

  // if e.matches returns true that means window on 992px screen width
  // so we implement hover behaivour for submenu
  window.matchMedia("(min-width: 992px)").addEventListener("change", (e) => {
    if (e.matches) {
      menuButton.removeEventListener("click", toggleMenu);
      buttonListItem.addEventListener("mouseenter", openMenu);
      buttonListItem.addEventListener("mouseleave", closeMenu);
    } else {
      menuButton.addEventListener("click", toggleMenu);
      buttonListItem.removeEventListener("mouseenter", openMenu);
      buttonListItem.removeEventListener("mouseleave", closeMenu);
    }
  });
})();
