<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <!-- Header Section  -->
  <section class="header login">
    <div class="left-content">
      <a href=" {{ url('about') }} ">
        <h3 class="logo">Honghong</h3>
      </a>
    </div>
  </section>
  
  <!-- Register Section  -->
  <section class="hero">
    <div class="wrapper">
      <div class="form signup" style="margin-top: 20px">
        <header>Register to Honghong</header>
        <form action="{{route('register-user')}}" method="post">
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
            <input type="text" class="form-control" placeholder="Enter a new username" name="username" value="{{ old('username') }}">
          </div>
          <div class="field input">
            <label for="password">Password</label>
            @error('password')
            <span class="text-danger"> 
              {{ $message }} 
            </span>
            @enderror
            <input type="password" class="form-control" placeholder="Enter a new password" name="password" value="{{ old('password') }}">
          </div>
          <div class="link">Already have an account? <a href="{{ url('login') }}"> Login now </a></div>
          <div class="actions">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  {{-- Footer Section  --}}
  <section class="footer">
    <div class="footer-details">
      <h5>@Honghong Confessions</h5>
      <h5>Web Application System</h5>
    </div>
  </section>

</body>
</html>