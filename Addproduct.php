<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>New Tech Electronics | Add Your product </title>

  <link rel="stylesheet" href="bootstrap.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css" />

  <link rel="icon" href="resources\logo.ico" />

</head>

<body class="signup-bg">
  <div class="container-fluid">
    <div class="row gy-3">
      <?php include "header.php";?>
      <hr />

      <div class="col-12 mt-1">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="h1 text-primary fw-bolder">ADD NEW PRODUCTS</h2>
          </div>
          <hr />
          <div class="col-12">
            <div class="row">
              <div class="col-12 col-lg-4 border-end border-secondary">
                <div class="row">
                  <div class="col-12 text-center">
                    <label class="form-label text-primary fw-bold" style="font-size: 20px;">Select Product Category</label>

                    <div class="col-12">
                      <select class="form-select text-center bg-transparent text-light" id="category">
                        <option class="text-dark fw-bold">Select Product Category</option>
                        <option class="text-dark fw-bold">Mobile Phones</option>
                        <option class="text-dark fw-bold">Video Game Consoles</option>
                        <option class="text-dark fw-bold">LED & LCD TV</option>
                        <option class="text-dark fw-bold">CCTV Survallance System </option>
                        <option class="text-dark fw-bold">Radio Cassatte and Audio system </option>
                        <option class="text-dark fw-bold">Kitchen Electrical Items</option>
                        <option class="text-dark fw-bold">Video Games</option>
                      </select>
                    </div>
                  </div>

                </div>
              </div>

              <div class="col-12 col-lg-4 border-end border-secondary">
                <div class="row">
                  <div class="col-12 text-center">
                    <label class="form-label text-primary fw-bold" style="font-size: 20px;">Select Product Brand</label>

                    <div class="col-12">
                      <select class="form-select text-center bg-transparent text-light">
                        <option class="text-dark fw-bold">Select Product Brand</option>
                        <option class="text-dark fw-bold">Samsung</option>
                        <option class="text-dark fw-bold">Sony</option>
                        <option class="text-dark fw-bold">Apple</option>
                        <option class="text-dark fw-bold">TCL</option>
                        <option class="text-dark fw-bold">Nintendo</option>
                        <option class="text-dark fw-bold">Singer</option>

                      </select>
                    </div>
                  </div>

                </div>
              </div>

              <div class="col-12 col-lg-4">
                <div class="row">
                  <div class="col-12 text-center">
                    <label class="form-label text-primary fw-bold" style="font-size: 20px;">Select Product Model</label>

                    <div class="col-12">
                      <select class="form-select bg-transparent text-light text-center" id="model">
                        <option class="text-dark fw-bold">Select Product Model</option>
                        <option class="text-dark fw-bold">Samsung Galaxy </option>
                        <option class="text-dark fw-bold">Samsung S Series</option>
                        <option class="text-dark fw-bold">Curved</option>
                        <option class="text-dark fw-bold">UHD 4K </option>
                        <option class="text-dark fw-bold">3D TV</option>
                        <option class="text-dark fw-bold">Smart TV</option>
                        <option class="text-dark fw-bold">Playstation</option>
                        <option class="text-dark fw-bold">XBOX</option>
                        <option class="text-dark fw-bold">PS portable</option>
                        <option class="text-dark fw-bold">Nintendo</option>
                        <option class="text-dark fw-bold">CCTV</option>
                      </select>
                    </div>
                  </div>

                </div>
              </div>

              <div class="col-12">
                <hr class="border-success" style="border-width: 3px;" />
              </div>

              <div class="col-12">
                <div class="row">
                  <div class="col-12 text-center">
                    <label class="form-label text-primary fw-bold" style="font-size:20px;">
                      Add a Title to Your Product
                    </label>
                  </div>
                  <div class="offset-0 offset-lg-2 col-12 col-lg-8">
                    <input type="text" id="title" placeholder="Please Enter Your Product Title..." class="form-control bg-transparent text-light fw-bold">
                  </div>
                </div>
              </div>

              <div class="col-12">
                <hr class="border-success" style="border-width: 3px;" />
              </div>

              <div class="col-12">
                <div class="row">

                  <div class="col-12 col-lg-4 text-center border-end border-secondary">
                    <div class="row">
                      <div class="col-12">
                        <label class="form-label text-primary fw-bold" style="font-size:20px;">Select Product Condition</label>
                      </div>
                      <div class="col-12">
                        <div class="form-check form-check-inline mb-4 mt-4">
                          <input class="form-check-input" type="radio" id="bnew" name="c" value="option1" checked />
                          <label class="form-check-label fw-bold text-light" for="bnew">Brand New</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="use" name="c" value="option2" />
                          <label class="form-check-label text-light fw-bold" for="use">Used</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-lg-4 border-end border-secondary">
                    <div class="row">
                      <div class="col-12 text-center">
                        <label class="form-label text-primary fw-bold" style="font-size:20px;">Select Product Color</label>
                      </div>

                      <div class="col-8 offset-2">
                        <div class="row">

                          <select class="form-select bg-transparent text-light text-center">
                            <option class="text-dark fw-bold">Select Colour</option>
                            <option class="text-dark fw-bold">Blue</option>
                            <option class="text-dark fw-bold">Black</option>
                            <option class="text-dark fw-bold">White</option>
                            <option class="text-dark fw-bold">Red</option>
                            <option class="text-dark fw-bold">Indigo</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-12">
                        <hr class="border-success" style="border-width: 3px;" />
                      </div>

                      <div class="col-12">
                        <div class="input-group mx-2">
                          <input type="text" id="colorin" class="form-control bg-transparent text-light" placeholder="Add a New color" />
                          <button class="btn btn-primary fw-bold" id="button-addon2">( + ) ADD</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-lg-4">
                    <div class="row">
                      <div class="col-12 text-center">
                        <label class="form-label text-primary fw-bold" style="font-size: 20px;">Add Product Quantity</label>
                      </div>
                      <div class="col-12">
                        <input type="number" class="form-control text-light bg-transparent" id="qty" value="0" min="0" />
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <hr class="border-success" style="border-width: 3px;" />
                  </div>

                  <div class="col-12">
                    <div class="row">
                      <div class="col-6 border-end border-secondary">
                        <div class="row">
                          <div class="col-12 text-center">
                            <label class="form-label text-primary fw-bold" style="font-size: 20px;">Cost Per item</label>
                          </div>
                          <div class="offset-0 offset-lg-2 col-12 col-lg-8">
                            <div class="input-group mb-2 mt-1">
                              <span class="input-group-text bg-primary text-light fw-bold">Rs .</span>
                              <input type="text" id="cost" class="form-control bg-transparent text-light fw-bold" />
                              <span class="input-group-text bg-primary text-light fw-bold">. 00</span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-6">
                        <div class="row">
                          <div class="col-12 text-center">
                            <label class="form-label text-primary fw-bold" style="font-size: 20px;">Approved Payment Methods</label>
                          </div>
                          <div class="col-12">
                            <div class="row">
                              <div class="offset-0 offset-lg-2 col-2 pm pm1"></div>
                              <div class="col-2 pm pm2"></div>
                              <div class="col-2 pm pm3"></div>
                              <div class="col-2 pm pm4"></div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-12">
                        <hr class="border-success" style="border-width: 3px;" />
                      </div>

                      <div class="col-12">
                        <div class="row">
                          <div class="col-12 text-center">
                            <label class="form-label text-primary fw-bold" style="font-size: 20px;">Delivary Cost</label>
                          </div>
                          <div class="col-12 col-lg-6 border-end border-secondary">
                            <div class="row">
                              <div class="col-12 offset-lg-0 col-lg-3">
                                <label class="form-label text-light">Delivery Cost within Colombo</label>
                              </div>
                              <div class="col-12 col-lg-8">
                                <div class="input-group mb-2 mt-3">
                                  <span class="input-group-text bg-primary text-light fw-bold">Rs .</span>
                                  <input type="text" id="colcost" class="form-control bg-transparent text-light fw-bold" />
                                  <span class="input-group-text bg-primary text-light fw-bold">. 00</span>
                                </div>
                              </div>

                            </div>
                          </div>

                          <div class="col-12 col-lg-6">
                            <div class="row">
                              <div class="col-12 offset-lg-1 col-lg-3">
                                <label class="form-label text-light">Delivery Cost out of Colombo</label>
                              </div>
                              <div class="col-12 col-lg-8">
                                <div class="input-group mb-2 mt-3">
                                  <span class="input-group-text bg-primary text-light fw-bold">Rs .</span>
                                  <input type="text" id="outcost" class="form-control bg-transparent text-light fw-bold" />
                                  <span class="input-group-text bg-primary text-light fw-bold">. 00</span>
                                </div>
                              </div>

                            </div>
                          </div>

                          <div class="col-12">
                            <hr class="border-success" style="border-width: 3px;" />
                          </div>

                          <div class="col-12">
                            <div class="row">
                              <div class="col-12 text-center">
                                <label class="form-label text-primary fw-bold" style="font-size: 20px;">Product Description</label>
                              </div>
                              <div class="col-12">
                                <textarea class="form-control fw-bold text-light signup-bg" id="desc" placeholder="Say Something about Your Product...................." cols="30" rows="20" style="font-size: 15px;"></textarea>
                              </div>
                            </div>
                          </div>

                          <div class="col-12">
                            <hr class="border-success" style="border-width: 3px;" />
                          </div>

                          <div class="col-12">
                            <div class="row">
                              <div class="col-12 text-center">
                                <label class="form-label fw-bold text-primary" style="font-size:20px;">Add Product Image</label>
                              </div>

                              <div class="offset-lg-4 offset-2 col-12 col-lg-5">
                                <div class="row">
                                  <div class="col-3 border border-success rounded">
                                    <img src="resources/addproductimg.svg" class="img-fluid img-thumbnail bg-transparent" style="width:200px; height:300px;" id="i0" />
                                  </div>

                                  <div class="col-3 border border-success rounded">
                                    <img src="resources/addproductimg.svg" class="img-fluid img-thumbnail bg-transparent" style="width:200px; height:300px;" id="i1" />
                                  </div>

                                  <div class="col-3 border border-success rounded">
                                    <img src="resources/addproductimg.svg" class="img-fluid img-thumbnail bg-transparent" style="width:200px; height:300px;" id="i2" />
                                  </div>
                                </div>
                              </div>
                              <div class="offset-lg-3 col-12 col-lg-6 d-grid mt-3">
                                <input type="file" class="d-none" id="imageuploder" multiple />
                                <label for="imageuploder" class="col-12 btn btn-outline-light fw-bold">UPLOAD IMAGES</label>
                              </div>
                            </div>
                          </div>

                          <div class="col-12">
                            <hr class="border-success" style="border-width: 3px;" />
                          </div>

                          <div class="col-12 text-center">
                            <label class="form-label h3 fw-bold text-danger" style="font-size: 20px;">NOTICE !!!</label> <br />
                            <label class="form-label text-success fw-bold">
                              We are taking 5% of the product from price from every product
                              as a service charge.
                            </label>
                          </div>

                          <div class="offset-lg-4 col-12 col-lg-4 d-grid mt-3 mb-3">
                            <button class="btn btn-info fw-bold">ADD & SAVE Product</button>
                            <br>
                            <div class="col-12 text-center">
                              <a href="home.php" class="btn btn-outline-light border border-primary fw-bold text-primary rounded-5">Back to home page <img src="resources\refresh.svg" style="width:50px; height:50px;" /></a>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>


          </div>
        </div>

      </div>
    </div>

    <?php include "footer.php";?>
  </div>

  <script src="script.js"></script>
  <script src="bootstrap.bundle.js"></script>
</body>

</html>