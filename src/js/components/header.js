window.addEventListener("scroll", () => {
    const header = document.querySelector("header.header");
    header.classList.toggle("sticky", window.scrollY > 0);
})