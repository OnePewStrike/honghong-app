<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
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
        <li><a href="{{ url('home')}}">Home</a></li>
        <li><a href=" {{ url('about') }}">About</a></li>
        <li><a href=" {{ url('contact') }} ">Contact</a></li>
        <li><a href=" {{ url('categories') }} ">Categories</a></li>
      </ul>
    </div>
    <div class="right-content">
      <a href=" {{ url('login') }} "><button class="btn btn-no-border">Log In</button></a>
      <a href=" {{ url('registration') }} "><button class="btn btn-border">Sign Up</button></a>
    </div>
  </section>
  
  <!-- Sub-header Section  -->
  <section class="sub-header">
    <ul class="nav-links">
      <li><a href="#">Category 1</a></li>
      <li><a href="#">Category 2</a></li>
      <li><a href="#">Category 3</a></li>
      <li><a href="#">Category 4</a></li>
      <li><a href="#">More</a></li>
    </ul>
  </section>

  <!-- Contact Section  -->
  <div class="contact-container">
    <h2>Get in Touch</h2>
    <div class="row">
      <div class="contact-col">
        <form action="#" method="post">
          <h3>Send us a message</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing <br> elit. Etiam tempus turpis a est porta convallis <br> at at nisl.</p>
          <div class="contact-details">
            <div class="input">
              <span>Name*</span> 
              <input type="text" name="" required="required">
            </div>
            <div class="input">
              <span>Email*</span>
              <input type="email" name="" required="required">
            </div>
          </div>
          <div class="input message">
            <span>Message*</span>
            <br>
            <textarea required="required"></textarea>
          </div>
          <div class="input submit">
            <button type="submit" class="btn btn-border-md">Submit</button>
          </div>
        </form>
      </div>
      <div class="vertical-line"></div>
      <div class="contact-col">
        <h3>Email Us</h3>
        <p>Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit.</p>
        <div class="contact-pair">
          <div class="icon"><i class="fa-solid fa-envelope"></i></div>
          <h5>test@test.com</h5>
        </div>
        <h3>Call Us</h3>
        <p>Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit.</p>
        <div class="contact-pair">
          <div class="icon"><i class="fa-solid fa-phone"></i></div>
          <h5>09123456789</h5>
        </div>
      </div>
    </div>
  </div>

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