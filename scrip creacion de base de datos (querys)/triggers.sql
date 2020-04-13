delimiter //
CREATE trigger insert_registro after insert on black_list for each row
begin 
	INSERT INTO registro values(user(), now(), 'insert');
end;
//

delimiter //
CREATE trigger update_registro after insert on black_list for each row
begin 
	INSERT INTO registro values(null, user(), now(), 'update');
end;
//

delimiter //
CREATE trigger delete_registro after insert on black_list for each row
begin 
	INSERT INTO registro values(null, user(), now(), 'delete');
end;
//