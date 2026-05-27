function scrollToTop() {
  document.getElementById("nav-link-home").addEventListener("click", (e) => {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
}

scrollToTop();

function SetNavMobile() {
  const navMobile = document.querySelector(".nav-mobile");

  document.getElementById("btn-menu").addEventListener("click", () => {
    navMobile.classList.toggle("open");
  });

  document.querySelectorAll(".nav-mobile a").forEach((link) => {
    link.addEventListener("click", () => {
      navMobile.classList.remove("open");
    });
  });
}

SetNavMobile();
