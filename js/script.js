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
    setNavColor(localStorage.getItem("theme"));

    setTimeout(() => setLinkColor(localStorage.getItem("theme")), 100);
  });
});


function setLinkColor(currentTheme) {
  const currentPath = window.location.pathname.split("/").pop();

  const navItems = document.querySelectorAll(".nav-item");

  navItems.forEach((item) => {
    const link = item.querySelector("a");

    if (link && link.getAttribute("href") === currentPath) {
      if (currentTheme == "dark") {        
        link.style.color = "#fac901";
      } else {
        link.style.color = "#000";
      }
    }
  });
}

function setNavColor(currentTheme) {
  setTimeout(() => {
    const nav = document.querySelector("#nav");

    if (currentTheme == "dark") {
      nav.classList.remove("navbar-light");
      nav.classList.add("navbar-dark");
    } else if (currentTheme == "light") {
      nav.classList.remove("navbar-dark");
      nav.classList.add("navbar-light");
    }
  
  }, 100);
}

document.addEventListener("DOMContentLoaded", () => {
  setTimeout(() => {
    setLinkColor(localStorage.getItem("theme"));
    setNavColor(localStorage.getItem("theme"));
  }, 100); 
});
