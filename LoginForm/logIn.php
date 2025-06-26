<?php
include("../herbdb.php");

session_start();
session_destroy();
session_start();

$error = '';

if (isset($_POST['username'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $loginquery = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $loginresult = executeQuery($loginquery);

  if (mysqli_num_rows($loginresult) > 0) {
    while ($row = mysqli_fetch_assoc($loginresult)) {
      $_SESSION['username'] = $row['username'];
      $_SESSION['password'] = $row['password'];
    }
    header("Location: admin/admin.php");
    exit();
  } else {
    $error = "NO USER FOUND";
  }
}
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <style>
    body {
      background-image: url('img/logInBackground.gif');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      min-height: 100vh;
      margin: 0;
    }

    .login-container {
      min-height: 100vh;
      display: flex;
      align-items: center;
      backdrop-filter: blur(3px);
    }

    .desktop-logo {
      max-height: 300px;
    }

    @media (min-width: 768px) {
      .desktop-logo {
        max-height: 500px;
      }
    }

    .login-box {
      background: rgba(137, 166, 79, 0.4);
      border-radius: 15px;
      padding: 40px 50px;
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.4);
      width: 100%;
      max-width: 400px;
    }

    .form-control {
      border-radius: 10px;
      background-color: rgba(255, 255, 255, 0.7);
      border: none;
      height: 45px;
    }

    .btn-login {
      background-color: rgba(255, 255, 255, 0.8);
      border: none;
      border-radius: 20px;
      padding: 8px 0;
      font-weight: bold;
    }

    .btn-login:hover {
      background-color: rgba(255, 255, 255, 0.6);
    }
  </style>
</head>

<body>
  <div class="container login-container">
    <div class="row justify-content-center align-items-center w-100">

      <div class="col-md-6 d-flex justify-content-center align-items-center order-1 order-md-1 mb-4 mb-md-0">
        <img src="img/pharmaHerbLogo.png" alt="Logo" class="img-fluid desktop-logo">
      </div>

      <div class="col-md-6 d-flex justify-content-center align-items-center order-2 order-md-2">
        <div class="login-box">
          <?php if (!empty($error)): ?>
            <div class="alert alert-danger"><? echo($error) ?></div>
          <?php endif; ?>
          <form method="POST" action="">
            <div class="mb-4">
              <label for="username" class="form-label text-dark">Username</label>
              <input type="text" name="username" id="username" class="form-control" placeholder="username" required>
            </div>
            <div class="mb-5">
              <label for="password" class="form-label text-dark">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="password" required>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-login">Log In</button>
            </div>
            <div class="d-grid">
               <a href="../herbslist.php" class="text-white text-decoration-underline text-center mt-3">Back to Home</a>
            </div>

          </form>
        </div>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>
</body>

</html>
