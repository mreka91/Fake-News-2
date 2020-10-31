  
const navToggle = document.querySelector("#navToggle");
const navClosedIcon = document.querySelector("#navClosed");
const navOpenIcon = document.querySelector("#navOpen");
const navIcon = document.querySelectorAll(".navIcon");
const nav = document.querySelector("nav");

 /* On-click-function for hiding and showing open- and close-buttons based on which is clicked, calling css classes '.open' and '.hidden'*/

navToggle.addEventListener("click", () => {
  nav.classList.toggle("open");
  navIcon.forEach((icon) => {
    icon.classList.toggle("hidden");
  });
});

/* Function that hides or shows menu/burger based on screen-size, calling css classes '.open' and '.hidden' */

window.addEventListener(
  "resize", () => {
    if (document.body.clientWidth > 895) {
      nav.classList.remove("open");
      navIcon.forEach((icon) => {
        icon.classList.remove("hidden");
      });
      navOpenIcon.classList.add("hidden");
    }
  },
  { passive: false }
);