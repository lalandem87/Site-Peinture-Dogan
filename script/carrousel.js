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
let avisCurrent = 0;
let avisVisible =
  window.innerWidth < 768 ? 1 : window.innerWidth < 1024 ? 2 : 3;
const avisTotal = document.querySelectorAll(".card-avis").length;

function getCardWidth() {
  const card = document.querySelector(".card-avis");
  const isMobile = window.innerWidth < 768;
  const gap = isMobile ? 0 : parseFloat(getComputedStyle(avisTrack).gap);
  return card.getBoundingClientRect().width + gap;
}

let cardWidth = getCardWidth();

setInterval(() => {
  cardWidth = getCardWidth();
  avisCurrent = avisCurrent < avisTotal - avisVisible ? avisCurrent + 1 : 0;
  avisTrack.style.transform = `translateX(-${avisCurrent * cardWidth}px)`;
}, 3000);

window.addEventListener("resize", () => {
  current = 0;
  slideWidth = sliders.querySelector(".slider").offsetWidth + 24;
  visible = window.innerWidth < 768 ? 1 : 3;
  sliders.style.transform = "translateX(0)";

  avisCurrent = 0;
  cardWidth = getCardWidth();
  avisVisible = window.innerWidth < 768 ? 1 : window.innerWidth < 1024 ? 2 : 3;
  avisTrack.style.transform = "translateX(0)";
});
