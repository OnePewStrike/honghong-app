<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> About </title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="/css/styles.css">
  <script src="https://kit.fontawesome.com/426c14851d.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Header Section  -->
  <section class="header">
    <div class="left-content">
      <a href=" {{ url('home') }} ">
        <h3 class="logo">Honghong</h3>
      </a>
      <ul class="nav-links">
        <li><a href=" {{ url('about') }}">About</a></li>
        <li><a href=" {{ url('contact') }} ">Contact</a></li>
        <li><a href=" {{ url('categories') }} ">Categories</a></li>
        <li><a href=" {{ url('faq') }} ">FAQs</a></li>
      </ul>
    </div>
    <div class="right-content">
      <a href=" {{ url('login') }} "><button class="btn btn-no-border">Log In</button></a>
      <a href=" {{ url('registration') }} "><button class="btn btn-border">Sign Up</button></a>
    </div>
  </section>

  <!-- Sub-header Section  -->
  <section class="sub-header">
    <div class="left-content">
      <div class="content-col">
        <button>
          <i class="fa-solid fa-heart"></i>
          <a href="#">Love+Relationships</a>
        </button>
      </div>
      <div class="content-col">
        <button>
          <i class="fa-solid fa-book-skull"></i>
          <a href="#">Confession+Secrets</a>
        </button>
      </div>
      <div class="content-col">
        <button>
          <i class="fa-solid fa-face-angry"></i>
          <a href="#">Hate </a>
        </button>
    </div>
      <div class="content-col">
        <button>
          <i class="fa-solid fa-microphone"></i>
          <a href="#">Opinion</a>
        </button>
      </div>
      <div class="content-col">
        <button>
          <i class="fa-solid fa-landmark"></i>
          <a href="#">Political </a>
        </button>
      </div>
      <div class="content-col">
        <button>
          <i class="fa-solid fa-landmark"></i>
          <a href="#">Scary</a>
        </button>
      </div>
    </div>
    <div class="right-content">
      <div class="breadcrumbs">
        <a href=" {{ url('home') }} ">Home</a>
        <i class="fa-solid fa-angle-right"></i>
        <a href=" {{ url('about')  }} ">About</a>
      </div>
    </div>
    </ul>
  </section>

  <!-- Introduction Section  -->
  <section class="intro">
    <div class="left-intro">
      <header> Introduction <br> placeholder </header>
      <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Illo deleniti ipsa, nostrum. </p>
      <a href="#"><button class="btn btn-border">Get Started</button></a>

      <div class="lower-content">
        <h3>Follow Us</h3>
        <div class="links">
          <div class="link-col">
            <i class="fa-brands fa-facebook"></i>
            <h2>Facebook</h2>
          </div>
          <div class="link-col">
            <i class="fa-brands fa-instagram"></i>
            <h2>Instagram</h2>
          </div>
          <div class="link-col">
            <i class="fa-brands fa-twitter"></i>
            <h2>Twitter</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="right-img">
      <img src="/images/knight.png" alt="#">
    </div>
  </section>

  <!-- Content Collection Section  -->
  <section class="collection">
    <h1>Check Our Collection</h1>
    <p class="message">See all of them? <a href=" {{ url('categories') }} ">Categories</a></p>
    <div class="row">
      <div class="content-col">
        <h3>Category Name</h3>
        <p># of collection</p>
      </div>
      <div class="content-col">
        <h3>Category Name</h3>
        <p># of collection</p>
      </div>
      <div class="content-col">
        <h3>Category Name</h3>
        <p># of collection</p>
      </div>
    </div>
    <div class="row">
      <div class="content-col">
        <h3>Category Name</h3>
        <p># of collection</p>
      </div>
      <div class="content-col">
        <h3>Category Name</h3>
        <p># of collection</p>
      </div>
      <div class="content-col">
        <h3>Category Name</h3>
        <p># of collection</p>
      </div>
    </div>
  </section>

  <!-- Content Banner Section  -->
  <section class="banner-container">
    <div class="banner">
      <div class="left-content">
        <header> Engage with others <br> anonymously online  </header>
        <div class="detail-row">
          <i class="fa-sharp fa-solid fa-circle-check"></i>
          <h3> Lorem ipsum dolor </h3>
        </div>
        <h5>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Excepturi, hic?</h5>
        <div class="detail-row">
          <i class="fa-sharp fa-solid fa-circle-check"></i>
          <h3> Lorem ipsum dolor </h3>
        </div>
        <h5>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Excepturi, hic?</h5>
        <div class="detail-row">
          <i class="fa-sharp fa-solid fa-circle-check"></i>
          <h3> Lorem ipsum dolor </h3>
        </div>
        <h5>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Excepturi, hic?</h5>
      </div>
      <div class="right-content">
      </div>
    </div>
  </section>


  <!-- Join Section  -->
  <section class="join">
    <header> Lorem ipsum </header>
    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h4>
    <a href="#"><button class="btn btn-border">Get Connected</button></a>
  </section>

  <!-- Footer Section -->
  <section class="footer">
    <div class="row">
      <div class="content-col">
        <ul>
          <li class="title">Categories</li>
          <li>Category Name 1</li>
          <li>Category Name 2</li>
          <li>Category Name 3</li>
          <li>Category Name 4</li>
          <li>Category Name 5</li>
        </ul>
      </div>
      <div class="content-col">
        <ul>
          <li class="title">Link Group 1</li>
          <li>Link Name 1</li>
          <li>Link Name 2</li>
          <li>Link Name 3</li>
        </ul>
      </div>
      <div class="content-col">
        <ul>
          <li class="title">Link Group 1</li>
          <li>Link Name 1</li>
          <li>Link Name 2</li>
          <li>Link Name 3</li>
        </ul>
      </div>
      <div class="content-col">
        <ul>
          <li class="title">Contact</li>
          <li>Address</li>
          <li>Email</li>
          <li>Number</li>
        </ul>
      </div>
    </div>
    <div class="horizontal-line"></div>
    <div class="footer-details">
      <h5>@2022 Honghong Confession Vault</h5>
      <h5>Follows Us</h5>
    </div>
  </section>
</body>
</html>