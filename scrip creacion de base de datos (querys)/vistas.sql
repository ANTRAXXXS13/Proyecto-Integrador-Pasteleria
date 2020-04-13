-- create view nombreusuario_asc as select * from usuario order by nombre; 
-- create view nombreusuario_des as select * from usuario order by nombre desc; 
-- create view nombresuc_asc as select * from usuario order by nombre; 
-- create view nombresuc_des as select * from usuario order by nombre desc; 
-- create view contartotalusuario as SELECT COUNT(*) FROM usuario;
-- create view contartotalpedidos as SELECT COUNT(*) FROM pedido;




create view ultimo_pedido as SELECT * from pedido order by fecha_entrega;