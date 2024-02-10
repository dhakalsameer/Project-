<!DOCTYPE html>
<html>
<head>
  <title>Gorkhali Gym Login</title>
  <link rel="stylesheet" type="text/css" href="./css/styles.css">
</head>
<body>
  <div class="login-container">
    <h1>Welcome to Gorkhali Gym</h1>
    <form id="login-form" action="goto.php" method="post">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>
      <input type="submit" value="Login" name="sub">
    </form>
    <p class="sign">Don't have an account? <a href="form.php">Sign up</a></p>
  </div>
</body>
</html>
