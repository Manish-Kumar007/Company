#Manufacturing

delimiter //

create procedure select_all_manufacturing( )
begin
Select * from manufacturing;
end //

delimiter ;

call select_all_manufacturing();
#-----insert------

delimiter //

create procedure insert_manufacturing_details(in Date date, in Product_type varchar(45),in Product_size decimal(12,4),in Product_quantity decimal(12,4))
begin
insert into manufacturing(Date,Product_type,Product_size,Product_quantity) values (Date,Product_type,Product_size,Product_quantity);
end //

delimiter ;

call insert_manufacturing_details('2020-06-06','wire',209.32,2.4);
