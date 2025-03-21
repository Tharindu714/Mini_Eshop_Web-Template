<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="bootstrap.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="style.css" />

  <link rel="icon" href="resource/logo.svg" />

</head>

<body>
  <div class="col-12">
    <div class="row mt-1 mb-1">

      <div class="offset-lg-1 col-12 col-lg-4 align-self-start mt-2">

        <span class="text-lg-start link link-primary welcome"><b>Welcome </b>Geeth</span> |
        <a href="login.php" class="text-lg-start text-decoration-none fw-bold link link-danger signout"><img src="resources\refresh.svg" style="width:30px;"/> Sign out</a> |
        <a href="#" class="text-lg-start text-decoration-none fw-bold link link-info"><img src="resources\support.svg" style="width:30px;"/> Support</a>
      </div>

      <div class="offset-lg-4 col-12 col-lg-3 align-self-end">
        <div class="row">
          <div class="col-1 col-lg-3 mt-2">
            <!-- <span class="text-start text-success fw-bold">Sell</span> -->
          </div>
          <div class="col-2 col-lg-6 dropdown">
            <button class="btn btn-bg-transparent border border-light text-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="resources/settings.svg" style="width:30px;"/> Settings
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="Myproduct.php">My Product</a></li>
              <li><a class="dropdown-item" href="wishlist.php">Wishlist</a></li>
              <li><a class="dropdown-item" href="purchasedHistory.php">Purchase History</a></li>
            </ul>
          </div>

          <div class="col-1 col-lg-3 ms-5 ms-lg-0 mt-1 cart-icon" onclick="window.location = 'cart.php'"></div>


        </div>
      </div>
    </div>
  </div>

  <script src="script.js"></script>
</body>

</html>
