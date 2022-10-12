<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Page</title>
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
        <li><a href=" {{ url('faq') }} ">FAQs</a></li>
      </ul>
    </div>
    <div class="right-content">
      <a href=" {{ url('login') }} "><button class="btn btn-no-border">Log In</button></a>
      <a href=" {{ url('registration') }} "><button class="btn btn-border">Sign Up</button></a>
    </div>
  </section>


  <!-- Breadcrumbs Section  -->
  <section class="bc-container">
    <h4>breadcrumbs > placeholder > here </h4>
  </section>

  <!-- Profile View Section  -->
  <section class="pv-container">
    <header>Profile Page</header>
    <div class="icon"><i class="fa-solid fa-user"></i></div>
    <div class="user-details">
      <h3>Username placeholder</h3>
      <h3>Date account created</h3> 
    </div>
  </section>

    <!-- Tab Selectors Section  -->
  <section class="tabs-container">
    <div class="tabs">
      <div class="tabs-actions">
        <span class="tabs-toggle is-active">Selector 1</span>
        <span class="tabs-toggle">Selector 2</span>
      </div>
      <div class="tabs-body">
        <div class="tabs-content is-active">
          <h2 class="tabs-title"> Title One</h2>
          <p class="tabs-text">1 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur dolorem deleniti
            iste corrupti et aliquam aliquid reiciendis tenetur minima culpa?</p>
        </div>
        <div class="tabs-content">
          <h2 class="tabs-title"> Title Two</h2>
          <p class="tabs-text">2 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur dolorem deleniti
            iste corrupti et aliquam aliquid reiciendis tenetur minima culpa?</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section  -->
  <section class="footer-st">
    <h3>@Honghong Confessions</h3>
    <h3>Web Application Development</h3>
  </section>
  <script src="app.js"></script>
</body>
</html>