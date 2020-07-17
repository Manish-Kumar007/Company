#Electricity Consumption
delimiter //

create procedure select_all( )
begin
Select * from electricity_consumption_data;
end //

delimiter ;
select Eb_id,eb_reading from electricity_consumption_data where Eb_id=1;
call select_all();
#-----insert------

delimiter //

create procedure insert_EB_details(in Date date, in eb_reading int)
begin
insert into electricity_consumption_data(Date,eb_reading) values (Date,eb_reading);
end //

delimiter ;
insert into electricity_consumption_data(Date,eb_reading) values ('2020-07-05',300);
call insert_EB_details('2020-07-05',300);