<!doctype html>
<head>
    <title>

    </title>
    
</head>
<body>


<!-- primary navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="CompanysWebsite.php">
            <img src="./images/logo1.jpeg" style="border-radius:150px; width:100px !important;height:100px !important;"   alt="logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="CompanysWebsite.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="CompanysWebsiteProduct.php">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="CompanyWebsiteReports.php">Reports</a>
              </li>
              
            </ul>
          </div>
          <h2 class="mx-auto text-white" style="flex:none">Southern Wire and Nail Industry LLP</h2> 
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link fa fa-user" aria-current="page" href="#"> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link fa fa-user" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link fa fa-user"  href="./login.php"> Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- End of primary navbar -->

      <!-- secondary nav bar -->

    <!-- <div class="container-xxl d-flex align-items-md-center flex-wrap my-2">
        <form class="bd-search position-relative mb-2 mb-md-0 mr-auto d-flex">
            <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    
        <div class="dropdown">
            <button class="btn btn-bd-light">
                Products
            </button>
        </div>  
      
    </div> -->

      <!-- End of secondary nav bar -->

      <!-- modal for login and register -->
      <!-- <div class="modal fade" id="ModalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              
              <button type="button" class="close" data-dismiss="modal1" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <a class="nav-link active" id="nav-Login-tab" data-toggle="tab" href="#nav-Login" role="tab" aria-controls="nav-home" aria-selected="true">Login</a>
                      <a class="nav-link" id="nav-Register-tab" data-toggle="tab" href="#nav-Register" role="tab" aria-controls="nav-profile" aria-selected="false">Register</a>
                    </div>
                </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-Login" role="tabpanel" aria-labelledby="nav-Login-tab">
                            <form class="row g-3 w-50 mr-auto">
                                <div class="col-md-12">
                                  <label for="inputEmail4" class="form-label">Email</label>
                                  <input type="email" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-12">
                                  <label for="inputPassword4" class="form-label">Password</label>
                                  <input type="password" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-12">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                      Remember Password
                                    </label>
                                  </div>
                                </div>
                                <div class="col-12">
                                  <button type="submit" class="btn btn-primary">Sign in</button>
                                </div>
                              </form>
                        </div>
                        <div class="tab-pane fade" id="nav-Register" role="tabpanel" aria-labelledby="nav-Register-tab">
                            <form class="row g-3">
                                <div class="col-md-6">
                                  <label for="inputEmail4" class="form-label">Email</label>
                                  <input type="email" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                  <label for="inputPassword4" class="form-label">Password</label>
                                  <input type="password" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-12">
                                  <label for="inputAddress" class="form-label">Address</label>
                                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                                <div class="col-12">
                                  <label for="inputAddress2" class="form-label">Address 2</label>
                                  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-md-6">
                                  <label for="inputCity" class="form-label">City</label>
                                  <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="col-md-4">
                                  <label for="inputState" class="form-label">State</label>
                                  <select id="inputState" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                  </select>
                                </div>
                                <div class="col-md-2">
                                  <label for="inputZip" class="form-label">Zip</label>
                                  <input type="text" class="form-control" id="inputZip">
                                </div>
                                <div class="col-12">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                      Check me out
                                    </label>
                                  </div>
                                </div>
                                <div class="col-12">
                                  <button type="submit" class="btn btn-primary">Sign in</button>
                                </div>
                              </form>
                        </div>
                    </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              
            </div>
          </div>
        </div>
    </div> -->

      
</body>
</html>