#Electricity Consumption
delimiter //

create procedure select_all_Eb( )
begin
Select * from electricity_consumption_data;
end //

delimiter ;


#-----insert------

delimiter //

create procedure insert_EB_details(in Date date, in eb_reading int)
begin
insert into electricity_consumption_data(Date,eb_reading) values (Date,eb_reading);
end //

delimiter ;

