-- =======================================================================================================================================================================
-- =================================================================================== usuario ==========================================================================
-- =======================================================================================================================================================================



delimiter //
create procedure insert_usuario (in _nombre varchar(30), in _a_paterno varchar(30), in _a_materno varchar(30), in _fecha_nacimiento date, in _correo varchar(50), in _passwd varchar(25), 
	in _celular char(15), in _calle varchar(20), in _colonia varchar(20), in _num_ext varchar(10), in _num_int varchar(10), in _codigo_postal INTEGER)
begin
insert into usuario(nombre, a_paterno, a_materno, fecha_nacimiento, correo, passwd, celular, calle, colonia, num_ext, num_int, codigo_postal, status, blacklist)
values(_nombre, _a_paterno, _a_materno, _fecha_nacimiento,  _correo, sha1(_passwd), _celular, _calle, _colonia, _num_ext, _num_int, _codigo_postal, 1, 0);
end; 
// 



delimiter //
create procedure updusu_datos(in _id INTEGER, in _nombre varchar(30), in _a_paterno varchar(30), in _a_materno varchar(30), in _fecha_nacimiento date, in _correo VARCHAR(50), in _celular CHAR(15),
	in _calle varchar(20), in _colonia varchar(20), in _num_ext varchar(10), in _num_int varchar(10), in _codigo_postal INTEGER)
begin
update usuario set nombre = _nombre, a_paterno = _a_paterno, a_materno = _a_materno, fecha_nacimiento = _fecha_nacimiento, correo = _correo, celular = _celular,
calle = _calle, colonia = _colonia, num_ext = _num_ext, num_int = _num_int, codigo_postal = _codigo_postal
where  id = _id;
end;
//

delimiter //
create procedure updusu_contra (in _id INTEGER, _passwd varchar(40))
begin
update usuario set passwd = sha1(_passwd) 
where  id = _id;
end;
//

delimiter //
create procedure delete_usuario (in _id int)

begin
delete from usuario where id = _id;
end;
//   



-- =======================================================================================================================================================================
-- =================================================================================== SUCURSAL ==========================================================================
-- =======================================================================================================================================================================
delimiter //
create procedure upd_matriz (in _id INTEGER, in _supervisado_por INTEGER)
begin
	update sucursal set  supervisado_por =  _supervisado_por where id = _id;
end;
// 

delimiter //
create procedure insert_sucursal (in _nombre varchar(30), in _calle varchar(20), in _colonia varchar(20), in _num_ext char(10), in _num_int VARCHAR(10), in _codigo_postal INTEGER, in _telefono char(12), in _rfc char(20), in _correo varchar(50), in _passwd varchar(40), 
 in _matriz  boolean )
begin
insert into sucursal(nombre, calle, colonia, num_ext, num_int, codigo_postal, telefono, rfc, correo, passwd, matriz)
values(_nombre, _calle, _colonia, _num_ext, _num_int, _codigo_postal, _telefono, _rfc, _correo,  sha1(_passwd), _matriz);
   update sucursal set supervisado_por = (select id from sucursal where correo = _correo);
end;
// 
use proyectointegrador;
call insert_sucursal('nlal', 'sdfvcalle', 'fsdfcolonia', '2', '25', 8521, '6392854', 'fwefewf', 'e@gmail',  'pass', 1);
delimiter //
create procedure insert_sucursal2 (in _nombre varchar(30), in _calle varchar(20), in _colonia varchar(20), in _num_ext char(10), in _num_int VARCHAR(10), in _codigo_postal INTEGER, in _telefono char(12), in _rfc char(20), in _correo varchar(50), in _passwd varchar(40), 
 in _matriz  boolean, _supervisado_por INTEGER )
begin
insert into sucursal(nombre, calle, colonia, num_ext, num_int, codigo_postal, telefono, rfc, correo, passwd, matriz, supervisado_por)
values(_nombre, _calle, _colonia, _num_ext, _num_int, _codigo_postal, _telefono, _rfc, _correo,  sha1(_passwd), _matriz, _supervisado_por);
end;
// 

delimiter //
create procedure updsuc_datos (in _id INTEGER, in _nombre varchar(30), in _rfc VARCHAR(14), in _correo VARCHAR(50), in _telefono CHAR(12), in _calle varchar(20), in _colonia varchar(20), in _num_ext varchar(10), in _num_int varchar(10), in _codigo_postal INTEGER)
begin
update sucursal set nombre = _nombre, rfc = _rfc, correo = _correo, telefono = _telefono, calle = _calle, colonia = _colonia, num_ext = _num_ext, num_int = _num_int, codigo_postal = _codigo_postal
where  id = _id;
end;
//

delimiter //
create procedure updsuc_contra (in _id INTEGER, _passwd varchar(40))
begin
update sucursal set passwd = sha1(_passwd) 
where  id = _id;
end;
//

