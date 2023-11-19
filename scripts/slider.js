let currentSlide = 0;

function startSlider() {
  let imageCount = document.querySelectorAll(".gallery img");

  if (imageCount.length === 0) {
    imageCount = document.querySelectorAll(".gallery img");
    images.style.transform = `translateX(0px)`;
    return;
  }

  let images = document.querySelector("ul");
  images.style.transition = "transform 1s ease";
  images.style.transform = `translateX(-${currentSlide * 100}vw)`;

  if (currentSlide === imageCount.length - 1) {
    currentSlide = 0;
  } else {
    currentSlide++;
  }
}
startSlider();

setInterval(() => {
  startSlider();
}, 6000);
