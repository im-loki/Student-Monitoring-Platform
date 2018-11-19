#TRIGGERS
##################SYNTAX############################
CREATE [OR REPLACE ] TRIGGER trigger_name  
{BEFORE | AFTER | INSTEAD OF }  
{INSERT [OR] | UPDATE [OR] | DELETE}  
[OF col_name]  
ON table_name  
[REFERENCING OLD AS o NEW AS n]  
[FOR EACH ROW]  
WHEN (condition)   
DECLARE 
   Declaration-statements 
BEGIN  
   Executable-statements 
EXCEPTION 
   Exception-handling-statements 
END; 
#######################################################
CREATE TRIGGER t01 ON MARKS BEFORE UPDATE
begin 
set new.finalia=round((new.test1+new.test2+new.test3-least(new.test1,new.test2,new.test3))/2); 
end