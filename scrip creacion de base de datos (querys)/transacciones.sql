start transaction;
insert into forma_pago(nombre)  values('TARJETA DE DEBITO');
insert into forma_pago(nombre)  values('EFECTIVO');
commit;

start transaction;
insert into status_pedido(nombre)  values('ENTREGADO');
insert into status_pedido(nombre)  values('PEDIDO');
insert into status_pedido(nombre)  values('EN PROCESO DE ENTREGA');
insert into status_pedido(nombre)  values('EN PREPARACION');
insert into status_pedido(nombre)  values('APARTADO');
insert into status_pedido(nombre)  values('CANCELADO');
commit;

start transaction;
insert into forma(nombre) values('PASTEL REDONDO');
insert into forma(nombre) values('PASTEL RECTANGULAR');
commit;

start transaction;
insert into categoria_ingre(nombre, descripcion) values('MASA', 'TIPO DE MASA A UTILIZAR ');
insert into categoria_ingre(nombre, descripcion) values('RELLENO', 'SABOR DEL PASTEL');
insert into categoria_ingre(nombre, descripcion) values('BETUN', 'FRUTAS PARA  EL PASTEL');
insert into categoria_ingre(nombre, descripcion) values('TOPPING', 'DULCES PARA EL PASTEL');
commit;

start transaction;
insert into ingrediente(id_categoria_ingre, nombre, codigo) values(1,'CHOCOLATE', 'M1');
insert into ingrediente(id_categoria_ingre, nombre, codigo) values(1,'VAINILLA', 'M2');
insert into ingrediente(id_categoria_ingre, nombre, codigo) values(2,'MERMELADA DE FRESA', 'R2');
insert into ingrediente(id_categoria_ingre, nombre, codigo) values(2,'MERMELADA DE DURAZNO', 'R3');
insert into ingrediente(id_categoria_ingre, nombre, codigo) values(2,'BETUN DE VAINILLA', 'R4');
insert into ingrediente(id_categoria_ingre, nombre, codigo) values(2,'BETUN DE CHOCOLATE', 'R5');
insert into ingrediente(id_categoria_ingre, nombre, codigo) values(3,'BETUN DE VAINILLA', 'B1');
insert into ingrediente(id_categoria_ingre, nombre, codigo) values(3,'BETUN DE CHOCOLATE', 'B2');
insert into ingrediente(id_categoria_ingre, nombre, codigo) values(3,'CREMA BATIDA', 'B3');
insert into ingrediente(id_categoria_ingre, nombre, codigo) values(3,'FONDANT', 'B4');
insert into ingrediente(id_categoria_ingre, nombre, codigo) values(4,'FRESAS', 'T1');
insert into ingrediente(id_categoria_ingre, nombre, codigo) values(4,'DURAZNOS', 'T2');
insert into ingrediente(id_categoria_ingre, nombre, codigo) values(4,'CEREZA', 'T3');
insert into ingrediente(id_categoria_ingre, nombre, codigo) values(4,'KIWI', 'T4');
insert into ingrediente(id_categoria_ingre, nombre, codigo) values(4,'ZARZAMORAS', 'T5');
insert into ingrediente(id_categoria_ingre, nombre, codigo) values(4,'FRAMBUESAS', 'T6');
insert into ingrediente(id_categoria_ingre, nombre, codigo) values(4,'ESTRELLAS DE FONDANT', 'T7');
commit;

start transaction;
insert into categoria_prod(nombre, descripcion) values('EXPRESS', 'PASTELES YA PREPARADOS' );
insert into categoria_prod(nombre, descripcion) values('EN DESCUENTO', 'MERMA O PASTELES PEDIDOS POR ERORR O BROMA');
insert into categoria_prod(nombre, descripcion) values('PERSONALIZADOS', 'PASTELES QUE LOS USUARIOS PUEDEN HACER');
commit;

start transaction;
insert into tamaño(nombre, caracteristicas) values('15cm DE DIAMETRO', '4-6 PORCIONES');
insert into tamaño(nombre, caracteristicas) values('20cm DE DIAMETRO', '8-10 PORCIONES');
insert into tamaño(nombre, caracteristicas) values('25cm DE DIAMETRO', '20-24 PORCIONES');
insert into tamaño(nombre, caracteristicas) values('18cm x 28cm', '12-15 PORCIONES');
insert into tamaño(nombre, caracteristicas) values('23cm x 33cm', '20-24 PORCIONES');
insert into tamaño(nombre, caracteristicas) values('28cm x 38cm ', '35-40 PORCIONES');
insert into tamaño(nombre, caracteristicas) values('30cm x 46cm', '50-55 PORCIONES');
commit;