<?php
    $con=mysqli_connect("localhost","root","root@123","wire_and_nail") or die ("unable to connect");
    // echo $con;
?>
<!DOCTYPE html> 
<head>
    <title>

    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="font awesome\fontawesome-free-5.13.0-web\css\all.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-link active" id="nav-Add_Data-tab" data-toggle="tab" href="#nav-Add_Data" role="tab" aria-controls="nav-Add_Data" aria-selected="true">Add Data</a>
    <a class="nav-link" id="nav-View_Report-tab" data-toggle="tab" href="#nav-View_Report" role="tab" aria-controls="nav-View_Report" aria-selected="false">View Report</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-Add_Data" role="tabpanel" aria-labelledby="nav-Add_Data-tab">
    <form action="index.php" method="POST">
        <div class="container py-4 mb-3 " style="background-color:gray">
            <div class="row">
                <h2>Electricity Consumption</h2>
            </div>
            <div class="row">
                <div class="col">
                <label class="form-label">Date</label>
                </div>
                <div class="col">
                <label  class="form-label">Pre_Eb_Reading(units)</label>
                </div>
                <div class="col">
                <label class="form-label">Eb_Reading(units)</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="Date" name="EB_Date" class="form-control" placeholder="Enter the Date">
                </div>
                <div class="col">
                    <input type="number" name="EB_Pre_Reading" class="form-control" placeholder="900" Disabled>
                </div>
                <div class="col">
                    <input type="text" name="EB_Reading" class="form-control" placeholder="Enter the Eb Reading">
                </div>
            </div>
            
                <button type="submit" name="Subbtn_EB" class="btn btn-primary mt-5">Submit</button>
            
        </div>
    </form> 
        <hr class="w-75 mx-auto" style="margin:0"/>

        <!-- Expenses -->
    <form action="index.php" method="POST">
        <div class="container py-4 mb-3 " style="background-color:gray">
            <div class="row">
                <h2>Expenses</h2>
            </div>
            <div class="row">
                <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Date</label>
                </div>
                <div class="col">
                    <input type="Date" name="Expense_Date" class="form-control" placeholder="Enter the Date">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Expenses_description</label>
                </div>
                <div class="col">
                    <input type="text" name="Expense_Description" class="form-control" placeholder="Enter the Description" >
                </div>
            </div>
            <div class="row">
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Amount (INR)</label>
                </div>
                <div class="col">
                    <input type="number" name="Expense_Amount" class="form-control" placeholder="Enter the Amount">
                </div>
            </div>
            <div class="row">
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Remarks</label>
                </div>
                <div class="col">
                    <input type="text" name="Expense_Remark" class="form-control" placeholder="Enter the Remarks">
                </div>
            </div>
            <div class="row">
                <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Upload Receipt Copy</label>
                </div>
                <div class="col">
                    <div class="form-file mb-3">
                        <input type="file" name="Expense_Uplaod" class="form-file-input" id="validationFormFile" >
                        <label class="form-file-label" for="validationFormFile">
                        <span class="form-file-text">Choose file... </span>
                        <span class="form-file-button">Browse</span>
                        </label>
                        <div class="invalid-feedback">Example invalid form file feedback</div>
                    </div>
                </div>
            </div>
            <button type="submit" name="Subbtn_Expenses" class="btn btn-primary mt-5">Submit</button>
        </div>  
    </form>
        <hr class="w-75 mx-auto" style="margin:0"/>   
    <form action="index.php" method="POST">
        <!-- product inventory -->
        <div class="container py-4 mb-3 " style="background-color:gray">
            <div class="row">
                <h2>Raw material inventory</h2>
            </div>
            <div class="row">
                <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Date</label>
                </div>
                <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Quantity</label>
                </div>
                <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Price</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="Date" name="Product_Date" class="form-control" placeholder="Enter the Date">
                </div>
                <div class="col">
                    <input type="number" name="Product_Quantity" class="form-control" placeholder="Enter the Raw material Quantity" >
                </div>
                <div class="col">
                    <input type="number" name="Product_Price" class="form-control" placeholder="Enter the Raw material Price">
                </div>
            </div>
            <button type="submit" name="Subbtn_Product" class="btn btn-primary mt-5">Submit</button>
        </div>
    </form>

        <hr class="w-75 mx-auto" style="margin:0"/>
    <form action="index.php" method="POST">
        <!-- Manufacturing -->
        <div class="container py-4 mb-3" style="background-color:gray">
            <div class="row">
                <h2>Manufacturing</h2>
            </div>
            <div class="row">
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Date</label>
                </div>
                <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Product Type</label>
                </div>
                <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Product Size</label>
                </div>
                <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Product Quantity</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="Date" name="Manu_Date" class="form-control" placeholder="Enter the Date">
                </div>
                <div class="col">
                    <div class="dropdown">
                        <!-- <button class="btn btn-secondary dropdown-toggle bg-light btn-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                            Product 
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li class="dropdown-item">Wire</li>
                            <li class="dropdown-item">NAil</li>
                        </ul> -->
                        <select name="Manu_Drop" class="">
                            <option value="" selected>Select...</option>
                            <option value="Wire">Wire</option>
                            <option value="Nail">Nail</option>
                        </select>
                    </div>
                    
                </div>
                
                <div class="col">
                    <input type="number" name="Manu_Size" class="form-control" placeholder="Enter the product Size" >
                </div>
                <div class="col">
                    <input type="number" name="Manu_Quantity" class="form-control" placeholder="Enter the product Quantity">
                </div>
            </div>
            <button type="submit" name="Subbtn_Manu" class="btn btn-primary mt-5">Submit</button>
        </div>
    </form>

        <hr class="w-75 mx-auto" style="margin:0"/>

    <form action="index.php" method="POST">  
        <!-- Sales -->
        <div class="container  pb-3 " style="background-color:gray">
            <div class="row">
                <h2>Sales</h2>
            </div>
            <div class="row">
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Date</label>
                </div>
                <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Product Type</label>
                </div>
                <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Product Size</label>
                </div>
                <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Product Quantity</label>
                </div>
                <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Price</label>
                </div>
                <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Customer Details</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="Date"  name="Sale_Date"  class="form-control" placeholder="Enter the Date">
                </div>
                <div class="col">
                    <div class="dropdown">
                        <!-- <button class="btn btn-secondary dropdown-toggle bg-light btn-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                            Product 
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Wire</a></li>
                            <li><a class="dropdown-item" href="#">NAil</a></li>
                        </ul> -->
                        <select name="Sale_Drop" class="">
                            <option value="" selected>Select...</option>
                            <option value="Wire">Wire</option>
                            <option value="Nail">Nail</option>
                        </select>
                    </div>

                </div>
                
                <div class="col">
                    <input type="number" name="Sale_Size" class="form-control" placeholder="Enter the product Size" >
                </div>
                <div class="col">
                    <input type="number" name="Sale_Quantity" class="form-control" placeholder="Enter the product Quantity">
                </div>
                <div class="col">
                    <input type="number" name="Sale_Price" class="form-control" placeholder="Enter the Raw material Price">
                </div>
                <div class="col">
                    <input type="text"   name="Sale_Cust_Det"   class="form-control" placeholder="Enter the Customer Details">
                </div>
            </div>
            <button type="submit" name="Subbtn_Sale" class="btn btn-primary mt-5">Submit</button>
        </div>      

    </form>
  </div>
  <div class="tab-pane fade" id="nav-View_Report" style="width:100% !important; height:100% !important" role="tabpanel" aria-labelledby="nav-View_Report-tab">
      
          
      <a href="chart.php">Clink her to go to Report </a>
    
  </div>
</div>




    <script type="text/javascript">
        var myCarousel = document.querySelector('#myCarousel')
        var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 1000,
        wrap: false
        })
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>