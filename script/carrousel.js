const sliders = document.querySelector(".sliders");
const btnNext = document.querySelector(".btn-next");
const btnPrev = document.querySelector(".btn-previous");

let current = 0;
let slideWidth = sliders.querySelector(".slider").offsetWidth + 24;
let total = document.querySelectorAll(".slider").length;
let visible = window.innerWidth < 768 ? 1 : 3;

btnNext.addEventListener("click", (e) => {
  e.preventDefault();
  if (current < total - visible) {
    current++;
    sliders.style.transform = `translateX(-${current * slideWidth}px)`;
  }
});

btnPrev.addEventListener("click", (e) => {
  e.preventDefault();
  if (current > 0) {
    current--;
    sliders.style.transform = `translateX(-${current * slideWidth}px)`;
  }
});

window.addEventListener("resize", () => {
  current = 0;
  slideWidth = sliders.querySelector(".slider").offsetWidth + 24;
  visible = window.innerWidth < 768 ? 1 : 3;
  sliders.style.transform = "translateX(0)";
});

const avisTrack = document.querySelector(".avis-track");
let avisCurrent = 0;
const avisTotal = document.querySelectorAll(".card-avis").length;
const cardWidth = document.querySelector(".card-avis").offsetWidth;

setInterval(() => {
  avisCurrent = avisCurrent < avisTotal - 3 ? avisCurrent + 1 : 0;
  avisTrack.style.transform = `translateX(-${avisCurrent * (cardWidth + 24)}px)`;
}, 3000);
