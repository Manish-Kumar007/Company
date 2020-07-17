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
    // echo "Price", " ", $RawMaterialQuantitySum, " ", $ManufacturingQuantitySum, " ". $SaleQuantitySum;
    // echo "Price", " ", $RawMaterialPriceSum, " ", $ExpensesPriceSum, " ". $SalePriceSum;
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(curve_chart);
      google.charts.setOnLoadCallback(curve_chart1);
      google.charts.setOnLoadCallback(curve_chart2);
      //  

      function curve_chart() {
        var data = google.visualization.arrayToDataTable([
            ['EB Reading', 'Date '],
          <?php 
            $sql="call select_all_Eb();";
            $run = mysqli_query($con,$sql);
            // $num_rows = mysqli_num_rows($run);
            // echo $num_rows;
            // if($num_rows==0)
            // {
            //   echo "['".$ManufacturingQuantitySum."',".$ManufacturingQuantitySum ."],";
            // }
            // else{
           
            
            while($result = mysqli_fetch_assoc($run))
            {
              
                echo "['".$result['Date']."',".$result['eb_reading'] ."],";
            }
            // }
            

          ?>

        ]);

        var options = {
          title: 'Electrical Consumption ',
        //   curveType: 'function',
        hAxis:{
            slantedText : true,
            slantedTextAngle : 90,
        },
        
          legend: { position: 'right' }
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('curve_chart'));

        chart.draw(data, options);

        
      }
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
  </div>
       <table>
         <tr>
           <td>
           <div id="curve_chart" style=" width: 500px; height: 500px"></div> 
           </td>
    </tr>
    <tr>
           <td>
           <div id="curve_chart1" style=" width: 500px; height: 500px"></div> 
           </td>
           <td>
           <div id="curve_chart2" style="width: 500px; height: 500px"></div>
           </td>
         </tr>
       </table>
             
    
    
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <!-- <div id="curve_chart1" style="width: 900px ! important; height: 500px !important"></div> -->
    
  
  </body>
</html>
