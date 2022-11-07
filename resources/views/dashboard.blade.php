<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
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
        <li><a href="#" style="background: #fff; color: #1e3231;"><i class="fa-solid fa-house-crack"></i>Overview</a></li>
        <li><a href=" {{ url('view-categories') }} "><i class="fa-solid fa-list"></i>Categories</a></li>
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

      <section class="overview">
        <!-- Overview Section -->
        <div class="overview-top">
          <div class="icon"></div>
          <h2>Overview</h2>
        </div>

        <div class="row">
          <div class="content-col">
            <i class="fa-solid fa-users"></i>
            <h2># of users</h2>
          </div>
          <div class="content-col">
            <i class="fa-solid fa-list"></i>
            <h2># of categories</h2>
          </div>
          <div class="content-col">
            <i class="fa-solid fa-upload"></i>
            <h2># of posts</h2>
          </div>
          <div class="content-col">
            <i class="fa-solid fa-lock"></i>
            <h2># of admins</h2>
          </div>
        </div>
      </section>

      <!-- User and Category Tables Section -->
      <section class="tables-container">

        <div class="left-table">
          <div class="categories-top">
            <div class="icon"></div>
            <h2>Categories</h2>
          </div>

          <!-- Categories Collection Section -->
          <table class="table-content-one">
            <thead><tr>
              <th>ID</th>
              <th>name</th>
            </tr></thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>lorem</td>
              </tr>
              <tr>
                <td>2</td>
                <td>lorem</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="right-table">
          <div class="user-top">
            <div class="icon"></div>
            <h2>User</h2>
          </div>

          <!-- Users Collection Section -->
          <table class="table-content-two">
            <thead>
              <tr>
                <th>ID</th>
                <th>name</th>
                <th>email</th>
                <th>role</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>lorem</td>
                <td>lorem</td>
                <td>lorem</td>
              </tr>
              <tr>
                <td>2</td>
                <td>lorem</td>
                <td>lorem</td>
                <td>lorem</td>
              </tr>
            </tbody>
        </div>
      </section>
    </section>

</body>
</html>