// Image Slider
let heroBg = document.querySelector(".hero");

const slideImgs = [
   "linear-gradient(90deg,rgba(0, 0, 0, 0.5) 40%,rgba(0, 0, 0, 0.01)),url(./assets/hero-2.jpg)",
   "linear-gradient(90deg,rgba(0, 0, 0, 0.5) 40%,rgba(0, 0, 0, 0.01)),url(./assets/hero-1.jpg)",
];

let currentSlide = 0;

function slideMove() {
   if (currentSlide === 1) {
      currentSlide = 0;
   } else {
      currentSlide++;
   }
   heroBg.style.backgroundImage = slideImgs[currentSlide];
   heroBg.style.transition = "all ease-in-out 0.3s";
}

let setInt = setInterval(slideMove, 4000);

// Navbar

let navbar = document.querySelector(".navbar");

function navbarChange() {
   if (window.scrollY > 10) {
      navbar.style.backgroundColor = "#111";
   } else {
      navbar.style.backgroundColor = "transparent";
   }
}

window.addEventListener("scroll", navbarChange);

// close search area

let serachArea = document.querySelector(".search-display");
let cancle = document.querySelector(".item-cancle");
let orderBtn = document.querySelector(".order-btn");

if (serachArea) {
   cancle.addEventListener("click", function () {
      serachArea.style.display = "none";
   });
}
