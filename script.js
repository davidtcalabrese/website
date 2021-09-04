// navbar functionality
const navItems = document.querySelector(".nav-items");
const navBarToggle = document.querySelector("#navbar-toggle");

navBarToggle.addEventListener("click", () => {
    navItems.classList.toggle("active");
});