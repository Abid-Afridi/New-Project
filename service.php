<!DOCTYPE html>
<html>
<head>
  <title>About Service Section</title>
  <style type="text/css">
    /* About Service Section */
.about-service {
  background-color: #f9f9f9;
  padding: 50px 0;
  text-align: center;
}

.about-service .container {
  max-width: 1200px;
  margin: 0 auto;
}

.about-service h2 {
  font-size: 36px;
  margin-bottom: 20px;
}

.service-carousel {
  display: flex;
  overflow-x: auto;
  scroll-behavior: smooth;
}

.service-card {
  flex: 0 0 300px;
  margin-right: 20px;
  background-color: #fff;
  text-align: center;
  border-radius: 5px;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease-in-out;
}

.service-card:hover {
  transform: scale(1.05);
}

.service-card img {
  max-width: 100%;
  height: auto;
  border-radius: 5px;
  margin-bottom: 10px;
}

.service-card h3 {
  margin-bottom: 10px;
}

.service-card p {
  font-size: 14px;
  color: #666;
}

.carousel-nav {
  margin-top: 20px;
}

.carousel-nav button {
  padding: 10px;
  margin: 0 5px;
  background-color: #555;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

/* Hide scrollbar */
.service-carousel::-webkit-scrollbar {
  display: none;
}

  </style>
</head>
<body>
  <section class="about-service">
    <div class="container">
      <h2>About Our Services</h2>
      <div class="service-carousel">
        <div class="service-card">
          <img src="service1.jpg" alt="Service 1">
          <h3>Service 1</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="service-card">
          <img src="service2.jpg" alt="Service 2">
          <h3>Service 2</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="service-card">
          <img src="service3.jpg" alt="Service 3">
          <h3>Service 3</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="service-card">
          <img src="service4.jpg" alt="Service 4">
          <h3>Service 4</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="service-card">
          <img src="service5.jpg" alt="Service 5">
          <h3>Service 5</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-nav">
        <button class="prev-btn">&#8249;</button>
        <button class="next-btn">&#8250;</button>
      </div>
    </div>
  </section>
  <script>
    const serviceCarousel = document.querySelector('.service-carousel');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

prevBtn.addEventListener('click', () => {
  serviceCarousel.scrollBy(-320, 0);
});

nextBtn.addEventListener('click', () => {
  serviceCarousel.scrollBy(320, 0);
});

  </script>
</body>
</html>
