<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Admin Login Portal | New Tech Electronics </title>

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
          <div class="col-12">
            <p class="text-center title2 text-light">Welcome to New Tech Electronics&trade; ! Admin Panel</p>

          </div>
        </div>
      </div>
      <!-- header -->

      <!-- content -->
      <div class="col-12 p-3">
        <div class="row">

          <div class="col-7 d-none d-lg-block background"></div>
          <div class="col-12 col-lg-5">
            <div class="row g-2">
              <div class="col-12">
                <p class="title3 text-center text-light fw-bold text-uppercase">You Can Sign In Here</p>
              </div>
              <div class="col-12">
                <label class="form-label text-warning fw-bold">Email</label>
                <input type="email" class="form-control bg-transparent text-light fw-bold" placeholder="Enter Your Email Here" />
              </div>
              <div class="col-12 col-lg-6 d-grid">
                <a href="admin.php" class="btn btn-outline-primary fw-bold" >Send Verification code to login</a>
              </div>
              <div class="col-12 col-lg-6 d-grid">
                <a href="login.php" class="btn btn-outline-warning fw-bold">Back to Customer Login</a>
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