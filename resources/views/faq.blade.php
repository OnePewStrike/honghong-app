<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQs</title>
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
          <i class="fa-solid fa-ghost"></i>
          <a href="#">Scary</a>
        </button>
      </div>
    </div>
    <div class="right-content">
      <div class="breadcrumbs">
        <a href=" {{ url('home') }} ">Home</a>
        <i class="fa-solid fa-angle-right"></i>
        <a href=" {{ url('faq') }} ">FAQs</a>
      </div>
    </div>
    </ul>
  </section>

  <!-- FAQs Section -->
  <section class="faq-container">
    <header>Frequently Asked Questions (FAQs)</header>

    <div class="faq">
      <div class="question">
        <h3>Question 1</h3>
        
        <svg width="15" height="10" viewBox="0 0 42 45">
          <path d="M3 3L21 21L39 3" stroke="white" stroke-width="1" stroke-linecap="round"/>
        </svg>

      </div>
      <div class="answer">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper lorem et leo ultrices vulputate. Nam aliquet justo diam, in.</p>
      </div>
    </div>

    <div class="faq">
      <div class="question">
        <h3>Question 2</h3>
        
        <svg width="15" height="10" viewBox="0 0 42 45">
          <path d="M3 3L21 21L39 3" stroke="white" stroke-width="1" stroke-linecap="round"/>
        </svg>

      </div>
      <div class="answer">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper lorem et leo ultrices vulputate. Nam aliquet justo diam, in.</p>
      </div>
    </div>

    <div class="faq">
      <div class="question">
        <h3>Question 3</h3>
        
        <svg width="15" height="10" viewBox="0 0 42 45">
          <path d="M3 3L21 21L39 3" stroke="white" stroke-width="1" stroke-linecap="round"/>
        </svg>

      </div>
      <div class="answer">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper lorem et leo ultrices vulputate. Nam aliquet justo diam, in.</p>
      </div>
    </div>

    <div class="faq">
      <div class="question">
        <h3>Question 4</h3>
        
        <svg width="15" height="10" viewBox="0 0 42 45">
          <path d="M3 3L21 21L39 3" stroke="white" stroke-width="1" stroke-linecap="round"/>
        </svg>

      </div>
      <div class="answer">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper lorem et leo ultrices vulputate. Nam aliquet justo diam, in.</p>
      </div>
    </div>
  </section>

  <!-- FAQs Questions Section -->
  <section class="ask-questions">
    <h2>Still have questions?</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ullam possimus accusantium? <br> Labore ducimus numquam vitae sequi dicta illum voluptas!</p>
    <a href=" {{ url('contact') }} "><button class="btn btn-border">Contact Us</button></a>
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
  <script src="/js/app.js"></script>
</body>
</html>