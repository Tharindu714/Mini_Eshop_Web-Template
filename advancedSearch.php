<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Advance Search |New Tech Electronics</title>

  <link rel="stylesheet" href="bootstrap.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="style.css" />

  <link rel="icon" href="resources\logo.ico" />
</head>

<body class="signup-bg">

  <div class="container-fluid">
    <div class="row">
      <div class="col-12 mb-2">
        <?php include "header.php"?>
      </div>

      <!-- Title Bar -->
      <div class="col-12 head-bg mb-2">
        <div class="row">
          <div class="offset-lg-4 col-12 col-lg-4">
            <div class="row">
              <div class="col-12 text-center">
                <p class=" text-light fw-bold title2 mb-4 pt-2">Advanced Search</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Title Bar -->

      <div class="offset-lg-2 col-12 col-lg-8 d-no rounded mb-2">
        <div class="row">

          <div class="offset-lg-1 col-12 col-lg-10">
            <div class="row">
              <div class="col-12 col-lg-10 mt-2 mb-1">
                <input type="text" class="form-control bg-transparent text-light fw-bold" placeholder="Type Keyword to search.." id="t" />
              </div>
              <div class="col-12 col-lg-2 mt-2 mb-1 d-grid">
                <button class="btn btn-primary fw-bold text-uppercase">Search</button>
              </div>
              <div class="col-12">
                <hr class="border border-2 border-light">
              </div>
            </div>
          </div>
          <div class="offset-lg-1 col-12  col-lg-10">
            <div class="row">
              <div class="col-12">
                <div class="row">
                  <div class="col-12 col-lg-4 mb-2">
                    <select class="form-select bg-transparent text-light" id="c1">
                      <option class="text-dark">Select Category</option>
                      <option class="text-dark">Mobile Phones</option>
                      <option class="text-dark">Video Game Consoles</option>
                      <option class="text-dark">LED & LCD TV</option>
                      <option class="text-dark">CCTV Survallance System </option>
                      <option class="text-dark">Radio Cassatte and Audio system </option>
                      <option class="text-dark">Kitchen Electrical Items</option>
                      <option class="text-dark">Video Games</option>
                    </select>
                  </div>
                  <div class="col-12 col-lg-4 mb-2">
                    <select class="form-select text-light bg-transparent" id="c1">
                      <option class="text-dark">Select Brand</option>
                      <option class="text-dark">Samsung</option>
                      <option class="text-dark">Sony</option>
                      <option class="text-dark">Apple</option>
                      <option class="text-dark">TCL</option>
                      <option class="text-dark">Nintendo</option>
                      <option class="text-dark">Singer</option>
                    </select>
                  </div>

                  <div class="col-12 col-lg-4 mb-2">
                    <select class="form-select bg-transparent text-light" id="c1">
                      <option class="text-dark">Select Model</option>
                      <option class="text-dark">Samsung Galaxy </option>
                      <option class="text-dark">Samsung S Series</option>
                      <option class="text-dark">Curved</option>
                      <option class="text-dark">UHD 4K </option>
                      <option class="text-dark">3D TV</option>
                      <option class="text-dark">Smart TV</option>
                      <option class="text-dark">Playstation</option>
                      <option class="text-dark">XBOX</option>
                      <option class="text-dark">PS portable</option>
                      <option class="text-dark">Nintendo</option>
                      <option class="text-dark">CCTV</option>
                    </select>
                  </div>

                  <div class="col-12 col-lg-6 mb-2">
                    <select class="form-select bg-transparent text-light">
                      <option class="text-dark">Select Condition</option>
                      <option class="text-dark">Brand NEW</option>
                      <option class="text-dark">Used</option>
                    </select>
                  </div>

                  <div class="col-12 col-lg-6 mb-2">
                    <select class="form-select bg-transparent text-light" >
                      <option>Select Color</option>
                      <option class="text-dark">Blue</option>
                      <option class="text-dark">Black</option>
                      <option class="text-dark">White</option>
                      <option class="text-dark">Red</option>
                      <option class="text-dark">Indigo</option>
                    </select>
                  </div>
                  <div class="col-12 col-lg-6 mb-2">
                    <input type="text" class="form-control bg-transparent text-light" placeholder="Price from" id="pf">
                  </div>
                  <div class="col-12 col-lg-6 mb-2">
                    <input type="text" class="form-control bg-transparent text-light" placeholder="Price to" id="pt">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="offset-lg-2 col-12 col-lg-8 rounded mb-2">
        <div class="row">
          <div class="offset-4 offset-lg-8 col-8 col-lg-4 mt-2 mb-2">
            <select class="form-select border bg-secondary border-start-0 border-top-0
            border-end-0 border-2 border-light shadow-none fw-bold text-light" id="s">
              <option value="0">SORT BY</option>
              <option value="1">PRICE HIGH TO LOW</option>
              <option value="2">PRICE LOW TO HIGH</option>
              <option value="3">QUANTITY HIGH TO LOW</option>
              <option value="4">QUANTITY LOW TO HIGH</option>
            </select>
          </div>
        </div>
      </div>

      <div class="offset-lg-2 col-12 col-lg-8 bg-transparent rounded mb-2">
        <div class="row">
          <div class="offset-lg-1 col-12 col-lg-10 text-center">
            <div class="row">
              <div class="offset-5 col-2 mt-5">
                <span class="fw-bold text-warning"><i class="bi bi-search" style="font-size:100px;">
                  </i>
                </span>
              </div>
              <div class="offset-3 col-6 mt-3 mb-5">
                <span class="h1 text-light title2 fw-bold">NO items Searched yet .....</span>
              </div>
            </div>
          </div>
        </div>
      </div>




      <?php include "footer.php"?>
    </div>
  </div>

  <script src="bootstrap.bundle.js"></script>
  <script src="script.js"></script>
</body>

</html>