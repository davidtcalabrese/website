

// navbar functionality
// window.setTimeout(() => {
//   const navItems = document.querySelector(".nav-items");
//   const navBarToggle = document.querySelector("#navbar-toggle");

//   navBarToggle.addEventListener("click", () => {
//     navItems.classList.toggle("active");
//   });

//   // if navbar is toggled for small screen and screen resizes past 
//   // breakpoint (622px), toggle the navbar again
//   window.addEventListener('resize', () => {
//     const width = getWidth();
//     if (navItems.classList.contains("active")) {
//         if (width > 622) {
//           navItems.classList.toggle("active");
//         }
//     }
//   })
// }, 500)

// darkmode logic
let btn = document.querySelector("#theme-switcher");

const currentTheme = localStorage.getItem("theme");

document.addEventListener('DOMContentLoaded', function(event) {
  if (currentTheme == "dark") {
      document.body.classList.toggle("dark");
    } else if (currentTheme == "light") {
      document.body.classList.toggle("light");
    }

    btn.addEventListener("click", function() { 
      document.body.classList.toggle("dark");
      var theme = document.body.classList.contains("dark") ? "dark" : "light";
      localStorage.setItem("theme", theme);
  });
})



function getWidth() {
  return Math.max(
    document.body.scrollWidth,
    document.documentElement.scrollWidth,
    document.body.offsetWidth,
    document.documentElement.offsetWidth,
    document.documentElement.clientWidth
  );
}