delimiter //
create procedure delete_sucursal (in _id int)
begin
delete from sucursal where id = _id;
end;
// 
delimiter //
create procedure mis_pasteles (in _id int)
begin
	select  producto.nombre as NombreProd, producto.id as id, producto.costo as costo from producto_sucursal inner join sucursal on sucursal.id = producto_sucursal.id_sucursal  inner join producto on producto.id = producto_sucursal.id_producto where sucursal.id = _id;
end;
//   

delimiter //
create procedure agregar_prod (in _id_categoria_prod integer, in _id_tamaño integer, in _id_forma integer, in _nombre VARCHAR(30), in _descripcion VARCHAR(100), in _costo float, in _imag varchar(100))
begin
	insert into producto(id_categoria_prod, id_tamaño, id_forma, status_producto, nombre, descripcion, costo, imag) 
values( _id_categoria_prod, _id_tamaño, _id_forma, 1 , _nombre, _descripcion, _costo, _imag);
end;
//  

delimiter //
create procedure agregar_prod_suc (in _id_producto integer, in _id_sucursal integer)
begin
	insert into producto_sucursal(id_producto, id_sucursal) values( _id_producto, _id_sucursal);
end;
//  

delimiter //
create procedure agregar_ingrprod (in _id_producto integer, in _id_masa integer, in _id_relleno integer, in _id_betun integer, in _id_topping integer)
begin
	insert into pro_ing(id_producto, id_ingrediente) values(_id_producto,_id_masa);
	insert into pro_ing(id_producto, id_ingrediente) values(_id_producto,_id_relleno );
	insert into pro_ing(id_producto, id_ingrediente) values(_id_producto,_id_betun);
	insert into pro_ing(id_producto, id_ingrediente) values(_id_producto,_id_topping);
end;
//  



-- =======================================================================================================================================================================
-- =================================================================================== REPARTIDOR ========================================================================
-- =======================================================================================================================================================================

delimiter //
create procedure insert_repartidor (in _nombre varchar(30), in _calle varchar(20), in _colonia varchar(20), in _num_ext char(10), in _telefono char(12), in _rfc char(20), in _correo varchar(15), in _passwd varchar(40), 
_estado varchar(50),  in _municipio varchar(50), in _pais varchar(50), in _matriz  boolean, _supervisado_por INTEGER )
begin
insert into sucursal(nombre, calle, colonia, num_ext, telefono, rfc, correo, passwd, estado, municipio, pais, matriz, supervisado_por)
values(_nombre, _calle, _colonia, _num_ext, _telefono, _rfc, _correo,  sha1(_passwd), _estado, _municipio, _pais, _matriz, _supervisado_por);
end;
// 

delimiter //
create procedure update_repartidor (in _nombre varchar(30), in _calle varchar(20), in _colonia varchar(20), in _num_int char(10), in _telefono char(12), in _rfc char(20), in _correo varchar(50), in _passwd varchar(40), 
_estado varchar(50),  in _municipio varchar(50), in _pais varchar(50), in _matriz  boolean, _supervizado_por integer)
begin
update  sucursal set nombre = _nombre , calle = _calle, colonia = _colonia, num_ext = _num_ext, num_int = _num_int, telefono = _telefono, rfc = _rfc, correo = _correo, passwd = sha1(_passwd), estado = _estado, municio = _municipio, 
pais = _pais, matriz = _matriz, supervizado_por = _supervizado_por
where correo = _correo or id = _id; 
end;
// 

delimiter //
create procedure delete_repartidor (in _id int)
begin
delete from repartidor where id = _id;
end;
// 




-- =======================================================================================================================================================================
-- =================================================================================== Tarjetas ===========================================================================
-- =======================================================================================================================================================================


delimiter //
create procedure insert_tarjeta(in _id_usuario INTEGER, in _num_tarjeta char(16),in _nombre_titular varchar(90), in _fecha_vencimiento date, in _codigo_seguridad char(4))
begin
	insert into producto(id_categoria_prod, id_tamaño, id_forma, status_producto, nombre, descripcion, costo, imag)
    values('$categoria','$tamaño','$forma', '$status','$nombre','$descripcion','$costo','$imag');
end;
//

delimiter //
create procedure update_tarjeta(in _id_usuario INTEGER, in _num_tarjeta char(16),in _nombre_titular varchar(90), in _fecha_vencimiento date, in _codigo_seguridad char(4))
begin
    update tarjeta_debito set num_tarjeta = _num_tarjeta, nombre_titular = _nombre_titular, fecha_vencimiento = _fecha_vencimiento, codigo_seguridad = sha1(_codigo_seguridad)
    where id_usuario = id_usuario;
end;
//




