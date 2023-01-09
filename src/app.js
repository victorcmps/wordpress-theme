/** This file has the objective to centralize all the Javascript from the theme.
 * This can be a issue when you have a large theme because of the performance
 * (all the JavaScript is going to be loaded here) but since i am doing a static theme, i don't think this matters at the moment.**/

const menuButton = document.getElementById("nav-main-menu-button");
const menuButtonClose = document.getElementById("nav-main-menu-button--close");
const menuItems = document.getElementById("nav-main-menu-items");

menuButton.addEventListener("click", () => {
  menuItems.style.display = "flex";
  menuButton.style.display = "none";
});

menuButtonClose.addEventListener("click", () => {
  menuItems.style.display = "none";
  menuButton.style.display = "flex";
});
