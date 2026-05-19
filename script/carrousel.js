const sliders = document.querySelector(".sliders");
const btnNext = document.querySelector(".btn-next");
const btnPrev = document.querySelector(".btn-previous");

const slideWidth = sliders.querySelector(".slider").offsetWidth + 24;
let current = 0;
const total = document.querySelectorAll(".slider").length;
const visible = 3;

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
