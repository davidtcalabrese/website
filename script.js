// grab references
const navItems = document.querySelector(".nav-items");
const navBarToggle = document.querySelector("#navbar-toggle");
let btn = document.querySelector("#theme-switcher");

// navbar functionality
navBarToggle.addEventListener("click", () => {
    console.log("toggled");
    navItems.classList.toggle("active");
});

// darkmode logic
const currentTheme = localStorage.getItem("theme");

document.addEventListener('DOMContentLoaded', function(event) {
    if (currentTheme == "dark") {
        document.body.classList.toggle("dark");
      } else if (currentTheme == "light") {
        document.body.classList.toggle("light");
      }
})

btn.addEventListener("click", function() { 
    document.body.classList.toggle("dark");
    var theme = document.body.classList.contains("dark") ? "dark" : "light";
    localStorage.setItem("theme", theme);
});
