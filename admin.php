<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>New Tech Electronics | DASHBOARD </title>

  <link rel="stylesheet" href="bootstrap.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css" />

  <link rel="icon" href="resources\logo.ico" />

</head>

<body class="signup-bg">

  <div class="container-fluid">
    <div class="row">

      <!-- header -->
      <div class="col-12 head-bg">
        <div class="row">
          <div class="col-12 col-lg-4">
            <div class="row">
              <div class="col-12 col-lg-4 mt-lg-2 text-center">
                <img src="resources\proimg\geeth.jpeg" width="70px" height="70px" class="rounded-circle" />
              </div>
              <div class="col-12 col-lg-8">
                <div class="row text-center text-lg-start">
                  <div class="col-12 mt-0 mt-lg-3">
                    <span class="text-light fw-bold" style="font-size:25px;">Geeth Kalhara</span>
                  </div>
                  <div class="col-12">
                    <span class="text-light fw-bold">geethkalhara@gmail.com</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-8 ">
            <div class="row">
              <div class="col-12 col-lg-10 mt-1 my-lg-4">
                <h1 class="text-uppercase text-light offset-4 offset-lg-2 fw-bold">DASHBOARD</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- header -->

      <!-- body -->
      <div class="col-12">
        <div class="row">

          <!-- Side Bar -->
          <div class="col-11 col-lg-2 mx-3 my-3 border border-dark rounded">
            <div class="row">
              <div class="col-12 mt-3 fs-5">
                <div class="row">
                  <div class="col-12">
                    <label class="form-label text-uppercase text-primary text-center fw-bold fs-3">ADMIN PANEL</label>
                  </div>

                  <div class="col-12">
                    <button class="btn btn-outline-light fw-bold">DASHBOARD</button>
                  </div>
                  <br /><br />
                  <div class="col-12">
                    <button class="btn btn-outline-primary fw-bold" onclick="window.location = 'ManaageUser.php'">Manage User</button>
                  </div>
                  <br /><br />
                  <div class="col-12">
                    <button class="btn btn-outline-success fw-bold" onclick="window.location = 'Manageproduct.php'">Manage Product</button>
                  </div>

                  <div class="col-12 text-danger">
                    <hr style="width:80%;" />
                  </div>

                  <div class="col-12">
                    <label class="form-label text-uppercase text-primary text-center fw-bold fs-4">SELLING HISTORY</label>
                  </div>

                  <div class="col-12">
                    <input type="text" placeholder="Search From ..." class="rounded-pill border-info bg-transparent text-light">
                  </div>
                  <br /><br />

                  <div class="col-12">
                    <input type="text" placeholder="Search to ..." class="rounded-pill border-info bg-transparent text-light">
                  </div>

                  <div class="col-12 text-center mt-3 mb-3">
                    <div class="row g-2">
                      <div class="col-12 d-grid">
                        <button class="btn btn-outline-primary fw-bold">SEARCH</button>
                      </div>
                    </div>
                  </div>
                  <hr style="width:80%;" />

                  <div class="col-12">
                    <label class="form-label text-uppercase text-primary text-center fw-bold fs-4">DAILY SELLINGS</label>
                  </div>

                  <hr style="width:80%;" />


                </div>
              </div>
            </div>
          </div>
          <!-- SDide Bar -->

          <!-- Dashboard -->
          <div class="col-12 col-lg-9 mt-3 mb-3 bg-transparent text-center">
            <div class="col-12">
              <span class="fw-bold text-light title2">DASHBOARD</span>
            </div>

            <br /><br />

            <div class="row">
              <div class="offset-1 col-10 text-center">
                <div class="row justify-content-center">

                  <!-- Card -->
                  <div class="col-12 text-uppercase fs-4 fw-bold text-primary">
                    Today Sellings (5 Products)
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" aria-label="Default striped example" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <br /><br />
                  <div class="col-12 text-uppercase fs-4 fw-bold text-secondary">
                    Today Earnings (Rs.200,000)
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" aria-label="Success striped example" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <br /><br />
                  <div class="col-12 text-uppercase fs-4 fw-bold text-info">
                    Monthly Sellings (50 Product)
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" aria-label="Info striped example" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <br /><br />
                  <div class="col-12 text-uppercase fs-4 fw-bold text-warning">
                    Monthly Earning (Rs.1,000,000)
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" aria-label="Warning striped example" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <br /><br />
                  <div class="col-12 text-uppercase fs-4 fw-bold text-success">
                    Total Sellings (Rs.2,000,000)
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-label="Danger striped example" style="width: 85%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <br /><br />
                  <div class="col-12 text-uppercase fs-4 fw-bold text-danger">
                    Total Engagement (10 Members joined)
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" aria-label="Danger striped example" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <!-- Card -->
                  <br /><br />

                  <div class="col-12 text-danger">
                    <hr style="width:100%;" />
                  </div>

                  <div class="col-12 head-bg title3 text-light rounded-3">
                    Total Active Time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;00:00:00
                  </div>

                  <div class="col-12 text-danger">
                    <hr style="width:100%;" />
                  </div>

                  <br /><br />

                  <div class="card mb-3 col-lg-6 col-12 bg-transparent" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="resources\proimg\geeth.jpeg" class="img-fluid rounded-circle" />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h4 class="card-title fw-bold text-primary">Most Famous Seller</h4>
                          <p class="card-text fs-5 text-danger">Geeth Kalhara</p>
                          <p class="card-text fs-6 text-warning">geethkalhara@gmail.com</p>
                          <div><img src="resources\baddge1.png" style="width:70px;height:70px;" /></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-3 col-lg-6 col-12 bg-transparent" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="resources\products\xbox360 1.jpg" class="img-fluid rounded-start" />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h4 class="card-title fw-bold text-primary">Mostly Sold Item</h4>
                          <p class="card-text fs-5 text-danger">XBOX 360 Milk white</p>
                          <p class="card-text fs-6 text-warning">Rs. 200,000 .00</p>
                          <div><img src="resources\baddge1.png" style="width:70px;height:70px;" /></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br /><br />

              <div class="col-12 text-center">
                <a href="adminSignin.php" class="btn btn-outline-light border border-primary fw-bold text-primary rounded-5">Back to Admin Login <img src="resources\refresh.svg" style="width:50px; height:50px;" /></a>
              </div>
            </div>



          </div>
        </div>
        <!-- Dashboard -->
      </div>
    </div>
    <!-- body -->

  </div>
  </div>

  <script src="bootstrap.js"></script>

</body>

</html>