<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-dazdB2I+gYs4xTmW4PqFPrxG2Z2UBl1K5oFfjJ6YLjN6d5E68zvTgXM2ZGDVv0VYxR0Zi0kp5Q5SErj4p+GGvAA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Login Form</title>
  <style>
    body {
      background-color: #f8f9fa;
    }
    .login-container {
      max-width: 400px;
      margin: 100px auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    }
    .icon {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      left: 15px;
      color: #ccc;
    }
    .form-control {
      padding-left: 40px;
    }
    .login-btn {
      transition: background-color 0.3s ease, color 0.3s ease;
    }
    .login-btn:hover {
      background-color: #007bff;
      color: #fff;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="login-container">
    <h2 class="text-center mb-4">Login</h2>
    
    <form>
      <div class="mb-3 position-relative">
        <i class="fas fa-users"></i>
        <label for="username" class="form-label visually-hidden">Username</label>
        <input type="text" class="form-control" id="username" placeholder="Enter your username" required>
      </div>

      <div class="mb-3 position-relative">
        <i class="fas fa-lock"></i>
        <label for="password" class="form-label visually-hidden">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
      </div>

      <div class="mb-3 position-relative">
        <i class="fas fa-lock"></i>
        <label for="confirmPassword" class="form-label visually-hidden">Confirm Password</label>
        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password" required>
      </div>

      <button type="submit" class="btn btn-primary w-100 login-btn">Login</button>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuA7DP/1k0q6uZx9KECfM5V9qH7p/qqcG6g/tSvxNaaI3A1b" crossorigin="anonymous"></script>
</body>
</html>
