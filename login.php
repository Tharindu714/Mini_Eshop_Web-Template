<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>New Tech Electronics | Login</title>

  <link rel="stylesheet" href="bootstrap.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css" />

  <link rel="icon" href="resources\logo.ico" />

</head>

<body class="signup-bg">

  <div class="container-fluid vh-100 d-flex justify-content-center">
    <div class="row align-content-center">

      <!-- header -->
      <div class="col-12">
        <div class="row">

          <div class="col-12 logo2"></div>
          <div class=" col-12">
            <p class="text-center title2 text-light">Great to have you as a new member</p>

          </div>
        </div>
      </div>
      <!-- header -->

      <!-- content -->
      <div class="col-12 p-3">
        <div class="row">

          <div class="col-6 d-none d-lg-block background"></div>
          <div class="col-12 col-lg-6">
            <div class="row g-2">
              <div class="col-12">
                <p class="title3 text-center text-light">LOGIN HERE</p>
              </div>
              <div class="col-12">
                <label class="form-label text-light fw-bold">Email</label>
                <input type="email" class="form-control bg-transparent text-light fw-bold" placeholder="Enter Your Email Address" />
              </div>
              <div class="col-12">
                <label class="form-label text-light fw-bold">Password</label>
                <input type="password" class="form-control bg-transparent text-light fw-bold" placeholder="Enter Your Password" />
              </div>
              <div class="col-6">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="rememberme">
                  <label class="form-check-label text-info fw-bold">Remember Me</label>
                </div>
              </div>
              <div class="col-6 text-end">
                <a href="#" class="link-info" onclick="forgotPassword();">Forgot Password?</a>
              </div>
              <div class="col-12 col-lg-4 d-grid">
                <a href="home.php" class="btn bg-transparent border border-2 border-success text-success fw-bold" >SIGN IN</a>
              </div>
              <div class="col-12 col-lg-4 d-grid">
                <a href="index.php" class="btn bg-transparent border border-2 border-warning text-warning fw-bold">Not registerd ? SignUp Now</a>
              </div>

              <div class="col-12 col-lg-4 d-grid">
                <a href="adminSignin.php" class="btn bg-transparent border border-2 border-danger text-danger fw-bold">Sign As an admin</a>
              </div>
            </div>

          </div>

          <div class="col-12 fixed-bottom d-none d-lg-block">
            <p class="text-center text-light fw-bold">&copy; 2023 New Tech Electronics.lk || All Right Reserved</p>
          </div>
        </div>
      </div>

      <script src="script.js"></script>
      <script src="bootstrap.js"></script>

    </div>
  </div>

</body>

</html>
