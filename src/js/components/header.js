// Script for sticky header
window.addEventListener("scroll", () => {
  const header = document.querySelector("header.header");
  if(window.scrollY > 0) {

    header.classList.add("sticky");
  }else {
    header.classList.remove("sticky");
  }
});

// Script for mobile menu
const menuIcon = document.querySelector(".header__icon");
const menuNav = document.querySelector("nav.header__navigation");
menuIcon.addEventListener("click", (e) => {
  document.body.classList.toggle("lock");
  menuNav.classList.toggle("open");
  menuIcon.classList.toggle("_active");
});

// Script for sub-menu
(() => {
  const menuButtons = document.querySelectorAll("li.menu__button");

  const openMenu = (e) => {
    console.log(e.target);
    e.target.querySelector(".sub-menu").classList.add("_active");
    console.log("pressed");
  };

  const closeMenu = (e) => {
    e.target.querySelector(".sub-menu").classList.remove("_active");
  };

  const toggleMenu = (e) => {
    // console.log(e.target);
    e.target.querySelector(".sub-menu").classList.toggle("_active");
  };

  // If window width more than 992 open menu on hover, else on click
  if (window.innerWidth > 992) {
    menuButtons.forEach((item) => {
      item.addEventListener("mouseenter", openMenu);
      item.addEventListener("mouseleave", closeMenu);
    });
  } else {
    menuButtons.forEach((item) => {
      item.removeEventListener("click", toggleMenu); // Remove any existing click listeners
      item.addEventListener("click", toggleMenu);   // Add click listener for toggle
    });
  }

  // Adjust event listeners based on window size changes
  window.matchMedia("(min-width: 992px)").addEventListener("change", (e) => {
    if (e.matches) {
      menuButtons.forEach((item) => {
        item.removeEventListener("click", toggleMenu); // Remove click listener for small screens
        item.addEventListener("mouseenter", openMenu); // Add hover listeners for large screens
        item.addEventListener("mouseleave", closeMenu);
      });
    } else {
      menuButtons.forEach((item) => {
        item.addEventListener("click", toggleMenu);    // Add click listener for small screens
        item.removeEventListener("mouseenter", openMenu); // Remove hover listeners for small screens
        item.removeEventListener("mouseleave", closeMenu);
      });
    }
  });
})();