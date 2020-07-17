#sales
delimiter //

create procedure select_all_Sales( )
begin
Select * from sales;
end //

delimiter ;

call select_all_Sales();
#-----insert------

delimiter //

create procedure insert_Sales_details(in Date date, in Product_type varchar(45), in Product_size decimal(7,4), in Product_quantity decimal(12,4),in Price decimal(12,4),
  in Customer_detail varchar(45))
begin
insert into Sales(Date,Product_type,Product_size,Product_quantity,Price,Customer_detail) values 
			(Date,Product_type,Product_size,Product_quantity,Price,Customer_detail);
end //

delimiter ;


