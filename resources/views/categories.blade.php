<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Categories</title>
  <link rel="stylesheet" href="styles.css">
  <script src="https://kit.fontawesome.com/426c14851d.js" crossorigin="anonymous"></script>
</head>
<body>
  <!-- Header Section  -->
  <section class="header">
    <div class="left-content">
      <a href=" {{ url('about') }}">
        <h3 class="logo">Honghong</h3>
      </a>
      <ul class="nav-links">
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Categories</a></li>
        <li><a href="#">FAQ</a></li>
      </ul>
    </div>
    <div class="right-content">
      <a href="login.html"><button class="btn btn-no-border">Log In</button></a>
      <a href="register.html"><button class="btn btn-border">Sign Up</button></a>
    </div>
  </section>

  <!-- Categories Section  -->
  <section class="categories">
    <header> Select a Category</header>
    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tempor <br> euismod elit id sodales. Quisque dictum blandit
    arcu, quis lobortis. </p>
    <div class="container">
      <div class="row">
        <div class="row-col">
          <i class="fa-solid fa-user-ninja"></i>
          <h5> Category <br> Name</h5>
          <a href="#"> <button class="btn btn-border">Select</button></a>
        </div>
        <div class="row-col">
          <i class="fa-solid fa-user-ninja"></i>
          <h5> Category <br> Name</h5>
          <a href="#"> <button class="btn btn-border">Select</button></a>
        </div>
        <div class="row-col">
          <i class="fa-solid fa-user-ninja"></i>
          <h5> Category <br> Name</h5>
          <a href="#"> <button class="btn btn-border">Select</button></a>
        </div>
      </div>
      <div class="row">
        <div class="row-col">
          <i class="fa-solid fa-user-ninja"></i>
          <h5> Category <br> Name</h5>
          <a href="#"> <button class="btn btn-border">Select</button></a>
        </div>
        <div class="row-col">
          <i class="fa-solid fa-user-ninja"></i>
          <h5> Category <br> Name</h5>
          <a href="#"> <button class="btn btn-border">Select</button></a>
        </div>
        <div class="row-col">
          <i class="fa-solid fa-user-ninja"></i>
          <h5> Category <br> Name</h5>
          <a href="#"> <button class="btn btn-border">Select</button></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section  -->
  <section class="footer-st">
    <h3>@Honghong Confessions</h3>
    <h3>Web Application Development</h3>
  </section>
</body>
</html>