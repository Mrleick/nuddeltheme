let currentSlide = 0;

function showSlide(index) {
  const sliderContainer = document.querySelector(".slider-container");
  const slideWidth = document.querySelector(".slide").offsetWidth;

  currentSlide = index;
  sliderContainer.style.transform = `translateX(-${
    currentSlide * slideWidth
  }px)`;
}

function nextSlide() {
  const totalSlides = document.querySelectorAll(".slide").length;

  if (currentSlide < totalSlides - 1) {
    currentSlide++;
  } else {
    currentSlide = 0;
  }

  showSlide(currentSlide);
}

function prevSlide() {
  const totalSlides = document.querySelectorAll(".slide").length;

  if (currentSlide > 0) {
    currentSlide--;
  } else {
    currentSlide = totalSlides - 1;
  }

  showSlide(currentSlide);
}

setInterval(() => {
  nextSlide();
}, 5000);
