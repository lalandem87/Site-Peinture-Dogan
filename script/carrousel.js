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

// AVIS
const avisTrack = document.querySelector(".avis-track");
const avisTotal = document.querySelectorAll(".card-avis").length;
let avisCurrent = 0;

function getAvisVisible() {
  return window.innerWidth < 768 ? 1 : window.innerWidth < 1024 ? 2 : 3;
}

function getCardWidth() {
  const card = document.querySelector(".card-avis");
  const gap = parseFloat(getComputedStyle(avisTrack).gap) || 0;
  return card.getBoundingClientRect().width + gap;
}

setInterval(() => {
  avisCurrent =
    avisCurrent < avisTotal - getAvisVisible() ? avisCurrent + 1 : 0;
  avisTrack.style.transform = `translateX(-${avisCurrent * getCardWidth()}px)`;
}, 3000);

window.addEventListener("resize", () => {
  current = 0;
  slideWidth = sliders.querySelector(".slider").offsetWidth + 24;
  visible = window.innerWidth < 768 ? 1 : 3;
  sliders.style.transform = "translateX(0)";

  avisCurrent = 0;
  avisTrack.style.transform = "translateX(0)";
});
