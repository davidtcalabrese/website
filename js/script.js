// darkmode logic
let btn = document.querySelector("#theme-switcher");

const currentTheme = localStorage.getItem("theme");

document.addEventListener("DOMContentLoaded", function (event) {
  if (currentTheme == "dark") {
    document.body.classList.toggle("dark");
  } else if (currentTheme == "light") {
    document.body.classList.toggle("light");
  }

  btn.addEventListener("click", function () {
    document.body.classList.toggle("dark");
    var theme = document.body.classList.contains("dark") ? "dark" : "light";
    localStorage.setItem("theme", theme);
  });
});


function setLinkColor() {
  const currentPath = window.location.pathname.split("/").pop();

  const navItems = document.querySelectorAll(".nav-item");

  navItems.forEach((item) => {
    const link = item.querySelector("a");

    if (link && link.getAttribute("href") === currentPath) {
      if (currentTheme == "dark") {
        link.style.color = "#fac901";
      } else {
        link.style.color = "#957b15";
      }
    }
  });
}
setLinkColor();

document.addEventListener("DOMContentLoaded", () => {
  setTimeout(() => {
    console.log("Setting link colors after delay...");
    setLinkColor();
  }, 100); 
});