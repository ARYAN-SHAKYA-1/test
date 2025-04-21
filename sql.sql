-- use this to create table before using
create table login (id int not null  AUTO_INCREMENT primary key, name varchar(100) not null, email varchar(100) not null,password varchar(100) not null);

create table items( item_id int not null primary key, quantity int , id int FOREIGN KEY REFERENCE LOGIN(id));