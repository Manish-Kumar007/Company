<?php
    $con=mysqli_connect("localhost","root","root@123","wire_and_nail") or die ("unable to connect");
    $sql1 = "select * from manufacturing";
    $run1 = mysqli_query($con,$sql1);
    $sql2 = "select * from product_inventory";
    $run2 = mysqli_query($con,$sql2);
    $sql3 = "select * from sales";
    $run3 = mysqli_query($con,$sql3);
    $sql4 = "select * from expenses";
    $run4 = mysqli_query($con,$sql4);
   
    
    
    $ManufacturingQuantitySum= 0.0 ;
    $RawMaterialQuantitySum= 0.0 ;
    $SaleQuantitySum= 0.0 ;

    $RawMaterialPriceSum= 0.0 ;
    $ExpensesPriceSum= 0.0 ;
    $SalePriceSum= 0.0 ;
    
    $ManufacturingString="Manufacturing";
    $SaleString="Sales";
    $RawMaterialString="RawMaterial";
    $ExpenseString="Expenses";
    while($result = mysqli_fetch_assoc($run1))
            {
                $ManufacturingQuantitySum +=$result['Product_quantity'];
            }
    while($result = mysqli_fetch_assoc($run2))
            {
                $RawMaterialQuantitySum +=$result['raw_material_quantity'];
                $RawMaterialPriceSum +=$result['raw_material_price'];
            }
    while($result = mysqli_fetch_assoc($run3))
            {
                $SaleQuantitySum +=$result['Product_quantity'];
                $SalePriceSum +=$result['Price'];
            }
    while($result = mysqli_fetch_assoc($run4))
            {
                // $ExpensesPriceSum +=$result['Product_quantity'];
                $ExpensesPriceSum +=$result['Amount_of_Expense'];
            }
?>
<html>
  <head>
  <?php include("head_links.php");?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    

      // Load Charts and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart for Sarah's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(drawSarahChart);

      // Draw the pie chart for the Anthony's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(curve_chart1);
      google.charts.setOnLoadCallback(curve_chart2);

      // Callback that draws the pie chart for Sarah's pizza.
      function drawSarahChart() {

        // Create the data table for Sarah's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Date');
        data.addColumn('number', 'eb_reading');
        data.addRows([
            <?php 
            $sql="call select_all_Eb();";
            $run = mysqli_query($con,$sql);
            while($result = mysqli_fetch_assoc($run))
            {
                echo "['".$result['Date']."',".$result['eb_reading']."],";
            }

          ?>
        //   ['Mushrooms', 1],
        //   ['Onions', 1],
        //   ['Olives', 2],
        //   ['Zucchini', 2],
        //   ['Pepperoni', 1]
        ]);

        // Set options for Sarah's pie chart.
        var options = {title:'Electricity consumption ',
                       width:400,
                       height:300,
                       vAxis:{
                           direction:1
                       }};

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.ColumnChart(document.getElementById('Sarah_chart_div'));
        chart.draw(data, options);
      }

      // Callback that draws the pie chart for Anthony's pizza.
      function curve_chart1() {
        var data = google.visualization.arrayToDataTable([
            ['Items', 'Quantity(in kgs) '],
          <?php 
            // $sql="call select_all_Eb();";
            // $run = mysqli_query($con,$sql);;
            // $i=0;
            // while($result = mysqli_fetch_assoc($run))
            // {
                echo "['".$RawMaterialString."',".$RawMaterialQuantitySum ."],";
                echo "['".$ManufacturingString."',".$ManufacturingQuantitySum ."],";
                echo "['".$SaleString."',".$SaleQuantitySum ."],";
            // }

          ?>

        ]);

        var options = {
          title: 'Product Quantity Management',
        //   curveType: 'function',
        // hAxis:{
        //     slantedText : true,
        //     slantedTextAngle : 90,
        // },
        
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('curve_chart1'));

        chart.draw(data, options);

        
      }
      function curve_chart2() {
        var data = google.visualization.arrayToDataTable([
            ['Items', 'Price(in INR)'],
          <?php 
            // $sql="call select_all_Eb();";
            // $run = mysqli_query($con,$sql);;
            // $i=0;
            // while($result = mysqli_fetch_assoc($run))
            // {
                echo "['".$RawMaterialString."',".$RawMaterialPriceSum ."],";
                echo "['".$ExpenseString."',".$ExpensesPriceSum ."],";
                echo "['".$SaleString."',".$SalePriceSum ."],";
            // }

          ?>

        ]);

        var options = {
          title: 'Product Cost Management',
        //   curveType: 'function',
        // hAxis:{
        //     slantedText : true,
        //     slantedTextAngle : 90,
        // },
        
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('curve_chart2'));

        chart.draw(data, options);

        
      }
    </script>
  </head>
  <body>
  <a href="CompanyWebsiteReports.php">Click here to go to home</a>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div id="Sarah_chart_div" style="border: 1px solid #ccc"></div>
            </div>
        </div>
        <div><br/><br/></div>
        <div class="row">
            <div class="col-4">
            <div id="curve_chart1" style="border: 1px solid #ccc"></div>
            </div>
            <div class="col-4">
            <div id="curve_chart2" style="border: 1px solid #ccc"></div>
            </div>
        </div>
    </div>
    <?php include("bodyscript.php");?>
  </body>
</html>

