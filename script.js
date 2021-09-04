// navbar functionality
const navItems = document.querySelector(".nav-items");
const navBarToggle = document.querySelector("#navbar-toggle");

navBarToggle.addEventListener("click", () => {
    console.log("toggled");
    navItems.classList.toggle("active");
});


