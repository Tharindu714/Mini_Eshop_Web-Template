<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>New Tech Electronics | My Products </title>

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
              <div class="col-12 col-lg-4 mt-1 mb-1 text-center">
                <img src="resources\proimg\geeth.jpeg" width="80px" height="80px" class="rounded-circle" />
              </div>
              <div class="col-12 col-lg-8">
                <div class="row text-center text-lg-start">
                  <div class="col-12 mt-0 mt-lg-3">
                    <span class="text-light fw-bold" style="font-size:25px;">Geeth Kalhara</span>
                  </div>
                  <div class="col-12">
                    <span class="text-light fw-bold">geethkalhara@gmail.com</span>
                  </div>

                  <!-- changes -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-8 ">
            <div class="row">
              <div class="col-12 col-lg-10 mt-1 my-lg-4">
                <h1 class="text-uppercase text-light offset-4 offset-lg-2 fw-bold">My Products</h1>
              </div>
              <div class="col-12 col-lg-2 mb-2 my-lg-4 mx-2 mx-lg-0 d-grid">
                <a href="Addproduct.php" class="btn btn-info fw-bold text-red-50 text-center mb-3 mt-1">Add Product</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- header -->

      <!-- body -->
      <div class="col-12">
        <div class="row">

          <!-- filter -->
          <div class="col-11 col-lg-2 mx-3 my-3 border border-dark rounded">
            <div class="row">
              <div class="col-12 mt-3 fs-5">
                <div class="row">
                  <div class="col-12">
                    <label class="form-label text-uppercase text-primary text-center fw-bold fs-3">filters</label>
                  </div>
                  <div class="col-11">
                    <div class="row">
                      <div class="col-10">
                        <input type="text" placeholder="What r u seeking..." class="form-control bg-transparent text-light fw-bold border border-primary rounded" />
                      </div>
                      <div class="col-1 p-1">
                        <label class="form-label text-warning"><i class="bi bi-search fs-5"></i></label>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <label class="form-label fw-bold text-light">Active Time</label>
                  </div>
                  <div class="col-12 text-danger">
                    <hr style="width:80%;" />
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio1" id="new">
                      <label class="form-check-label text-primary fw-bold" for="new">
                        Newest to orders
                      </label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio1" id="old">
                      <label class="form-check-label text-danger fw-bold" for="old">
                        Oldest to orders
                      </label>
                    </div>
                  </div>
                  <div class="col-12 mt-3">
                    <label class="form-label fw-bold text-light">By Quantity</label>
                  </div>
                  <div class="col-12 text-danger">
                    <hr style="width:80%;" />
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio2" id="high">
                      <label class="form-check-label text-primary fw-bold" for="high">
                        High to Low
                      </label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio2" id="low">
                      <label class="form-check-label text-danger fw-bold" for="low">
                        Low to High
                      </label>
                    </div>
                  </div>
                  <div class="col-12 mt-3">
                    <label class="form-label fw-bold text-light">By Condition</label>
                  </div>
                  <div class="col-12 text-danger">
                    <hr style="width:80%;" />
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio3" id="brandnew">
                      <label class="form-check-label text-success fw-bold" for="brandnew">
                        Brand New
                      </label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio3" id="used">
                      <label class="form-check-label text-warning fw-bold" for="used">
                        Used
                      </label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio3" id="mod">
                      <label class="form-check-label text-primary fw-bold" for="mod">
                        Modified
                      </label>
                    </div>
                  </div>
                  <div class="col-12 text-center mt-3 mb-3">
                    <div class="row g-2">
                      <div class="col-12 col-lg-6 d-grid">
                        <button class="btn btn-outline-primary fw-bold">SORT</button>
                      </div>
                      <div class="col-12 col-lg-6 d-grid">
                        <a href="Myproduct.php" class="btn btn-outline-light fw-bold">CLEAR</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- filter -->

          <!-- product -->
          <div class="col-12 col-lg-9 mt-3 mb-3 bg-transparent">
            <div class="row">
              <div class="offset-1 col-10 text-center">
                <div class="row justify-content-center">

                  <!-- Card -->
                  <div class="card mb-3 mt-3 col-12 col-lg-6 bg-transparent">
                    <div class="row">
                      <div class="col-md-4 mt-4">
                        <img src="resources\mobileprod\Galaxy F13 -1.jpg" class="img-fluid rounded-start" />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title fw-bold text-light">Samsung Galaxy F13 (Milk White) </h5>
                          <span class="card-text fw-bold text-primary">Rs.88000.00</span> <br />
                          <span class="card-text fw-bold text-success">40 items left </span><br />
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="fd" checked />
                            <label class="form-check-label fw-bold text-primary" for="fd"><b>Make Your Product Active</b></label>
                          </div>

                          <div class="col-12 text-center mt-3 mb-3">
                            <div class="row g-2">
                              <div class="col-12 col-lg-6 d-grid">
                                <a href="UpdatePro.php" class="btn btn-outline-info fw-bold">UPDATE</a>
                              </div>
                              <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-outline-danger fw-bold">DELETE</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-3 mt-3 col-12 col-lg-6 bg-transparent">
                    <div class="row">
                      <div class="col-md-4 mt-4">
                        <img src="resources\mobileprod\Galaxy F13.jpg" class="img-fluid rounded-start" />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title fw-bold text-light">Samsung Galaxy F13 (Army Green) </h5>
                          <span class="card-text fw-bold text-primary">Rs.88000.00</span> <br />
                          <span class="card-text fw-bold text-success">30 items left </span><br />
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="fd" checked />
                            <label class="form-check-label fw-bold text-primary" for="fd"><b>Make Your Product Active</b></label>
                          </div>

                          <div class="col-12 text-center mt-3 mb-3">
                            <div class="row g-2">
                              <div class="col-12 col-lg-6 d-grid">
                                <a href="UpdatePro.php" class="btn btn-outline-info fw-bold">UPDATE</a>
                              </div>
                              <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-outline-danger fw-bold">DELETE</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-3 mt-3 col-12 col-lg-6 bg-transparent">
                    <div class="row">
                      <div class="col-md-4 mt-4">
                        <img src="resources\mobileprod\Galaxy M53 -1.jpg" class="img-fluid rounded-start" />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title fw-bold text-light">Samsung Galaxy M53 (Aqua) </h5>
                          <span class="card-text fw-bold text-primary">Rs.90000.00</span> <br />
                          <span class="card-text fw-bold text-success">20 items left </span><br />
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="fd" checked />
                            <label class="form-check-label fw-bold text-primary" for="fd"><b>Make Your Product Active</b></label>
                          </div>

                          <div class="col-12 text-center mt-3 mb-3">
                            <div class="row g-2">
                              <div class="col-12 col-lg-6 d-grid">
                                <a href="UpdatePro.php" class="btn btn-outline-info fw-bold">UPDATE</a>
                              </div>
                              <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-outline-danger fw-bold">DELETE</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-3 mt-3 col-12 col-lg-6 bg-transparent">
                    <div class="row">
                      <div class="col-md-4 mt-4">
                        <img src="resources\mobileprod\Galaxy M53.jpg" class="img-fluid rounded-start" />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title fw-bold  text-light">Samsung Galaxy M53 (Devil Black) </h5>
                          <span class="card-text fw-bold text-primary">Rs.90000.00</span> <br />
                          <span class="card-text fw-bold text-success">40 items left </span><br />
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="fd" checked />
                            <label class="form-check-label fw-bold text-primary" for="fd"><b>Make Your Product Active</b></label>
                          </div>

                          <div class="col-12 text-center mt-3 mb-3">
                            <div class="row g-2">
                              <div class="col-12 col-lg-6 d-grid">
                                <a href="UpdatePro.php" class="btn btn-outline-info fw-bold">UPDATE</a>
                              </div>
                              <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-outline-danger fw-bold">DELETE</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Card -->
                </div>
              </div>
              <div class="offset-2 offset-lg-3 col-8 col-lg-6 text-center mb-3">
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-lg justify-content-center ">
                    <li class="page-item">
                      <a class="page-link bg-transparent" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>

                    <li class="page-item">
                      <a class="page-link bg-transparent" href="Myproduct5.php"> 1 </a>
                    </li>
                    <li class="page-item ">
                      <a class="page-link bg-transparent" href="Myproduct4.php"> 2 </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link bg-transparent" href="Myproduct3.php"> 3 </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link bg-transparent" href="Myproduct2.php"> 4 </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link bg-transparent" href="Myproduct1.php"> 5 </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link bg-transparent" href="Myproduct.php"> 6 </a>
                    </li>

                    <li class="page-item">
                      <a class="page-link bg-transparent" href="Myproduct5.php" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>

                <div class="col-12 text-center">
                <a href="home.php" class="btn btn-outline-light border border-primary fw-bold text-primary rounded-5">Back to home page <img src="resources\refresh.svg" style="width:50px; height:50px;"/></a>
              </div>
              </div>

            

            </div>
          </div>
          <!-- product -->
        </div>
      </div>
      <!-- body -->

      <?php include "footer.php"; ?>


    </div>
  </div>

  <script src="script.js"></script>
  <script src="bootstrap.js"></script>

</body>

</html>