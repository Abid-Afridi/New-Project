 const serviceCarousel = document.querySelector('.service-carousel');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

prevBtn.addEventListener('click', () => {
  serviceCarousel.scrollBy(-320, 0);
});

nextBtn.addEventListener('click', () => {
  serviceCarousel.scrollBy(320, 0);
});