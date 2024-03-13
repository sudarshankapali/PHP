SELECT * FROM sudarshan.quotes;
create table expenses(
id int primary key auto_increment,
title varchar(150) not null,
amount double not null,
description text,
expenses_date timestamp,
created_at timestamp default current_timestamp not null,
updated_at timestamp default current_timestamp not null,
category_id int,
foreign key(category_id) REFERENCES categories(id)
);
create table categories(
id int primary key auto_increment,
label varchar(150) not null,
created_at timestamp default current_timestamp not null,
updated_at timestamp default current_timestamp not null
);
insert into categories(label) values ('Food & groceries'), ('Transportation'),('Housing & Utilities'),('Entertainment & Leisure'),('Education'),('Health & Weallness');
select * from categories;
insert into expenses(title,amount,description,expenses_date) values ('Chocolate',100,'byuing chocolate','2024-03-13');
select * from expenses;
delete from expenses where id > 2;
select id from categories where label = "Transportation";
SELECT expenses.*, categories.label AS category_label 
FROM expenses 
INNER JOIN categories ON expenses.category_id = categories.id;

SELECT expenses.*, categories.label AS category_label 
FROM expenses 
INNER JOIN categories ON expenses.category_id = categories.id;

