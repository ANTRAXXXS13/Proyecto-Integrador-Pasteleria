create database proyectointegrador;
use proyectointegrador;


CREATE TABLE queja_aclaracion(id INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL, nombre VARCHAR(100), correo VARCHAR(50),  comentario VARCHAR(500));


CREATE TABLE tarjeta_debito(id INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL, id_usuario INTEGER, num_tarjeta CHAR(40), nombre_titular VARCHAR(90),fecha_vencimiento date, codigo_seguridad CHAR(40));

CREATE TABLE usuario(id INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL, nombre VARCHAR(30), a_paterno VARCHAR(30), a_materno VARCHAR(30), fecha_nacimiento DATE, correo VARCHAR(50), passwd VARCHAR(40), celular CHAR(15), calle VARCHAR(20), colonia VARCHAR(20), num_ext VARCHAR(10), num_int VARCHAR(10), codigo_postal INTEGER, status BOOLEAN, blacklist BOOLEAN);

CREATE TABLE forma_pago(id INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL, id_usuario INTEGER, nombre VARCHAR(25), descripcion VARCHAR(100));

CREATE TABLE pedido(id INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL, id_usuario INTEGER, id_repartidor INTEGER, folio VARCHAR(20), fecha_pedido DATE, fecha_entrega DATE, cantidad INTEGER, costo_envio FLOAT, subtotal FLOAT, iva FLOAT, total FLOAT);

CREATE TABLE pedido_statuspedido(id INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL, id_pedido INTEGER, id_status_pedido INTEGER);

CREATE TABLE status_pedido(id INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL,nombre VARCHAR(25));

CREATE TABLE pedido_producto(id INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL, id_pedido INTEGER, id_producto INTEGER);

CREATE TABLE producto(id INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL, id_categoria_prod INTEGER, id_tamaño INTEGER, id_forma INTEGER, status_producto BOOLEAN, nombre VARCHAR(30), descripcion VARCHAR(100), costo FLOAT, imag varchar(100));

CREATE TABLE tamaño(id INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL, nombre VARCHAR(25), caracteristicas VARCHAR(100));

CREATE TABLE categoria_prod(id INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL, nombre VARCHAR(25), descripcion VARCHAR(100));

CREATE TABLE forma(id INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL, nombre VARCHAR(25));

CREATE TABLE pro_ing(id INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL, id_producto INTEGER, id_ingrediente INTEGER);

CREATE TABLE ingrediente(id INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL, id_categoria_ingre INTEGER, nombre VARCHAR(25), codigo VARCHAR(10), descripcion VARCHAR(100));

CREATE TABLE categoria_ingre(id INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL, nombre VARCHAR(25),descripcion VARCHAR(100));

CREATE TABLE producto_sucursal(id INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL, id_producto INTEGER, id_sucursal INTEGER);

CREATE TABLE sucursal(id INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL, nombre VARCHAR(30), calle VARCHAR(20), colonia VARCHAR(20), num_ext VARCHAR(10), num_int VARCHAR(10),  codigo_postal INTEGER, telefono CHAR(12), rfc VARCHAR(14), correo VARCHAR(50), passwd varchar(40), matriz BOOLEAN, supervisado_por INTEGER);

CREATE TABLE repartidor(id INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL, id_sucursal INTEGER, nombre VARCHAR(30), a_paterno VARCHAR(30), a_materno VARCHAR(30), fecha_nacimiento DATE, correo VARCHAR(50), passwd VARCHAR(40), celular CHAR(15), calle VARCHAR(20), colonia VARCHAR(20), num_ext VARCHAR(10), num_int VARCHAR(10), codigo_postal INTEGER, rfc VARCHAR(14), curp VARCHAR(18), status BOOLEAN);



CREATE TABLE registro(id int auto_increment primary key not null, usuario varchar(20), fecha_hora datetime, movimiento varchar(20));