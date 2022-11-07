<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Category</title>
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
        <li><a href=" {{ url('view-categories') }} "><i class="fa-solid fa-list"></i>Categories</a></li>
        <li class="last"><a href="" style="background: #fff; color: #1e3231;"><i class="fa-solid fa-users"></i>Users</a></li>
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

      <!-- Update User Section -->
      <section class="user-update">
        <div class="user-header">
          <div class="details">
            <div class="icon"></div>
            <h2>Update Category</h2>
          </div>
          <a href=" {{ url('view-users') }} "><button class="btn btn-quarternary">Go Back</button></a>
        </div>

        <!-- Category Form Section  -->
        <form action="#">
          <div class="field input">
            <label>Username</label>
            <input type="text" value="username value placeholder">
          </div>
          <div class="field input">
            <label>Email</label>
            <input type="text" value="email value placeholder">
          </div>
          <div class="field input">
            <label>Date created</label>
            <input type="text" value="date created value placeholder">
          </div>
          <div class="field input">
            <label>Role</label>
            <input type="text" value="role value placeholder">
          </div>
          <div class="actions">
            <button class="btn btn-quarternary">
              <input type="submit" value="Update">
            </button>
          </div>
        </form>

      </section>

    </section>

</body>

</html>