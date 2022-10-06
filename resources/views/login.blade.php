<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <!-- Header Section  -->
  <section class="header login">
    <div class="left-content">
      <a href=" {{ url('home') }} ">
        <h3 class="logo">Honghong</h3>
      </a>
    </div>
  </section>

  <!-- Login Section  -->
  <section class="hero">
    <div class="wrapper">
      <div class="form signup" style="margin-top: 20px">
        <header>Login to Honghong</header>
        <form action="{{ route('login-user') }}" method="post">
          @if(Session::has('success'))
          <div class="success-txt">
            {{ Session::get('success') }}
          </div>
          @endif
          @if(Session::has('fail'))
          <div class="error-txt">
            {{ Session::get('fail') }}
          </div>
          @endif
          @csrf
          <div class="field input">
            <label for="username">Username</label>
            @error('username')
            <span class="text-danger"> 
              {{ $message }} 
            </span>
            @enderror
            <input type="text" class="form-control" placeholder="Enter your username" name="username" value="{{ old('username') }}">
          </div>
          <div class="field input">
            <label for="password">Password</label>
            @error('password')
            <span class="text-danger"> 
              {{ $message }} 
            </span>
            @enderror
            <input type="password" class="form-control" placeholder="Enter your password" name="password" value="{{ old('password') }}">
          </div>
          <div class="link">Don't have an account? <a href="{{ url('registration') }}"> Register now </a></div>
          <div class="actions">
            <button type="submit" class="btn btn-border">Login</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  {{-- Footer Section  --}}
  <section class="footer-st">
    <h5>@Honghong Confessions</h5>
    <h5>Web Application System</h5>
  </section>

</body>
</html>