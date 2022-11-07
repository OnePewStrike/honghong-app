<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Category</title>
  <script src="https://kit.fontawesome.com/426c14851d.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
  <section class="container-dashboard">
    <!-- Sidebar Section  -->
    <section class="sidebar">
      <header>Honghong</header>
      <h2>Dashboard</h2>
  
      <h3>Menu</h3>
      <ul>
        <li><a href=" {{ url('dashboard') }} "><i class="fa-solid fa-house-crack"></i>Overview</a></li>
        <li><a href="#" style="background: #fff; color: #1e3231;"><i class="fa-solid fa-list"></i>Categories</a></li>
        <li class="last"><a href=" {{ url('view-users') }} "><i class="fa-solid fa-users"></i>Users</a></li>
      </ul>
  
      <div class="bottom-content">
        <h2>Profile</h2>
        <h3>username placeholder</h3>
      </div>
  
      <a href="register.html"><button class="btn"><i class="fa-solid fa-right-from-bracket"></i>Log Out</button></a>
    </section>
  
    <section class="main">
      <!-- Welcome Section -->
      <section class="main-top">
        <div class="welcome">
          <h1>Welcome, (username)</h1>
          <i class="fa-solid fa-door-open"></i>
        </div>
        <div class="description">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
        </div>
  
      </section>

      <!-- Add Categories Section -->
      <section class="add-categories">
        <div class="category-header">
          <div class="category-details">
            <div class="icon"></div>
            <h2>Add Category</h2>
          </div>
          <a href=" {{ url('view-categories') }} "><button class="btn btn-quarternary">Go Back</button></a>
        </div>

        <!-- Category Form Section  -->
        <form action="#">
          <div class="field input">
            <label>Category Name</label>
            <input type="text" placeholder="Enter category name">
          </div>
          <div class="actions">
            <button class="btn btn-quarternary">
              <input type="submit" value="Add">
            </button>
          </div>
        </form>

      </section>

    </section>

</body>

</html>