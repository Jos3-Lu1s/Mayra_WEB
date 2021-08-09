-- drop database mayra_users;

create database Mayra_Users;
use Mayra_Users;

create table categorias(
ID_cat int,
name_categoria varchar (30),
constraint cat_pk primary key(ID_cat)
);

create table users(
ID_users int auto_increment,
name_user varchar (40) not null,
las_name varchar (40) not null,
email_user varchar (40) not null,
password_user varchar (50) not null,
ID_cat int,
constraint user_pk primary key(ID_users),
constraint categorias_fk foreign key (ID_cat) references categorias (ID_cat)
);

create table productos(
ID_producto int auto_increment,
name_prod varchar (40) not null,
costo_unidad decimal,
constraint Productos_pk primary key(ID_Producto)
);
-- select * from users;
-- select * from categorias;
select * from productos;
