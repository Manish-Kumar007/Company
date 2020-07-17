<!doctype html>
<head>
    <title>

    </title>
</head>
<body>
    <!-- carousel -->

    <section class="my-3 container">
        <div id="carouselExampleIndicators" class="carousel slide"  data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3" ></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6" ></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                
            </ol>
            <div class="carousel-inner ">
                <div class="carousel-item active">
                    <img Style="height:50rem; width:100%" src="images\hbwire1.jpeg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block" style="bottom:0.5rem !important;color:azure;font-weight:900;" >
                        <h5>Gallery</h5>
                        <p>Hb Wire</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img Style="height:50rem; width:100%" src="images\hbwire2.jpeg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block" style="bottom:0.5rem !important;color:azure;font-weight:900;">
                        <h5>Gallery</h5>
                        <p>Hb Wire coils</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img Style="height:50rem; width:100%" src="images\nail1.jpeg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block" style="bottom:0.5rem !important;color:azure;font-weight:900;">
                        <h5>Gallery</h5>
                        <p>Hb Wire coils</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img Style="height:50rem; width:100%" src="images\nail2.jpeg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block" style="bottom:0.5rem !important;color:azure;font-weight:900;">
                        <h5>Gallery</h5>
                        <p>Nails - Various types</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img Style="height:50rem; width:100%" src="images\hbwire5.jpeg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block" style="bottom:0.5rem !important;color:azure;font-weight:900;">
                        <h5>Gallery</h5>
                        <p>Hb Wire coils</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img Style="height:50rem; width:100%" src="images\nail3.jpeg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block" style="bottom:0.5rem !important;color:azure;font-weight:900;">
                        <h5>Gallery</h5>
                        <p>Nails - Various Sizes</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img Style="height:50rem; width:100%" src="images\nail4.jpeg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block" style="bottom:0.5rem !important;color:azure;font-weight:900;">
                        <h5>Gallery</h5>
                        <p>Nails - a close up view</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </section>

    <!-- End of carousel -->

    <!-- about us  -->

    <h2 class="text-center m-0">About Us</h2>
            <hr class="w-25 mt-0 mx-auto"/>
    <section class=" my-3">
        <div class="container">
            <div class="card mb-3 mx-auto" style="max-width: 70%;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="images\logo1.jpeg" style="border-radius:150px;" class="img-fluid"   alt="logo">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Southern Wire & Nail Industry LLP</h5>
                  <p class="card-text">We Southern Wire & Nail Indutry LLP are one of the notable manufacturers of HB wires and Nails in the market. We have a wide assortment of MS Nail, HB wire and coil nails which are commonly used in the various industries such as automobile, construction, shoes, furniture, packaging, paint brush, sign boards and so on.<br>

Some of the highlighting features are given below:<br>
* Durable<br>
* High tensile strength<br>
* Adaptability to specific application<br><br>

Our Wire and Nail solutions will keep youy business ahead of the competition.<br>

Our company moto is <b style ="text-transform:uppercase">ON-TIME DELVERY</b> and <b style ="text-transform:uppercase">customer satisfaction</b></p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
            
        </div>
    </section>

    <!-- End of about us  -->

    <!-- post you requirement -->

    <section class="p-3 mb-2 Contact_Color text-white">
        <div class="container-fluid ">
            <div class="row">
                <h2 class="text-center">Contact Us</h2>
                <p class="text-center">
                    Try this to reach out to us.
                </p>
                <button type="button" class="btn btn-outline-primary w-25 mx-auto text-white" data-toggle="modal" data-target="#exampleModal" data-placement="right" title="Click Here To Contant us">
                    Post Your Requirements
                  </button>
            </div>           
        </div>
    </section>
    <?php include("post_requirement_data_model.php"); ?>

    <!-- End of post you requirement -->
</body>
</html>