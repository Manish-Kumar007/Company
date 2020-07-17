#product Inventory
Select * from product_inventory;
insert into product_inventory (Date,raw_material_price,raw_material_quantity) values('2020-04-04',244,233);
delimiter //

create procedure select_all_Product( )
begin
Select * from product_inventory;
end //

delimiter ;

call select_all_product();
#-----insert------

delimiter //

create procedure insert_Products_details(in Date date,in raw_material_price decimal(12,4),in raw_material_quantity decimal(12,4))
begin
insert into product_inventory(Date,raw_material_price,raw_material_quantity) values (Date,raw_material_price,raw_material_quantity);
end //

delimiter ;

call insert_Products_details('2020-03-03',12.3,233.32);