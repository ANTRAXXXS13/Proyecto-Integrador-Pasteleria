
delimiter //
create procedure delete_sucursal (in _id int)
begin
delete from sucursal where id = _id;
end;
// 


delimiter //
create procedure delete_usuario (in _id int)

begin
delete from usuario where id = _id;
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



delimiter //
create procedure delete_usuario (in _id int)

begin
delete from usuario where id = _id;
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




