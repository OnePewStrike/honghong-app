<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Honghong</title>
  <link rel="stylesheet" href="/css/styles.css">
  <script src="https://kit.fontawesome.com/426c14851d.js" crossorigin="anonymous"></script>
</head>
<body>
  <!-- Header Section  -->
  <section class="header no-border">
    <div class="left-content">
      <a href=" {{ url('home') }} ">
        <h3 class="logo">Honghong</h3>
      </a>
    </div>
    <div class="right-content">
      <a href=" {{ url('login') }} "><button class="btn btn-no-border">Log In</button></a>
      <a href=" {{ url('registration') }} "><button class="btn btn-border">Sign Up</button></a>
    </div>
  </section>

  <!-- Main Section  -->
  <section class="main-container">
    <header>Lorem ipsum dolor sit amet, <br>cosectetur adipscing elit</header>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sapien felis, <br> hendrerit id nisl vitae, malesuada euismod justo. Aenean eleifend arcu eget <br> ipsum efficitur fermentum. </p>
    <a href=" {{ url('registration') }} "><button class="btn btn-border-md">Get Connected</button></a>
  </section>

  <!-- Nav Section  -->
  <section class="nav-container">
    <div class="nav">
      <a href="">
        <h2>Check how it works</h2>
        <i class="fa-solid fa-angle-down"></i>
      </a>
    </div>
  </section>

  <!-- Banner One Section  -->
  <section class="banner-container" id="b-one">

  </section>

  <!-- Banner Two Section  -->
  <section class="banner-container" id="b-two">
    
  </section>

  <!-- Banner Three Section  -->
  <section class="banner-container" id="b-three">
    
  </section>
</body>
</html>