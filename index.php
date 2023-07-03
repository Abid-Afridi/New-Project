<!DOCTYPE html>
<html>
<head>
  <title>Portfolio Landing Page</title>
  <link rel="stylesheet" type="text/css" href="core/config/style.css">
</head>
<body>
  <!-- Navbar -->
  <nav>
    <div class="logo">Logo</div>
    <ul class="nav-links">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About Us</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <div class="search-bar">
      <input type="text" placeholder="Search">
      <button type="submit">Search</button>
    </div>
    <div class="dropdown">
      <button class="dropdown-btn">Login / Sign Up</button>
      <div class="dropdown-content">
        <a href="#">Login</a>
        <a href="#">Sign Up</a>
      </div>
    </div>
  </nav>

  <!-- Top Div with Carousel -->
  <div class="top-div">
    <div id="carousel" class="carousel">
      <img src="image1.jpg" alt="Image 1">
      <img src="image2.jpg" alt="Image 2">
      <img src="image3.jpg" alt="Image 3">
    </div>
    <div class="top-div-content">
      <h1>Welcome to My Portfolio</h1>
      <p>Explore my work and services.</p>
      <a href="#services" class="btn">Learn More</a>
    </div>
  </div>

  <!-- Cards -->
  <div class="cards">
    <div class="card">
      <img src="image1.jpg" alt="Image 1">
      <h3>Card Title</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="card">
      <img src="image2.jpg" alt="Image 2">
      <h3>Card Title</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="card">
      <img src="image3.jpg" alt="Image 3">
      <h3>Card Title</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
  </div>

  <!-- Services -->
  <!-- <div id="services" class="services">
    <h2>Our Services</h2>
    <div class="service">
      <img src="service1.jpg" alt="Service 1">
      <h3>Service Title</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="service">
      <img src="service2.jpg" alt="Service 2">
      <h3>Service Title</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="service">
      <img src="service3.jpg" alt="Service 3">
      <h3>Service Title</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
  </div> -->
  
  <!-- About Services-->
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

  <!-- Contact Form -->
  <div id="contact" class="contact">
    <h2>Contact Me</h2>
    <form>
      <input type="text" placeholder="Name">
      <input type="email" placeholder="Email">
      <textarea placeholder="Message"></textarea>
      <button type="submit">Send Message</button>
    </form>
  </div>

  <!-- Footer -->
  <footer>
    <p>&copy; 2023 My Portfolio. All rights reserved.</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
