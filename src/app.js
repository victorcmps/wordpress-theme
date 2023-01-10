/** This file has the objective to centralize all the Javascript from the theme. */

window.addEventListener("DOMContentLoaded", () => {
  const menuButton = document.getElementById("nav-main-menu-button");
  const menuButtonClose = document.getElementById(
    "nav-main-menu-button--close"
  );
  const menuItems = document.getElementById("nav-main-menu-items");

  menuButton.addEventListener("click", () => {
    menuItems.style.display = "flex";
    menuButton.style.display = "none";
  });

  menuButtonClose.addEventListener("click", () => {
    menuItems.style.display = "none";
    menuButton.style.display = "flex";
  });
});
