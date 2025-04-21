-- use this to create table before using
create table user (id int not null  AUTO_INCREMENT primary key, name varchar(200) not null, PAN_NO varchar(200) NOT NULL ,email varchar(200) not null, pass varchar(200) not null);

create table item( itm_ID int not null primary key,itm_name varchar(200), itm_qty int not null ,itm_cp int not null , user_id int ,FOREIGN KEY (USER_ID) REFERENCE user(id));