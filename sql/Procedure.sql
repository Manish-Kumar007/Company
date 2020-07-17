call select_all_Eb();
call insert_EB_detailsuserdet('2020-07-05',300);

call select_all_Sales();
call insert_Sales_details('2020-01-03','wire',23.0,23.0,23.0,'manish');

call select_all_Expenses();
call insert_expenses_details('2020-07-07','Cement',234.4,'Remark','copy');

call select_all_manufacturing();
call insert_manufacturing_details('2020-06-06','wire',209.32,2.4);

call select_all_product();
call insert_Products_details('2020-03-03',12.3,233.32);