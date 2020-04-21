-- create view nombreusuario_asc as select * from usuario order by nombre; 
-- create view nombreusuario_des as select * from usuario order by nombre desc; 
-- create view nombresuc_asc as select * from usuario order by nombre; 
-- create view nombresuc_des as select * from usuario order by nombre desc; 
-- create view contartotalusuario as SELECT COUNT(*) FROM usuario;
-- create view contartotalpedidos as SELECT COUNT(*) FROM pedido;




-- create view pastel_express as select * from producto where id_categoria_prod = 1; 
-- create view pastel_express as select * from producto where id_categoria_prod = 2;
-- create view pastel_express as select * from producto where id_categoria_prod = 3;

create view ultimo_pedido as SELECT * from pedido order by fecha_entrega;
create view sucursales_matriz as select id, nombre from sucursal where matriz=1; 





-- Sacar nombre de los ingredientes y nombre del producto con tabla intermedia
 select p.nombre as Nombre, i.nombre as Nombre_ing from producto p join ingrediente as i join pro_ing as pi where pi.id_producto = p.id   and pi.id_ingrediente = i.id ;
 
 -- sacar nombres del producto, forma, categoria, tamaño y descripcion
 select p.nombre as Nombre, c.nombre as Categoria, f.nombre as Forma, t.nombre as Tamaño, p.descripcion as Descripcion, p.costo as Costo from producto as p join forma as f join categoria_prod as c join tamaño as t group by p.id;
 
  -- Saber el nombre del producto y a que sucursal pertenece
 select p.nombre as NombreProd, s.nombre as NombreSuc from producto p join sucursal as s join producto_sucursal as ps where ps.id_producto = p.id   and ps.id_sucursal = s.id;