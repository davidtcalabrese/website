// navbar functionality
const navItems = document.querySelector(".nav-items");
const navBarToggle = document.querySelector("#navbar-toggle");

navBarToggle.addEventListener("click", () => {
    console.log("toggled");
    navItems.classList.toggle("active");
});


// darkmode
document.addEventListener("DOMContentLoaded", function(event) {
    document.documentElement.setAttribute("data-theme", "light");

    // Get our button switcher
    let themeSwitcher = document.getElementById("theme-switcher");

    // When our button gets clicked
    themeSwitcher.onclick = function() {
      // Get the current selected theme, on the first run
      // it should be `light`
      let currentTheme = document.documentElement.getAttribute("data-theme");

      // Switch between `dark` and `light`
      let switchToTheme = currentTheme === "dark" ? "light" : "dark"

      // Set our currenet theme to the new one
      document.documentElement.setAttribute("data-theme", switchToTheme);
    }
  });