<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>New Tech Electronics | Home Page </title>

  <link rel="stylesheet" href="bootstrap.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css" />

  <link rel="icon" href="resources\logo.ico" />

</head>

<body class="signup-bg">

  <div class="container-fluid">
    <div class="row">

      <?php include "header.php"; ?>

      <hr />

      <div class="col-12 justify-content-center">
        <div class="row mb-3">

          <div class="offset-4 offset-lg-1 col-4 col-lg-1 logo2" style="height: 60px;"></div>

          <div class="col-12 col-lg-6">

            <div class="input-group mt-3 mb-3">
              <input type="text" class="form-control bg-transparent text-light fw-bold" aria-label="Text input with dropdown button" placeholder="Serach Whatever you want....">

              <select class="form-select bg-secondary text-light fw-bold" style="max-width: 250px;">
                <option>All Categories</option>
                <option>Video Game Console</option>
                <option>Mobile Phones</option>
                <option>LCD & LED TV</option>
                <option>CCTV Survallance System</option>
                <option>Radio Cassatte and Audio system </option>
                <option>Kitchen Electrical Items </option>
                <option>Video Games </option>

              </select>

            </div>

          </div>

          <div class="col-12 col-lg-2 d-grid">
            <button class="btn btn-bg-transparent border border-2 border-primary mt-3 mb-3 text-primary">SEARCH</button>
          </div>

          <div class="col-12 col-lg-2 mt-2 mt-lg-4 text-center text-lg-start">
            <a href="advancedSearch.php" class="link-warning text-decoration-none fw-bold">ADVANCED</a>
          </div>

        </div>
      </div>

      <hr />

      <!-- carousal part -->
      <div class="col-12">
        <div class="row">

          <!-- carousel -->

          <div class="col-12 d-none d-lg-block mb-3">
            <div class="row">

              <div id="carouselExampleIndicators" class="offset-2 col-8 carousel slide carousel-fade" data-bs-ride="true">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="resources/carousal/2.jpg" class="d-block poster-img1" />
                    <div class="carousel-caption d-none d-md-block poster-caption1">
                      <h5 class="poster-title">Welcome to NEW TECH ELECTRONICS</h5>
                      <p class="poster-text">Experience the Highest Quality Electronic items with Miracle Price.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="resources/carousal/4.jpg" class="d-block poster-img1" />
                    <div class="carousel-caption d-none d-md-block poster-caption1">
                      <h5 class="poster-title">Ultimate Gaming console and items </h5>
                      <p class="poster-text">Experience the Ultimate Gaming Experince with Brand new Consoles.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="resources/carousal/5.jpg" class="d-block poster-img1" />
                    <div class="carousel-caption d-none d-md-block poster-caption1">
                      <h5 class="poster-title1 text-bg-light rounded-5">The better place for technicians</h5>
                      <p class="poster-text text-bg-info rounded-5 fw-bold">Any Kind of Electronic Spare Parts for adorable Price</p>
                    </div>
                  </div>

                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>

                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>

              </div>
            </div>
          </div>
        </div>
        <!-- carousel part -->

        <!-- Mobile Phone -->

        <div class="col-12 mt-3 mb-3">
          <a href="#" class="text-decoration-none link-primary fs-3 fw-bold">Mobile Phones</a> &nbsp;&nbsp;
          <a href="#" class="text-decoration-none link-light fs-6">See All &nbsp; &rarr;</a>
        </div>

        <!-- Mobile Phone -->

        <!-- Mobile phone card -->
        <div class="col-12 mb-3">
          <div class="row border border-primary">

            <div class="col-12">
              <div class="row justify-content-center gap-2">

                <div class="card col-6 col-lg-2 mt-2 mb-2 bg-transparent" style="width: 18rem;">

                  <img src="resources\mobileprod\Galaxy F13 -1.jpg" class="card-img-top mt-2" height="180px" />
                  <div class="card-body ms-0 m-0 text-center">
                    <h5 class="card-title fs-6 fw-bold text-light">Samsung Galaxy F13 (Milk White) <span class="badge bg-light text-danger">New</span></h5>
                    <span class="card-text text-primary">Rs.88000.00</span> <br />

                    <span class="card-text text-warning fw-bold">In Stock</span> <br />
                    <span class="card-text text-success fw-bold">40 Items Available</span><br /><br />
                    <a href="SingleProductView.php" class="col-12 btn btn-outline-primary fw-bold">Buy Now</a>
                    <a href="cart.php" class="col-12 btn btn-outline-warning fw-bold mt-2">Add to Cart</a>

                    <a href="wishlist.php" class="col-12 btn btn-outline-light mt-2 border border-danger">
                      <i class="bi bi-heart-fill text-danger fs-5"></i></a>
                    <br />
                  </div>
                </div>

                <div class="card col-6 col-lg-2 mt-2 mb-2 bg-transparent" style="width: 18rem;">

                  <a href="SingleProductView.php"><img src="resources\mobileprod\Galaxy F13.jpg" class="img-fluid card-img-top mt-2" height="180px" /></a>
                  <div class="card-body ms-0 m-0 text-center">
                    <h5 class="card-title fs-6 text-light fw-bold">Samsung Galaxy F13 (Army Green) <span class="badge bg-light text-danger">New</span></h5>
                    <span class="card-text text-primary">Rs.88000.00</span> <br />

                    <span class="card-text text-warning fw-bold">In Stock</span> <br />
                    <span class="card-text text-success fw-bold">30 Items Available</span><br /><br />
                    <a href="SingleProductView.php" class="col-12 btn btn-outline-primary fw-bold">Buy Now</a>
                    <a href="cart.php" class="col-12 btn btn-outline-warning fw-bold mt-2">Add to Cart</a>

                    <a href="wishlist.php" class="col-12 btn btn-outline-light mt-2 border border-danger">
                      <i class="bi bi-heart-fill text-danger fs-5"></i></a>
                    <br />
                  </div>
                </div>

                <div class="card col-6 col-lg-2 mt-2 mb-2 bg-transparent" style="width: 18rem;">

                  <a href="SingleProductView.php"><img src="resources\mobileprod\Samsung_Galaxy_A13.jpg" class="card-img-top mt-2" height="180px" /></a>
                  <div class="card-body ms-0 m-0 text-center">
                    <h5 class="card-title fs-6 text-light fw-bold">Samsung Galaxy M53 (Black)
                      <span class="badge bg-light text-danger">New</span></h5>
                    <span class="card-text text-primary">Rs.90000.00</span> <br />

                    <span class="card-text text-warning fw-bold">In Stock</span> <br />
                    <span class="card-text text-success fw-bold">20 Items Available</span><br /><br />
                    <a href="SingleProductView.php" class="col-12 btn btn-outline-primary fw-bold">Buy Now</a>
                    <a href="cart.php" class="col-12 btn btn-outline-warning fw-bold mt-2">Add to Cart</a>

                    <a href="wishlist.php" class="col-12 btn btn-outline-light mt-2 border border-danger">
                      <i class="bi bi-heart-fill text-danger fs-5"></i></a>
                    <br />
                  </div>
                </div>

                <div class="card col-6 col-lg-2 mt-2 mb-2 bg-transparent" style="width: 18rem;">

                  <a href="SingleProductView.php"><img src="resources\mobileprod\Galaxy M53.jpg" class="img-fluid card-img-top mt-2" height="180px" /></a>
                  <div class="card-body ms-0 m-0 text-center">
                    <h5 class="card-title fs-6 text-light fw-bold">Samsung Galaxy M53 (Devil Black) <span class="badge bg-light text-danger">New</span></h5>
                    <span class="card-text text-primary">Rs.90000.00</span> <br />

                    <span class="card-text text-warning fw-bold">In Stock</span> <br />
                    <span class="card-text text-success fw-bold">40 Items Available</span><br /><br />
                    <a href="SingleProductView.php" class="col-12 btn btn-outline-primary fw-bold">Buy Now</a>
                    <a href="cart.php" class="col-12 btn btn-outline-warning fw-bold mt-2">Add to Cart</a>

                    <a href="wishlist.php" class="col-12 btn btn-outline-light mt-2 border border-danger">
                      <i class="bi bi-heart-fill text-danger fs-5"></i></a>
                  </div>
                </div>

                <div class="card col-6 col-lg-2 mt-2 mb-2 bg-transparent" style="width: 18rem;">

                  <a href="SingleProductView.php"><img src="resources\mobileprod\Galaxy S 20 FE.jpg" class="card-img-top mt-2" height="180px" /></a>
                  <div class="card-body ms-0 m-0 text-center">
                    <h5 class="card-title fs-6 text-light fw-bold">Samsung Galaxy S20 (Devil Blue) <span class="badge bg-light text-danger">New</span></h5>
                    <span class="card-text text-primary">Rs.90000.00</span> <br />

                    <span class="card-text text-danger fw-bold">OUT of Stock</span> <br />
                    <span class="card-text text-success fw-bold">0 Items Available</span><br /><br />
                    <button class="col-12 btn btn-outline-primary fw-bold" disabled>Buy Now</button>
                    <button class="col-12 btn btn-outline-warning fw-bold mt-2" disabled>Add to Cart</button>

                    <a href="wishlist.php" class="col-12 btn btn-outline-light mt-2 border border-danger">
                      <i class="bi bi-heart-fill text-danger fs-5"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Mobile phone card -->

        <!-- Video Game Consoles -->
        <div class="col-12 mt-3 mb-3">
          <a href="#" class="text-decoration-none link-primary fs-3 fw-bold">Video Game Consoles</a> &nbsp;&nbsp;
          <a href="#" class="text-decoration-none link-light fs-6">See All &nbsp; &rarr;</a>
        </div>
        <!-- Video Game Consoles -->

        <!-- Video Game Consoles cards 1 -->
        <div class="col-12 mb-3">
          <div class="row border border-primary">

            <div class="col-12">
              <div class="row justify-content-center gap-2">

                <div class="card col-6 col-lg-2 mt-2 mb-2 bg-transparent" style="width: 18rem;">

                  <img src="resources\products\ps4 pro.png" class="img-fluid img-thumbnail card-img-top mt-2" height="200px" />
                  <div class="card-body ms-0 m-0 text-center">
                    <h5 class="card-title fs-6 text-light fw-bold">Playstation 4 Pro <span class="badge bg-light text-danger"> New </span></h5>
                    <span class="card-text text-primary">Rs.90000.00</span> <br />

                    <span class="card-text text-warning fw-bold">In Stock</span> <br />
                    <span class="card-text text-success fw-bold">30 Items Available</span><br /><br />
                    <a href="SingleProductView.php" class="col-12 btn btn-outline-primary fw-bold">Buy Now</a>
                    <button class="col-12 btn btn-outline-warning fw-bold mt-2">Add to Cart</button>

                    <a href="wishlist.php" class="col-12 btn btn-outline-light mt-2 border border-danger">
                      <i class="bi bi-heart-fill text-danger fs-5"></i></a>
                    <br />
                  </div>
                </div>

                <div class="card col-6 col-lg-2 mt-2 mb-2 bg-transparent" style="width: 18rem;">

                  <img src="resources\products\61LNyaGX8WL._SL1247_.jpg" class="img-thumbnail card-img-top mt-5 mb-5" height="200px" />
                  <div class="card-body ms-0 m-0 text-center">
                    <h5 class="card-title fs-6 text-light fw-bold">Fortnite Nintendo consold Wild card Set <span class="badge bg-light text-danger"> New </span></h5>
                    <span class="card-text text-primary">Rs.112000.00</span> <br />

                    <span class="card-text text-warning fw-bold">In Stock</span> <br />
                    <span class="card-text text-success fw-bold">100 Items Available</span><br /><br />
                    <a href="SingleProductView.php" class="col-12 btn btn-outline-primary fw-bold">Buy Now</a>
                    <button class="col-12 btn btn-outline-warning fw-bold mt-2">Add to Cart</button>

                    <a href="wishlist.php" class="col-12 btn btn-outline-light mt-2 border border-danger">
                      <i class="bi bi-heart-fill text-danger fs-5"></i></a>
                  </div>
                </div>

                <div class="card col-6 col-lg-2 mt-2 mb-2 bg-transparent" style="width: 18rem;">

                  <a href="SingleProductView.php"><img src="resources\products\cFUgkjFt2yHnrpBFqT5BSV.jpg" class="img-thumbnail card-img-top mt-5 mb-5" height="230px" /></a>
                  <div class="card-body ms-3 m-1 text-center">
                    <h5 class="card-title fs-6 text-light fw-bold">Nintendo OLED model Blue Set <span class="badge bg-light text-danger"> New </span></h5>
                    <span class="card-text text-primary">Rs.88000.00</span> <br />

                    <span class="card-text text-danger fw-bold">OUT of Stock</span> <br />
                    <span class="card-text text-success fw-bold">0 Items Available</span><br /><br />
                    <button class="col-12 btn btn-outline-primary fw-bold disabled">Buy Now</button>
                    <button class="col-12 btn btn-outline-warning fw-bold mt-2 disabled">Add to Cart</button>

                    <a href="wishlist.php" class="col-12 btn btn-outline-light mt-2 border border-danger">
                      <i class="bi bi-heart-fill text-danger fs-5"></i></a>
                  </div>
                </div>

                <div class="card col-6 col-lg-2 mt-2 mb-2 bg-transparent" style="width: 18rem;">

                  <img src="resources\products\playstation-5.jpg" class="img-thumbnail card-img-top mt-5 mb-5" height="230px" />
                  <div class="card-body ms-4 m-0 text-center">
                    <h5 class="card-title fs-6 text-light fw-bold">PlayStation 5 Milky White Set <span class="badge bg-light text-danger"> New </span></h5>
                    <span class="card-text text-primary">Rs.200000.00</span> <br />

                    <span class="card-text text-warning fw-bold">In Stock</span> <br />
                    <span class="card-text text-success fw-bold">45 Items Available</span><br /><br />
                    <a href="SingleProductView.php" class="col-12 btn btn-outline-primary fw-bold">Buy Now</a>
                    <button class="col-12 btn btn-outline-warning fw-bold mt-2">Add to Cart</button>

                    <a href="wishlist.php" class="col-12 btn btn-outline-light mt-2 border border-danger">
                      <i class="bi bi-heart-fill text-danger fs-5"></i></a>
                  </div>
                </div>

                <div class="card col-6 col-lg-2 mt-2 mb-2 bg-transparent" style="width: 18rem;">

                  <img src="resources\products\maxresdefault.jpg" class="img-thumbnail card-img-top mt-5 mb-5" height="230px" />
                  <div class="card-body ms-4 m-0 text-center">
                    <h5 class="card-title fs-6 text-light fw-bold">Nintendo Switch Pro Indigo set <span class="badge bg-light text-danger"> New </span></h5>
                    <span class="card-text text-primary">Rs.100000.00</span> <br />

                    <span class="card-text text-warning fw-bold">In Stock</span> <br />
                    <span class="card-text text-success fw-bold">69 Items Available</span><br /><br />
                    <a href="SingleProductView.php" class="col-12 btn btn-outline-primary fw-bold">Buy Now</a>
                    <button class="col-12 btn btn-outline-warning fw-bold mt-2">Add to Cart</button>

                    <a href="wishlist.php" class="col-12 btn btn-outline-light mt-2 border border-danger">
                      <i class="bi bi-heart-fill text-danger fs-5"></i></a>
                  </div>
                </div>

                <div class="card col-6 col-lg-2 mt-2 mb-2 bg-transparent" style="width: 18rem;">

                  <img src="resources\products\xbox1.jpg" class="img-thumbnail card-img-top mt-5 mb-5" height="200px" />
                  <div class="card-body ms-2 m-0 text-center">
                    <h5 class="card-title fs-6 fw-bold text-light">XBOX 1 Jet Black console brand <span class="badge bg-light text-danger"> New </span></h5>
                    <span class="card-text text-primary">Rs.150000.00</span> <br />

                    <span class="card-text text-warning fw-bold">In Stock</span> <br />
                    <span class="card-text text-success fw-bold">100 Items Available</span><br /><br />
                    <a href="SingleProductView.php" class="col-12 btn btn-outline-primary fw-bold">Buy Now</a>
                    <button class="col-12 btn btn-outline-warning fw-bold mt-2">Add to Cart</button>

                    <a href="wishlist.php" class="col-12 btn btn-outline-light mt-2 border border-danger">
                      <i class="bi bi-heart-fill text-danger fs-5"></i></a>
                  </div>
                </div>

                <div class="card col-6 col-lg-2 mt-2 mb-2 bg-transparent" style="width: 18rem;">

                  <img src="resources\products\xbox360 2.jpg" class="img-thumbnail card-img-top mt-5 mb-5" height="200px" />
                  <div class="card-body ms-2 m-0 text-center">
                    <h5 class="card-title fs-6 text-light fw-bold">XBOX 360 Jet Black branded console + GTA 5 Original Edition  <span class="badge bg-light text-success"> Package </span></h5>
                    <span class="card-text text-primary">Rs.220000.00</span> <br />

                    <span class="card-text text-warning fw-bold">In Stock</span> <br />
                    <span class="card-text text-success fw-bold">20 Items Available</span><br /><br />
                    <a href="SingleProductView.php" class="col-12 btn btn-outline-primary fw-bold">Buy Now</a>
                    <button class="col-12 btn btn-outline-warning fw-bold mt-2">Add to Cart</button>

                    <a href="wishlist.php" class="col-12 btn btn-outline-light mt-2 border border-danger">
                      <i class="bi bi-heart-fill text-danger fs-5"></i></a>
                  </div>
                </div>

                <div class="card col-6 col-lg-2 mt-2 mb-2 bg-transparent" style="width: 18rem;">

                  <img src="resources\products\psp.jpg" class="img-thumbnail card-img-top mt-5 mb-5" height="200px" />
                  <div class="card-body ms-2 m-0 text-center">
                    <h5 class="card-title fs-6 text-light fw-bold">Playstation Branded Edition Portable console <span class="badge bg-light text-danger"> New </span></h5>
                    <span class="card-text text-primary">Rs.78000.00</span> <br />

                    <span class="card-text text-warning fw-bold">In Stock</span> <br />
                    <span class="card-text text-success fw-bold">80 Items Available</span><br /><br />
                    <button class="col-12 btn btn-outline-primary fw-bold">Buy Now</button>
                    <button class="col-12 btn btn-outline-warning fw-bold mt-2">Add to Cart</button>

                    <a href="wishlist.php" class="col-12 btn btn-outline-light mt-2 border border-danger">
                      <i class="bi bi-heart-fill text-danger fs-5"></i></a>
                  </div>
                </div>

                <div class="card col-6 col-lg-2 bg-transparent" style="width: 18rem;">

                  <img src="resources\products\ps4.jpg" class="img-thumbnail card-img-top mb-5 mt-5" height="200px" />
                  <div class="card-body ms-2 m-0 text-center">
                    <h5 class="card-title fs-6 text-light fw-bold">Jet Black Playstation 4 Console Brand<span class="badge bg-light text-danger"> New </span></h5>
                    <span class="card-text text-primary">Rs.108000.00</span> <br />

                    <span class="card-text text-warning fw-bold">In Stock</span> <br />
                    <span class="card-text text-success fw-bold">25 Items Available</span><br /><br />
                    <button class="col-12 btn btn-outline-primary fw-bold">Buy Now</button>
                    <button class="col-12 btn btn-outline-warning fw-bold mt-2">Add to Cart</button>

                    <a href="wishlist.php" class="col-12 btn btn-outline-light mt-2 border border-danger">
                      <i class="bi bi-heart-fill text-danger fs-5"></i></a>
                  </div>
                </div>

                <div class="card col-6 col-lg-2 bg-transparent" style="width: 18rem;">

                  <img src="resources\products\xbox360.jpg" class="img-thumbnail card-img-top" height="200px" />
                  <div class="card-body ms-0 m-0 text-center">
                    <h5 class="card-title fs-6 text-light fw-bold">JXBOX 360 Jet Black console brand <span class="badge bg-light text-danger"> New </span></h5>
                    <span class="card-text text-primary">Rs.118000.00</span> <br />

                    <span class="card-text text-warning fw-bold">In Stock</span> <br />
                    <span class="card-text text-success fw-bold">35 Items Available</span><br /><br />
                    <button class="col-12 btn btn-outline-primary fw-bold">Buy Now</button>
                    <button class="col-12 btn btn-outline-warning fw-bold mt-2">Add to Cart</button>

                    <a href="wishlist.php" class="col-12 btn btn-outline-light mt-2 border border-danger">
                      <i class="bi bi-heart-fill text-danger fs-5"></i></a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <!-- Video Game Consoles cards 1 -->

        <!-- LED TV -->
        <div class="col-12 mt-3 mb-3">
          <a href="#" class="text-decoration-none link-primary fs-3 fw-bold">LED and LCD TV</a> &nbsp;&nbsp;
          <a href="#" class="text-decoration-none link-light fs-6">See All &nbsp; &rarr;</a>
        </div>
        <!-- LED TV -->

        <!-- LED TV cards 1 -->
        <div class="col-12 mb-3">
          <div class="row border border-primary">

            <div class="col-12">
              <div class="row justify-content-center gap-2">

                <div class="card col-6 col-lg-2 mt-2 mb-2 bg-transparent" style="width: 18rem;">
                  <a href="SingleProductView.php"> <img src="resources\tv\Samsung-65-4k-curved-tv.jpg" class="card-img-top mt-2" height="200px" /></a>
                    <div class="card-body ms-0 m-0 text-center">
                      <h5 class="card-title fs-6 text-light fw-bold">65 inche Samsung 4K Curved TV  <span class="badge bg-light text-danger">New</span></h5>
                      <span class="card-text text-primary">Rs.780000.00</span> <br />

                      <span class="card-text text-warning fw-bold">In Stock</span> <br />
                      <span class="card-text text-success fw-bold">10 Items Available</span><br /><br />
                      <a href="SingleProductView.php" class="col-12 btn btn-outline-primary fw-bold">Buy Now</a>
                      <button class="col-12 btn btn-outline-warning fw-bold mt-2">Add to Cart</button>

                      <a href="wishlist.php" class="col-12 btn btn-outline-light mt-2 border border-danger">
                        <i class="bi bi-heart-fill text-danger fs-5"></i></a>
                    </div>
                </div>

                <div class="card col-6 col-lg-2 mt-2 mb-2 bg-transparent" style="width: 18rem;">

                  <a href="SingleProductView.php"><img src="resources\tv\apple tv.jpg" class="card-img-top mt-2" height="160px" /></a>
                  <div class="card-body ms-0 m-0 text-center">
                    <h5 class="card-title fs-6 text-light fw-bold">Apple Tv Mac Brand <span class="badge bg-light text-danger">New</span></h5>
                    <span class="card-text text-primary">Rs.980000.00</span> <br />

                    <span class="card-text text-warning fw-bold">In Stock</span> <br />
                    <span class="card-text text-success fw-bold">2 Items Available</span><br /><br />
                    <a href="SingleProductView.php" class="col-12 btn btn-outline-primary fw-bold">Buy Now</a>
                    <button class="col-12 btn btn-outline-warning fw-bold mt-2">Add to Cart</button>

                    <a href="wishlist.php" class="col-12 btn btn-outline-light mt-2 border border-danger">
                      <i class="bi bi-heart-fill text-danger fs-5"></i></a>
                  </div>
                </div>

                <div class="card col-6 col-lg-2 mt-2 mb-2 bg-transparent" style="width: 18rem;">

                  <a href="SingleProductView.php"><img src="resources\tv\samsung3ddead.jpg" class="card-img-top mt-2" height="160px" /></a>
                  <div class="card-body ms-0 m-0 text-center">
                    <h5 class="card-title fs-6 fw-bold text-light">Samsung 50 inch 3D TV  <span class="badge bg-light text-danger"> New</span></h5>
                    <span class="card-text text-primary">Rs.400000.00</span> <br />

                    <span class="card-text text-warning fw-bold">In Stock</span> <br />
                    <span class="card-text text-success fw-bold">20 Items Available</span><br /><br />
                    <a href="SingleProductView.php" class="col-12 btn btn-outline-primary fw-bold">Buy Now</a>
                    <button class="col-12 btn btn-outline-warning fw-bold mt-2">Add to Cart</button>

                    <a href="wishlist.php" class="col-12 btn btn-outline-light mt-2 border border-danger">
                      <i class="bi bi-heart-fill text-danger fs-5"></i></a>
                  </div>
                </div>

                <div class="card col-6 col-lg-2 mt-2 mb-2 bg-transparent" style="width: 18rem;">

                  <a href="SingleProductView.php"><img src="resources\tv\sony-xbr-4k-ultra-hd-tv-3d-model-max-obj-fbx.jpg" class="card-img-top mt-2" height="160px" /></a>
                  <div class="card-body ms-0 m-0 text-center">
                    <h5 class="card-title fs-6 fw-bold text-light">Sony Bravia 4K UHD High quality TV <span class="badge bg-light text-danger"> New</span></h5>
                    <span class="card-text text-primary">Rs.900000.00</span> <br />

                    <span class="card-text text-warning fw-bold">In Stock</span> <br />
                    <span class="card-text text-success fw-bold">5 Items Available</span><br /><br />
                    <a href="SingleProductView.php" class="col-12 btn btn-outline-primary fw-bold">Buy Now</a>
                    <button class="col-12 btn btn-outline-warning fw-bold mt-2">Add to Cart</button>

                    <a href="wishlist.php" class="col-12 btn btn-outline-light mt-2 border border-danger">
                      <i class="bi bi-heart-fill text-danger fs-5"></i></a>
                  </div>
                </div>

                <div class="card col-6 col-lg-2 mt-2 mb-2 bg-transparent" style="width: 18rem;">

                  <a href="SingleProductView.php"><img src="resources\tv\tcl.jpg" class="card-img-top mt-2" height="160px" /></a>
                  <div class="card-body ms-0 m-0 text-center">
                    <h5 class="card-title fs-6 fw-bold text-light">TCL Android TV <span class="badge bg-light text-danger"> New</span></h5>
                    <span class="card-text text-primary">Rs.680000.00</span> <br />

                    <span class="card-text text-danger fw-bold">OUT of Stock</span> <br />
                    <span class="card-text text-success fw-bold">0 Items Available</span><br /><br />
                    <button class="col-12 btn btn-outline-primary fw-bold" disabled>Buy Now</button>
                    <button class="col-12 btn btn-outline-warning fw-bold mt-2" disabled>Add to Cart</button>

                    <a href="wishlist.php" class="col-12 btn btn-outline-light mt-2 border border-danger">
                      <i class="bi bi-heart-fill text-danger fs-5"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- LED TV cards 1 -->

        <!-- CCTV -->
        <div class="col-12 mt-3 mb-3">
          <a href="#" class="text-decoration-none link-primary fs-3 fw-bold">CCTV Survallance System</a> &nbsp;&nbsp;
          <a href="#" class="text-decoration-none link-light fs-6">See All &nbsp; &rarr;</a>
        </div>
        <div class="col-12 mb-3">
          <div class="row border border-primary">
          </div>
        </div>
        <!-- CCTV -->

        <!-- Radio -->
        <div class="col-12 mt-3 mb-3">
          <a href="#" class="text-decoration-none link-primary fs-3 fw-bold">Radio Cassatte and Audio system</a> &nbsp;&nbsp;
          <a href="#" class="text-decoration-none link-light fs-6">See All &nbsp; &rarr;</a>
        </div>
        <div class="col-12 mb-3">
          <div class="row border border-primary">
          </div>
        </div>
        <!-- Radio -->

        <!-- Kitchen -->
        <div class="col-12 mt-3 mb-3">
          <a href="#" class="text-decoration-none link-primary fs-3 fw-bold">Kitchen Electrical Items</a> &nbsp;&nbsp;
          <a href="#" class="text-decoration-none link-light fs-6">See All &nbsp; &rarr;</a>
        </div>
        <div class="col-12 mb-3">
          <div class="row border border-primary">

          </div>
        </div>
        <!-- Kitchen -->

        <!-- Video Games -->
        <div class="col-12 mt-3 mb-3">
          <a href="#" class="text-decoration-none link-primary fs-3 fw-bold">Video Games</a> &nbsp;&nbsp;
          <a href="#" class="text-decoration-none link-light fs-6">See All &nbsp; &rarr;</a>
        </div>
        <div class="col-12 mb-3">
          <div class="row border border-primary">
          </div>
        </div>
        <!-- Video Games -->

        <!-- category name -->

      </div>
    </div>

    <?php include "footer.php"; ?>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>