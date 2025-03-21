<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="bootstrap.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

  <title>New Tech Electronics | Cart</title>

  <link rel="icon" href="resources\logo.ico" />

</head>

<body class="signup-bg">
  <div class="container-fluid">
    <div class="row">

      <?php include "header.php";?>

      <div class="col-12 pt-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item fw-bold"><a href="home.php">Home</a></li>
            <li class="breadcrumb-item active text-light" aria-current="page">Cart</li>
          </ol>
        </nav>
      </div>

      <div class="col-12 border border-1 border-primary rounded mb-3 signup-bg">
        <div class="row">
          <div class="col-12 text-center">
            <label class="form-label fs-1 fw-bolder text-primary title2">CART <i class="bi bi-cart4 fs-1 text-light"></i></label>
          </div>


          <div class="col-12">
            <hr class="border border-2 border-primary" />
          </div>
          <div class="col-12">
            <div class="row">
              <div class="offset-lg-2 col-lg-6 col-12 mb-3">
                <input type="text" class="form-control bg-transparent text-light fw-bold" placeholder="Search in CART...." />
              </div>

              <div class="col-12 col-lg-2 d-grid mb-3">
                <button class="btn btn-outline-info fw-bold text-light">Search</button>
              </div>
            </div>
          </div>

          <div class="col-12">
            <hr class="border border-2 border-primary" />
          </div>

          <!-- Empty View -->
          <!-- <div class="col-12">
            <div class="row">
              <div class="col-12 emptyCart"></div>
              <div class="col-12 text-center mb-2">
                <label class="form-label fs-1 fw-bold text-warning">
                  You have No items in your Cart...
                </label>
              </div>
              <div class="offset-lg-3 col-12 col-lg-6 d-grid mb-3">
              <a href="home.php" class="btn bg-transparent border border-2 border-info text-info fs-3 fw-bold"><img src="resources\ladycart.png"/>  Start Shopping</a>
              </div>
            </div>
          </div> -->
          <!-- Empty View -->

          <!-- Product -->
          <div class="col-12 offset-lg-0 col-lg-9">
            <div class="row">

              <div class="card mb-3  mx-0 col-12 bg-transparent">
                <div class="row g-0">
                  <div class="col-md-12 mt-3 mb-3">
                    <div class="row">
                      <div class="col-12">
                        <span class="fw-bold text-light fs-5">Seller :</span>&nbsp;
                        <span class="fw-bold text-primary fs-5">Geeth Kalhara</span>&nbsp;
                      </div>
                    </div>
                  </div>

                  <hr>

                  <div class="col-md-4">

                    <img src="resources\tv\Samsung-65-4k-curved-tv.jpg" class="img-fluid rounded-start" style="max-width: 250px;">
                  </div>
                  <div class="col-md-5">
                    <div class="card-body">

                      <h3 class="card-title text-primary">Samsung 4K UHD 65' Curved</h3>

                      <span class="fw-bold text-light">Colour : Black</span> &nbsp; |

                      &nbsp; <span class="fw-bold text-warning">Condition : Brand New</span>
                      <br>
                      <span class="fw-bold text-light fs-5">Price :</span>&nbsp;
                      <span class="fw-bold text-primary fs-5">Rs.960,000.00</span>
                      <br>
                      <span class="fw-bold text-light fs-5">Quantity :</span>&nbsp;
                      <input type="number" class="mt-3 border border-2 border-secondary fs-4 fw-bold px-3 cardqtytext" value="20">
                      <br><br>
                      <span class="fw-bold text-light fs-5">Delivery Fee :</span>&nbsp;
                      <span class="fw-bold text-primary fs-5">Rs.2500.00</span>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card-body d-grid">
                      <a class="btn bg-transparent border border-2 border-primary text-primary mb-2 fw-bold">Buy Now</a>
                      <a class="btn bg-transparent border border-2 border-warning text-danger mb-2 fw-bold">Remove</a>
                    </div>
                  </div>

                  <hr>

                  <div class="col-md-12 mt-3 mb-3">
                    <div class="row">
                      <div class="col-6 col-md-6">
                        <span class="fw-bold fs-5 text-light">Requested Total <i class="bi bi-info-circle"></i></span>
                      </div>
                      <div class="col-6 col-md-6 text-end">
                        <span class="fw-bold fs-5 text-primary">Rs.960,000.00</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product -->

          <!-- Summery -->

          <div class="col-12 col-lg-3">
            <div class="row">

              <div class="col-12">
                <label class="form-label fs-3 fw-bold text-light">Summary</label>
              </div>

              <div class="col-12">
                <hr />
              </div>

              <div class="col-6 mb-3">
                <span class="fs-6 fw-bold text-light">items (1)</span>
              </div>

              <div class="col-6 text-end mb-3">
                <span class="fs-6 fw-bold text-primary">Rs. 960,000 .00</span>
              </div>

              <div class="col-6">
                <span class="fs-6 fw-bold text-light">Shipping</span>
              </div>

              <div class="col-6 text-end">
                <span class="fs-6 fw-bold text-primary">Rs. 2500 .00</span>
              </div>

              <div class="col-12 mt-3">
                <hr />
              </div>

              <div class="col-6 mt-2">
                <span class="fs-4 fw-bold text-light">Total</span>
              </div>

              <div class="col-6 mt-2 text-end">
                <span class="fs-5 fw-bold text-warning">Rs. 960,000 .00</span>
              </div>

              <div class="col-12 mt-3 mb-3 d-grid">
                <a href="invoice.php" class="btn bg-transparent border border-2 border-warning text-warning fs-5 fw-bold">CHECKOUT</a>
              </div>

            </div>
          </div>
          <!-- Summery -->
        </div>
      </div>

      <?php include "footer.php";?>
    </div>
  </div>

  <script src="script.js"></script>
  <script src="bootstrap.bundle.js"></script>
</body>

</html>