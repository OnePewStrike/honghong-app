<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Post</title>
  <link rel="stylesheet" href="styles.css">
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

  <!-- Breadcrumbs Section  -->
  <section class="bc-container">
    <h4>breadcrumbs > placeholder > here </h4>
  </section>

  <!-- Content Post Section  -->
  <section class="pc-container">

    <div class="row">
      <div class="content-col">
        <div class="icon"><i class="fa-solid fa-user"></i></div>
        <h3>Username</h3>
      </div>
      <div class="content-col">
        <div class="icon"><i class="fa-solid fa-flag-pennant"></i></i></i></div>
        <h3>Date Posted</h3>
      </div>
    </div>

    <div class="horizontal-line"></div>

    <div class="header-details">
      <i class="fa-solid fa-quote-left"></i>
      <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
    </div>
    <p>Lorem ipsum dolor sit amet, cosectetur adipiscing elit. Duis at tincidunt ex, nonn malesuada orci Proin ipsum tellus, mollis quis ipsum imperdiet, scelerisque laoreet nulla.</p>

    <div class="fav-icon">
      <button>
        <div class="icon"><i class="fa-solid fa-heart"></i></div>
        <span>Add to Favorite</span>
      </button>
    </div>

  </section>

  <!-- Comments Section  -->
  <section class="ms-container">
    <div class="header-details">
      <h1># Comments</h1>
      <button class="btn btn-border-md" onclick="openCPopup()">Leave a Comment</button>
    </div>
    <div class="row">
      <div class="content-col"></div>
      <div class="content-col"></div>
      <div class="content-col"></div>
    </div>
    <div class="action">
      <button class="btn btn-border-md">Show More</button>
    </div>
  </section>

  <!-- Post Comment Pop-Up Section  -->
  <section class="cpop-container">
    <div class="content-cpop" id="cpopup">
      <form action="#">
        <div class="header">
          <h2>Leave a Comment</h2>
          <label for="click" class="fas fa-times" onclick="closeCPopup()"></label>
        </div>
  
        <div class="content-row">
          <h3>Your Comment</h3>
          <textarea required="required" class="comment"></textarea>
        </div>
  
        <div class="content-btn">
          <button type="button" class="btn btn-border">Post Content</button>
        </div>
      </form>
    </div>
  </section>

  <script>
    let popUp = document.getElementById("cpopup");

    function openCPopup() {
      popup.classList.add("open-cpopup");
    }

    function closeCPopup() {
      popup.classList.remove("open-cpopup");
    }
  </script>

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