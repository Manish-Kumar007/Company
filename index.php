<?php

$con=mysqli_connect("localhost","root","root@123","wire_and_nail") or die ("unable to connect");

if($con)
{
    echo "connected";
    if(isset($_POST['Subbtn_EB']))
    {
        
        $EB_Date = $_POST['EB_Date'];
        $EB_Reading = $_POST['EB_Reading'];

        if (!empty($EB_Date) and !empty($EB_Reading))
        {
            echo "in eB";
            $sql="call insert_EB_details('$EB_Date','$EB_Reading')";
            $run=mysqli_query($con,$sql);
        }     
        
        if($run)
        {
            echo "hi running";

            $Msg = "Record Added Successfully";
            header("Location: Data_Analytics.php");
            // echo '<script  type="text/javascript"> alert ("'.$Msg.'");</script>';
        }
        
    }
    if(isset($_POST['Subbtn_Expenses']))
    {
        
        $Expense_Date = $_POST['Expense_Date'];
        $Expense_Description = $_POST['Expense_Description'];
        $Expense_Amount = $_POST['Expense_Amount'];
        $Expense_Remark = $_POST['Expense_Remark'];
        $Expense_Uplaod = "COpy";
    
        if (!empty($Expense_Date) and !empty($Expense_Description) and !empty($Expense_Remark) and !empty($Expense_Uplaod) and !empty($Expense_Amount))
        {
            $sql="call insert_expenses_details('$Expense_Date','$Expense_Description',$Expense_Amount,'$Expense_Remark','$Expense_Uplaod')";
            $run=mysqli_query($con,$sql);
        }

        if($run)
        {
            $Msg = "Record Added Successfully";
            header("Location: Data_Analytics.php");
            // echo '<script  type="text/javascript"> alert ("'.$Msg.'");</script>';
        }
    }
    if(isset($_POST['Subbtn_Product']))
    {
        
        $Product_Date = $_POST['Product_Date'];
        $Product_Quantity = $_POST['Product_Quantity'];
        $Product_Price = $_POST['Product_Price'];
    
        if (!empty($Product_Date) and !empty($Product_Quantity) and !empty($Product_Price))
        {
            $sql="call insert_Products_details('$Product_Date',$Product_Quantity,$Product_Price)";
            $run=mysqli_query($con,$sql);
        }

        if($run)
        {
            $Msg = "Record Added Successfully";
            header("Location: Data_Analytics.php");
            // echo '<script  type="text/javascript"> alert ("'.$Msg.'");</script>';
        }
    }
    if(isset($_POST['Subbtn_Manu']))
    {
        
        $Manu_Date = $_POST['Manu_Date'];
        $Manu_Drop = $_POST['Manu_Drop'];
        $Manu_Size = $_POST['Manu_Size'];
        $Manu_Quantity = $_POST['Manu_Quantity'];
        print_r($_POST);
    
        if (!empty($Manu_Date) and !empty($Manu_Drop) and !empty($Manu_Size) and !empty($Manu_Quantity))
        {
            $sql="call insert_manufacturing_details('$Manu_Date','$Manu_Drop',$Manu_Size,$Manu_Quantity)";
            $run=mysqli_query($con,$sql);
        }

        if($run)
        {
            $Msg = "Record Added Successfully";
            header("Location: Data_Analytics.php");
            // echo '<script  type="text/javascript"> alert ("'.$Msg.'");</script>';
        }
    }
    if(isset($_POST['Subbtn_Manu']))
    {
        
        $Manu_Date = $_POST['Manu_Date'];
        $Manu_Drop = $_POST['Manu_Drop'];
        $Manu_Size = $_POST['Manu_Size'];
        $Manu_Quantity = $_POST['Manu_Quantity'];
        print_r($_POST);
    
        if (!empty($Manu_Date) and !empty($Manu_Drop) and !empty($Manu_Size) and !empty($Manu_Quantity))
        {
            $sql="call insert_manufacturing_details('$Manu_Date','$Manu_Drop',$Manu_Size,$Manu_Quantity)";
            $run=mysqli_query($con,$sql);
        }

        if($run)
        {
            $Msg = "Record Added Successfully";
            header("Location: Data_Analytics.php");
            // echo '<script  type="text/javascript"> alert ("'.$Msg.'");</script>';
        }
    }
    if(isset($_POST['Subbtn_Sale']))
    {
        
        $Sale_Date = $_POST['Sale_Date'];
        $Sale_Drop = $_POST['Sale_Drop'];
        $Sale_Size = $_POST['Sale_Size'];
        $Sale_Quantity = $_POST['Sale_Quantity'];
        $Sale_Price = $_POST['Sale_Price'];
        $Sale_Cust_Det = $_POST['Sale_Cust_Det'];
        print_r($_POST);
    
        if (!empty($Sale_Date) and !empty($Sale_Drop) and !empty($Sale_Size) and !empty($Sale_Quantity) and !empty($Sale_Price) and !empty($Sale_Cust_Det))
        {
            $sql="call insert_Sales_details('$Sale_Date','$Sale_Drop',$Sale_Size,$Sale_Quantity,$Sale_Price,'$Sale_Cust_Det')";
            $run=mysqli_query($con,$sql);
        }

        if($run)
        {
            $Msg = "Record Added Successfully";
            header("Location: Data_Analytics.php");
            // echo '<script  type="text/javascript"> alert ("'.$Msg.'");</script>';
        }
    }
}



?>