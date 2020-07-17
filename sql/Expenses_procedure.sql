#Expenses

delimiter //

create procedure select_all_Expenses( )
begin
Select * from expenses;
end //

delimiter ;


#-----insert------

delimiter //

create procedure insert_expenses_details(in Date date, in Expense_description varchar(45),in Amount_of_Expense decimal(12,4),in Remarks varchar(45),
  in Receipt_copy varchar(45))
begin
insert into expenses(Date,Expense_description,Amount_of_Expense,Remarks,Receipt_copy) values (Date,Expense_description,Amount_of_Expense,Remarks,Receipt_copy);
end //

delimiter ;

call insert_expenses_details('2020-07-07','Cement',234.4,'Remark','copy');
